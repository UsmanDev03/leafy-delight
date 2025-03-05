<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\RecipePageController;
use App\Http\Controllers\FaqPageController;
use App\Http\Controllers\GrowpageController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\GeneralSettingController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AddReviewController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WishlistController;
use Illuminate\Http\Request;
use App\Http\Controllers\ContactController;



Route::get('/filter-products', [ProductController::class, 'filterByPrice']);
Route::get('/contact-responses', [ContactController::class, 'index'])->name('contact.index');
Route::get('/contact-detail/{id}', [ContactController::class, 'show'])->name('admin.contact-detail');
Route::delete('/contact-responses/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');

Route::post('/contact/submit', [ContactController::class, 'store'])->name('contact.submit');

Route::get('/filter-by-weight', [ProductController::class, 'filterByWeight'])->name('filter.by.weight');

Route::get('/wishlist/clear', function (Request $request) {
    $request->session()->forget('wishlist'); // Forget the 'wishlist' session
    return redirect()->back()->with('success', 'Wishlist cleared successfully!');
})->name('wishlist.clear');


Route::post('/wishlist/add', [WishlistController::class, 'addToWishlist'])->name('wishlist.add');
Route::get('/wishlist', [WishlistController::class, 'viewWishlist'])->name('wishlist.view');
Route::post('/wishlist/remove', [WishlistController::class, 'removeFromWishlist'])->name('wishlist.remove');

Route::get('/admin/orders/{id}', [OrderController::class, 'show'])->name('order.show');
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/orders/edit/{id}', [OrderController::class, 'edit'])->name('orders.edit');
Route::delete('/orders/{id}', [OrderController::class, 'destroy'])->name('orders.destroy');

Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');

Route::post('/place-order', [OrderController::class, 'placeOrder'])->name('order.place');
Route::get('/order-success', [OrderController::class, 'orderSuccess'])->name('order.success');


Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/cart/update', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('/check-stock', [CartController::class, 'checkStock']);
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
Route::get('/check-out', [CartController::class, 'checkOut'])->name('check-out');
//WebsiteRoute
Route::get('/', [WebsiteController::class , 'index'])->name('index');
Route::get('our-product' , [WebsiteController::class, 'ourProducts'])->name('our-product');
Route::get('product-detail/{slug}' , [WebsiteController::class, 'productDetail'])->name('product-detail');
Route::get('about-us' , [WebsiteController::class, 'aboutUs'])->name('about-us');
Route::get('contact-us' , [WebsiteController::class, 'contactUs'])->name('contact-us');
Route::get('recipe' , [WebsiteController::class, 'recipe'])->name('recipe');
Route::get('faq' , [WebsiteController::class, 'faq'])->name('faq');
Route::get('grow' , [WebsiteController::class, 'grow'])->name('grow');
Route::get('recipe-detail/{slug}' , [WebsiteController::class, 'recipeDetail'])->name('recipe-detail');
Route::get('review' , [WebsiteController::class, 'review'])->name('review');


Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/profile', function () {
    $user = Auth::user();
    return view('admin.profile', [
        'user' => $user,
    ]);
})->middleware(['auth', 'verified'])->name('profile');

Route::get('cms-home' , [HomepageController::class , 'index'])->name('home.update');
Route::put('home-update' , [HomepageController::class , 'update'])->name('home.update');
Route::get('cms-about-us' , [AboutController::class , 'index'])->name('about.update');
Route::put('about-update' , [AboutController::class , 'update'])->name('about.update');
Route::get('cms-contact-us' , [ContactPageController::class , 'index'])->name('contact.update');
Route::put('contact-update' , [ContactPageController::class , 'update'])->name('contact.update');
Route::get('cms-recipe' , [RecipePageController::class , 'index'])->name('recipe.update');
Route::put('recipe-update' , [RecipePageController::class , 'update'])->name('recipe.update');
Route::get('cms-faq' , [FaqPageController::class , 'index'])->name('faq.update');
Route::put('faq-update' , [FaqPageController::class , 'update'])->name('faq.update');
Route::get('cms-grow' , [GrowpageController::class , 'index'])->name('growpage.update');
Route::put('grow-update' , [GrowpageController::class , 'update'])->name('growpage.update');


Route::get('all-products', [ProductController::class, 'index'])->name('products.index');
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('products', [ProductController::class, 'store'])->name('products.store');
Route::get('products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');


Route::get('/recipes', [RecipeController::class, 'list'])->name('recipes.list');
Route::get('/recipes/add', [RecipeController::class, 'add'])->name('recipes.add');
Route::post('/recipes/insert', [RecipeController::class, 'insert'])->name('recipes.insert');
Route::get('/recipes/{id}', [RecipeController::class, 'view'])->name('recipes.view');
Route::get('/recipes/{id}/edit', [RecipeController::class, 'modify'])->name('recipes.modify');
Route::post('/recipes/{id}/update', [RecipeController::class, 'change'])->name('recipes.change');
Route::post('/recipes/{id}/delete', [RecipeController::class, 'remove'])->name('recipes.remove');


Route::get('/settings', [GeneralSettingController::class, 'index'])->name('settings.index');
Route::post('/settings/update', [GeneralSettingController::class, 'update'])->name('settings.update');


Route::get('/cms-reviews', [ReviewController::class, 'index']);
Route::post('/reviews/update/{id}', [ReviewController::class, 'update']);


Route::get('/reviews', [AddReviewController::class, 'index'])->name('reviews.index');
Route::get('/reviews/create', [AddReviewController::class, 'create'])->name('reviews.create');
Route::post('/reviews/store', [AddReviewController::class, 'store'])->name('reviews.store');
Route::get('/reviews/edit/{id}', [AddReviewController::class, 'edit'])->name('reviews.edit');
Route::post('/reviews/update/{id}', [AddReviewController::class, 'update'])->name('reviews.update');
Route::delete('/reviews/destroy/{id}', [AddReviewController::class, 'destroy'])->name('reviews.destroy');

require __DIR__.'/auth.php';
