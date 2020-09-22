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
        for( $i=3; $i<6; $i++)
        {
            $data = Person::where('id' , $i)->first();
            User::create([
                'firstname' => $date->firstname,
                'lastname' => $date->lastname,
                'email' => $date->email,
                'password' => bcrypt('123123123'),
            ]);
        }
    }
}
