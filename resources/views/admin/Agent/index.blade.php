@extends('layouts.admin')

@section('content')
    <div class="indexImage" style=" padding: 10px">
@foreach($agents as $agent)
<a href="{{ route('admin.agent.show',$agent->id) }}">
            <div class="indexImage" style=" padding: 10px">

                    <div class="HomeImg">
                        <img src="{{ asset ('img/'.$agent->img)}}" lazy="loaded">
                        <span class="homeText"> {{ $agent->text}}</span>
                    </div>

            </div>
</a>
        @endforeach


    </div>
@endsection

