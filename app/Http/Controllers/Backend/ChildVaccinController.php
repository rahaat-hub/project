<?php

namespace App\Http\Controllers\Backend;
use App\Models\Child;
use App\Models\Vaccine;
use App\Models\Child_vaccin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ChildVaccinController extends Controller
{
    public function card(Request $request,$id){
        
        $child = Child::find($id);
        
        
        return view('backend.vaccine.request',compact('child'));
    }

    
    public function childvaccine(Request $request){
       
        $validatedData = $request->validate([
            'vaccine.*'=>'required'
        ]);

        $child = new Child_vaccin();

foreach($request->vaccine as $data)
{
    
    
    $check = Child_vaccin::where('child_id',$request->id)->where('vaccine_id',$data)->first();
    //if ($abc < 1) {}
    

        if(!$check)
        {
            
            $child->child_id = $request->id;
            $child->vaccine_id = $data;
            $child->save(); 
        }
        
    
    
}
        return redirect()->back()->with('message','successfully provided');

        
        
    }
    
}
