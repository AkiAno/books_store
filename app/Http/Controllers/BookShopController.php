<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Bookshop;

class BookShopController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth')->except('index');
//        $this->middleware('auth')->only(['create', 'store']);
    }


    public function index(){
        $bookshops = Bookshop::all();
        //dd($genres);
        return view('bookshops/index', [
            'bookshops' => $bookshops
        ]);
    }

    public function create(){
        return view('bookshops/create');
    }
    
    public function delete($id){
            $bookshop = Bookshop::findOrFail($id);
            $bookshop->delete();
            return redirect(action('BookShopController@index'));
    }

    public function store(Request $request, $id = null){
        //return $request->all();
        // 1st approach
        if($request->id){
            $bookshop = Bookshop::find($id);
            $bookshop->name = $request->input('name');
            $bookshop->lat = $request->input('lat');
            $bookshop->long = $request->input('long');
        } else{
            $bookshop = Bookshop::create($request->all());
            //$bookshop = new Bookshop();
        }
        // 2nd approach
//        $book = new Book();
//        $book->title = $request->input('title');
//
//        $book->save();

        // 3rd approach
//        $book = new Book()
//        $book->fill($request->all());;;
           $bookshop->save();
        return redirect(action('BookShopController@index'));
    }

    public function edit($id){
        $bookshop = Bookshop::find($id);
        return view('bookshops/edit', compact(['bookshop']));
    }
}
