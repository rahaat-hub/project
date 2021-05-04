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
    
<<<<<<< HEAD
  
    $check = Child_vaccin::where('child_id',$request->id)->where('vaccine_id',$data)->first();

    
    
    //if ($abc < 1) {}
    
    if(!$check)
    {
        
        $child->child_id = $request->id;    
        $child->vaccine_id = $data;
        $child->dose_no = 1;
        $child->first_dose = now();
        $child->save(); 
        
    }

     else 
        {
            
            $check->update([
                'dose_no'=>$check->dose_no+1,
                'second_dose'=>now()
            ]);
        
        
        }
         /*else if($child->dose_no == 2)
            {
                $check->update([
                    'dose_no'=>$check->dose_no+1,
                    'third_dose'=>now()
                ]);
            }
            else{
               
            
            }*/

        
                 
    }
        
            
                 
        
        
        
        return redirect()->back()->with('message','successfully provided');
    }   
    
    public function viewcard(){
        return view('backend.child.vaccines');
    }
    public function demo(){
        return view('backend.child.register');
    }
}
        

        
=======
    
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
>>>>>>> afa5eaa78da113bd3b39a6d82b38a042ba7349ec
