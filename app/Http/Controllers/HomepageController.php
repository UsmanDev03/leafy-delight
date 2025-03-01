<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homepage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class HomepageController extends Controller
{
    public function index()
    {
        $homePage = Homepage::first();
        return view('admin.home', compact('homePage'));
    }

    public function update(Request $request)
    {
        //dd($request->all());
        $homePage = Homepage::firstOrFail();
        Log::info('Request data:', $request->all());

        $imageFields = ['sec1_card1_img','sec1_card2_img','sec1_card3_img','sec2_img', 'sec3_img', 'sec4_img', 'sec5_img', 'sec5_img2', 'sec6_img', 'faq_img', 'delivery_img'];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                Log::info("Processing image upload for field: $field");

                $oldImagePath = public_path('images/home/' . $homePage->$field);
                if ($homePage->$field && File::exists($oldImagePath)) {
                    Log::info("Deleting old image for field: $field - " . $homePage->$field);
                    File::delete($oldImagePath);
                }

                $image = $request->file($field);
                $imageName = time() . '_' . $image->getClientOriginalName();
                $imagePath = 'images/home/' . $imageName;
                Log::info("Uploading new image for field: $field - $imageName");

                try {
                    $image->move(public_path('images/home'), $imageName);
                    Log::info("Image uploaded successfully for field: $field - $imageName");
                    $homePage->$field = $imagePath;
                } catch (\Exception $e) {
                    Log::error("Error uploading image for field: $field - " . $e->getMessage());
                }
            }
        }

        $fields = [
            'sec1_card1_title', 'sec1_card1_desc', 'sec1_card2_title', 'sec1_card2_desc', 'sec1_card3_title', 'sec1_card3_desc',
            'sec2_subttitle', 'sec2_title', 'sec2_desc', 'sec2_btn_txt', 'sec2_card1_subtitle', 'sec2_card1_title', 'sec2_card1_desc',
            'sec2_card2_title', 'sec2_card2_title2', 'sec3_subttitle', 'sec3_title', 'sec3_desc', 'sec3_btn_txt',
            'sec3_card1_title', 'sec3_card1_desc', 'sec3_card2_title', 'sec3_card2_desc', 'sec3_card3_title', 'sec3_card3_desc',
            'sec4_subttitle', 'sec4_title', 'sec4_desc', 'sec4_btn_txt', 'sec5_subttitle', 'sec5_title', 'sec5_desc', 'sec5_btn_txt',
            'counter1_num', 'counter1_text', 'counter2_num', 'counter2_text', 'counter3_num', 'counter3_text', 'counter4_num', 'counter4_text',
            'sec6_title', 'faq_subttitle', 'faq_title', 'faq_desc', 'faq_btn_txt', 'delivery_subttitle', 'delivery_title', 'delivery_desc'
        ];

        foreach ($fields as $field) {
            if ($request->has($field)) {
                $homePage->$field = $request->input($field);
            }
        }

        try {
            $homePage->save();
            Log::info("Home page updated successfully.");
        } catch (\Exception $e) {
            Log::error("Error updating home page: " . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Home page updated successfully.');
    }
}
