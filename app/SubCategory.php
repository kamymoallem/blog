<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = 'sub_categories';
    protected $primaryKey = 'id';

    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id', 'id');
    }
}
