<?php

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 1; $i <= 20; $i++) {
            Book::create([
                'ISBN'  => $i*1000
                'title'        => 'Book '.$i,
                'author'       => 'Author ' .$i*2,
                'description'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'category'      => '',
                'image'    => "$i.jpg",
            ]);

            $table->string('ISBN');
            $table->string('title');
            $table->string('author');
            $table->string('category');
            $table->mediumText('image')->nullable();
            $table->text('description')->nullable();
            $table->primary(['ISBN']);
    }
}
