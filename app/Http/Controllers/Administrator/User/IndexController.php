<?php

namespace App\Http\Controllers\Administrator\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\creatRequest;
use App\Models\About;
use App\Models\Agent;
use App\Models\BuildingType;
use App\Models\BuyRent;
use App\Models\City;
use App\Models\Contact;
use App\Models\File;
use App\Models\Home;
use App\Models\OurServise;
use App\Models\Post;
use App\Models\Region;
use App\Models\Repair;
use App\Models\Street;
use App\Models\Type;
use App\Models\User;
use App\Models\Village;
use function view;


class IndexController extends BaseController
{
    public function __invoke()
    {
        $users = User::all();
        $admin_users = $users->where('role','admin');
        $agents = Agent::all();
        $posts = Post::all();
        $buildingTypes = BuildingType::all();
        $buyRents = BuyRent::all();
        $citys = City::all();
        $villages = Village::all();
        $regions = Region::all();
        $streets = Street::all();
        $types = Type::all();
        $homes = Home::all();
        $files = File::all();
        $contacts = Contact::all();
        $abouts = About::all();
        $ourServises = OurServise::all();
        $repairs = Repair::all();

        return view('administrator.user.index', compact('users', 'ourServises', 'repairs', 'abouts', 'contacts', 'admin_users', 'posts', 'files', 'agents', 'homes', 'buildingTypes', 'buyRents', 'citys', 'villages', 'regions', 'streets', 'types'));

    }
//
}

