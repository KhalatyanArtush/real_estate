<?php

namespace App\Http\Controllers\Admin\Village;

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

class IndexController extends BaseController
{
    public function __invoke()
    {
        $agents = Agent::all();
        $buildingTypes = BuildingType::all();
        $posts = Post::all();
        $buyRents = BuyRent::all();
        $districts = District::all();
        $types = Type::all();
        $homes = Home::all();
        $streets = Street::all();
        $citys = City::all();
        $regions = Region::all();
        $villages = Village::all();
        $contacts = Contact::all();
        $abouts = About::all();
        $ourServises = OurServise::all();
        $repairs = Repair::all();

        return view('admin.village.index ', compact('villages', 'repairs', 'ourServises', 'abouts', 'contacts', 'types','streets','regions' ,'buyRents', 'agents','homes', 'buildingTypes', 'posts', 'citys', 'districts', 'regions'));
    }
}

