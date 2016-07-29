<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function SubCategories(){
        return $this->hasMany('Category','parentID');
    }
}
