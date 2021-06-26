<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catigory;
class pagescontroller extends Controller
{
    public function index()
    {
    $catigory= Catigory::where('name' , 'skin care')->with('products')->first();
    return view ('index' , compact('catigory'));
    }   

    public function login()
    {
    return view ('auth.login');
    
    }      


}
