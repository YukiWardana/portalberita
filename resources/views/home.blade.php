<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Berita</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-cover bg-center min-h-screen" style="background-image: url('/Images/Background1.png');">
    <!-- Header -->
    <header class="bg-white shadow-md px-6 py-4 flex items-center justify-between">
        <a href="#" class="text-2xl font-bold text-gray-800 hover:text-blue-600">PORTAL BERITA</a>
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
    
<!-- Berita -->
<div class="w-full md:w-3/5 space-y-6">
    <a href="{{ route('berita1') }}" class="flex bg-white p-6 rounded-lg shadow hover:shadow-lg transition gap-4">
        <!-- Teks -->
        <div class="flex-1">
            <h2 class="text-xl font-bold mb-2">Valorant VCT Pacific KickOff</h2>
            <h3 class="text-gray-600 mb-4">Subheading</h3>
            <p class="text-gray-700 text-sm">
                Body text for your whole article or post. We'll put in some lorem ipsum to show how a filled-out page might look.
                <br><br>
                Excepteur efficient emerging, minim veniam anim aute carefully curated Ginza conversation exquisite perfect nostrud nisi intricate Content. Qui  international first-class nulla ut. Punctual adipisicing, essential lovely queen tempor eiusmod irure. Exclusive izakaya charming Scandinavian impeccable aute quality of life soft power pariatur Melbourne occaecat discerning. Qui wardrobe aliquip, et Porter destination Toto remarkable officia Helsinki excepteur Basset hound. Zürich sleepy perfect consectetur.
            </p>
        </div>

        <!-- Gambar -->
        <div class="w-40 h-32 shrink-0">
            <img src="/Images/berita1.jpg" alt="Gambar Berita 1" class="w-full h-full object-cover rounded-lg">
        </div>
    </a>

    <a href="{{ route('berita2') }}" class="flex bg-white p-6 rounded-lg shadow hover:shadow-lg transition gap-4">
        <!-- Teks -->
        <div class="flex-1">
            <h2 class="text-xl font-bold mb-2">Handphone Terbaik Milik Vivo Saat Ini</h2>
            <h3 class="text-gray-600 mb-4">Subheading</h3>
            <p class="text-gray-700 text-sm">
                Body text for your whole article or post. We'll put in some lorem ipsum to show how a filled-out page might look.
                <br><br>
                Excepteur efficient emerging, minim veniam anim aute carefully curated Ginza conversation exquisite perfect nostrud nisi intricate Content. Qui  international first-class nulla ut. Punctual adipisicing, essential lovely queen tempor eiusmod irure. Exclusive izakaya charming Scandinavian impeccable aute quality of life soft power pariatur Melbourne occaecat discerning. Qui wardrobe aliquip, et Porter destination Toto remarkable officia Helsinki excepteur Basset hound. Zürich sleepy perfect consectetur.
            </p>
        </div>

        <!-- Gambar -->
        <div class="w-40 h-32 shrink-0">
            <img src="/Images/berita2.png" alt="Gambar Berita 2" class="w-full h-full object-cover rounded-lg">
        </div>
    </a>
</div>
    
        <!-- Iklan Kanan -->
        <div class="hidden md:flex w-1/5 bg-gray-300 items-center justify-center text-xl font-bold py-10">
            IKLAN
        </div>
    </main>    
</body>
</html>
