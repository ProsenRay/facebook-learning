<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function courseDetails($type){
        if($type==='facebook'){
            return view('Frontend.courses.facebook.facebook');
        }elseif ($type==='digital-marketing'){
            return view('Frontend.courses.digitalMarketing.digital-marketing');
        }
    }
}
