<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ResumeSeeder extends Seeder
{
    public function run()
    {
        DB::table('resumes')->insert([
            'name' => 'Maricel G. Cruz',
            'phone' => '0926-7535-153',
            'email' => 'cmaricel064@gmail.com',
            'date_of_birth' => '2001-06-06',
            'place_of_birth' => 'Pulilan, Bulacan',
            'age' => 23,
            'weight' => '46 kg',
            'religion' => 'Catholic',
            'citizenship' => 'Filipino',
            'height' => "5'1\"",
            'civil_status' => 'Single',
            'tertiary_education' => 'Bachelor of Science in Information Technology, Baliwag Polytechnic College, Baliuag, Bulacan (2021 - Present)',
            'secondary_education' => 'Junior-Senior High, Sta. Peregrina High School, Pulilan, Bulacan (2013 - 2019)',
            'eligibility' => 'Computer System Servicing NC II',
            'skills' => 'Flexible, Goal-oriented, Quick Learner, Computer Literate, Detail-oriented, Collaborative'
        ]);
    }
}
