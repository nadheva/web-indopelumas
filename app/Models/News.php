<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $fillable = [
        'tgl_post',
        'bln_post',
        'kategori',
        'judul',
        'short_news',
        'news'
    ];
}
