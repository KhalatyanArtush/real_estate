@extends('layouts.admin')

@section('content')
    <div class="indexImage" style=" padding: 10px">
@foreach($homes as $home)
<a href="{{ route('admin.home.edit',$home->id) }}">
            <div class="indexImage" style=" padding: 10px">

                    <div class="HomeImg">
                        <img src="{{ asset ('img/'.$home->img)}}" lazy="loaded">
                        <span class="homeText"> {{ $home->text}}</span>
                    </div>

            </div>
</a>
        @endforeach


    </div>
@endsection

