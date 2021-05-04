<?php

namespace Database\Seeders;

use App\Models\Admin;
<<<<<<< HEAD
use App\Models\Child;
use App\Models\Vaccine;
=======
>>>>>>> afa5eaa78da113bd3b39a6d82b38a042ba7349ec
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
<<<<<<< HEAD
            'gender'=>'Male',
            'role'=>'admin',
           
        ]);
        Admin::Create([
            'name'=>'Md moshiur',
            'email'=>'moshiur@gmail.com',
            'password'=>bcrypt('12345'),
            'phone'=>'01888736796',
            'blood_group'=>'A+',
            'gender'=>'Male',
            'role'=>'volunteer',
           
        ]);
        
           
        
        Vaccine::Create([
            'vc_name'=>'BGC (Bacillus chalmette Guerin)',
            'disease'=>'Tuberculosis',
            'route'=>'Intra dermal-IM',
            'no_of_doses'=>'1',
            'interval_between_doses'=>'1',
            'starting_time_of_doses'=>'1',
            'site'=>'Upper outer aspect of left arm',
            

        ]);
        Vaccine::Create([
            'vc_name'=>'Pentavalent',
            'disease'=>'Diphtheria, Pertussis, Tetanus, Hepatitis B, Haemophilus Influenza B',
            'route'=>'Intra dermal-IM',
            'no_of_doses'=>'2',
            'interval_between_doses'=>'4',
            'starting_time_of_doses'=>'6',
            'site'=>'Upper outer aspect of left arm',
            

        ]);
        Vaccine::Create([
            'vc_name'=>'OPV',
            'disease'=>'Poliomyelitis',
            'route'=>'Oral',
            'no_of_doses'=>'2',
            'interval_between_doses'=>'4',
            'starting_time_of_doses'=>'10',
            'site'=>'Lat.aspect of mid thigh',
            

        ]);
        Vaccine::Create([
            'vc_name'=>'PCV',
            'disease'=>'Pneumococcal Pneumonia',
            'route'=>'Intra dermal-IM',
            'no_of_doses'=>'1',
            'interval_between_doses'=>'1',
            'starting_time_of_doses'=>'14',
            'site'=>'Lat.aspect of mid thigh',
            

        ]);
        Vaccine::Create([
            'vc_name'=>'MR',
            'disease'=>'Measles Rubella',
            'route'=>'Subcutaneous',
            'no_of_doses'=>'2',
            'interval_between_doses'=>'4',
            'starting_time_of_doses'=>'18',
            'site'=>'Lat.aspect of mid thigh',
            

        ]);
        Vaccine::Create([
            'vc_name'=>'Measles',
            'disease'=>'Measles',
            'route'=>'Subcutaneous',
            'no_of_doses'=>'1',
            'interval_between_doses'=>'6',
            'starting_time_of_doses'=>'24',
            'site'=>'Lat.aspect of mid thigh',
            

        ]);
        
    }
}

=======
            'role'=>'admin',
           
        ]); 
    }
}
>>>>>>> afa5eaa78da113bd3b39a6d82b38a042ba7349ec
