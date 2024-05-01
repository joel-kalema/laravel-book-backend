<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{
    // Fetch all books
    public function index()
    {
        $books = Book::all();
        return response()->json($books);
    }

    // Create a new book
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'writer' => 'required|string',
            'cover_image' => 'required|url',
            'point' => 'required|numeric',
            'tag' => 'required|array',
        ]);

        $book = Book::create([
            'title' => $request->title,
            'writer' => $request->writer,
            'cover_image' => $request->cover_image,
            'point' => $request->point,
            'tag' => $request->tag,
        ]);

        return response()->json($book, 201);
    }

    // Fetch a single book by ID
    public function show($id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }
        return response()->json($book);
    }

    // Update a book by ID
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        $request->validate([
            'title' => 'required|string',
            'writer' => 'required|string',
            'cover_image' => 'required|url',
            'point' => 'required|numeric',
            'tag' => 'required|array',
        ]);

        $book->update([
            'title' => $request->title,
            'writer' => $request->writer,
            'cover_image' => $request->cover_image,
            'point' => $request->point,
            'tag' => $request->tag,
        ]);

        return response()->json($book);
    }

    // Delete a book by ID
    public function destroy($id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        $book->delete();

        return response()->json(['message' => 'Book deleted successfully']);
    }
}