<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as ResizeImage;
use Illuminate\Support\Facades\File;
use App\Models\Category;
use App\Models\Product;
use App\Models\About;
use App\Models\Company;


class Configsetup extends Controller
{
    //
  
    function add_category(Request $request){
    
    
    $category_obj = new Category();
     
     $path = public_path('category_images/');
        !is_dir($path) &&
            mkdir($path, 0777, true);
            
            
      $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
          
     

        $name = time() . '.' . $request->image->extension();
        ResizeImage::make($request->file('image'))
            ->resize(385, 330)
            ->save($path . $name);
            
       $category_obj->title = $request->title;
       $category_obj->description = $request->description;
       $category_obj->image = $name;
       $category_obj->status = 1;
       $category_obj->base = $request->base;
           $category_obj->save();
            
            
          return redirect()
            ->back()
            ->with('success', 'Image successfully upload.');
    
    
    }
    
  //-------------Function is responsible to delete the category and photo 
  
 
     
    function trash_category($image_id,$image){
           $category_obj= new Category();
       //  echo $image_id;
       //  echo $image;
         
         $image_path = "/category_images/".$image;  // Value is not URL but directory file path
         
       
         
if(File::exists(public_path($image_path))) {
   File::delete(public_path($image_path));
}
    
         $res=$category_obj::where('id',$image_id)->delete();
          return redirect()->back()->with('success', 'your message,here');   
     }
     
  //--------------This function resposible for adding product-----   
  function add_product(Request $request){
     
     
       $product_obj = new Product();
       $path = public_path('products_images/');
        !is_dir($path) &&
            mkdir($path, 0777, true);
            
            
      $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
          
        $name = time() . '.' . $request->image->extension();
        ResizeImage::make($request->file('image'))
            ->resize(370, 390)
            ->save($path . $name);
            
       $product_obj->title = $request->title;
       $product_obj->price = $request->price;
       $product_obj->description = $request->description;
       $product_obj->image = $name;
       $product_obj->status = 1;
       $product_obj->category_id = $request->category_id;
       $product_obj->save();
            
     return redirect()->back()->with('success', 'Product added successfully');   
     
     }
   //-------------Function is responsible to delete the product and photo 
  
 
     
    function trash_product($product_id,$image){
             $product_obj = new Product();
       //  echo $image_id;
       //  echo $image;
         
         $image_path = "/products_images/".$image;  // Value is not URL but directory file path
         
       
         
if(File::exists(public_path($image_path))) {
   File::delete(public_path($image_path));
}
    
         $res=$product_obj::where('id',$product_id)->delete();
          return redirect()->back()->with('success', 'Product Deleted successfully!');   
     }  
    
    
    
    
    function about_page(Request $req){
        $about_obj = new About();  
        $about_obj->ribbon_title = $req->ribbon_title;
        $about_obj->title  = $req->title ;
        $about_obj->description = $req->description;
        $about_obj->save();
            
     return redirect()->back()->with('success', 'Event added successfully');   
 
    }
    
    
    function trash_about_post($id){
    
    $about_obj = new About(); 
    
    $about_obj::where('id',$id)->delete();
    return redirect()->back()-with('success','About Page Post successfully deleted');
    
    
    }
    
    //-----------------Function is written for update company information--------
    function company_profile(Request $request){
    
         $company_obj = new Company();
    
    
        $path = public_path('compnay_logo/');
        !is_dir($path) &&
            mkdir($path, 0777, true);
      
     if($request->file('image')){ 
            
            
      $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
          
        $Imagename = time() . '.' . $request->image->extension();
        ResizeImage::make($request->file('image'))
            ->resize(370, 390)
            ->save($path . $Imagename);
    }else{
    
     $Imagename = $request->logo;
    }
    
    
    $company_obj::where('id', 1)
              ->update(['logo' =>  $Imagename,
                        'name'=>$request->name, 
                        'email'=> $request->email,
                        'address'=> $request->address,
                        'mobile'=> $request->mobile,
                        'office_time'=> $request->office_time,
                        'gstin'=>  $request->gstin,
                        'facebook_link'=>  $request->facebook_link,
                        'instagram_link'=>  $request->instagram_link,
                        'twitter_link'=>  $request->twitter_link,
                        'linkdin_link'=>  $request->linkdin_link]);
                        
                        
             return redirect()->back()->with('success','Company Profile updated successfully');           
    
    
    
    }
    
    
    
    
    
    
    
    
}
