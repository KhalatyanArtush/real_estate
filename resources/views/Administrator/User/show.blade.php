@extends('layouts.main')

@section('content')

       <div>{{ $home->id }}. {{$home->text}}</div>

       <a href="{{ route('administrator.home.edit',$home->id) }}">Edit</a>
       <form action="{{ route('administrator.home.delete',$home->id) }}" method="post">
           @csrf
           @method('delete')
           <button type="submit" >Delete</button>
            <a href="{{ route('administrator.delete',$post->id) }}">Delete</a>
       </form>
    <a href="{{ route('administrator.home.index') }}">Back</a>
@endsection
