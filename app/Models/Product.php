<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $appends = ['title'];
    public function getTitleAttribute()
    {
        if (\app()->getLocale() == "ar") {
            return $this->ar_title;
        } else {
            return $this->en_title;
        }
    }
    public function sizes(){
        return $this->belongsTo(ProductSize::class,'size_id');
    }
}
