<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobsAcive extends Model
{
    use HasFactory;
    protected $table = "jobs";
    protected $fillable = [
        'id',
        'title',
        'description',
        'skills',
        'education',
        'location',
        'vacancy',
        'jobtype',
        'salary',
        'date',
        'applicationdate',
        'status',
        'companyid',
        'userid',
        'experience'
    ];
}
