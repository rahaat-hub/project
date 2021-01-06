<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
        return view('web.index');
    }
    public function signup(){
        return view('frontend.childsignup');
    }
    public function vaccinelist(){
        return view('web.gallery');
    }
}
