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
            <button class="px-4 py-2 hover:bg-gray-300 rounded">Kategori 1</button>
            <button class="px-4 py-2 hover:bg-gray-300 rounded">Kategori 2</button>
            <button class="px-4 py-2 hover:bg-gray-300 rounded">Kategori 3</button>
            <button class="px-4 py-2 hover:bg-gray-300 rounded">Kategori 4</button>
            <button class="px-4 py-2 hover:bg-gray-300 rounded">Kategori 5</button>
            <button class="px-4 py-2 hover:bg-gray-300 rounded">Kategori 6</button>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex justify-center mt-8 px-6">
        <!-- Iklan Kiri -->
        <div class="hidden md:flex w-1/5 bg-gray-300 items-center justify-center h-96 text-xl font-bold">
            IKLAN
        </div>

        <!-- Berita -->
        <div class="w-full md:w-3/5 space-y-6">
            <a href="{{ route('berita') }}" class="block bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                <h2 class="text-xl font-bold mb-2">Berita 1</h2>
                <h3 class="text-gray-600 mb-4">Subheading</h3>
                <p class="text-gray-700 text-sm">
                    Body text for your whole article or post. We'll put in some lorem ipsum to show how a filled-out page might look.
                    <br><br>
                    Excepteur efficient emerging, minim veniam anim aute carefully curated Ginza conversation exquisite perfect nostrud nisi intricate content. ...
                </p>
            </a>

            <a href="#" class="block bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                <h2 class="text-xl font-bold mb-2">Berita 2</h2>
                <h3 class="text-gray-600 mb-4">Subheading</h3>
                <p class="text-gray-700 text-sm">
                    Body text for your whole article or post. We'll put in some lorem ipsum to show how a filled-out page might look.
                    <br><br>
                    Excepteur efficient emerging, minim veniam anim aute carefully curated Ginza conversation exquisite perfect nostrud nisi intricate content. ...
                </p>
            </a>
        </div>

        <!-- Iklan Kanan -->
        <div class="hidden md:flex w-1/5 bg-gray-300 items-center justify-center h-96 text-xl font-bold">
            IKLAN
        </div>
    </main>
</body>
</html>
