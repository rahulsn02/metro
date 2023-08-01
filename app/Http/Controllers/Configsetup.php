<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as ResizeImage;
use Illuminate\Support\Facades\File;
use App\Models\Category;


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
  
 
     
    function trash_photo($image_id,$image){
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
     
    
    
    
    
}
