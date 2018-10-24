@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Books</h1>

        <div id="books">

            @foreach($books as $book)
                <div class="book">
                    <img src="{{ $book->image }}" alt="title"/>
                    <h2>{{ $book->title }}</h2>
                    <h3>{{ $book->authors }}</h3>
                        @if ($book->genre)
                        <h3>{{ $book->genre->name }}</h3>
                        @endif
                    
                </div>
            @endforeach
        </div>
    </div>
@endsection