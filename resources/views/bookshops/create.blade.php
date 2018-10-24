@extends('layouts.app')

@section('content')

<style>
        body{
            text-align: left;
        }    
</style>


    <div class="container">

        <form action="{{ action('BookShopController@store') }}" method="post">
        {{--<form action="/books" method="post">--}}
            @csrf

            <div class="form-group">
                <label>Title</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Latitude</label>
                <input type="text" name="lat" class="form-control">
            </div>
            <div class="form-group">
                <label>Longitude</label>
                <input type="text" name="long" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection