<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth;
use App\Http\Controllers\Configsetup;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontendTemplate/welcome');
});


Route::get('/CONTACT', function () {
    return view('frontendTemplate/contact');
});


Route::get('/WHO-WE-ARE', function () {
    return view('frontendTemplate/about');
});

Route::get('/admin', function () {
   if(session('users_detals'))
    {
      return redirect('/Dashboard');  
    }
    
    return view('backendTemplate/adminLogin');
});


Route::get('/Dashboard', function () {
    return view('backendTemplate/admin');
});





Route::get('/Create-Category/{base}', function ($base) {
    return view('backendTemplate/category',['base'=>$base]);
});


Route::get('/About-Page', function () {
    return view('backendTemplate/aboutAdmin');
});


Route::get('/Add-Product/{category_id}', function ($category_id) {
    return view('backendTemplate/addProduct',['category_id'=>$category_id]);
});


Route::get('/Trash-Category/{id}/{photo}',[Configsetup::class,'trash_category']);

Route::get('/Trash-Product/{id}/{photo}',[Configsetup::class,'trash_product']);



Route::get('/Logout', function () {
     Session::flush();
    Session::forget('users_detals');
   
    if (Session::has('users_detals'))
    {
      return redirect('/Dashboard');  
    }else{
        
         return redirect('/admin');  
        
    }
   
});



Route::post('/admin-login', [Auth::class, 'do_login'])->name('login');
Route::post('add-category',[Configsetup::class, 'add_category'])->name('category-post');
Route::post('add-product',[Configsetup::class, 'add_product'])->name('product-post');

Route::post('About-Page',[Configsetup::class, 'about_page'])->name('who-we-are-post');

