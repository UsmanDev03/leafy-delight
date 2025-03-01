<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\File; // For file deletion


class ReviewController extends Controller
{
    // Show review page with data
    public function index()
    {
        $reviews = Review::first(); // Assuming there's only one review section
        return view('admin.review', compact('reviews'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'sec1_subtitle'   => 'nullable|string|max:255',
            'sec1_title'      => 'nullable|string|max:255',
            'sec1_img'        => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'sec2_subtitle'   => 'nullable|string|max:255',
            'sec2_title'      => 'nullable|string|max:255',
            'sec2_desc'       => 'nullable|string',
            'sec2_btn_txt'    => 'nullable|string|max:255',
            'sec2_img'        => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'sec2_happy_cus'  => 'nullable|integer',
            'sec3_title'      => 'nullable|string|max:255',
            'sec3_desc'       => 'nullable|string',
        ]);
    
        $review = Review::findOrFail($id);
        $data = $request->except(['sec1_img', 'sec2_img']); // Exclude images for now
    
        // Handle Section 1 Image Upload
        if ($request->hasFile('sec1_img')) {
            // Delete old image if exists
            if ($review->sec1_img && File::exists(public_path('uploads/reviews/' . $review->sec1_img))) {
                File::delete(public_path('uploads/reviews/' . $review->sec1_img));
            }
    
            // Upload new image
            $image = $request->file('sec1_img');
            $imageName = 'sec1_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/reviews'), $imageName);
            $data['sec1_img'] = $imageName;
        }
    
        // Handle Section 2 Image Upload
        if ($request->hasFile('sec2_img')) {
            // Delete old image if exists
            if ($review->sec2_img && File::exists(public_path('uploads/reviews/' . $review->sec2_img))) {
                File::delete(public_path('uploads/reviews/' . $review->sec2_img));
            }
    
            // Upload new image
            $image = $request->file('sec2_img');
            $imageName = 'sec2_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/reviews'), $imageName);
            $data['sec2_img'] = $imageName;
        }
    
        // Update the review record
        $review->update($data);
    
        return redirect()->back()->with('success', 'Review updated successfully!');
    }
    
    
}
