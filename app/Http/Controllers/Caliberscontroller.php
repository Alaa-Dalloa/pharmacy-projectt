<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\caliber;
class Caliberscontroller extends Controller
{
    public function create ()
    {
       return view ('calibers.create');

    }
    public function store (Request $request)
    {
      $caliber= new caliber ;
      $caliber->caliber = $request->caliber ;
      $caliber->save();   
      return back();
    }
    public function index ()
    {

    	$calibers = caliber::all();
      return view ('calibers.index' , compact('calibers'));
    }
    public function destroy($id)
{
  $caliber= caliber::where('id' , $id)->first();
  $caliber->delete();
  return back();

}
public function edit ($id)
{
   $caliber= caliber::find($id);
   return view ('calibers.edit' , compact('caliber'));

}
public function update($id , Request $request)
{
    $caliber= caliber::find($id);
    $caliber->product_id=$request->product_id;
    $caliber->caliber=$request->caliber;
    $caliber-> save();
    return back();
}
}
