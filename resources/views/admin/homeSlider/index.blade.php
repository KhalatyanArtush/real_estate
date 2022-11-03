@extends('layouts.admin')

@section('content')
    <div class="indexImage" style=" padding: 10px">
@foreach($homeSliders as $homeSlider)
<a href="{{ route('admin.homeSlider.show',$homeSlider->id) }}">

            <div class="indexImage" style=" padding: 10px">

                    <div class="HomeImg">
                        <img src="{{ asset ('HomeSlider/images/'.$homeSlider->image_path)}}" lazy="loaded">
                        <span class="homeText"> {{ $homeSlider->text}}</span>
                    </div>

            </div>
</a>
        @endforeach


    </div>
@endsection

