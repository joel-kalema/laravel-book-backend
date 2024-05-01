<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'title' => 'Sample Book 1',
            'writer' => 'John Doe',
            'cover_image' => 'https://example.com/cover1.jpg',
            'point' => 10,
            'tag' => ['fiction', 'novel'],
        ]);

        Book::create([
            'title' => 'Sample Book 2',
            'writer' => 'Jane Smith',
            'cover_image' => 'https://example.com/cover2.jpg',
            'point' => 15,
            'tag' => ['science', 'non-fiction'],
        ]);

        Book::create([
            'title' => 'To Kill a Mockingbird',
            'writer' => 'Harper Lee',
            'cover_image' => 'https://example.com/cover4.jpg',
            'point' => 16,
            'tag' => ['classic', 'fiction'],
        ]);

        Book::create([
            'title' => 'Harry Potter and the Philosopher\'s Stone',
            'writer' => 'J.K. Rowling',
            'cover_image' => 'https://example.com/cover5.jpg',
            'point' => 20,
            'tag' => ['fantasy', 'young adult'],
        ]);

        Book::create([
            'title' => '1984',
            'writer' => 'George Orwell',
            'cover_image' => 'https://example.com/cover6.jpg',
            'point' => 19,
            'tag' => ['dystopian', 'fiction'],
        ]);

        Book::create([
            'title' => 'The Catcher in the Rye',
            'writer' => 'J.D. Salinger',
            'cover_image' => 'https://example.com/cover30.jpg',
            'point' => 14,
            'tag' => ['classic', 'coming-of-age'],
        ]);

        Book::create([
            'title' => 'The Hobbit',
            'writer' => 'J.R.R. Tolkien',
            'cover_image' => 'https://example.com/cover7.jpg',
            'point' => 18,
            'tag' => ['fantasy', 'adventure'],
        ]);

        Book::create([
            'title' => 'Moby-Dick',
            'writer' => 'Herman Melville',
            'cover_image' => 'https://example.com/cover8.jpg',
            'point' => 17,
            'tag' => ['classic', 'adventure'],
        ]);

        Book::create([
            'title' => 'The Lord of the Rings',
            'writer' => 'J.R.R. Tolkien',
            'cover_image' => 'https://example.com/cover9.jpg',
            'point' => 20,
            'tag' => ['fantasy', 'epic'],
        ]);

        Book::create([
            'title' => 'The Picture of Dorian Gray',
            'writer' => 'Oscar Wilde',
            'cover_image' => 'https://example.com/cover20.jpg',
            'point' => 16,
            'tag' => ['classic', 'gothic'],
        ]);

        Book::create([
            'title' => 'Book of Secrets',
            'writer' => 'Jane Smith',
            'cover_image' => 'https://example.com/cover1.jpg',
            'point' => 12,
            'tag' => ['fiction', 'mystery'],
        ]);

        Book::create([
            'title' => 'The Lost World',
            'writer' => 'Michael Crichton',
            'cover_image' => 'https://example.com/cover2.jpg',
            'point' => 18,
            'tag' => ['science fiction', 'adventure'],
        ]);

        Book::create([
            'title' => 'The Great Gatsby',
            'writer' => 'F. Scott Fitzgerald',
            'cover_image' => 'https://example.com/cover3.jpg',
            'point' => 15,
            'tag' => ['classic', 'novel'],
        ]);

        Book::create([
            'title' => 'Pride and Prejudice',
            'writer' => 'Jane Austen',
            'cover_image' => 'https://example.com/cover30.jpg',
            'point' => 17,
            'tag' => ['classic', 'romance'],
        ]);

        // Add more data as needed
    }
}