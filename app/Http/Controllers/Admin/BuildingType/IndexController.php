<?php

namespace App\Http\Controllers\Admin\BuildingType;

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
        $posts = Post::all();
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
        $buyRents = BuyRent::all();
        $repairs = Repair::all();


        $buildingTypes = BuildingType::all();
        return view('admin.buildingType.index',compact('buildingTypes', 'buyRents', 'repairs', 'ourServises', 'abouts', 'contacts', 'agents','homes', 'buildingTypes', 'posts', 'citys', 'districts', 'villages', 'regions', 'streets', 'types'));

    }
}

