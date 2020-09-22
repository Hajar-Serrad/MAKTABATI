<?php

use Illuminate\Database\Seeder;

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
             'must_be_returned_at'=> Carbon::now('Africa/Casablanca'),
        ]);
        $copy->available = false;
        $copy->save();
        $copy = Copy::where('available',true)->first();
        Borrowing::create([
             'copy_nbr' => $copy->copy_nbr,
             'ISBN' => $copy->ISBN, 
             'user_id' => 2,
             'borrowed_at'=> Carbon::now('Africa/Casablanca'),
             'must_be_returned_at'=> Carbon::now('Africa/Casablanca'),
        ]);
        $copy->available = false;
        $copy->save();
        $table->integer('copy_nbr');
            $table->foreign('copy_nbr')->references('copy_nbr')->on('copies')->onUpdate('cascade')->onDelete('cascade');
            $table->string('ISBN');
            $table->foreign('ISBN')->references('ISBN')->on('copies')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamp('borrowed_at');
            $table->timestamp('must_be_returned_at')->nullable();
            $table->primary(['ISBN','copy_nbr','user_id']);

    }
}
