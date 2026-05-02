<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Company</title>
    @vite('resources/css/app.css') {{-- Pastikan Vite terhubung --}}
    <script src="https://cdn.tailwindcss.com"></script> {{-- CDN sementara agar cepat --}}
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Hero Section -->
    <header class="bg-blue-900 text-white py-20 px-6 text-center">
        <h1 class="text-5xl font-bold mb-4">Solusi Teknologi Masa Depan</h1>
        <p class="text-xl mb-8 text-blue-100">Membangun sistem informasi yang efisien, transparan, dan inovatif.</p>
        <div class="space-x-4">
            <a href="/company-profile" class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-lg font-semibold transition">
                Lihat Profil Perusahaan
            </a>
            <a href="#services" class="bg-white text-blue-900 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                Layanan Kami
            </a>
        </div>
    </header>

    <!-- Section: Core Highlights (Opsional: Bisa tampilkan Grafik Data) -->
    <section id="services" class="py-16 container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12">Mengapa Memilih Kami?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="p-6 bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <div class="text-blue-600 mb-4 text-2xl font-bold">01</div>
                <h3 class="text-xl font-bold mb-2">Analisis Data Akurat</h3>
                <p class="text-gray-600">Mengolah data mentah menjadi informasi strategis untuk bisnis Anda.</p>
            </div>
            <!-- Card 2 -->
            <div class="p-6 bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <div class="text-blue-600 mb-4 text-2xl font-bold">02</div>
                <h3 class="text-xl font-bold mb-2">Sistem Terintegrasi</h3>
                <p class="text-gray-600">Integrasi database SQL dan aplikasi web yang mulus.</p>
            </div>
            <!-- Card 3 -->
            <div class="p-6 bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <div class="text-blue-600 mb-4 text-2xl font-bold">03</div>
                <h3 class="text-xl font-bold mb-2">UI/UX Modern</h3>
                <p class="text-gray-600">Dashboard intuitif dengan visualisasi grafik yang mudah dipahami.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8 text-center">
        <p>&copy; 2026 Company Name. Built with Laravel & ❤️</p>
    </footer>

</body>
</html>