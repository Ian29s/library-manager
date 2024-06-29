<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */

 class BookFactory extends Factory
 {
     protected $model = Book::class;
 
     public function definition()
     {
         return [
             'title' => $this->faker->sentence,
             'author_id' => Author::factory(),
             'published_date' => $this->faker->date,
         ];
     }
 }

// class BookFactory extends Factory
// {
//     /**
//      * Define the model's default state.
//      *
//      * @return array<string, mixed>
//      */
//     public function definition(): array
//     {
//         return [
//             //
//         ];
//     }
// }
