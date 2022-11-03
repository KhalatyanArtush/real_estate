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
<div>
    <div class="form-add">

    <form action="{{route('administrator.user.store')}}" method="post">
            @csrf



                <div class="row mb-3">

                    <label for="name" class="col-sm-2 col-form-label">{{ __('անուն') }}</label>

                    <div class="col-sm-10">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

            </div>
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">{{ __('էլ. հասցե') }}</label>

                    <div class="col-sm-10">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

            </div>


                <div class="row mb-3">
                    <label for="password" class="col-sm-2 col-form-label">{{ __('գաղտնաբառ') }}</label>

                    <div class="col-sm-10">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

            </div>

                <div class="row mb-3">
                    <label for="password-confirm" class="col-sm-2 col-form-label">{{ __('կրկնել գաղտնաբառը') }}</label>

                    <div class="col-sm-10">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                    <div class="row mb-3">
                        <label for="role" class="col-sm-2 col-form-label">{{ __('դեր') }}</label>

                        <div class="col-sm-10">
                            <input id="role" type="text" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" required autocomplete="role" autofocus>

                            @error('role')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                </div>
        <div class="row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary"> գրանցել</button>
            </div>
        </div>

        </form>
    </div>
@endsection

