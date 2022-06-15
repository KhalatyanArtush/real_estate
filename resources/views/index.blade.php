@extends('layouts.main')

@section('title')
    HOME
@endsection
@section('content')
    <div class="indexImage" style=" padding: 10px">
        @foreach($homes as $home)

            <div class="HomeImg">
                <img src="{{ 'img/'.$home->img}}" lazy="loaded">
                <span class="homeText"> {{ $home->text}}</span>
            </div>

        @endforeach
    </div>
@endsection

