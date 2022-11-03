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
            <form action="{{ route('admin.agent.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                    <div class="row mb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label">անուն</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label">պաշտոն</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="profession">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label">twitter link</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="twitter">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label">facebook link</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="facebook">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label">instagram link</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="instagram">
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



            </form>
        </div>
@endsection

