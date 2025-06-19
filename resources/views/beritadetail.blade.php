@extends('layouts.app')

@section('title', $article['title'])

@section('content')
<div class="flex justify-center items-start gap-4 mt-8 px-6">
    <div class="hidden md:flex w-1/5 bg-gray-300 items-center justify-center text-xl font-bold py-10">IKLAN</div>

    <div class="w-full md:w-3/5 bg-white p-6 rounded-lg shadow flex flex-col space-y-6">
        <div class="flex flex-col md:flex-row gap-6">
            <div class="flex-1">
                <h1 class="text-3xl font-bold mb-2">{{ $article['title'] }}</h1>
                <h2 class="text-lg text-gray-600 mb-4">{{ $article['source_id'] ?? $article['source_id'] }}</h2>
                <div class="text-gray-700 space-y-4 text-justify">
                    <p>{{ $article['description'] ?? 'Tidak ada deskripsi.' }}</p>
                    <p>{{ $article['content'] ?? 'Tidak ada konten lengkap.' }}</p>
                </div>
            </div>

            @if (!empty($article['image_url']))
                <div class="w-full md:w-2/5">
                    <img src="{{ $article['image_url'] }}" alt="Gambar Berita" class="w-full h-auto object-cover rounded-lg">
                </div>
            @endif
        </div>
    </div>

    <div class="hidden md:flex w-1/5 bg-gray-300 items-center justify-center text-xl font-bold py-10">IKLAN</div>
</div>
@endsection
