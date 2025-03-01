<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        return view('admin.about', compact('about'));
    }

    public function update(Request $request)
    {
        $about = About::firstOrFail();
        Log::info('Request data:', $request->all());

        $imageFields = ['ban_img', 'sec2_img', 'sec3_img', 'sec4_img'];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                Log::info("Processing image upload for field: $field");

                $oldImagePath = public_path('images/about/' . $about->$field);
                if ($about->$field && File::exists($oldImagePath)) {
                    Log::info("Deleting old image for field: $field - " . $about->$field);
                    File::delete($oldImagePath);
                }

                $image = $request->file($field);
                $imageName = time() . '_' . $image->getClientOriginalName();
                $imagePath = 'images/about/' . $imageName;
                Log::info("Uploading new image for field: $field - $imageName");

                try {
                    $image->move(public_path('images/about'), $imageName);
                    Log::info("Image uploaded successfully for field: $field - $imageName");
                    $about->$field = $imagePath;
                } catch (\Exception $e) {
                    Log::error("Error uploading image for field: $field - " . $e->getMessage());
                }
            }
        }

        $fields = [
            'ban_subtitle', 'ban_title', 'sec1_desc', 'sec1_link_text', 'sec1_counter1_title', 'sec1_counter1_count',
            'sec1_counter2_title', 'sec1_counter2_count', 'sec2_video_url', 'sec2_title', 'sec2_desc',
            'sec2_progress_title1', 'sec2_progress_num', 'sec2_progress_title2', 'sec2_progress_num2',
            'sec2_card1title', 'sec2_card1desc', 'sec2_card2title', 'sec2_card2desc',
            'sec2_card3title', 'sec2_card3desc', 'sec2_card4title', 'sec2_card4desc',
            'sec3_title', 'sec3_desc', 'sec3_icon1_title', 'sec3_icon2_title', 'sec3_icon3_title',
            'sec3_icon4_title','sec3_icon5_title', 'sec3_btn_txt', 'sec4_title', 'sec4_desc', 'sec4_subtitle', 'sec4_btn_txt', 'sec4_exp_num'
        ];

        foreach ($fields as $field) {
            if ($request->has($field)) {
                $about->$field = $request->input($field);
            }
        }

        try {
            $about->save();
            Log::info("About page updated successfully.");
        } catch (\Exception $e) {
            Log::error("Error updating about page: " . $e->getMessage());
        }

        return redirect()->back()->with('success', 'About page updated successfully.');
    }
}
