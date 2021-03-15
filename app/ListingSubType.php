<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListingSubType extends Model
{
    //

    protected $guarded = [];

    public function listings()
    {
        return $this->hasMany('App\Listing', 'subtype_id');
    }
}
