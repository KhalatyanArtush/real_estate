@extends('layouts.main')

@section('content')



       <div> <img src="{{ asset ('img/'.$agent->img)}}" lazy="loaded"> {{$agent->text}}</div>

       <a href="{{ route('admin.agent.edit',$agent->id) }}">Edit</a>
       <form action="{{ route('admin.agent.delete',$agent->id) }}" method="post">
           @csrf
           @method('delete')
           <button type="submit" >Delete</button>
{{--            <a href="{{ route('post.delete',$post->id) }}">Delete</a>--}}
       </form>
    <a href="{{ route('admin.agent.index') }}">Back</a>
@endsection
