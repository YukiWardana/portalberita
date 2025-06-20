@extends('layouts.app')

@section('title', $berita->JUDUL)

@section('content')
<div class="flex justify-center items-start gap-4 mt-8 px-6">
    <div class="hidden md:flex w-1/5 bg-gray-300 items-center justify-center text-xl font-bold py-10">
        IKLAN
    </div>

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
    </div>

    <div class="hidden md:flex w-1/5 bg-gray-300 items-center justify-center text-xl font-bold py-10">
        IKLAN
    </div>
</div>
@endsection
