@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <div class="flex flex-col md:flex-row justify-center items-start gap-4">
        <!-- Iklan Kiri -->
        <div class="hidden md:flex w-1/5 bg-gray-300 items-center justify-center text-xl font-bold py-10">
            IKLAN
        </div>

        <!-- Berita -->
        <div class="w-full md:w-3/5 space-y-6">
            <a href="{{ route('berita1') }}" class="flex bg-white p-6 rounded-lg shadow hover:shadow-lg transition gap-4">
                <div class="flex-1"> 
                    <h2 class="text-xl font-bold mb-2">Valorant VCT Pacific KickOff</h2>
                    <h3 class="text-gray-600 mb-4">Subheading</h3>
                    <p class="text-gray-700 text-sm"> ... </p>
                </div>
                <div class="w-40 h-32 shrink-0">
                    <img src="/Images/berita1.jpg" alt="Gambar Berita 1" class="w-full h-full object-cover rounded-lg">
                </div>
            </a>

            <a href="{{ route('berita2') }}" class="flex bg-white p-6 rounded-lg shadow hover:shadow-lg transition gap-4">
                <div class="flex-1">
                    <h2 class="text-xl font-bold mb-2">Handphone Terbaik Milik Vivo Saat Ini</h2>
                    <h3 class="text-gray-600 mb-4">Subheading</h3>
                    <p class="text-gray-700 text-sm"> ... </p>
                </div>
                <div class="w-40 h-32 shrink-0">
                    <img src="/Images/berita2.png" alt="Gambar Berita 2" class="w-full h-full object-cover rounded-lg">
                </div>
            </a>
        </div>

        <!-- Iklan Kanan -->
        <div class="hidden md:flex w-1/5 bg-gray-300 items-center justify-center text-xl font-bold py-10">
            IKLAN
        </div>
    </div>
@endsection
