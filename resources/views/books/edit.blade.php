@extends('layouts.app')

@section('content')
    <div class="container">

        <form action="{{ action('BookController@store',[$book->id]) }}" method="post">
        {{--<form action="/books" method="post">--}}
            @csrf

            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="{{$book->title}}">
            </div>
            <div class="form-group">
                <label>Authors</label>
                <input type="text" name="authors" class="form-control" value="{{$book->authors}}">
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="text" name="image" class="form-control" value="{{$book->image}}">
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="submit">
            <a href="{{action('BookController@delete', [$book->id])}}"><button type="button" class="btn btn-danger" name="delete" value="delete">delete</button></a>
        </form>

    </div>
@endsection