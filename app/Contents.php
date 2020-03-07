<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contents extends Model
{
    use SoftDeletes;
    protected $table = 'contents';
    protected $primaryKey = 'id';
    protected $softDelete = true;

    public function subcategory()
    {
        return $this->belongsToMany(SubCategory::class, 'con_subcat', 'con_id', 'sub_cat_id');//->withPivot('id', 'donate_name', 'amount_total');
    }
}
