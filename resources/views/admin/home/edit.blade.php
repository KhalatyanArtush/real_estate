@extends('layouts.main')

@section('content')
    <form action="{{route('admin.home.update', $home->id)}}" enctype="multipart/form-data" method="post" style="margin-top: 150px">
        @csrf
        @method('patch')

        <div class="formCreat">
            <label> նկար
                <div style="    width: 200px;padding: 10px;">

                    <img src="{{ asset ('Home/images/'.$home->image_path)}}" class="img-fluid" alt="">
                </div>

                <input type="file" name="img">
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

