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
        <form action="{{route('admin.home.store')}}" method="post">
            @csrf
            <div class="formCreat">
                <label> նկար
                    <input type="text" name="img">
                </label>
            </div>
            <div class="formCreat">
                <label> տեքստ
                    <input type="text" name="text">
                </label>
            </div>

            <div class="formCreat">
                <label>
                    <input type="submit" name="creatSubmit" >
                </label>
            </div>

        </form>
    </div>
@endsection

