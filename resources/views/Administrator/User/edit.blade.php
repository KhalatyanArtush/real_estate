@extends('layouts.main')

@section('content')
    <div class="form-add">

        <form action="{{route('administrator.user.update', $user->id)}}" enctype="multipart/form-data" method="post" >
            @csrf
            @method('patch')
            <input type="hidden" name="post_id" value="{{ $user->id }}">

            <div class="row mb-3">
                <label for="staticEmail" class="col-sm-2 col-form-label">անուն</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{ $user->name }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="staticEmail" class="col-sm-2 col-form-label">էլ. հասցե</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="email" value="{{ $user->email }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="staticEmail" class="col-sm-2 col-form-label">գաղտնաբառ</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" autocomplete="new-password" aria-autocomplete="list" >
                </div>
            </div>
            <div class="row mb-3">
                <label for="staticEmail" class="col-sm-2 col-form-label">կրկնել գաղտնաբառը</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">խմբագրել</button>
                </div>
            </div>

        </form>
        <form action="{{ route('administrator.user.delete',$user->id) }}" method="post" style="display: contents;">
        @csrf
        @method('delete')
            <button type="submit" class="btn btn-outline-danger" >
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                </svg>
                ջնջել
            </button>

        </form>
        <button  class="btn btn-primary" > <a id="back-from-page" href="{{ route('administrator.user.index') }}">վերադարձ</a></button>
    </div>



@endsection

