<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    protected $guarded = [];

    public function listings()
    {
        return $this->hasMany('App\Listing', 'category_id');
    }

    
}
