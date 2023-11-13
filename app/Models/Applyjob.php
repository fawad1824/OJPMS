<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applyjob extends Model
{
    use HasFactory;
    protected $table = "applyjobs";
    protected $fillable = [
        'job_id',
        'user_id',
        'status'
    ];
}
