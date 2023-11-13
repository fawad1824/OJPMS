<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companymain extends Model
{
    use HasFactory;
    protected $table = "companymains";
    protected $fillable = [
        'name',
        'email',
        'website',
        'companyinfo',
        'userid',
        'address',
        'location',
        'country',
        'state',
        'status',
        'city'
    ];
}
