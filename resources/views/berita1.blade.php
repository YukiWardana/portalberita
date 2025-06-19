@extends('layouts.app')

@section('title', 'Berita 1')

@section('content')
    <!-- Main Content -->
    <div class="flex justify-center items-start gap-4 mt-8 px-6">
        <!-- Iklan Kiri -->
        <div class="hidden md:flex w-1/5 bg-gray-300 items-center justify-center text-xl font-bold py-10">
            IKLAN
        </div>

        <!-- Konten Berita -->
        <div class="w-full md:w-3/5 bg-white p-6 rounded-lg shadow flex flex-col space-y-6">
            <div class="flex flex-col md:flex-row gap-6">
                <!-- Teks Berita -->
                <div class="flex-1">
                    <h1 class="text-3xl font-bold mb-2">Valorant VCT Pacific KickOff</h1>
                    <h2 class="text-lg text-gray-600 mb-4">Subheading</h2>
                    <div class="text-gray-700 space-y-4 text-justify">
                        <p>
                            Body text for your whole article or post. We'll put in some lorem ipsum to show how a filled-out page might look.
                        </p>
                        <p>
                            Excepteur efficient emerging, minim veniam anim aute carefully curated Ginza conversation exquisite perfect nostrud nisi intricate content. Qui international first-class nul ut. Punctual adipiscing, essential lovely queen tempor eiusmod inure.
                        </p>
                        <p>
                            Exclusive kazaky charming Scandinavian impeccable aute quality elité soft power parlour Melbourne occaecat discerning. Qui wardrobe aliquip, et Porter destination Toto remarkable officia Helsinki excepteur Basset hound. Zürich sleepy perfect consectetur.
                        </p>
                    </div>
                </div>

                <!-- Gambar Berita -->
                <div class="w-full md:w-2/5">
                    <img src="/Images/berita1.jpg" alt="Gambar Berita" class="w-full h-auto object-cover rounded-lg">
                </div>
            </div>
        </div>

        <!-- Iklan Kanan -->
        <div class="hidden md:flex w-1/5 bg-gray-300 items-center justify-center text-xl font-bold py-10">
            IKLAN
        </div>
    </div>
@endsection