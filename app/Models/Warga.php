<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'alamat', 'no_telp', 'email', 'id_rt'];
    protected $table = 'wargas';
    public $timestamps = false;
}