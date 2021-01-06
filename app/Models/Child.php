<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;

    public function vaccine()
    {
        return $this->hasMany(Child_vaccin::class);
    }
    public function volunteer(){
        return $this->belongsTo(Volunteer::class);
    }
}
