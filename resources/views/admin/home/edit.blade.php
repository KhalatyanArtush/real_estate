@extends('layouts.main')

@section('content')
    <form action="{{route('admin.home.update', $home->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="formCreat">
            <label> կոդ
                <input type="text" name="img" value="{{ $home->img }}">
            </label>
        </div>
        <div class="formCreat">
            <label> վերնագիր
                <input type="text" name="text" value="{{ $home->text }}">
            </label>
        </div>

            <label>
                <input type="submit" name="creatSubmit" >
            </label>
        </div>

    </form>


    <a href="{{ route('admin.home.index') }}">Back</a>
@endsection

