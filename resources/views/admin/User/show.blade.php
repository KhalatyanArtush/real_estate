@extends('layouts.main')

@section('content')

       <div>{{ $home->id }}. {{$home->text}}</div>

       <a href="{{ route('admin.home.edit',$home->id) }}">Edit</a>
       <form action="{{ route('admin.home.delete',$home->id) }}" method="post">
           @csrf
           @method('delete')
           <button type="submit" >Delete</button>
{{--            <a href="{{ route('post.delete',$post->id) }}">Delete</a>--}}
       </form>
    <a href="{{ route('admin.home.index') }}">Back</a>
@endsection
