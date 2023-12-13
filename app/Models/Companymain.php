<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companymain extends Model
{
    use HasFactory;
    protected $table = "company";
    protected $fillable = [
        'name',
        'email',
        'website',
        'companyinfo',
        'address',
        'location',
        'country',
        'state',
        'city',
        'status',
        'date',
        'employe',
        'desc',
        'image',
    ];
}
