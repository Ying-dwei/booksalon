<?php

use Illuminate\Database\Seeder;

use App\Book as Book;


class Books extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = factory(Book::class, 10)->create()->each(function($books){
            $books->save();
        });
    }
}
