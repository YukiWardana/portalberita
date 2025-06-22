@extends('layouts.app')

@section('title', $berita->JUDUL)

@section('content')
<div class="flex justify-center items-start gap-4 mt-8 px-6">
    <!-- Iklan Kiri -->
    <div class="hidden md:flex w-1/5 bg-gray-300 items-center justify-center text-xl font-bold py-10">
        IKLAN
    </div>

    <!-- Konten Utama -->
    <div class="w-full md:w-3/5 bg-white p-6 rounded-lg shadow flex flex-col space-y-6">
        <div class="flex flex-col md:flex-row gap-6">
            <div class="flex-1">
                <h1 class="text-3xl font-bold mb-2">{{ $berita->JUDUL }}</h1>
                <h2 class="text-lg text-gray-600 mb-4">Sumber: Lokal | {{ \Carbon\Carbon::parse($berita->TANGGAL_PUBLIKASI)->format('d M Y') }}</h2>
                <div class="prose max-w-none text-gray-800 text-base space-y-6">
                    <p class="font-semibold italic text-gray-600">
                        {!! nl2br(e($berita->DESKRIPSI)) !!}
                    </p>
                    <div>
                        {!! nl2br(e($berita->KONTEN)) !!}
                    </div>
                </div>
            </div>

            @if (!empty($berita->GAMBAR))
                <div class="w-full md:w-2/5">
                    <img src="{{ asset($berita->GAMBAR) }}" alt="Gambar Berita" class="w-full h-auto object-cover rounded-lg">
                </div>
            @endif
        </div>

        <!-- Komentar -->
        <div class="mt-8">
            <h3 class="text-xl font-bold mb-4">Komentar</h3>

            @auth
                <form action="{{ route('komentar.store') }}" method="POST" class="space-y-4 mb-6">
                    @csrf
                    <input type="hidden" name="news_id" value="{{ $berita->NEWS_ID }}">
                    <textarea name="isi_komentar" rows="4" required class="w-full border rounded-lg p-3" placeholder="Tulis komentar..."></textarea>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500">Kirim Komentar</button>
                </form>
            @else
                <p class="text-gray-500 mb-6">Silakan <a href="{{ route('login') }}" class="text-blue-500 hover:underline">login</a> untuk mengirim komentar.</p>
            @endauth

            @forelse ($berita->komentar as $komentar)
                <div class="border-t py-4">
                    <p class="text-sm font-semibold text-gray-800">{{ $komentar->user->NAMA ?? 'Anonim' }}</p>
                    <p class="text-sm text-gray-600 mb-2">{{ \Carbon\Carbon::parse($komentar->TANGGAL_KOMENTAR)->format('d M Y H:i') }}</p>
                    <p class="text-gray-700">{{ $komentar->ISI_KOMENTAR }}</p>
                </div>
            @empty
                <p class="text-gray-500">Belum ada komentar.</p>
            @endforelse
        </div>
    </div>

    <!-- Iklan Kanan -->
    <div class="hidden md:flex w-1/5 bg-gray-300 items-center justify-center text-xl font-bold py-10">
        IKLAN
    </div>
</div>
@endsection
