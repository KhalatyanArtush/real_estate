@extends('layouts.main')

@section('content')
    <div id="creatDiv">

        @if($errors->any())
            <div id="alertMassege">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error  }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
<div>
        <form action="{{route('admin.user.store')}}" method="post">
            @csrf
            <div class="formCreat">
                <label> անուն
                    <input type="text" name="name">
                </label>
            </div>
            <div class="formCreat">
                <label> էլ. հասցե
                    <input type="email" name="email">
                </label>
            </div>


            <div class="formCreat">
                <label> գաղտնաբառ
                    <input id="password" type="password" class="form-control " name="password" required="" autocomplete="new-password" aria-autocomplete="list">
                </label>
            </div>
            <div class="formCreat">
                <label> կրկնել գաղտնաբառը
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required="" autocomplete="new-password">                </label>
            </div>

            <div class="formCreat">
                <label> տիպ
                    <input type="text" name="role">
            </div>

            <button type="submit" >
                գրանցել
            </button>
        </form>
    </div>
@endsection

