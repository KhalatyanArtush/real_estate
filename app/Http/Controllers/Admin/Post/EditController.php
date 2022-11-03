<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Agent;
use App\Models\BuildingType;
use App\Models\BuyRent;
use App\Models\City;
use App\Models\Contact;
use App\Models\File;
use App\Models\OurServise;
use App\Models\Post;
use App\Models\Region;
use App\Models\Repair;
use App\Models\Street;
use App\Models\Type;
use App\Models\Video;
use App\Models\Village;

class EditController extends BaseController
{
   public function __invoke(Post $post)
   {
       $agents = Agent::all();
       $buildingTypes = BuildingType::all();
       $buyRents = BuyRent::all();
       $citys = City::all();
       $districts = City::all();
       $villages = Village::all();
       $regions = Region::all();
       $streets = Street::all();
       $types = Type::all();
       $files = File::all();
       $videos = Video::all();
       $contacts = Contact::all();
       $abouts = About::all();
       $ourServises = OurServise::all();
       $repairs = Repair::all();


       return view('admin.post.edit',compact('post', 'repairs', 'videos', 'ourServises', 'abouts', 'contacts', 'files',  'agents', 'buildingTypes', 'buyRents', 'citys', 'districts', 'villages', 'regions', 'streets', 'types'));

   }
}
