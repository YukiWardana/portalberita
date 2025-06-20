@extends('layouts.app')

@section('title', 'Kategori Bisnis')

@section('content')
<div class="flex flex-col md:flex-row justify-center items-start gap-4 mt-8 px-4 md:px-6">

    <!-- Iklan Kiri -->
    <div class="hidden md:flex w-1/5 bg-gray-200 items-center justify-center text-lg font-semibold py-10 rounded">
        IKLAN
    </div>

    <!-- Konten Utama -->
    <div class="w-full md:w-3/5 space-y-6">
        @forelse($news as $item)
            <div class="flex flex-col md:flex-row bg-white p-6 rounded-lg shadow hover:shadow-md transition gap-4 border border-gray-200">
                <!-- Gambar -->
                @if(!empty($item['image_url']))
                    <div class="w-full md:w-40 h-32 shrink-0">
                        <img src="{{ $item['image_url'] }}" alt="Gambar" class="w-full h-full object-cover rounded-md">
                    </div>
                @endif

                <!-- Konten -->
                <div class="flex-1">
                    <h2 class="text-xl font-bold text-gray-900 mb-1">{{ $item['title'] }}</h2>
                    <h3 class="text-sm text-gray-500 mb-2">Sumber: {{ $item['source_id'] ?? 'Unknown' }}</h3>
                    <p class="text-gray-700 text-sm mb-3">{{ $item['description'] ?? 'Tidak ada deskripsi.' }}</p>

                    @if(isset($item['source_id']) && $item['source_id'] === 'Lokal')
                        <a href="{{ $item['link'] }}" class="text-blue-600 text-sm font-semibold hover:underline">
                            Baca Selengkapnya
                        </a>
                    @else
                        <a href="{{ route('beritadetail', ['index' => $loop->index]) }}" class="text-blue-600 text-sm font-semibold hover:underline">
                            Baca Selengkapnya
                        </a>
                    @endif
                </div>
            </div>
        @empty
            <p class="text-center text-gray-500">Tidak ada berita bisnis yang tersedia saat ini.</p>
        @endforelse
    </div>

    <!-- Iklan Kanan -->
    <div class="hidden md:flex w-1/5 bg-gray-200 items-center justify-center text-lg font-semibold py-10 rounded">
        IKLAN
    </div>
</div>
@endsection
