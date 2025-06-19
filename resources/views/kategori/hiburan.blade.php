@extends('layouts.app')

@section('title', 'Kategori Hiburan')

@section('content')
<div class="flex flex-col md:flex-row justify-center items-start gap-4 mt-8 px-4 md:px-6">
    <!-- Iklan Kiri -->
    <div class="hidden md:flex w-1/5 bg-gray-300 items-center justify-center text-xl font-bold py-10">
        IKLAN
    </div>

    <!-- Berita dari API -->
    <div class="w-full md:w-3/5 space-y-6">
        @forelse($news as $item)
            <div class="flex bg-white p-6 rounded-lg shadow hover:shadow-lg transition gap-4">
                <div class="flex-1">
                    <h2 class="text-xl font-bold mb-2">{{ $item['title'] }}</h2>
                    <h3 class="text-gray-600 mb-4">{{ $item['source_id'] ?? 'Unknown Source' }}</h3>
                    <p class="text-gray-700 text-sm">{{ $item['description'] ?? 'Tidak ada deskripsi.' }}</p>
                    <a href="{{ route('beritadetail', ['index' => $loop->index]) }}" class="text-blue-500 hover:underline"> Baca Selengkapnya</a>
                </div>
                @if(!empty($item['image_url']))
                    <div class="w-40 h-32 shrink-0">
                        <img src="{{ $item['image_url'] }}" alt="Gambar" class="w-full h-full object-cover rounded-lg">
                    </div>
                @endif
            </div>
        @empty
            <p class="text-center text-gray-500">Berita tidak tersedia saat ini.</p>
        @endforelse
    </div>

    <!-- Iklan Kanan -->
    <div class="hidden md:flex w-1/5 bg-gray-300 items-center justify-center text-xl font-bold py-10">
        IKLAN
    </div>
</div>
@endsection