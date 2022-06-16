@extends('layouts.admin')

@section('content')
    <div class="indexImage" style=" padding: 10px">
@foreach($users as $user)
<a href="{{ route('admin.user.edit',$user->id) }}">
            <div class="indexImage" style=" padding: 10px">

                    <div class="HomeImg">
                        <p class="homeText"> {{ $user->name}}</p>
                        <p class="homeText"> {{ $user->email}}</p>
                        <p class="homeText"> {{ $user->role}}</p>
                    </div>

            </div>
</a>
        @endforeach


    </div>
@endsection

