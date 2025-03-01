<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // Add the Log facade
use App\Models\Order;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // Log incoming request
        Log::info('Payment processing started', ['request' => $request->all()]);

        $validated = $request->validate([
            'stripeToken' => 'required|string',
            'f_name' => 'nullable|string',
            'l_name' => 'required|string',
            'city' => 'nullable|string',
            'state' => 'nullable|string',
            'country' => 'nullable|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'zip_code' => 'nullable|string',
            'apartment' => 'nullable|string',
            'cartItems' => 'required|array',
            'subTotal' => 'required|numeric',
            'tax' => 'required|numeric',
            'deliveryCharges' => 'required|numeric',
            'grandTotal' => 'required|numeric',
        ]);

        $stripeSecret = env('SECRET_KEY');
        
        try {
            // Prepare POST data for Stripe API
          
            $postData = [
                'amount' => (int)($validated['grandTotal'] * 100), // Convert to cents
                'currency' => 'usd',
                'description' => "Order Payment from " . $validated['f_name'] . ' ' . $validated['l_name'],
                'source' => $validated['stripeToken'],
                'receipt_email' => $validated['email'],
                'shipping' => [
                    'name' => $validated['f_name'] . ' ' . $validated['l_name'],
                    'address' => [
                        'city' => $validated['city'],
                        'state' => $validated['state'],
                        'country' => $validated['country'],
                        'postal_code' => $validated['zip_code'],
                    ],
                ],
            ];

            // Initialize cURL for Stripe API request
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://api.stripe.com/v1/charges");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                "Authorization: Bearer $stripeSecret",
                "Content-Type: application/x-www-form-urlencoded"
            ]);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));

            // Execute the cURL request and get the response
            $response = curl_exec($ch);
            $err = curl_error($ch);
            curl_close($ch);

            if ($err) {
                Log::error('cURL Error occurred while processing payment', ['error' => $err]);
                return response()->json([
                    'success' => false,
                    'message' => 'cURL Error: ' . $err,
                ], 500);
            }

            $chargeResponse = json_decode($response, true);

            if (isset($chargeResponse['id'])) {
                // Log successful charge response
                Log::info('Payment successful', ['charge_id' => $chargeResponse['id']]);

                // Create an order after successful payment
                $order = new Order();
                $order->f_name = $validated['f_name'];
                $order->l_name = $validated['l_name'];
                $order->email = $validated['email'];
                $order->phone = $validated['phone'];
                $order->zip_code = $validated['zip_code'];
                $order->apartment = $validated['apartment'] ?? null;
                $order->cart_items = json_encode($validated['cartItems']); // Save cart items as JSON
                $order->sub_total = $validated['subTotal'];
                $order->tax = $validated['tax'];
                $order->delivery_charges = $validated['deliveryCharges'];
                $order->grand_total = $validated['grandTotal'];
                $order->charge_id = $chargeResponse['id'];
                $order->status = 'Paid'; // Set order status as Paid
                $order->save();

                // Clear the cart session
                session()->forget('cart');

                // Log successful order creation
                Log::info('Order created successfully', ['order_id' => $order->id]);

                // Return success response
                return response()->json([
                    'success' => true,
                    'message' => 'Payment successful! Order placed.',
                ]);
            } else {
                // Log payment failure
                Log::warning('Payment failed', ['charge_response' => $chargeResponse]);

                // Charge failed
                return response()->json([
                    'success' => false,
                    'message' => $chargeResponse['error']['message'] ?? 'Payment failed. Please try again.',
                ], 500);
            }

        } catch (\Exception $e) {
            // Log exception details
            Log::error('Payment processing failed', [
                'error' => $e->getMessage(),
                'stack_trace' => $e->getTraceAsString(),
            ]);

            // Handle any errors that occur during the charge creation or order saving
            return response()->json([
                'success' => false,
                'message' => 'Payment failed: ' . $e->getMessage(),
            ], 500);
        }
    }
}