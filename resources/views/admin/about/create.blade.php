@extends('layouts.main')

@section('content')
    <div id="creatDiv" >

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
            <form action="{{route('admin.about.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-add">

                    <div class="row mb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label">վերնագիր</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="title">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label">տեքստ</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="text">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label">lat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="lat">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label">long</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="long">
                        </div>
                    </div>

                    <div style="width: 14rem;">
                        <label class="form-label" for="customFile">կցել նկար</label>
                        <input type="file" class="form-control" id="customFile" name="img">
                    </div>

                    <div class="row">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </div>

                </div>

            </form>
        </div>
@endsection

