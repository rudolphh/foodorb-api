<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = ['restaurent_name','rating', 'description', 'name', 'image_url', 'cost'];
}


