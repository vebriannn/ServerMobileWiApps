<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = "tbl_news";

    protected $fillable = [
        'user_id',
        'jenis_wisata',
        'title',
        'tag',
        'short_deskripsi',
        'long_deskripsi',
        'location',
        'harga',
        'ranting',
        'url_images',
    ];
}
