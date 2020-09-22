<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Person;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for( $i=1; $i<4; $i++)
        {
            Person::create([
                'firstname' => Str::random(6),
                'lastname' => Str::random(6),
                'email' => Str::random(10).'@gmail.com',
                'status' => false
            ]);
        }
        for($i=1; $i<4; $i++)
        {
            Person::create([
                'firstname' => Str::random(6),
                'lastname' => Str::random(6),
                'email' => Str::random(10).'@gmail.com',
                //'password' => bcrypt('123123123'),
                'status' => true
            ]);
        }
    }
}
