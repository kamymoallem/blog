<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';

    public function sub_category()
    {
        return $this->hasMany(SubCategory::class, 'cat_id', 'id');
    }
}
