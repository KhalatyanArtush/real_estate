@extends('layouts.main')

@section('content')
    <div class="" style="margin-top: 150px;">

        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif


        <h2 class="text-center">Laravel 9 Multiple File Upload With Validation - Tutsmake</h2>


        <div class="text-center">

            <form name="save-multiple-files" method="POST"  action="{{ url('save-multiple-files') }}" accept-charset="utf-8" enctype="multipart/form-data">

                @csrf

                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="file" name="video" placeholder="Choose files" multiple >
                        </div>
                        @error('files')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                    </div>
                </div>
            </form>

        </div>


    </div>
@endsection
