<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('index');
//        $this->middleware('auth')->only(['create', 'store']);
    }


    public function index(){
        $books = Book::limit(100)->get();

        return view('books/index', [
            'books' => $books
        ]);
    }

    public function create(){
        return view('books/create');
    }

    public function store(Request $request){
        // 1st approach
        $book = Book::create($request->all());

        // 2nd approach
//        $book = new Book();
//        $book->title = $request->input('title');
//
//        $book->save();

        // 3rd approach
//        $book = new Book()
//        $book->fill($request->all());;;
//        $book->save();


        return redirect(aciton('BookContoller@index'));
    }

}
