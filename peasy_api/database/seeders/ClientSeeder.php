<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('clients')->insert([
            'first_name'=> 'John',
            'last_name'=>   'Smith',
            'email' => 'john@example.com',
            'date_of_birth' => '1998-09-10',
            'phone_number' => '3224533443',
            'gender' => 'male',
        ]);

        DB::table('clients')->insert([
            'first_name'=> 'Roman',
            'last_name'=>   'Saled',
            'email' => 'roman@example.com',
            'date_of_birth' => '1989-03-22',
            'phone_number' => '3114346757',
            'gender' => 'male',
        ]);

        DB::table('clients')->insert([
            'first_name'=> 'Suli',
            'last_name'=>   'Smith',
            'email' => 'suli@example.com',
            'date_of_birth' => '1999-12-13',
            'phone_number' => '3239933212',
            'gender' => 'female',
        ]);

        DB::table('clients')->insert([
            'first_name'=> 'Laura',
            'last_name'=>   'Rodriguez',
            'email' => 'lau@example.com',
            'date_of_birth' => '2002-02-11',
            'phone_number' => '3215678846',
            'gender' => 'female',
        ]);
    }
}
