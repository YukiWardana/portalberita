<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news'; 
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
}
