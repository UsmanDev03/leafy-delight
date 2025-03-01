<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('admin.all-products', compact('products'));
    }
    public function create()
    {
        return view('admin.add-product');
    }
    public function store(Request $request)
    {
        $request->validate([
            'sec1_title' => 'required|string|unique:products,sec1_title',
            'sec1_desc' => 'required|string',
            'sec2_available_stock' => 'required|integer',
            'sec2_tags' => 'nullable|string',
            'sec3_img1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sec3_imgs.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'weight.*' => 'nullable|string',
            'price.*' => 'nullable|string',
            'tray.*' => 'nullable|string',
            'tray_price.*' => 'nullable|string',
        ]);
        $product = new Product();
        $product->sec1_title = $request->sec1_title;
        $product->sec1_desc = $request->sec1_desc;
        $product->sec2_available_stock = $request->sec2_available_stock;
        $product->sec2_tags = $request->sec2_tags;
        $product->slug = Str::slug($request->sec1_title);
        if ($request->hasFile('sec3_img1')) {
            $product->sec3_img1 = $request->file('sec3_img1')->store('products', 'public');
        }
        $imagePaths = [];
        if ($request->hasFile('sec3_imgs')) {
            foreach ($request->file('sec3_imgs') as $file) {
                $path = $file->store('products', 'public');
                $imagePaths[] = $path;
            }
        }
        $product->sec3_imgs = json_encode($imagePaths);
        $weightsPrices = [];
        foreach ($request->weight as $key => $weight) {
            $weightsPrices[] = [
                'weight' => $weight,
                'price' => $request->price[$key],
            ];
        }
        $product->sec4_weight_price = json_encode($weightsPrices);
        $traysPrices = [];
        foreach ($request->tray as $key => $tray) {
            $traysPrices[] = [
                'tray' => $tray,
                'tray_price' => $request->tray_price[$key],
            ];
        }
        $product->sec5_tray_price = json_encode($traysPrices);
        $product->save();
        return redirect()->route('products.index')->with('success', 'Product added successfully');
    }
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product-detail', compact('product'));
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.edit-product', compact('product'));
    }
    public function update(Request $request, $id)
    {
       
        $request->validate([
            'sec1_title' => 'required|string',
            'sec1_desc' => 'required|string',
            'sec2_available_stock' => 'required',
            'sec2_tags' => 'nullable|string',
            'sec3_img1' => 'nullable|image',
            'sec3_imgs.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'weight.*' => 'nullable|string',
            'price.*' => 'nullable|string',
            'tray.*' => 'nullable|string',
            'tray_price.*' => 'nullable|string',
        ]);
        
        $product = Product::findOrFail($id);
        $product->sec1_title = $request->sec1_title;
        $product->sec1_desc = $request->sec1_desc;
        $product->sec2_available_stock = $request->sec2_available_stock;
        $product->sec2_tags = $request->sec2_tags;
        $product->slug = Str::slug($request->sec1_title);
        if ($request->hasFile('sec3_img1')) {
            if ($product->sec3_img1) {
                Storage::disk('public')->delete($product->sec3_img1);
            }
            $product->sec3_img1 = $request->file('sec3_img1')->store('products', 'public');
        }
        $existingImages = json_decode($product->sec3_imgs, true) ?? [];
        if ($request->has('remove_existing_imgs')) {
            foreach ($request->remove_existing_imgs as $removeImg) {
                if (($key = array_search($removeImg, $existingImages)) !== false) {
                    Storage::disk('public')->delete($removeImg);
                    unset($existingImages[$key]);
                }
            }
        }
        if ($request->hasFile('sec3_imgs')) {
            foreach ($request->file('sec3_imgs') as $file) {
                $existingImages[] = $file->store('products', 'public');
            }
        }
        $product->sec3_imgs = json_encode(array_values($existingImages));
        $weightsPrices = [];
        if ($request->has('weight') && $request->has('price')) {
            foreach ($request->weight as $key => $weight) {
                $weightsPrices[] = [
                    'weight' => $weight,
                    'price' => $request->price[$key],
                ];
            }
        }
        $product->sec4_weight_price = json_encode($weightsPrices);
        $traysPrices = [];
        if ($request->has('tray') && $request->has('tray_price')) {
            foreach ($request->tray as $key => $tray) {
                $traysPrices[] = [
                    'tray' => $tray,
                    'tray_price' => $request->tray_price[$key],
                ];
            }
        }
        $product->sec5_tray_price = json_encode($traysPrices);
        $product->save();
        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if (!empty($product->sec3_img1)) {
            Storage::disk('public')->delete($product->sec3_img1);
        }
        if (!empty($product->sec3_imgs)) {
            $images = json_decode($product->sec3_imgs, true);
            foreach ($images as $image) {
                Storage::disk('public')->delete($image);
            }
        }
        $product->delete();
    
        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
    
}
