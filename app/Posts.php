<?php

namespace App;
use App\category;
use App\subcategory;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //
    public function category() {
        return $this->belongsTo(category::class); // don't forget to add your full namespace
    }
}
