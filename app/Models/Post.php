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

    public function users(){
        return $this->belongsToMany(User::class,'user_posts','post_id','user_id');

    }
}
