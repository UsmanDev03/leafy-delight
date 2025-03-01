<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactPage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

  class ContactPageController extends Controller
{
    public function index()
    {
        $contact = ContactPage::first();
        return view('admin.contact', compact('contact'));
    }

    public function update(Request $request)
    {
        $contactPage = ContactPage::firstOrFail();
        Log::info('Request data:', $request->all());

        $imageFields = ['ban_img', 'sec1_img'];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                Log::info("Processing image upload for field: $field");

                $oldImagePath = public_path('images/contact/' . $contactPage->$field);
                if ($contactPage->$field && File::exists($oldImagePath)) {
                    Log::info("Deleting old image for field: $field - " . $contactPage->$field);
                    File::delete($oldImagePath);
                }

                $image = $request->file($field);
                $imageName = time() . '_' . $image->getClientOriginalName();
                $imagePath = 'images/contact/' . $imageName;
                Log::info("Uploading new image for field: $field - $imageName");

                try {
                    $image->move(public_path('images/contact'), $imageName);
                    Log::info("Image uploaded successfully for field: $field - $imageName");
                    $contactPage->$field = $imagePath;
                } catch (\Exception $e) {
                    Log::error("Error uploading image for field: $field - " . $e->getMessage());
                }
            }
        }

        $fields = [
            'banner_title', 'banner_subtitle', 'card_addr', 'card_phone', 'card_email', 'card_workinghours',
            'card2_subtitle', 'card2_title', 'card2_desc'
        ];

        foreach ($fields as $field) {
            if ($request->has($field)) {
                $contactPage->$field = $request->input($field);
            }
        }

        try {
            $contactPage->save();
            Log::info("Contact page updated successfully.");
        } catch (\Exception $e) {
            Log::error("Error updating contact page: " . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Contact page updated successfully.');
    }
}
