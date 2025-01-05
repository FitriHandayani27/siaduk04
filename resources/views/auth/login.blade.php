<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SIADUK04</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white shadow-lg rounded-lg p-6 w-full max-w-md">
        <div class="text-center mb-6">
            <img src="{{ asset('img/logo.png') }}"  class="mx-auto w-16 mb-4">
            <h1 class="text-xl text-black font-bold">SIADUK04</h1>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" id="email" name="email" required
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-300">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-300">
            </div>
            <button type="submit" class="w-full py-2 bg-black text-white rounded-md hover:bg-gray-800 transition">
                Log In
            </button>
        </form>
        <div class="text-center mt-4 text-sm">
            <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Belum punya akun? Daftar di sini</a>
        </div>
    </div>
</body>
</html>
