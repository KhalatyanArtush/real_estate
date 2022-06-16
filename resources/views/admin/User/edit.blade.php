@extends('layouts.main')

@section('content')
    <form action="{{route('admin.user.update', $user->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="formCreat">
            <label> կոդ
                <input type="text" name="name" value="{{ $user->name }}">
            </label>
        </div>
        <div class="formCreat">
            <label> վերնագիր
                <input type="email" name="email" value="{{ $user->email }}">
            </label>
        </div>
        <div class="formCreat">
            <label> գաղտնաբառ
                <input  type="password" name="password" autocomplete="new-password" aria-autocomplete="list">
            </label>
        </div>
        <div class="formCreat">
            <label> կրկնել գաղտնաբառը
                <input type="password" name="password_confirmation"  autocomplete="new-password">                </label>
        </div>

        <div class="formCreat">
            <label> վերնագիր
                <input type="text" name="email" value="{{ $user->role }}">
            </label>
        </div>

            <label>
                <input type="submit" name="creatSubmit" >
            </label>
        </div>

    </form>


    <a href="{{ route('admin.user.index') }}">Back</a>
@endsection

