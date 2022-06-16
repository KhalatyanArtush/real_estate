@extends('layouts.main')

@section('content')
    <form action="{{route('admin.agent.update', $agent->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="formCreat">
            <label> կոդ
                <input type="text" name="img" value="{{ $agent->img }}">
            </label>
        </div>
        <div class="formCreat">
            <label> վերնագիր
                <input type="text" name="text" value="{{ $agent->text }}">
            </label>
        </div>

            <label>
                <input type="submit" name="creatSubmit" >
            </label>
        </div>

    </form>


    <a href="{{ route('admin.agent.index') }}">Back</a>
@endsection

