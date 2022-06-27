<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;
    protected $table = 'menu';
    protected $primaryKey = 'id';
    protected $fillable = ['menu_manager', 'deskripsi', 'harga_manager', 'ketersediaan'];
}
