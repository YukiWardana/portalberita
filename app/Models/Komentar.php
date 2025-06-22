<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $table = 'COMMENTS';
    protected $primaryKey = 'COMMENT_ID';
    public $timestamps = false;

    protected $fillable = [
        'NEWS_ID',
        'USER_ID',
        'ISI_KOMENTAR',
        'TANGGAL_KOMENTAR',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'USER_ID', 'USER_ID');
    }

    public function berita()
    {
        return $this->belongsTo(News::class, 'NEWS_ID', 'NEWS_ID');
    }
}
