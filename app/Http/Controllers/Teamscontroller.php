<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\team;
use App\photo;
class Teamscontroller extends Controller
{
    public function create ()
    {
        $photos= photo::all();
    	   return view ('teams.create' , compact('photos'));

    }
    public function store (Request $request)
    {
      $team= new team ;
      $team->name=$request->name;
      $team->phone=$request->phone;
      $team->email=$request->email;
      $team->position=$request->position;
      $team->bio=$request->bio;
      $photoName =rand().time().'.'.$request->photo->getClientOriginalExtension();
      $request->photo->move(public_path('upload'), $photoName);
      $team->photo=$photoName ;
	    $team->save();   
      return back();

    }

    public function index ()
    {
      $teams =team::all();
      return view ('teams.index' , compact('teams'));
    }
   public function destroy($id)
   {
     $team=team::find($id);
     $team->delete();
     return back();
   }
   public function edit ($id)
{ 
  $photos= photo::find($id);
	$team= team::find($id);
	return view ('teams.edit' ,compact('team') , compact('photos'));
}
public function update($id , Request $request)

{ 
      $team= team::find($id);
      $team->name=$request->name;
      $team->phone=$request->phone;
      $team->email=$request->email;
      $team->position=$request->position;
      $team->bio=$request->bio;
      $photoName =rand().time().'.'.$request->photo->getClientOriginalExtension();
      $request->photo->move(public_path('upload'), $photoName);
      $team->photo=$photoName ;
	    $team->save();   
      return back();
}

}
