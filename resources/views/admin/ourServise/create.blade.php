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
        <div class="form-add">
            <form action="{{ route('admin.ourServise.store') }}" method="post">
                @csrf
                <div class="row mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">անվանում</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="title">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </div>
            </form>
            <button  class="btn btn-primary" style="width: 90px;" > <a id="back-from-page" href="{{ route('admin.ourServise.index') }}">Back</a></button>

        </div>
@endsection

