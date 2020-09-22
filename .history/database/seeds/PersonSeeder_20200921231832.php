<?php

use Illuminate\Database\Seeder;

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
        for(int i=0; i<3; i++)
        {
            DB::table('people')->insert([
                'firstname' => Str::random(6),
                'lastname' => Str::random(6)
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('123123123'),
                'status' => false
            ]);
        }
        for(int i=0; i<3; i++)
        {
            DB::table('people')->insert([
                'firstname' => Str::random(6),
                'lastname' => Str::random(6)
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('123123123'),
                'status' => true
            ]);
        }
    }
}
