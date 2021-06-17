<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\catigory;

class Categoriescontroller extends Controller
{
 public function create ()
 {
   return view ('categories.create');
 }
 public function store(Request $request)
 {
    $catigory = new catigory ;
    $catigory->name = $request->name ;
    $catigory-> save();
 	return back();
 }
public function index ()
 { $categories= catigory::all();
   return view ('categories.index' , compact('categories'));
 }
public function destroy($id)
{
  $catigory= catigory::where('id' , $id)->first();
  $catigory->delete();
  return back();

}
public function edit ($id)
{
   $catigory= catigory::find($id);
   return view ('categories.edit' , compact('catigory'));

}
public function update($id , Request $request)
{
    $catigory= catigory::find($id);
    $catigory->name = $request->name ;
    $catigory-> save();
    return back();
}
}
