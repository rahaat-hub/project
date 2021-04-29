<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;
   
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'blood_group',
        'gender',

    ];

    public function vaccine()
    {
        return $this->hasMany(Child_vaccin::class,'child_id','id');
    }

    public function child(){
        return $this->hasOne(Child::class,'admin_id');
    }
    
    public function childVaccine(){

        return $this->hasMany(Child_vaccin::class,'child_id','id');

}
}

