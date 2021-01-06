<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Admin::Create([
            'name'=>'Md Moinul Islam',
            'email'=>'moinulislam@gmail.com',
            'password'=>bcrypt('12345'),
            'phone'=>'01888736796',
            'blood_group'=>'A+',
            'role'=>'admin',
           
        ]); 
    }
}
