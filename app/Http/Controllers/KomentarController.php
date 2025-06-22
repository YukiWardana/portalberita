<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komentar;
use Illuminate\Support\Facades\Auth;

class KomentarController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'news_id' => 'required|exists:NEWS,NEWS_ID',
            'isi_komentar' => 'required|string',
        ]);

        Komentar::create([
            'NEWS_ID' => $request->news_id,
            'USER_ID' => Auth::id(),
            'ISI_KOMENTAR' => $request->isi_komentar,
            'TANGGAL_KOMENTAR' => now(),
        ]);

        return back()->with('success', 'Komentar berhasil ditambahkan!');
    }
}
