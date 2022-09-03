<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductdetailsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[ProductController::class ,'index'])->name('home');
Route::post('logout', [SessionController::class, 'destroy']);
Route::resource('login',SessionController::class);
Route::resource('register',RegisterController::class)->middleware('guest');
Route::resource('add_category',CategoryController::class)->middleware('Permission');//change this middleware
Route::resource('add_product',ProductController::class)->middleware('Permission');
Route::resource('add_user',UserController::class)->middleware('Permission');
Route::resource('category_chioce',UserController::class)->middleware('guest');
//Route::resource('product_details' ,ProductdetailsController::class);
Route::get('/product_details/{product:id}', function (Product $product){
    return view('product_details',[
        'product'=>Product::findOrFail($product->id)]);
});

Route::post('newsletter',function () {
   dd('hello');
    //dd(request()->all());
    request()->validate([
        'email' => 'required|email'
    ]);
    $mailchimp = new ApiClient();

    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us14'
    ]);
   // $response=$mailchimp->lists->getAllLists();
//dd($response);
    try {
        $response = $mailchimp->lists->addListMember('a4f031b94f', [
            "email_address" => request('email'),
            "status" => "subscribed",]);
    }
    catch (Exception $exception) {
        throw ValidationException:: withMessages([
            'email' => 'this email could not add to our lest ....'
        ]);
    }

    return redirect('/')->with('success','your successfully subscribe for new letter');

});




