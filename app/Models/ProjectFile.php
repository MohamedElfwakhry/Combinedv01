<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectFile extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'rev',
        'file',
        'project_id',
        'category_id',
    ];

    public function getFileAttribute($file)
    {
        if (!empty($file)) {
            return asset('uploads/projects/files') . '/' . $file;
        }
        return null;

    }

    public function setFileAttribute($file)
    {
        if (is_file($file)) {
            $imageFields = upload($file, 'projects/files');
            $this->attributes['file'] = $imageFields;
        }
    }

    public function Projects(){
        return $this->belongsTo(Project::class,'project_id');
    }
    public function ProjectCategories(){
        return $this->belongsTo(ProjectCategory::class,'category_id');
    }
}
