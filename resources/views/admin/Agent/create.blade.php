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
        <form action="{{route('admin.agent.store')}}" method="post" enctype="multipart/form-data" style="margin: 150px;">
            @csrf
            <div class="formCreat">
                <label> նկար
                    <input type="file" name="img">
                </label>
            </div>
            <div class="formCreat">
                <label> տեքստ
                    <input type="text" name="name">
                </label>
            </div>
            <div class="formCreat">
                <label> profesia
                    <input type="text" name="profession">
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

