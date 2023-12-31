<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applyjob extends Model
{
    use HasFactory;
    protected $table = "applyjobs";
    protected $fillable = [
        'companyid', 'jobid',    'userid',    'status', 'date',    'desc'
    ];
}
