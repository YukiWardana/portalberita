<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'NEWS'; 
    protected $primaryKey = 'NEWS_ID'; 

    public $timestamps = false;

    protected $fillable = [
        'JUDUL',
        'KONTEN',
        'TANGGAL_PUBLIKASI',
        'STATUS_BERITA',
        'GAMBAR',
        'USER_ID',
    ];
}
