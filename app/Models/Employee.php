<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public $table = "employee";
    protected $guarded = [];
    protected $fillable = [
        'nama', 'jabatan', 'alamat', 'umur', 'image'
    ];
}
