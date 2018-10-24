@extends('layouts.app')

@section('content')

    <h1>Bookshops</h1>
    <div class="bookshops">
    @foreach ($bookshops as $bookshop)
        <div class="bookshop">
            <h4>{{$bookshop->name}}</h4> 
            <a href="{{action('BookShopController@edit', [$bookshop->id])}}"><button class="btn btn-primary">edit</button></a>
            <a href="{{action('BookShopController@delete', [$bookshop->id])}}"><button class="btn btn-danger">delete</button></a>
        </div>
    @endforeach
    </div>
@endsection