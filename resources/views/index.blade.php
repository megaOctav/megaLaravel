<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harvard University</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="bg-red-950">

    <!-- Header -->
    <header class="bg-zinc-950 shadow-md">
        <div class="container mx-auto flex justify-between items-center p-5">
            <a href="#" class="text-3xl font-bold text-white ml-20">Harvard.</a>

            <nav class="space-x-6 mr-20">
                <a href="index.html" class="text-white text-lg hover:text-red-600">Beranda</a>
                <a href="fakultas.html" class="text-white text-lg hover:text-red-600">Fakultas</a>
                <a href="fasilitas.html" class="text-white text-lg hover:text-red-600">Fasilitas</a>
                <a href="kontak.html" class="text-white text-lg hover:text-red-600">Kontak</a>
            </nav>
        </div>
    </header>

    <!-- Section Beranda -->
    <section class="bg-red-950 py-16">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center px-5">

            <!-- Content -->
            <div class="flex-1 text-center md:text-left ml-20 mt-4">
                <h1 class="text-5xl font-bold text-white mb-5">SELAMAT DATANG DI HARVARD!!!</h1>
                <h3 class="text-2xl font-bold text-white-700 text-red-700 mb-5">Sekilas tentang Harvard</h3>
                <p class="text-black-600 text-white text-justify mb-10">
                    Harvard adalah sebuah universitas ternama yang terletak di Cambridge, Massachusetts, Amerika Serikat. 
                    Didirikan pada tahun 1636, Harvard merupakan salah satu institusi pendidikan tertua di dunia. Universitas ini dikenal secara luas 
                    sebagai pusat keunggulan akademis dan telah memainkan peran penting dalam perkembangan intelektual, ilmiah, dan budaya. Dengan reputasi 
                    global yang kuat, Harvard menawarkan berbagai program studi dan memiliki fakultas terkemuka di berbagai bidang. 
                    Universitas Harvard juga terkenal karena alumninya yang termasuk banyak tokoh terkemuka di berbagai bidang, termasuk politik, bisnis, dan ilmu pengetahuan.
                </p>
                <div class="btn-box space-x-4 mb-10">
                    <a href="sejarah.html" class="bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700">SEJARAH</a>
                    <a href="pendiri.html" class="bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700">JOHN HARVARD</a>
                </div>

                <!-- Media Sosial -->
                <div class="beranda-sci flex space-x-6 mb-6">
                    <a href="https://www.instagram.com/harvard" class="text-red-600 text-3xl hover:text-red-700"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://x.com/Harvard?s=20" class="text-red-600 text-3xl hover:text-red-700"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="https://www.youtube.com/@harvard" class="text-red-600 text-3xl hover:text-red-700"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>

            <!-- Gambar -->
            <div class="flex-1 flex justify-center md:justify-end mr-20">
                <div class="gambar">
                    <img src="css/logo.png" alt="Harvard Logo" class="w-80 h-80 rounded-lg">
                </div>
            </div>
        </div>
    </section>

</body>
</html>
