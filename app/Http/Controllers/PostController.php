<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

use App\Http\Requests\creatRequest;


class PostController extends Controller
{

public function index(){
    $posts = Post::all();

    return view('post.index',compact('posts'));
}

public function create(){
    return view('post.create');
}

public function store(){
    $data = request()->validate([
        'key'=>'string',
        'title'=>'string',
        'agent'=>'string',
        'sum'=>'integer',
        'buy_rent'=>'string',
        'country'=>'string',
        'region'=>'string',
        'type'=>'string',
        'building_type'=>'string',
        'floor'=>'integer',
        'room'=>'integer',
        'swimming'=>'string',
        'informations'=>'string',
        'lat'=>'string',
        'long'=>'string',

    ]);
    Post::create($data);
    return redirect()->route('post.index');
}


public function show(Post $post){
    return view('post.show',compact('post'));
}


public function edit(Post $post){
    return view('post.edit',compact('post'));
}

public function update(Post $post){
     $data= request()->validate([
        'key'=>'string',
        'title'=>'string',
        'agent'=>'string',
        'sum'=>'integer',
        'buy_rent'=>'string',
        'country'=>'string',
        'region'=>'string',
        'type'=>'string',
        'building_type'=>'string',
        'floor'=>'integer',
        'room'=>'integer',
        'swimming'=>'string',
        'informations'=>'string',
        'lat'=>'string',
        'long'=>'string',
    ]);
    $post->update($data);
    return redirect()->route('post.edit',$post->id);

}

public function destroy(Post $post){
    $post->delete();
    return redirect()->route('post.index');
}

}
