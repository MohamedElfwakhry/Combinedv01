<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'ar_title',
        'en_title',
        'ar_description',
        'en_description',
        'date',
        'address',
        'notes',
        'area',
        'type',
        'image',
    ];
    protected $appends = ['title','description'];
    public function getTitleAttribute()
    {
        if (\app()->getLocale() == "ar") {
            return $this->ar_title;
        } else {
            return $this->en_title;
        }
    }
    public function getDescriptionAttribute()
    {
        if (\app()->getLocale() == "ar") {
            return $this->ar_description;
        } else {
            return $this->en_description;
        }
    }
    public function getImageAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/projects') . '/' . $image;
        }
        return null;

    }

    public function setImageAttribute($image)
    {
        if (is_file($image)) {
            $imageFields = upload($image, 'projects');
            $this->attributes['image'] = $imageFields;
        }
    }
}
