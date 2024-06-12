<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masukan extends Model
{
    use HasFactory;

    protected $table = 'masukans';
    
    protected $fillable = [
        'nama_lengkap',
        'email',
        'telepon',
        'masukan',
        'rating',
    ];

}
