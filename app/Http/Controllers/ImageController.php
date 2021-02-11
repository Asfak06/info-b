<?php

namespace App\Http\Controllers;
use App\Models\Image;
use Auth;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store(Request $request){
      $image=$request->image;
      $image_new_name=time().$image->getClientOriginalName();
      $image->move('img',$image_new_name);

        $image = Image::create([
          'caption' => $request->caption,
          'path' => 'img/'.$image_new_name,
          'user_id' => Auth::id()
        ]);  

         return redirect()->route('dashboard');  	
    }

    public function delete(Request $request){

      $images = $request->image;
      foreach ($images as $image) 
      {
        Image::where('id', $image)->delete();
      }

       return redirect()->route('dashboard'); 

    }
}
