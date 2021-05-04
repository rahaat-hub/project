<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child_vaccin extends Model
{
    use HasFactory;
    protected $guarded=[];
<<<<<<< HEAD


    public function child(){
        return $this->belongsTo(Admin::class,'child_id','id');
    }
    
    public function vaccine(){
        return $this->belongsto(Vaccine::class,'vaccine_id','id');
    }
    public function admin(){
        return $this->belongsTo(Admin::class,'admin','id');
    }
    
=======
>>>>>>> afa5eaa78da113bd3b39a6d82b38a042ba7349ec
}
