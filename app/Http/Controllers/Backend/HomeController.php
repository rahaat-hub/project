<?php

namespace App\Http\Controllers\Backend;
use App\Models\Child;

use App\Models\Vaccine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Child_vaccin;
use App\Models\Volunteer;

class HomeController extends Controller
{
    //
    public function dashboard() {
        $child=Child::all();
        $vaccine=Vaccine::all();
        $volunteer=Admin::where('role','=','volunteer')->get();
        $card=Child_vaccin::all();
        
        return view('backend.dashboard',compact('child','vaccine','card','volunteer'));  
    }
    public function home(){
        return view('backend.master');
    }
    public function master2(){
        $list = Vaccine::all();
        return view('backend.master2',compact('list'));
    }
}
