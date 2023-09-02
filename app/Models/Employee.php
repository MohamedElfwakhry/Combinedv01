<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'whatsapp',
        'address',
        'en_job_type',
        'ar_job_type',
        'qr_code',
        'type',
    ];
    protected $appends = ['name','job_type'];

    public function getNameAttribute()
    {
        if (LaravelLocalization::getCurrentLocale() == "ar") {
            return $this->ar_name;
        } else {
            return $this->en_name;
        }
    }
    public function getJobTypeAttribute()
    {
        if (LaravelLocalization::getCurrentLocale() == "ar") {
            return $this->ar_job_type;
        } else {
            return $this->en_job_type;
        }
    }
}
