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
        'DESKRIPSI',
        'KONTEN',
        'TANGGAL_PUBLIKASI',
        'STATUS_BERITA',
        'GAMBAR',
        'USER_ID',
        'CATEGORY_ID',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'CATEGORY_ID');
    }

    public function komentar()
    {
        return $this->hasMany(Komentar::class, 'NEWS_ID', 'NEWS_ID');
    }
}
