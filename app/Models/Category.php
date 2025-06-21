<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'CATEGORY_ID';

    public $timestamps = false;

    protected $fillable = [
        'NAMA_KATEGORI',
        'DESKRIPSI',
    ];

    public function news()
    {
        return $this->hasMany(News::class, 'CATEGORY_ID');
    }
}