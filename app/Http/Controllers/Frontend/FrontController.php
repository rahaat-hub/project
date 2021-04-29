<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Vaccine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function home(){
        return view('web.index');
    }
    public function duplicate(){
        return view('web.index2');
    }
    
    public function about(){
        return view('web.about');
    }
    public function schedule(){
        $list=Vaccine::all();
        return view('web.schedule',compact('list'));
    }
}
