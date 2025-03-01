<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RecipePage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class RecipePageController extends Controller
{
    public function index()
    {
        $recipePage = RecipePage::first();
        return view('admin.recipe_page', compact('recipePage'));
    }

    public function update(Request $request)
    {
       
        $recipePage = RecipePage::firstOrFail();
        Log::info('Request data:', $request->all());
      
        $imageFields = ['ban_img', 'sec1_card1_img', 'sec1_card2_img'];
       
        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                Log::info("Processing image upload for field: $field");

                $oldImagePath = public_path('images/recipe_page/' . $recipePage->$field);
                if ($recipePage->$field && File::exists($oldImagePath)) {
                    Log::info("Deleting old image for field: $field - " . $recipePage->$field);
                    File::delete($oldImagePath);
                }

                $image = $request->file($field);
                $imageName = time() . '_' . $image->getClientOriginalName();
                $imagePath = 'images/recipe_page/' . $imageName;
                Log::info("Uploading new image for field: $field - $imageName");

                try {
                    $image->move(public_path('images/recipe_page'), $imageName);
                    Log::info("Image uploaded successfully for field: $field - $imageName");
                    $recipePage->$field = $imagePath;
                } catch (\Exception $e) {
                    Log::error("Error uploading image for field: $field - " . $e->getMessage());
                }
            }
        }
       
        $fields = [
            'ban_subttitle', 'ban_title', 'sec1_card1_title', 'sec1_card1_desc',
            'sec1_card2_title', 'sec1_card2_desc', 'sec3_subtitle', 'sec3_title', 'sec3_desc'
        ];
       
        foreach ($fields as $field) {
            if ($request->has($field)) {
                $recipePage->$field = $request->input($field);
            }
        }
        //dd($field);
        try {
            $recipePage->save();
            Log::info("Recipe page updated successfully.");
        } catch (\Exception $e) {
            Log::error("Error updating recipe page: " . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Recipe page updated successfully.');
    }
}
