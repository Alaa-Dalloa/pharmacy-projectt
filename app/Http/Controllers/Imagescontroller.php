<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\image;
class Imagescontroller extends Controller
{
    public function create ()
    {
       return view ('images.create');

    }
    public function store (Request $request)
    {

      $image= new image ;
      $image->Image=$request->image;
      $image->product_id=$request->product_id;
      $image->save();   
      return back();
    }
    public function index ()
    {

    	$images = image::all();
      return view ('images.index' , compact('images'));
    }
    public function destroy($id)
{
  $image= image::where('id' , $id)->first();
  $image->delete();
  return back();

}
public function edit ($id)
{
   $image= image::find($id);
   return view ('images.edit' , compact('image'));

}
public function update($id , Request $request)
{
    $image= image::find($id);
    $image->image = $request->image ;
    $image-> save();
    return back();
}
}
