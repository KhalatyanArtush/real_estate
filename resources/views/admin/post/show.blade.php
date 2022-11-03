@extends('layouts.main')

@section('content')
    <div class="form-add">

        <form action="{{ route('admin.post.delete',$post->id) }}" method="post">
            @csrf
            @method('delete')
            <article class="entry">

                <div class="entry-img">
                    <img src="{{asset('img/'.$post->img)}}" alt="" class="img-fluid">
                </div>

                <h2 class="entry-title">
                    {{ $post->title}}
                </h2>

                <div class="entry-meta">
                    <ul>
                        <li class="d-flex align-items-center"> {{ $post->key}}</li>
                        <li class="d-flex align-items-center"> {{ $post->agent['name']  }}</li>
                        <li class="d-flex align-items-center">@if($post->region_id){{ $post->region['title']  }}
                            /@endif
                            @if($post->city_id){{ $post->city['title'] }} @elseif($post->village_id) {{ $post->village['title']}} @endif
                            @if($post->district_id)/{{ $post->district['title']   }}@endif
                            @if($post->street_id)  /{{ $post->street['title']   }} @endif</li>
                        @if($post->type_id)
                            <li class="d-flex align-items-center">{{ $post->type['title']  }}
                            </li>@endif
                        @if($post->building_type_id)
                            <li class="d-flex align-items-center">{{ $post->building_type['title']  }}
                            </li>@endif
                        @if($post->floor)
                            <li class="d-flex align-items-center">{{ $post->floor  }}-րդ
                                հարկ
                            </li>
                        @endif
                        <li class="d-flex align-items-center">@if($post->sum){{ $post->sum  }}
                            դր @else գինը պայմանագրային @endif
                        </li>
                        @if($post->buy_rent_id)
                            <li class="d-flex align-items-center">{{ $post->buy_rent['title']  }}
                            </li> @endif
                        @if($post->room)
                            <li class="d-flex align-items-center">{{ $post->room  }} սենյակ
                            </li>
                        @endif

                        {{--                                               <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>--}}
                        {{--                                               <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>--}}
                    </ul>


                    <p class="posts-text">
                        {{ $post->informations  }}
                    </p>
                    @foreach($post->video as $video)
                        <input name="video_id" type="hidden" value="{{$video->id}}">

                        <div>
                            <video style="display: inline-block; width: 250px; padding-bottom: 20px; padding-top: 20px"  autoplay muted controls>
                                <source src="{{asset('Post/video/'.$video->name)}}"
                                        type="video/mp4">
                            </video>
                            <button type="submit" class="btn btn-outline-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-trash" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                    <path fill-rule="evenodd"
                                          d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                </svg>
                                {{ __('buttons.Delete' )}}
                            </button>
                        </div>
                    @endforeach
                    @foreach($post->files as $file)

                        <div style="display: inline-block; width: 250px">
                            <div style="width: 14rem; padding-bottom: 20px; padding-top: 20px">
                                <label class="form-label " for="customFile"> </label>
                                <img src="{{asset('Post/img/'.$file->name)}}" alt="" class="img-fluid">
                                <input name="image_id" type="hidden" value="{{$file->id}}">
                            </div>
                        </div>
                @endforeach
            </article><!-- End blog entry -->
            <button type="submit" class="btn btn-outline-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash"
                     viewBox="0 0 16 16">
                    <path
                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                    <path fill-rule="evenodd"
                          d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                </svg>
                {{__('buttons.Delete')}}
            </button>
            <button class="btn btn-primary"><a id="back-from-page"
                                               href="{{ route('admin.post.edit',$post->id) }}">{{__('buttons.Edit')}}</a>
            </button>


            <button class="btn btn-primary"><a id="back-from-page"
                                               href="{{ route('admin.post.index') }}">{{__('buttons.Back')}}</a>
            </button>

            {{--            <a href="{{ route('post.delete',$post->id) }}">Delete</a>--}}
        </form>
    </div>

@endsection
