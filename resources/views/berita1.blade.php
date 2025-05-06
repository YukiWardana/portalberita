<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Berita</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-cover bg-center min-h-screen" style="background-image: url('/Images/Background1.png');">
    <!-- Header -->
    <header class="bg-white shadow-md px-6 py-4 flex items-center justify-between">
        <a href="{{ route('home') }}" class="text-2xl font-bold text-gray-800 hover:text-blue-600">PORTAL BERITA</a>
        <div class="flex items-center space-x-4">
            <input type="text" placeholder="Cari Berita" class="border rounded-full px-4 py-2 w-64 focus:outline-none focus:ring-2 focus:ring-blue-400">
            <a href="{{ route('login') }}" class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-700">Login</a>
        </div>
    </header>

    <!-- Navigation Kategori -->
    <nav class="bg-gray-200 py-2">
        <div class="flex justify-center space-x-4">
            <button class="px-4 py-2 hover:bg-gray-300 rounded">Berita</button>
            <button class="px-4 py-2 hover:bg-gray-300 rounded">Olahraga</button>
            <button class="px-4 py-2 hover:bg-gray-300 rounded">E-Sports</button>
            <button class="px-4 py-2 hover:bg-gray-300 rounded">Politik</button>
            <button class="px-4 py-2 hover:bg-gray-300 rounded">Otomotif</button>
            <button class="px-4 py-2 hover:bg-gray-300 rounded">Hiburan</button>
            <button class="px-4 py-2 hover:bg-gray-300 rounded">Teknologi</button>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex justify-center items-start gap-4 mt-8 px-6">
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
    </main>
</body>
</html>
