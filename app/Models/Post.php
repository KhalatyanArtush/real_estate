<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use Filterable;

    protected $guarded = [];


    public function files()
    {
        return $this->hasMany(File::class);
    }

    public function video()
    {
        return $this->hasMany(Video::class);
    }

    public function userPost()
    {
        return $this->hasMany(UserPost::class);
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function repair()
    {
        return $this->belongsTo(Repair::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function village()
    {
        return $this->belongsTo(Village::class);
    }

    public function street()
    {
        return $this->belongsTo(Street::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function buy_rent()
    {
        return $this->belongsTo(BuyRent::class);
    }

    public function building_type()
    {
        return $this->belongsTo(BuildingType::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

//    public function users(){
//        return $this->belongsToMany(User::class,'user_posts','post_id','user_id');
//
//    }

}
