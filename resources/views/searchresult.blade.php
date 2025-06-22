@extends('layouts.app')

@section('title', 'Hasil Pencarian')

@section('content')
    <h2 class="text-xl text-white font-semibold mb-6">Hasil pencarian untuk: "{{ $query }}"</h2>

    <div class="space-y-6">
        @forelse($news as $item)
            <div class="flex bg-white p-6 rounded-lg shadow hover:shadow-lg transition gap-4">
                <div class="flex-1">
                    <h2 class="text-xl font-bold mb-2">{{ $item['title'] }}</h2>
                    <p class="text-sm text-gray-500 mb-2">Sumber: {{ $item['source'] }}</p>
                    <p class="text-gray-700 text-sm">{{ $item['description'] }}</p>
                    <a href="{{ $item['link'] }}" class="text-blue-500 hover:underline" target="_blank">Baca Selengkapnya</a>
                </div>
                @if(!empty($item['image_url']))
                    <div class="w-40 h-32 shrink-0">
                        <img src="{{ $item['image_url'] }}" alt="Gambar" class="w-full h-full object-cover rounded-lg">
                    </div>
                @endif
            </div>
        @empty
            <p class="text-center text-gray-500">Tidak ada hasil ditemukan untuk "{{ $query }}".</p>
        @endforelse
    </div>
@endsection
