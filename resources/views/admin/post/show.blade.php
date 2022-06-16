@extends('layouts.main')

@section('content')

       <div>{{ $post->id }}. {{$post->title}}</div>

       <a href="{{ route('admin.post.edit',$post->id) }}">Edit</a>
       <form action="{{ route('admin.post.delete',$post->id) }}" method="post">
           @csrf
           @method('delete')
           <button type="submit" >Delete</button>
{{--            <a href="{{ route('post.delete',$post->id) }}">Delete</a>--}}
       </form>
    <a href="{{ route('admin.post.index') }}">Back</a>
@endsection
