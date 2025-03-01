<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestiPage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class TestiPageController extends Controller
{
    public function index()
    {
        $testiPage = TestiPage::first();
        return view('admin.testi_page', compact('testiPage'));
    }

    public function update(Request $request)
    {
        $testiPage = TestiPage::firstOrFail();
        Log::info('Request data:', $request->all());

        $imageFields = ['ban_img', 'sec1_img'];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                Log::info("Processing image upload for field: $field");

                $oldImagePath = public_path('images/testi_page/' . $testiPage->$field);
                if ($testiPage->$field && File::exists($oldImagePath)) {
                    Log::info("Deleting old image for field: $field - " . $testiPage->$field);
                    File::delete($oldImagePath);
                }

                $image = $request->file($field);
                $imageName = time() . '_' . $image->getClientOriginalName();
                $imagePath = 'images/testi_page/' . $imageName;
                Log::info("Uploading new image for field: $field - $imageName");

                try {
                    $image->move(public_path('images/testi_page'), $imageName);
                    Log::info("Image uploaded successfully for field: $field - $imageName");
                    $testiPage->$field = $imagePath;
                } catch (\Exception $e) {
                    Log::error("Error uploading image for field: $field - " . $e->getMessage());
                }
            }
        }

        $fields = [
            'ban_subtitle', 'ban_title', 'sec1_subtitle', 'sec1_title', 'sec1_desc',
            'sec1_btn_txt', 'sec2_title', 'sec2_desc'
        ];

        foreach ($fields as $field) {
            if ($request->has($field)) {
                $testiPage->$field = $request->input($field);
            }
        }

        try {
            $testiPage->save();
            Log::info("Testi page updated successfully.");
        } catch (\Exception $e) {
            Log::error("Error updating testi page: " . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Testi page updated successfully.');
    }
}
