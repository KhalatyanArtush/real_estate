@extends('layouts.main')

@section('content')
    <form action="{{route('admin.agent.update', $agent->id)}}" method="post" enctype="multipart/form-data" style="margin-top: 150px">
        @csrf
        @method('patch')
        <div class="formCreat">
            <label> անուն
                <input type="text" name="name" value="{{ $agent->name }}">
            </label>
        </div>
        <div class="formCreat">
            <label> պաշտոն
                <input type="text" name="profession" value="{{ $agent->profession }}">
            </label>
        </div>
        <div class="formCreat">
            <label> twitter
                <input type="text" name="twitter" value="{{ $agent->twitter }}">
            </label>
        </div>
        <div class="formCreat">
            <label> facebook
                <input type="text" name="facebook" value="{{ $agent->facebook }}">
            </label>
        </div>
        <div class="formCreat">
            <label> instagram
                <input type="text" name="instagram" value="{{ $agent->instagram }}">
            </label>
        </div>

        <div class="formCreat">
            <label> նկար
                <div style="    width: 200px;padding: 10px;">

                    <img src="{{ asset ('Agent/images/'.$agent->image_path)}}" class="img-fluid" alt="">
                </div>

                <input type="file" name="img">
            </label>

        </div>
        <div class="formCreat">

        <label>
            <input type="submit" name="creatSubmit">

        </label>
        </div>

    </form>



    <a href="{{ route('admin.agent.index') }}">Back</a>
@endsection

