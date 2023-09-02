<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeesInvoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'project_name',
        'invoice_image',
        'price',
        'employee_id',
        'notes',
        'type',
    ];

    public function Employees(){
        return $this->belongsTo(Employee::class,'employee_id');
    }
}
