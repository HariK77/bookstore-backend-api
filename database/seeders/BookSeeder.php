<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $response = Http::get('https://fakerapi.it/api/v1/books?_quantity=200');
        $books = $response->json();
        foreach ($books['data'] as $key => $book) {
            Book::create($book);
        }
    }
}
