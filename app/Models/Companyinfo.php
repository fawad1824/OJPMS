<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companyinfo extends Model
{
    use HasFactory;
    protected $table = 'companyinfos';
    protected $fillable = [
        'date',
        'pay',
        'vacancy',
        'desc',
        'companyid',
    ];
}
