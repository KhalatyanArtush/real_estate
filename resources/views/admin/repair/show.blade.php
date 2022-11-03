@extends('layouts.main')

@section('content')



    <div class="form-add">

        <form action="{{ route('admin.repair.delete',$repair->id) }}" method="post" >
            @csrf
            @method('patch')
            <article class="entry">

                <div class="row mb-3">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value="{{ $repair->title }}">
                    </div>
                </div>

            </article><!-- End blog entry -->
            <button type="submit" class="btn btn-primary" style="width: 90px;">
                Edit
            </button>
        </form>
        <form  action="{{ route('admin.repair.update',$repair->id) }}" method="post" style="padding-bottom: 10px;padding-top: 10px">
            @csrf
            @method('delete')

            <input type="hidden" name="title" value="{{ $repair->id }}">
            <button type="submit" class="btn btn-outline-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                </svg>
                Delete
            </button>

        </form>

            <button  class="btn btn-primary" style="width: 90px;" > <a id="back-from-page" href="{{ route('admin.repair.index') }}">Back</a></button>

    </div>


@endsection
