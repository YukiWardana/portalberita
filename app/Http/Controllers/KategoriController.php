<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

    $news = $response->json()['results'] ?? [];

    session(['news_articles' => $news]);

    return view('home', compact('news'));
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
    $response = Http::get('https://newsdata.io/api/1/news', [
        'apikey' => env('NEWSDATA_API_KEY'),
        'country' => 'id',
        'language' => 'id',
        'category' => 'sports',
    ]);

    $news = $response->json()['results'] ?? [];

    session(['news_articles' => $news]);

    return view('kategori.olahraga', compact('news'));
    }

    public function bisnis()
    {
    $response = Http::get('https://newsdata.io/api/1/news', [
        'apikey' => env('NEWSDATA_API_KEY'),
        'country' => 'id',
        'language' => 'id',
        'category' => 'business',
    ]);

    $news = $response->json()['results'] ?? [];

    session(['news_articles' => $news]);

    return view('kategori.bisnis', compact('news'));
    }

    public function politik()
    {
    $response = Http::get('https://newsdata.io/api/1/news', [
        'apikey' => env('NEWSDATA_API_KEY'),
        'country' => 'id',
        'language' => 'id',
        'category' => 'politics',
    ]);

    $news = $response->json()['results'] ?? [];

    session(['news_articles' => $news]);

    return view('kategori.politik', compact('news'));
    }

    public function kesehatan()
    {
    $response = Http::get('https://newsdata.io/api/1/news', [
        'apikey' => env('NEWSDATA_API_KEY'),
        'country' => 'id',
        'language' => 'id',
        'category' => 'health',
    ]);

    $news = $response->json()['results'] ?? [];

    session(['news_articles' => $news]);

    return view('kategori.kesehatan', compact('news'));
    }

    public function hiburan() {
        $response = Http::get('https://newsdata.io/api/1/news', [
        'apikey' => env('NEWSDATA_API_KEY'),
        'country' => 'id',
        'language' => 'id',
        'category' => 'entertainment',
    ]);

    $news = $response->json()['results'] ?? [];

    session(['news_articles' => $news]);

    return view('kategori.hiburan', compact('news'));
    }

    public function teknologi() {
        $response = Http::get('https://newsdata.io/api/1/news', [
        'apikey' => env('NEWSDATA_API_KEY'),
        'country' => 'id',
        'language' => 'id',
        'category' => 'technology',
    ]);

    $news = $response->json()['results'] ?? [];

    session(['news_articles' => $news]);

    return view('kategori.teknologi', compact('news'));
    }
}
