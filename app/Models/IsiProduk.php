<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IsiProduk extends Model
{
    use HasFactory;
    protected $table = 'isiproduk';
    protected $fillable = [
        'judul',
        'isi',
        'produk_slug'
    ];
}
