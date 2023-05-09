<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'name' => "Livro 1",
            'available' => true,
        ]);

        Book::create([
            'name' => "Livro 2",
            'available' => false,
        ]);
    }
}
