<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use Illuminate\Support\Str;
class RecipeController extends Controller
{
    // Display a list of recipes
    public function list()
    {
        $recipes = Recipe::all();
        return view('admin.all-recipes', compact('recipes'));
    }

    // Show the form for creating a new recipe
    public function add()
    {
        return view('admin.add-recipe');
    }

    // Store a newly created recipe in the database
    public function insert(Request $request)
    {
      
        $request->validate([
            'sec1_title' => 'required|string|max:255|unique:recipes,sec1_title',
            'sec1_date' => 'required|date',
            'sec1_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'sec2_card_desc' => 'required|string',
            'sec2_card_name' => 'required|string|max:255',
            'sec3_title' => 'required|string|max:255',
            'sec3_desc' => 'required|string',
        ]);

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('sec1_img')) {
            $image = $request->file('sec1_img');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/recipes'), $imageName);
            $imagePath = 'uploads/recipes/' . $imageName;
        }

        Recipe::create([
            'sec1_title' => $request->sec1_title,
            'sec1_date' => $request->sec1_date,
            'sec1_img' => $imagePath, // Store image path instead of URL
            'sec2_card_desc' => $request->sec2_card_desc,
            'sec2_card_name' => $request->sec2_card_name,
            'sec3_title' => $request->sec3_title,
            'sec3_desc' => $request->sec3_desc,
            'slug' => Str::slug($request->sec1_title),
        ]);

        return redirect()->route('recipes.list')->with('success', 'Recipe created successfully!');
    }

    // Display a specific recipe
    public function view($id)
    {
        $recipe = Recipe::findOrFail($id);
        return view('recipes.show', compact('recipe'));
    }

    // Show the form for editing a recipe
    public function modify($id)
    {
        $recipe = Recipe::findOrFail($id);
        return view('admin.edit-recipe', compact('recipe'));
    }

    // Update the recipe in the database
    public function change(Request $request, $id)
    {
        $request->validate([
            'sec1_title' => 'required|string|max:255',
            'sec1_date' => 'required|date',
            'sec1_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'sec2_card_desc' => 'required|string',
            'sec2_card_name' => 'required|string|max:255',
            'sec3_title' => 'required|string|max:255',
            'sec3_desc' => 'required|string',
        ]);

        $recipe = Recipe::findOrFail($id);

        // Handle image update
        if ($request->hasFile('sec1_img')) {
            // Delete old image if it exists
            if ($recipe->sec1_img && file_exists(public_path($recipe->sec1_img))) {
                unlink(public_path($recipe->sec1_img));
            }

            $image = $request->file('sec1_img');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/recipes'), $imageName);
            $recipe->sec1_img = 'uploads/recipes/' . $imageName;
        }

        // Update other fields
        $recipe->update([
            'sec1_title' => $request->sec1_title,
            'sec1_date' => $request->sec1_date,
            'sec2_card_desc' => $request->sec2_card_desc,
            'sec2_card_name' => $request->sec2_card_name,
            'sec3_title' => $request->sec3_title,
            'sec3_desc' => $request->sec3_desc,
            'sec1_img' => $recipe->sec1_img,
            'slug' => Str::slug($request->sec1_title),
        ]);

        return redirect()->route('recipes.list')->with('success', 'Recipe updated successfully!');
    }

    // Delete the recipe from the database
    public function remove($id)
    {
        $recipe = Recipe::findOrFail($id);

        // Delete image file if it exists
        if ($recipe->sec1_img && file_exists(public_path($recipe->sec1_img))) {
            unlink(public_path($recipe->sec1_img));
        }

        $recipe->delete();

        return redirect()->route('recipes.list')->with('success', 'Recipe deleted successfully!');
    }
}
