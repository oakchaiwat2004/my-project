<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;
    protected $fillable =[
        'm_name',
        'm_lastname',
        'm_date',
        'status',
    ];

    public $timestamps = false; // ปิดการใช้งาน timestamps
}
