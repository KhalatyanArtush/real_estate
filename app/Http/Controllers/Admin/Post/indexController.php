<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\About;
use App\Models\Agent;
use App\Models\BuildingType;
use App\Models\BuyRent;
use App\Models\City;
use App\Models\Contact;
use App\Models\District;
use App\Models\File;
use App\Models\Home;
use App\Models\OurServise;
use App\Models\Post;
use App\Models\Region;
use App\Models\Repair;
use App\Models\Street;
use App\Models\Type;
use App\Models\Video;
use App\Models\Village;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(FilterRequest $request)
    {
        $agents = Agent::all();
        $buildingTypes = BuildingType::all();
        $buyRents = BuyRent::all();
        $citys = City::all();
        $districts = District::all();
        $villages = Village::all();
        $regions = Region::all();
        $streets = Street::all();
        $types = Type::all();
        $homes = Home::all();
        $contacts = Contact::all();
        $abouts = About::all();
        $ourServises = OurServise::all();
        $repairs = Repair::all();
        $currencys = Repair::all();

        $data = $request->validated();
        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
        $posts = Post::filter($filter)->orderBy('id', 'desc')->paginate(25);
//       $post = Post::paginate(10);
        $files = File::all();
        $videos = Video::all();

        return view('admin.post.index',compact('posts', 'currencys', 'repairs', 'videos', 'ourServises', 'abouts', 'contacts', 'files', 'agents','homes', 'buildingTypes', 'buyRents', 'citys', 'districts', 'villages', 'regions', 'streets', 'types'));
    }
}

