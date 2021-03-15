<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //

    protected $guarded = [];

    public function listings()
    {
        return $this->hasMany('App\Listing', 'type_id');
    }
}
