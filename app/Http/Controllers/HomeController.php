<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    /** 
     *  showing   
     */
    public function index(){
        $data = Product::all();

        return view('home.home',['products'=>$data]);
    }
}
