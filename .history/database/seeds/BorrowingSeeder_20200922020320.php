<?php

use Illuminate\Database\Seeder;
use App\Copy;
use App\Borrowing;
use Carbon\Carbon;
class BorrowingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $copy = Copy::where('available',true)->first();
        Borrowing::create([
             'copy_nbr' => $copy->copy_nbr,
             'ISBN' => $copy->ISBN, 
             'user_id' => 1,
             'borrowed_at'=> Carbon::now('Africa/Casablanca'),
             'must_be_returned_at'=> Carbon::now('Africa/Casablanca')->addDays(15),
        ]);
        $copy->available = false;
        $copy->save();
        $copy = Copy::where('available',true)->first();
        Borrowing::create([
             'copy_nbr' => $copy->copy_nbr,
             'ISBN' => $copy->ISBN, 
             'user_id' => 2,
             'borrowed_at'=> Carbon::now('Africa/Casablanca')->addDays(14),
             'must_be_returned_at'=> Carbon::now('Africa/Casablanca')->addDays(15),
        ]);
        $copy->available = false;
        $copy->save();
    }
}
