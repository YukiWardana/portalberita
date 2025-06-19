<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portal Berita')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-cover bg-center min-h-screen" style="background-image: url('/Images/Background1.png');">

    <!-- Header -->
    <header class="bg-white shadow-md px-6 py-4 flex items-center justify-between">
        <a href="{{ route('home') }}" class="text-2xl font-bold text-gray-800 hover:text-blue-600">PORTAL BERITA</a>
        <div class="flex items-center space-x-4">
            <input type="text" placeholder="Cari Berita" class="border rounded-full px-4 py-2 w-full md:w-64 focus:outline-none focus:ring-2 focus:ring-blue-400">

            @auth
                <p class="text-sm text-gray-700">Halo, {{ Auth::user()->NAMA }}</p>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-500">Logout</button>
                </form>
            @endauth

            @guest
                <a href="{{ route('login') }}" class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-700">Login</a>
            @endguest
        </div>
    </header>

    <!-- Navigation Kategori -->
    <nav class="bg-gray-200 py-2">
        <div class="flex flex-wrap justify-center space-x-2 md:space-x-4">
            <a href="{{ route('home') }}" class="px-4 py-2 hover:bg-gray-300 rounded">Berita</a>
            <a href="{{ route('kategori.olahraga') }}" class="px-4 py-2 hover:bg-gray-300 rounded">Olahraga</a>
            <a href="{{ route('kategori.bisnis') }}" class="px-4 py-2 hover:bg-gray-300 rounded">Bisnis</a>
            <a href="{{ route('kategori.politik') }}" class="px-4 py-2 hover:bg-gray-300 rounded">Politik</a>
            <a href="{{ route('kategori.kesehatan') }}" class="px-4 py-2 hover:bg-gray-300 rounded">Kesehatan</a>
            <a href="{{ route('kategori.hiburan') }}" class="px-4 py-2 hover:bg-gray-300 rounded">Hiburan</a>
            <a href="{{ route('kategori.teknologi') }}" class="px-4 py-2 hover:bg-gray-300 rounded">Teknologi</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="px-4 md:px-6 py-8">
        @yield('content')
    </main>

</body>
</html>
