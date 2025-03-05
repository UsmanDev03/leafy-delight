<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishlistController extends Controller
{
    // Add to wishlist
    public function addToWishlist(Request $request)
    {
        $wishlist = session()->get('wishlist', []);

        // Check if product is already in wishlist
        if (isset($wishlist[$request->product_id])) {
            return response()->json(['status' => 'exists', 'message' => 'Already in wishlist']);
        }

        // Add new product
        $wishlist[$request->product_id] = [
            'id' => $request->product_id,
            'name' => $request->product_name,
            'img' => $request->product_Img,
            'price' => $request->product_price
        ];

        session()->put('wishlist', $wishlist);

        return response()->json(['status' => 'success', 'message' => 'Added to wishlist']);
    }

    // View wishlist
    public function viewWishlist()
    {
        $wishlist = session('wishlist', []);
        return view('wish-list', compact('wishlist'));
    }

    // Remove from wishlist
    public function removeFromWishlist(Request $request)
    {
        $wishlist = session()->get('wishlist', []);

        if (isset($wishlist[$request->product_id])) {
            unset($wishlist[$request->product_id]);
            session()->put('wishlist', $wishlist);
            return response()->json(['status' => 'success', 'message' => 'Removed from wishlist']);
        }

        return response()->json(['status' => 'error', 'message' => 'Item not found']);
    }
}
