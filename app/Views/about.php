<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <header class="bg-white shadow-md">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="text-xl font-bold text-gray-800">Nama Situs</a>
            <nav>
                <a href="/" class="text-gray-600 hover:text-gray-900 mx-2">Beranda</a>
                <a href="/tentang" class="text-gray-900 font-bold mx-2">Tentang</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto mt-10 px-6">
        <section class="bg-white p-8 rounded-lg shadow-lg">
            <h1 class="text-4xl font-bold text-center text-gray-800 mb-4">Tentang Kami</h1>
            <p class="text-center text-gray-600 mb-8">
                Kami adalah tim yang berdedikasi untuk menciptakan solusi digital terbaik.
                Dengan pengalaman bertahun-tahun, kami bertekad untuk memberikan produk yang
                inovatif dan berkualitas tinggi.
            </p>
            
            <div class="grid md:grid-cols-2 gap-8 mb-12">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-700 mb-2">Visi</h2>
                    <p class="text-gray-600">Menjadi yang terdepan dalam industri teknologi dengan memberikan dampak positif bagi masyarakat luas.</p>
                </div>
                <div>
                    <h2 class="text-2xl font-semibold text-gray-700 mb-2">Misi</h2>
                    <p class="text-gray-600">Menyediakan produk digital yang unggul, berfokus pada kebutuhan pelanggan, dan selalu berinovasi.</p>
                </div>
            </div>

            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Tim Kami</h2>
                <div class="flex flex-wrap justify-center gap-8">
                    <div class="w-48 bg-gray-50 p-4 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                        <img src="https://via.placeholder.com/150" alt="Foto John Doe" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                        <h3 class="text-lg font-semibold text-gray-700">John Doe</h3>
                        <p class="text-sm text-gray-500">CEO</p>
                    </div>
                    <div class="w-48 bg-gray-50 p-4 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                        <img src="https://via.placeholder.com/150" alt="Foto Jane Smith" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                        <h3 class="text-lg font-semibold text-gray-700">Jane Smith</h3>
                        <p class="text-sm text-gray-500">CTO</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-gray-800 text-white text-center p-6 mt-10">
        <p>&copy; 2025 Nama Situs. Semua Hak Dilindungi.</p>
    </footer>

</body>
</html>