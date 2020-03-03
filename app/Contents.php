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

    
}
