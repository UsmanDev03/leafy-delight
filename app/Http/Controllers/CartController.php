<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    
        public function addToCart(Request $request)
        {
            $cart = session()->get('cart', []);
    
            $itemKey = $request->productId . "-" . $request->weight;
    
            if (isset($cart[$itemKey])) {
                $cart[$itemKey]['quantity'] += $request->quantity;
            } else {
                $cart[$itemKey] = [
                    'id' => $request->productId,
                    'name' => $request->productName,
                    'image' => $request->productImg,
                    'price' => $request->productPrice,
                    'weight' => $request->weight,
                    'quantity' => $request->quantity,
                ];
            }
    
            session()->put('cart', $cart);
            return response()->json(['message' => 'Item added to cart successfully!']);
        }
    public function showCart()
    {
        return view('cart');
    }

    public function removeFromCart(Request $request)
    {
        $cart = session()->get('cart', []);
        unset($cart[$request->key]);
        session()->put('cart', $cart);

        return response()->json(['message' => 'Item removed successfully!']);
    }

    public function updateCart(Request $request)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$request->key])) {
            $cart[$request->key]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
            
            return response()->json([
                'success' => true,
                'newTotal' => $cart[$request->key]['quantity'] * $cart[$request->key]['price'],
                'grandTotal' => array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart))
            ]);
        }

        return response()->json(['success' => false]);
    }
    public function checkOut(){
        return view('check-out');
    }


    }