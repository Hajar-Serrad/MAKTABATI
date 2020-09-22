<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Person;
use App\User;

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
        $array = ['CP1','CP2','GINF1','GIL1','GSTR1','GSEA1','G3EI1','GINF2','GIL2','GSTR2','GSEA2','G3EI2'];
        for( $i=1; $i<4; $i++)
        {
            $data = Person::where('id' , $i)->first();
            User::create([
                'id' => 170000+$i,
                'firstname' => $data->firstname,
                'lastname' => $data->lastname,
                'email' => $data->email,
                'password' => bcrypt('123123123'),
                'class' => Arr::random($array),
                'phone' => '0652314789',
                'address' => 'Boukalef, Tanger',
                'person_id' => $i
            ]);
        }
    }
}