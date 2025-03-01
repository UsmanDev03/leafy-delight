<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FaqPage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class FaqPageController extends Controller
{
    public function index()
    {
        $faq = FaqPage::first();
        return view('admin.faq_page', compact('faq'));
    }

    public function update(Request $request)
    {
        $faqPage = FaqPage::firstOrFail();
        Log::info('Request data:', $request->all());

        $imageFields = ['ban_img', 'sec3_img'];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                Log::info("Processing image upload for field: $field");

                $oldImagePath = public_path('images/faq_page/' . $faqPage->$field);
                if ($faqPage->$field && File::exists($oldImagePath)) {
                    Log::info("Deleting old image for field: $field - " . $faqPage->$field);
                    File::delete($oldImagePath);
                }

                $image = $request->file($field);
                $imageName = time() . '_' . $image->getClientOriginalName();
                $imagePath = 'images/faq_page/' . $imageName;
                Log::info("Uploading new image for field: $field - $imageName");

                try {
                    $image->move(public_path('images/faq_page'), $imageName);
                    Log::info("Image uploaded successfully for field: $field - $imageName");
                    $faqPage->$field = $imagePath;
                } catch (\Exception $e) {
                    Log::error("Error uploading image for field: $field - " . $e->getMessage());
                }
            }
        }

        $fields = [
            'ban_subttitle', 'ban_title', 'sec1_title', 'sec1_desc', 'sec1_btn_txt',
            'sec2_title', 'sec2_desc', 'loc', 'phone', 'mail', 'timing',
            'sec3_subtitle', 'sec3_title', 'sec3_btn_txt'
        ];

        foreach ($fields as $field) {
            if ($request->has($field)) {
                $faqPage->$field = $request->input($field);
            }
        }

        try {
            $faqPage->save();
            Log::info("FAQ page updated successfully.");
        } catch (\Exception $e) {
            Log::error("Error updating FAQ page: " . $e->getMessage());
        }

        return redirect()->back()->with('success', 'FAQ page updated successfully.');
    }
}
