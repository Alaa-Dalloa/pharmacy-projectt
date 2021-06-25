<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Product;
use App\Team;
class Imagescontroller extends Controller
{
    public function create ()
    {
      $products = product::all();
      $teams = team::all();
       return view ('photos.create' , compact('products') , compact('teams'));

    }
    public function store (Request $request)
    {

      $photo= new photo ;
      $photoName =rand().time().'.'.$request->photo->getClientOriginalExtension();
      $request->photo->move(public_path('upload'), $photoName );
      $photo->photo=$photoName ;
      $photo->product_id=$request->product_id;
      $photo->team_id=$request->team_id;
      $photo->save();   
      return back();
    }
    public function index ()
    {

    	$photos = photo::all();
      return view ('photos.index' , compact('photos'));
    }
    public function destroy($id)
{
  $photo= photo::where('id' , $id)->first();
  $photo->delete();
  return back();

}
public function edit ($id)
{
   $photo= photo::find($id);
   return view ('photos.edit' , compact('photo'));

}
public function update($id , Request $request)
{
    $photo= photo::find($id);
    $photoName =rand().time().'.'.$request->photo->getClientOriginalExtension();
    $request->photo->move(public_path('upload'), $photoName);
    $photo->photo=$photoName ;
    $photo->product_id=$request->product_id;
    $photo->team_id=$request->team_id;

    $photo-> save();
    return back();
}
}
