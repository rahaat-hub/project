<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Vaccine;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Throwable;

class VaccineController extends Controller
{
    //
    public function add(){
        return view ('backend.vaccine.addvaccine');
    }

    public function store(Request $request){

        
      //dd($request->all());
      
        $vacc = new Vaccine();
        $vacc->vc_name=$request->vc_name;
        $vacc->disease= $request->disease;
        $vacc->route= $request->route;
        $vacc->no_of_doses= $request->no_of_doses;
        $vacc->interval_between_doses=$request->interval_between_doses;
        $vacc->starting_time_of_doses=$request->starting_time_of_doses;
        $vacc->site=$request->site;
        $vacc->save();
        return redirect()->back()->with('message','Vaccine successfully added');
    }

    public function vaccinelist(){

        $list=Vaccine::all();
        return view('backend.vaccine.vaccine',compact('list'));
    }

    public function delete($id){
        //dd('ok');
        Vaccine::find($id)->delete();
        return redirect()->back()->with('msg','Vaccine successfully deleted');
    }

    public function edit($id){
        
        $vacc=Vaccine::find($id);
        return view('backend.vaccine.edit',compact('vacc'));
    }

    public function update(Request $request,$id){
   
        $validatedData = $request->validate([
            
            'vc_name'=> 'required',
            'disease'=> 'required',
            'route'=> 'required',
            'no_of_doses'=> 'required',
            'interval_between_doses' =>'required',
            'starting_time_of_doses' =>'required',
            'site' => 'required'
            

        ]);    
         
        $vacc=Vaccine::find($id);
       

        $vacc->vc_name = $request->vc_name;
        $vacc->disease= $request->disease;
        $vacc->route= $request->route;
        $vacc->no_of_doses= $request->no_of_doses;
        $vacc->interval_between_doses= $request->interval_between_doses;
        $vacc->starting_time_of_doses= $request->starting_time_of_doses;
        $vacc->site= $request->site;
        $vacc->save();
        
         
        //return redirect()->back()->with('message','successfully updated');
        return redirect(route('vaccine.list'))->with('message', 'Successfully updated!!');
    }
    public function view($id){
        return view('backend.vaccine.view',
        [
            'vacc'=> Vaccine::findorFail($id)
        ]
    );
}
    public function request(){
        return view('backend.child.request');
    }

        
}