@extends('layouts.main')

@section('content')
    <form action="{{route('admin.post.update', $post->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="formCreat">
            <label> կոդ
                <input type="text" name="key" value="{{ $post->key }}">
            </label>
        </div>
        <div class="formCreat">
            <label> վերնագիր
                <input type="text" name="title" value="{{ $post->title }}">
            </label>
        </div>
        <div class="formCreat">
            <label> գործակալ
                <input type="text" name="agent" value="{{ $post->agent }}">
            </label>
        </div>
        <div class="formCreat">
            <label> գումար
                <input type="text" name="sum" value="{{ $post->sum }}">
            </label>
        </div>
        <div class="formCreat">
            <label> գործողության տեսակ
                <input type="text" name="buy_rent" value="{{ $post->buy_rent }}">
            </label>
        </div>

        <div class="formCreat">
            <label> քաղաք
                <input type="text" name="country" value="{{ $post->country }}">
            </label>
        </div>
        <div class="formCreat">
            <label> փողոց
                <input type="text" name="region" value="{{ $post->region }}">
            </label>
        </div>
        <div class="formCreat">
            <label> շինություն
                <input type="text" name="type" value="{{ $post->type }}">
            </label>
        </div>
        <div class="formCreat">
            <label> շինությոան տեսակ
                <input type="text" name="building_type" value="{{ $post->building_type }}">
            </label>
        </div>
        <div class="formCreat">
            <label> հարկ
                <input type="text" name="floor" value="{{ $post->floor }}">
            </label>
        </div>
        <div class="formCreat">
            <label> սենյակ
                <input type="text" name="room" value="{{ $post->room }}">
            </label>
        </div>
        <div class="formCreat">
            <label> լողավազան
                <input type="text" name="swimming" value="{{ $post->swimming }}">
            </label>
        </div>
        <div class="formCreat">
            <label> մանրամասն
                <textarea rows="10" cols="70" name="informations"> {{ $post->informations }}</textarea>
            </label>
        </div>
        <div class="formCreat">
            <label> lat
                <input type="text" name="lat" value="{{ $post->lat }}">
            </label>
        </div>'
        <div class="formCreat">
            <label> long
                <input type="text" name="long" value="{{ $post->long }}">
            </label>
        </div>
        <div class="formCreat">
            <label>
                <input type="submit" name="creatSubmit" >
            </label>
        </div>

    </form>


    <a href="{{ route('admin.post.index') }}">Back</a>
@endsection

