<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usermanager extends Model
{
    use HasFactory;
    protected $table = 'usermanager';
    protected $primaryKey = 'id';
    protected $fillable = ['username', 'password'];
}
