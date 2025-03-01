<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddReview;
use Illuminate\Support\Facades\File;

class AddReviewController extends Controller
{
    // Display all reviews
    public function index()
    {
        $reviews = AddReview::all();
        return view('admin.reviews.index', compact('reviews'));
    }

    // Show form to create a new review
    public function create()
    {
        return view('admin.reviews.create');
    }

    // Store a new review
    public function store(Request $request)
    {
        $request->validate([
            'sec1_title' => 'nullable|string|max:255',
            'sec1_subtitle' => 'nullable|string|max:255',
            'sec1_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'sec2_title' => 'nullable|string|max:255',
            'sec2_desc' => 'nullable|string',
        ]);

        $data = $request->except('sec1_img');

        if ($request->hasFile('sec1_img')) {
            $image = $request->file('sec1_img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/reviews'), $imageName);
            $data['sec1_img'] = $imageName;
        }

        AddReview::create($data);

        return redirect()->route('reviews.index')->with('success', 'Review added successfully!');
    }

    // Show form to edit a review
    public function edit($id)
    {
        $review = AddReview::findOrFail($id);
        return view('admin.reviews.edit', compact('review'));
    }

    // Update the review
    public function update(Request $request, $id)
    {
        $request->validate([
            'sec1_title' => 'nullable|string|max:255',
            'sec1_subtitle' => 'nullable|string|max:255',
            'sec1_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'sec2_title' => 'nullable|string|max:255',
            'sec2_desc' => 'nullable|string',
        ]);

        $review = AddReview::findOrFail($id);
        $data = $request->except('sec1_img');

        if ($request->hasFile('sec1_img')) {
            if ($review->sec1_img && File::exists(public_path('uploads/reviews/' . $review->sec1_img))) {
                File::delete(public_path('uploads/reviews/' . $review->sec1_img));
            }
            $image = $request->file('sec1_img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/reviews'), $imageName);
            $data['sec1_img'] = $imageName;
        }

        $review->update($data);

        return redirect()->route('reviews.index')->with('success', 'Review updated successfully!');
    }

    // Delete a review
    public function destroy($id)
    {
        $review = AddReview::findOrFail($id);

        if ($review->sec1_img && File::exists(public_path('uploads/reviews/' . $review->sec1_img))) {
            File::delete(public_path('uploads/reviews/' . $review->sec1_img));
        }

        $review->delete();

        return redirect()->route('reviews.index')->with('success', 'Review deleted successfully!');
    }
}
