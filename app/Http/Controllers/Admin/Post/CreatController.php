<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FileRequest;
use App\Models\About;
use App\Models\Agent;
use App\Models\BuildingType;
use App\Models\BuyRent;
use App\Models\City;
use App\Models\Contact;
use App\Models\District;
use App\Models\OurServise;
use App\Models\Post;
use App\Models\Region;
use App\Models\Repair;
use App\Models\Street;
use App\Models\Type;
use App\Models\Village;
use Illuminate\Http\Request;

//use App\Models\Posts;

use App\Http\Requests\creatRequest;
use Illuminate\Support\Facades\DB;


class CreatController extends Controller
{
    public function __invoke()
    {
        $post =  DB::table('posts')->latest('id')->first();
        $agents = Agent::all();
        $buildingTypes = BuildingType::all();
        $buyRents = BuyRent::all();
        $citys = City::all();
        $districts = District::all();
        $villages = Village::all();
        $regions = Region::all();
        $streets = Street::all();
        $types = Type::all();
        $contacts = Contact::all();
        $abouts = About::all();
        $ourServises = OurServise::all();
        $repairs = Repair::all();

        return view('admin.post.create',compact( 'post', 'repairs', 'ourServises', 'abouts', 'contacts', 'agents', 'buildingTypes', 'buyRents', 'citys', 'districts', 'villages', 'regions', 'streets', 'types'));
    }
}

