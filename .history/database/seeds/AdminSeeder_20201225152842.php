<?php

use Illuminate\Database\Seeder;
use App\Person;
use App\Admin;

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
            $data = Person::where('id' , 180000+$i$i)->first();
            Admin::create([
                'id' => $i,
                'firstname' => $data->firstname,
                'lastname' => $data->lastname,
                'email' => $data->email,
                'password' => bcrypt('123123123'),
                'person_id' => 180000+$i
            ]);
        }
    }
}
