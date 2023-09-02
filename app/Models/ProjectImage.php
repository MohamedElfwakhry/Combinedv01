<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'project_id',
    ];

    public function Projects(){
        return $this->belongsTo(Project::class,'project_id');
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
