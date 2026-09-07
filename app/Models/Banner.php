<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
        use HasFactory ;
    protected $table = "banners";
    protected $guarded = [];

    public function getIsActiveAttribute($is_active){
        return $is_active ? 'فعال' : 'غیر فعال' ;
    }
}
