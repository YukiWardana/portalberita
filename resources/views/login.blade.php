<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Portal Berita</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Pakai ini kalau Tailwind belum di-compile -->
</head>
<body class="bg-cover bg-center min-h-screen flex items-center justify-center" style="background-image: url('/Images/Background1.png');">
    <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-md">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Masuk atau Daftar</h2>
        <p class="text-gray-600 mb-6">Silahkan masuk jika sudah memiliki akun atau mendaftar jika belum memiliki akun</p>

        <form action="#" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="username" class="block text-gray-700">Username</label>
                <input type="text" id="username" name="username" class="w-full mt-1 border rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>
            <div>
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="w-full mt-1 border rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>
            <button type="submit" class="w-full bg-gray-800 text-white py-2 rounded hover:bg-gray-700 transition">Sign In</button>
        </form>

        <div class="flex justify-between mt-4 text-sm">
            <a href="#" class="text-blue-500 hover:underline">Forgot password?</a>
            <a href="#" class="text-blue-500 hover:underline">Register</a>
        </div>
    </div>
</body>
</html>
