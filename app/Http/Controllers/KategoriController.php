<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\News;

class KategoriController extends Controller
{
    public function home()
{
    
    $response = Http::get('https://newsdata.io/api/1/news', [
        'apikey' => env('NEWSDATA_API_KEY'),
        'country' => 'id',
        'language' => 'id',
        'category' => 'top',
    ]);

    $apiNews = $response->json()['results'] ?? [];

    
    $localNews = News::where('STATUS_BERITA', 1)->latest()->get()->map(function ($item) {
        return [
            'title' => $item->JUDUL,
            'description' => $item->DESKRIPSI,
            'content' => $item->KONTEN,
            'image_url' => asset($item->GAMBAR),
            'source_id' => 'Lokal',
            'link' => route('beritadetail_local', ['id' => $item->NEWS_ID]),
        ];
    });

    
    $news = collect($localNews)->merge($apiNews);

    session(['news_articles' => $news]);

    return view('home', compact('news'));
}

   public function showLocalDetail($id)
{
    $berita = News::with('komentar.user')->findOrFail($id);
    return view('beritadetail_local', compact('berita'));
}

    public function showBerita($index)
    {
    $news = session('news_articles', []);

    if (!isset($news[$index])) {
        abort(404);
    }

    $article = $news[$index];

    return view('beritadetail', compact('article'));
    }

    public function olahraga()
{
    $apiNews = Http::get('https://newsdata.io/api/1/news', [
        'apikey' => env('NEWSDATA_API_KEY'),
        'country' => 'id',
        'language' => 'id',
        'category' => 'sports',
    ])->json()['results'] ?? [];

    $localNews = News::where('STATUS_BERITA', 1)
                    ->where('CATEGORY_ID', 1)
                    ->latest()
                    ->get()
                    ->map(function ($item) {
                        return [
                            'title' => $item->JUDUL,
                            'description' => $item->DESKRIPSI,
                            'image_url' => asset($item->GAMBAR),
                            'source_id' => 'Lokal',
                            'link' => route('beritadetail_local', ['id' => $item->NEWS_ID]),
                        ];
                    });

    $news = collect($localNews)->merge($apiNews);

    return view('kategori.olahraga', compact('news'));
}

    public function bisnis()
{
    $apiNews = Http::get('https://newsdata.io/api/1/news', [
        'apikey' => env('NEWSDATA_API_KEY'),
        'country' => 'id',
        'language' => 'id',
        'category' => 'business',
    ])->json()['results'] ?? [];

    $localNews = News::where('STATUS_BERITA', 1)
                    ->where('CATEGORY_ID', 2)
                    ->latest()
                    ->get()
                    ->map(function ($item) {
                        return [
                            'title' => $item->JUDUL,
                            'description' => $item->DESKRIPSI,
                            'image_url' => asset($item->GAMBAR),
                            'source_id' => 'Lokal',
                            'link' => route('beritadetail_local', ['id' => $item->NEWS_ID]),
                        ];
                    });

    $news = collect($localNews)->merge($apiNews);

    return view('kategori.bisnis', compact('news'));
}

        public function politik()
{
    $apiNews = Http::get('https://newsdata.io/api/1/news', [
        'apikey' => env('NEWSDATA_API_KEY'),
        'country' => 'id',
        'language' => 'id',
        'category' => 'politics',
    ])->json()['results'] ?? [];

    $localNews = News::where('STATUS_BERITA', 1)
                    ->where('CATEGORY_ID', 3)
                    ->latest()
                    ->get()
                    ->map(function ($item) {
                        return [
                            'title' => $item->JUDUL,
                            'description' => $item->DESKRIPSI,
                            'image_url' => asset($item->GAMBAR),
                            'source_id' => 'Lokal',
                            'link' => route('beritadetail_local', ['id' => $item->NEWS_ID]),
                        ];
                    });

    $news = collect($localNews)->merge($apiNews);

    return view('kategori.politik', compact('news'));
}

    public function kesehatan()
{
    $apiNews = Http::get('https://newsdata.io/api/1/news', [
        'apikey' => env('NEWSDATA_API_KEY'),
        'country' => 'id',
        'language' => 'id',
        'category' => 'health',
    ])->json()['results'] ?? [];

    $localNews = News::where('STATUS_BERITA', 1)
                    ->where('CATEGORY_ID', 4)
                    ->latest()
                    ->get()
                    ->map(function ($item) {
                        return [
                            'title' => $item->JUDUL,
                            'description' => $item->DESKRIPSI,
                            'image_url' => asset($item->GAMBAR),
                            'source_id' => 'Lokal',
                            'link' => route('beritadetail_local', ['id' => $item->NEWS_ID]),
                        ];
                    });

    $news = collect($localNews)->merge($apiNews);

    return view('kategori.kesehatan', compact('news'));
}

    public function hiburan()
{
    $apiNews = Http::get('https://newsdata.io/api/1/news', [
        'apikey' => env('NEWSDATA_API_KEY'),
        'country' => 'id',
        'language' => 'id',
        'category' => 'entertainment',
    ])->json()['results'] ?? [];

    $localNews = News::where('STATUS_BERITA', 1)
                    ->where('CATEGORY_ID', 5)
                    ->latest()
                    ->get()
                    ->map(function ($item) {
                        return [
                            'title' => $item->JUDUL,
                            'description' => $item->DESKRIPSI,
                            'image_url' => asset($item->GAMBAR),
                            'source_id' => 'Lokal',
                            'link' => route('beritadetail_local', ['id' => $item->NEWS_ID]),
                        ];
                    });

    $news = collect($localNews)->merge($apiNews);

    return view('kategori.hiburan', compact('news'));
}

    public function teknologi()
{
    $apiNews = Http::get('https://newsdata.io/api/1/news', [
        'apikey' => env('NEWSDATA_API_KEY'),
        'country' => 'id',
        'language' => 'id',
        'category' => 'technology',
    ])->json()['results'] ?? [];

    $localNews = News::where('STATUS_BERITA', 1)
                    ->where('CATEGORY_ID', 2)
                    ->latest()
                    ->get()
                    ->map(function ($item) {
                        return [
                            'title' => $item->JUDUL,
                            'description' => $item->DESKRIPSI,
                            'image_url' => asset($item->GAMBAR),
                            'source_id' => 'Lokal',
                            'link' => route('beritadetail_local', ['id' => $item->NEWS_ID]),
                        ];
                    });

    $news = collect($localNews)->merge($apiNews);

    return view('kategori.teknologi', compact('news'));
}

}
