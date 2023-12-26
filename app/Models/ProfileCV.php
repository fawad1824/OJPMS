<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileCV extends Model
{
    use HasFactory;
    protected $table = "profilecv";
    protected $fillable = [
        'firstname',
        'middlename',
        'surename',
        'dob',
        'gender',
        'martial',
        'city',
        'state',
        'country',
        'phone',
        'email',
        'website',
        'address',
        'graduation',
        'university',
        'degree',
        'level',
        'course',
        'info',
        'company',
        'position',
        'locationc',
        'from',
        'to',
        'infocompany',
        'skills',
        'userid'
    ];
}
