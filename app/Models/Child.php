<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $guarded =[];
=======

>>>>>>> afa5eaa78da113bd3b39a6d82b38a042ba7349ec
    public function vaccine()
    {
        return $this->hasMany(Child_vaccin::class);
    }
    public function volunteer(){
        return $this->belongsTo(Volunteer::class);
    }
<<<<<<< HEAD


    public function childVaccine(){

        return $this->belongsToMany(Vaccine::class,'child_vaccins')->withPivot('dose_no','first_dose','second_dose','third_dose')->withTimestamps();
    }
    public function admin(){
        return $this->belongsTo(Admin::class,'admin_id','id');
    }
=======
>>>>>>> afa5eaa78da113bd3b39a6d82b38a042ba7349ec
}
