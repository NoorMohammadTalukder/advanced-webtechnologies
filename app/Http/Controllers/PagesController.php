<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){
        return view('home');

    }

    public function products(){
        $products=array("Bag", "Hoodie", "Pant");
        return view('products')
        ->with('products', $products);;
    }

    public function teams(){
        $teams=array("Alif", "Marfy", "Mehedi");
        return view('teams')
        ->with('teams', $teams);;
    }

    public function aboutUs(){
        return view('aboutUs');
    }

    public function contactUs(){
        return view('contactUs');
    }
   

}
