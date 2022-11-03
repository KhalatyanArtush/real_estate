@extends('layouts.main')

@section('content')
    <div class="form-add">

        <form action="{{ route('admin.agent.update',$agent->id) }}" enctype="multipart/form-data" method="post">
            @csrf
            @method('patch')
            <article class="entry">
                <div style="    width: 200px;padding: 10px;">

                    <img src="{{ asset ('Agent/images/'.$agent->image_path)}}" class="img-fluid" alt="">
                    <input type="file" name="img">
                </div>
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <div class="row mb-3">
                            <label for="staticEmail" class="col-sm-2 col-form-label">{{__('titles.name')}}</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="name"
                                       value="{{ $agent->name }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="staticEmail" class="col-sm-2 col-form-label">{{__('titles.profession')}}</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="profession"
                                       value="{{ $agent->profession }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="staticEmail" class="col-sm-2 col-form-label">{{__('titles.twitter')}}</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="twitter"
                                       value="{{ $agent->twitter }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="staticEmail" class="col-sm-2 col-form-label">{{__('titles.facebook')}}</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="facebook"
                                       value="{{ $agent->facebook }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="staticEmail" class="col-sm-2 col-form-label">instagram</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="instagram"
                                       value="{{ $agent->instagram }}">
                            </div>
                        </div>
                    </div>

                </div>

            </article><!-- End blog entry -->
            <button type="submit" class="btn btn-primary" style="width: 90px;">
                Edit
            </button>
        </form>
        <br>
        @if(isset(auth()->user()->role))
            @if( auth()->user()->role === 'administrator')


        <form action="{{ route('admin.agent.delete',$agent->id) }}" method="post"
              style="padding-bottom: 10px;padding-top: 10px">
            @csrf
            @method('delete')

            <input type="hidden" name="title" value="{{ $agent->id }}">
            <button type="submit" class="btn btn-outline-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash"
                     viewBox="0 0 16 16">
                    <path
                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                    <path fill-rule="evenodd"
                          d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                </svg>
                Delete
            </button>

        </form>

            @endif
        @endif
        <button class="btn btn-primary" style="width: 90px;"><a id="back-from-page"
                                                                href="{{ route('admin.agent.index') }}">Back</a>
        </button>

    </div>



@endsection

