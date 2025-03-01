<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homepage;
use App\Models\About;
use App\Models\ContactPage;
use App\Models\RecipePage;
use App\Models\FaqPage;
use App\Models\Growpage;
use App\Models\Product;
use App\Models\Recipe;
use App\Models\Review;
class WebsiteController extends Controller
{
    public function index(){
        $homepage = Homepage::first();
        $products = Product::latest()->take(6)->get();
        $recipes = Recipe::latest()->take(3)->get();
        return view('index' , compact('homepage' , 'products' ,'recipes'));
    }

    public function aboutUs(){
        $about = About::first();
        return view('about-us', compact('about'));
    }
    public function contactUs(){
        $contact = ContactPage::first();
        return view('contact-us' , compact('contact'));
    }
    public function recipe(){
        $recipe = RecipePage::first();
        $recipes = Recipe::latest()->paginate(9);
        return view('recipe' , compact('recipe' , 'recipes'));
    } 
    public function faq(){
        $faq = FaqPage::first();
        return view('faqs', compact('faq'));
    }
    public function grow()
    {
        $tray_product = Product::whereNotNull('sec5_tray_price')
        ->where('sec5_tray_price', '!=', '[]')
        ->where('sec5_tray_price', '!=', '')
        ->latest()
        ->take(6)
        ->get();
        $growpage = Growpage::first();

        return view('growpage', compact('growpage' , 'tray_product'));
    }
    public function ourProducts()
    {    $latesproducts = Product::latest()->take(3)->get();
        $ourproducts = Product::latest()->paginate(8);
        return view('our-product', compact('ourproducts' , 'latesproducts'));
    }
    public function productDetail($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $ourproducts = Product::all();
        return view('product-detail', compact('product' , 'ourproducts'));
    }
    public function recipeDetail($slug)
    {
        $recipe = Recipe::where('slug', $slug)->firstOrFail();
        $recipes = Recipe::all();
        $lastthree = Recipe::latest()->take(3)->get();
        return view('recipe-detail', compact('recipe','recipes','lastthree'));
    }
    public function review(){

        $review = Review::first();
        return view('review' , compact('review'));
    }


}
