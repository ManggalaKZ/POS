<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function food_beverage(){
        return view('food_beverage');
    }
    public function beauty_health(){
        return view('beauty_health');
    }
    public function home_care(){
        return view('home_care');
    }
    public function baby_kid(){
        return 'halooo';
        // return view('baby_kid');
    }
}
