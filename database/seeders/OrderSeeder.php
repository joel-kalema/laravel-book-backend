<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Order;
use App\Models\User;
use App\Models\Book;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $users = User::all();
        $books = Book::all();

        foreach ($users as $user) {
            foreach ($books as $book) {
                Order::factory()->create([
                    'user_id' => $user->id,
                    'book_id' => $book->id,
                ]);
            }
        }
    }
}
