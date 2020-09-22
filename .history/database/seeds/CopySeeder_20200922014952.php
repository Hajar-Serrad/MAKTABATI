<?php

use Illuminate\Database\Seeder;
use App\Book;
use App\Copy;

class CopySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $books = Book::all();
        foreach($books as $book)
        {
            Copy::create([
                'copy_nbr' => 1,
                'ISBN' => $book->ISBN,
                'editor' => 'Pocket books',

            ]);
        }
        
    }
}
