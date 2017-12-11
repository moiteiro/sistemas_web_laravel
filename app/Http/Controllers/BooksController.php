<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Book;

class BooksController extends Controller
{
    public function index() 
    {
      $books = Book::all();
      
      return view('books.index', compact('books'));
    }
  
    public function create() 
    {
      return view('books.create');
    }
  
    public function store() 
    {
      $input = request()->input();
      $book = Book::create($input);
      
      if ($book)
        return redirect('books');
    }
  
    public function edit($id) 
    {
      $book = Book::find($id);
      
      return view('books.edit', compact('book'));
    }
  
    public function update($id)
    {
      $book = Book::find($id);
      $book->fill(request()->input());
      
      if ($book->save())
        return redirect('books');
      
      return view('books.edit', compact('book'));
    }
  
    public function destroy($id)
    {
      $book = Book::find($id);
      
      if ($book)
        $book->delete();
      
      return redirect('books');
    }
}
