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
            <form action="{{route('admin.homeSlider.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-add">

                    <div class="row mb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label">տեքստ</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="text">
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

