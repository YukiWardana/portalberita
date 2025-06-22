<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\News;
use Illuminate\Support\Str;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('q');

        $localResults = News::where('JUDUL', 'like', "%$query%")
                            ->orWhere('DESKRIPSI', 'like', "%$query%")
                            ->get();

        $response = Http::get('https://newsdata.io/api/1/news', [
            'apikey' => env('NEWSDATA_API_KEY'),
            'q' => $query,
            'language' => 'id',
            'country' => 'id',
        ]);

        $apiResults = $response->json()['results'] ?? [];

        $combinedNews = collect();

        foreach ($localResults as $item) {
            $combinedNews->push([
                'title' => $item->JUDUL,
                'description' => Str::limit($item->DESKRIPSI ?? $item->KONTEN, 150),
                'image_url' => asset($item->GAMBAR),
                'link' => route('berita.local.detail', ['id' => $item->NEWS_ID]),
                'source' => 'Lokal',
            ]);
        }

        foreach ($apiResults as $item) {
            $combinedNews->push([
                'title' => $item['title'],
                'description' => $item['description'] ?? 'Tidak ada deskripsi.',
                'image_url' => $item['image_url'] ?? null,
                'link' => $item['link'] ?? '#',
                'source' => $item['source_id'] ?? 'API',
            ]);
        }

        $news = $combinedNews->sortByDesc('title')->values();

        return view('searchresult', [
            'query' => $query,
            'news' => $news
        ]);
    }
}
