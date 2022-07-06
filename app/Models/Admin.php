<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;
    protected $table = 'admins';    // table used
    protected $guarded = [];        // fileable all fields
    public $timestamps = true;      // by default is true
}
