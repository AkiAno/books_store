<?php

namespace App\Http\Controllers;

use App\Book;
use App\Genre;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('index');
//        $this->middleware('auth')->only(['create', 'store']);
    }


    public function index(){
        $books = Book::limit(100)->get();
        $genres = Genre::all();
        //dd($genres);
        return view('books/index', [
            'books' => $books,
            'genres' => $genres,
        ]);
    }

    public function create(){
        return view('books/create');
    }
    
    public function delete($id){
            $book = Book::findOrFail($id);
            $book->delete();
    
        return redirect(action('BookController@index'));
    }

    public function store(Request $request, $id = null){
        // 1st approach
        if($request->id){
            $book = Book::find($id);
            $book->title = $request->input('title');
            $book->authors = $request->input('authors');
            $book->image = $request->input('image');
        } else{
            $book = Book::create($request->all());
        }
        // 2nd approach
//        $book = new Book();
//        $book->title = $request->input('title');
//
//        $book->save();

        // 3rd approach
//        $book = new Book()
//        $book->fill($request->all());;;
          $book->save();
        return redirect(action('BookController@index'));
    }

    public function edit($id){
        $book = Book::find($id);
        return view('books/edit', compact(['book']));
    }

    
}
