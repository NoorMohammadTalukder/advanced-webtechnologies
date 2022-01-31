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
}
