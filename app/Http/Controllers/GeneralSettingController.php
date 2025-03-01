<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GeneralSetting;

class GeneralSettingController extends Controller
{
    // Fetch and display the general settings
    public function index()
    {
        $settings = GeneralSetting::first(); // Get first record
        return view('admin.general-settings', compact('settings'));
    }

    // Update general settings
    public function update(Request $request)
    {
        $request->validate([
            'sec1_title' => 'nullable|string|max:255',
            'sec1_phone' => 'nullable|string|max:20',
            'sec1_email' => 'nullable|email|max:255',
            'sec1_address' => 'nullable|string',
            'sec1_timing' => 'nullable|string|max:255',
            'sec2_social_link1' => 'nullable|url',
            'sec2_social_link2' => 'nullable|url',
            'sec2_social_link3' => 'nullable|url',
            'sec2_social_link4' => 'nullable|url',
            'sec2_social_link5' => 'nullable|url',
            'sec3_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
            'sec3_logo2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
            'sec3_title' => 'nullable|string|max:255',
        ]);

        // Find the first record or create one if it doesn't exist
        $settings = GeneralSetting::firstOrCreate([]);

        // Handle image upload
        if ($request->hasFile('sec3_logo')) {
            $file = $request->file('sec3_logo');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/settings/'), $fileName);
            $settings->sec3_logo = 'uploads/settings/' . $fileName;
        } if ($request->hasFile('sec3_logo2')) {
            $file = $request->file('sec3_logo2');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/settings/'), $fileName);
            $settings->sec3_logo2 = 'uploads/settings/' . $fileName;
        }

        // Update settings
        $settings->update($request->except(['sec3_logo' , 'sec3_logo2']));

        return redirect()->back()->with('success', 'Settings updated successfully!');
    }
}
