<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for( $i=4; $i<7; $i++)
        {
            $data = Person::where('id' , $i)->first();
            Admin::create([
                'id' => 180000+$i,
                'firstname' => $date->firstname,
                'lastname' => $date->lastname,
                'email' => $date->email,
                'password' => bcrypt('123123123'),
                'person_id' => $i
            ]);
        }
    }
}