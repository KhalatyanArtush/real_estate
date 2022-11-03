<?php

namespace App\Http\Controllers;

use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FileRequest;
use App\Http\Requests\Post\FilterRequest;
use App\Models\About;
use App\Models\Contact;
use App\Models\OurServise;
use App\Models\Post;
use App\Models\Repair;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(FilterRequest $request)
    {
        $filterPosts = Post::all();
        $data = $request->validated();
        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
        $posts = Post::filter($filter)->paginate(25);
        $contacts = Contact::all();
        $ourServises = OurServise::all();
        $repairs = Repair::all();

//       $post = Post::paginate(10);

        return redirect()->route('admin.post.index',compact('posts','filterPosts', 'repairs', 'contacts', 'ourServises'));
//        return view('home');
    }
}
