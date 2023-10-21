<?php
namespace Database\Seeders;

use App\Models\Book;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'title' => 'Sample Book 1',
                'author' => 'Author 1',
            ],
            [
                'title' => 'Sample Book 2',
                'author' => 'Author 2',
            ],
        ];

        Book::insert($books);
    }
}
