@extends('layouts.main')

@section('content')
    <div id="creatDiv" style="margin-top: 100px;">

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
            <form action="{{route('admin.home.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="formCreat">
                    <label> նկար
                        <input type="file[]" name="img">
                    </label>
                </div>
                <div class="formCreat">
                    <label> տեքստ
                        <input type="text" name="text">
                    </label>
                </div>

                <div class="formCreat">
                    <label>
                        <input type="submit" name="creatSubmit">
                    </label>
                </div>

            </form>
        </div>
@endsection

