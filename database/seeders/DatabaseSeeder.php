<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Book;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       // Seed authors and books
       Author::factory(10)->create()->each(function ($author) {
        $author->books()->saveMany(Book::factory(3)->make());
    });
    }
}
