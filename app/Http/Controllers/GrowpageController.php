<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Growpage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class GrowpageController extends Controller
{
    public function index()
    {
        $growpage = Growpage::first();
        return view('admin.growpage', compact('growpage'));
    }

    public function update(Request $request)
    {
        $growpage = Growpage::firstOrFail();
        Log::info('Request data:', $request->all());

        $imageFields = ['ban_img', 'sec1_img'];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                Log::info("Processing image upload for field: $field");

                $oldImagePath = public_path('images/growpage/' . $growpage->$field);
                if ($growpage->$field && File::exists($oldImagePath)) {
                    Log::info("Deleting old image for field: $field - " . $growpage->$field);
                    File::delete($oldImagePath);
                }

                $image = $request->file($field);
                $imageName = time() . '_' . $image->getClientOriginalName();
                $imagePath = 'images/growpage/' . $imageName;
                Log::info("Uploading new image for field: $field - $imageName");

                try {
                    $image->move(public_path('images/growpage'), $imageName);
                    Log::info("Image uploaded successfully for field: $field - $imageName");
                    $growpage->$field = $imagePath;
                } catch (\Exception $e) {
                    Log::error("Error uploading image for field: $field - " . $e->getMessage());
                }
            }
        }

        $fields = [
            'banner_title', 'banner_subtitle', 'sec1_title', 'sec1_desc', 'sec2_subtitle', 'sec2_title', 'sec2_desc', 'sec2_card_desc'
        ];

        foreach ($fields as $field) {
            if ($request->has($field)) {
                $growpage->$field = $request->input($field);
            }
        }

        try {
            $growpage->save();
            Log::info("Growpage updated successfully.");
        } catch (\Exception $e) {
            Log::error("Error updating growpage: " . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Growpage updated successfully.');
    }
}
