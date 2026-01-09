<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Manajemen Kost')</title>
    
    {{-- TODO: Include Vite CSS (Tailwind) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    {{-- TODO: Buat navbar dengan menu navigasi --}}
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16">
                {{-- Logo / Brand --}}
                <div class="flex items-center">
                    <a href="/" class="text-xl font-bold text-gray-800">
                        Sistem Kost
                    </a>
                </div>
                
                {{-- TODO: Menu navigasi (Dashboard, Kamar, Penyewa, Kontrak, Pembayaran) --}}
                <div class="flex items-center space-x-4">
                    {{-- <a href="#" class="text-gray-600 hover:text-gray-900">Dashboard</a> --}}
                </div>
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <main class="max-w-7xl mx-auto py-6 px-4">
        {{-- TODO: Tampilkan flash messages (success/error) --}}
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif
        
        @yield('content')
    </main>

    {{-- TODO: Footer (opsional) --}}
    <footer class="bg-white shadow-lg mt-12">
        <div class="max-w-7xl mx-auto px-4 py-6 text-center text-gray-600">
            &copy; {{ date('Y') }} Sistem Manajemen Kost. All rights reserved.
        </div>
    </footer>
</body>
</html>
