<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth;

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
    return view('welcome');
});


Route::get('/admin', function () {
   if(session('users_detals'))
    {
      return redirect('/Dashboard');  
    }
    
    return view('adminLogin');
});


Route::get('/Dashboard', function () {
    return view('admin');
});


Route::get('/Create-Category', function () {
    return view('category');
});



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
