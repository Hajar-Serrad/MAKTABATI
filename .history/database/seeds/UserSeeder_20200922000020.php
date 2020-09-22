<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for( $i=0; $i<3; $i++)
        {
            $data = DB::table('people')::whereId($i)->first();
            DB::table('users')->insert([
                
                'firstname' => $date->'firstname',
                'lastname' => $date->'lastname',
                'email' => $date->'email',
                'password' => bcrypt('123123123'),
                'class' => rand('CP1','CP2','GINF1','GIL1','GSTR1','GSEA1','G3EI1','GINF2','GIL2','GSTR2','GSEA2','G3EI2'),
                'phone' => '0652314789',
                'address' => 'Boukalef, Tanger'
            ]);
        }
    }
}