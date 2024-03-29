<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
class BookController extends Controller
{
  public function index()
  {
      return Book::all();
  }

  public function show(Book $book)
  {
      return $book;
  }

  public function store(Request $request)
  {
      $book = Book::create($request->all());
      return response()->json($book,201);
  }

  public function update(Request $request, Book $book)
  {
      $book->update($request->all());

      return response()->json($book, 200);
  }

  public function delete(Request $request, Book $book)
  {

      $book->delete();

      return response()->json(null,204);
  }
}
