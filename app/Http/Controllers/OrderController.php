<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // Add the Log facade
use App\Models\Order;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderConfirmationMail;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::all();
        return view('admin.all-orders' , compact('orders'));
    }
    public function show($id) {
        $order = Order::findOrFail($id);
        return view('admin.order-details', compact('order'));
    }
    
    public function destroy($id)
{
    $order = Order::findOrFail($id);
    $order->delete();

    return redirect()->route('orders.index')->with('success', 'Order deleted successfully.');
}


public function store(Request $request)
{
    Log::info('Payment processing started', ['request' => $request->all()]);

    $validated = $request->validate([
        'stripeToken' => 'required|string',
        'f_name' => 'nullable|string',
        'l_name' => 'required|string',
        'city' => 'nullable|string',
        'state' => 'nullable|string',
        'country' => 'nullable|string',
        'street_address' => 'nullable|string',
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
        $postData = [
            'amount' => (int)($validated['grandTotal'] * 100), 
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

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.stripe.com/v1/charges");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Authorization: Bearer $stripeSecret",
            "Content-Type: application/x-www-form-urlencoded"
        ]);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));

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
            Log::info('Payment successful', ['charge_id' => $chargeResponse['id']]);

            $order = new Order();
            $order->first_name = $validated['f_name'];
            $order->last_name = $validated['l_name'];
            $order->country = $validated['country'];
            $order->state = $validated['state'];
            $order->city = $validated['city'];
            $order->street_address = $validated['street_address'];
            $order->apartment = $validated['apartment'] ?? null;
            $order->zip_code = $validated['zip_code'];
            $order->phone = $validated['phone'];
            $order->email = $validated['email'];
            $order->stripe_id = $chargeResponse['id'];
            $order->cart_items = json_encode($validated['cartItems']) ?? null;
            $order->sub_total = $validated['subTotal'] ?? null;
            $order->tax = $validated['tax'] ?? null;
            $order->delivery_charges = $validated['deliveryCharges'] ?? null;
            $order->grand_total = $validated['grandTotal'] ?? null;
            $order->status = 'Paid';
            $order->save();

            session()->forget('cart');
            Log::info('Order created successfully', ['order_id' => $order->id]);

            // **📧 Send Order Confirmation Email**
            try {
                Mail::to($order->email)->send(new OrderConfirmationMail($order));
                Log::info('Order confirmation email sent successfully', ['email' => $order->email]);
            } catch (\Exception $e) {
                Log::error('Failed to send order confirmation email', ['error' => $e->getMessage()]);
            }

            return response()->json([
                'success' => true,
                'message' => 'Payment successful! Order placed and email sent.',
            ]);
        } else {
            Log::warning('Payment failed', ['charge_response' => $chargeResponse]);

            return response()->json([
                'success' => false,
                'message' => $chargeResponse['error']['message'] ?? 'Payment failed. Please try again.',
            ], 500);
        }
    } catch (\Exception $e) {
        Log::error('Payment processing failed', [
            'error' => $e->getMessage(),
            'stack_trace' => $e->getTraceAsString(),
        ]);

        return response()->json([
            'success' => false,
            'message' => 'Payment failed: ' . $e->getMessage(),
        ], 500);
    }
}

}

