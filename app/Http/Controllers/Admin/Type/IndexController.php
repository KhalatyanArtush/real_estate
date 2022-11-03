<?php

namespace App\Http\Controllers\Admin\Type;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Agent;
use App\Models\BuildingType;
use App\Models\BuyRent;
use App\Models\City;
use App\Models\Contact;
use App\Models\District;
use App\Models\Home;
use App\Models\OurServise;
use App\Models\Post;
use App\Models\Region;
use App\Models\Repair;
use App\Models\Street;
use App\Models\Type;
use App\Models\Village;
use Illuminate\Http\Request;


use App\Http\Requests\creatRequest;


class IndexController extends BaseController
{
    public function __invoke()
    {
        $agents = Agent::all();
        $buildingTypes = BuildingType::all();
        $posts = Post::all();
        $buyRents = BuyRent::all();
        $districts = District::all();
        $villages = Village::all();
        $homes = Home::all();
        $streets = Street::all();
        $citys = City::all();
        $regions = Region::all();
        $types = Type::all();
        $contacts = Contact::all();
        $abouts = About::all();
        $ourServises = OurServise::all();
        $repairs = Repair::all();

        return view('admin.type.index ', compact('types', 'repairs', 'ourServises', 'abouts', 'contacts', 'streets','regions' ,'buyRents', 'agents','homes', 'buildingTypes', 'posts', 'citys', 'districts', 'villages', 'regions'));
    }
}

