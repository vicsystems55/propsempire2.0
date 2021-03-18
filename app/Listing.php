<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    //

    protected $guarded = [];

    public function categories()
    {
            return $this->belongsTo('App\Category','category_id', 'id');
    }

    public function types()
    {
            return $this->belongsTo('App\Type', 'type_id', 'id');
    }

    public function subtypes()
    {
            return $this->belongsTo('App\ListingSubType', 'subtype_id', 'id');
    }

    public function images()
    {
            return $this->hasMany('App\ListingImage','listing_id', 'id');
    }
}
