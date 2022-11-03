@extends('layouts.main')

@section('content')
    <form action="{{route('admin.homeSlider.update', $homeSlider->id)}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('patch')
        <div class="formCreat" style="margin-top: 100px">
            <label> նկար
                <div style="    width: 200px;padding: 10px;">

                    <img src="{{ asset ('HomeSlider/images/'.$homeSlider->image_path)}}" class="img-fluid" alt="">
                </div>

                <input type="file" name="img">
            </label>
        </div>
        <div class="formCreat">
            <label> վերնագիր
                <input type="text" name="text" value="{{ $homeSlider->text }}">
            </label>
        </div>

            <label>
                <input type="submit" name="creatSubmit" >
            </label>
        </div>

    </form>


    <a href="{{ route('admin.home.index') }}">Back</a>
@endsection

