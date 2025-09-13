<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Perpustakaan STIES Gasantara</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f7f3f1;
            color: #333;
        }
        .main-color {
            background-color: #850e36;
        }
        .text-main {
            color: #850e36;
        }
        .btn-primary {
            background-color: #850e36;
            color: white;
        }
        .btn-primary:hover {
            background-color: #6a0b2c;
        }
        /* Modal Style */
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }
        .modal-content {
            background-color: white;
            padding: 2.5rem;
            border-radius: 1rem;
            max-width: 500px;
            width: 90%;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            position: relative;
        }
        .hero-background {
            background-image: url('https://images.unsplash.com/photo-1599824683050-681b9e02394c?q=80&w=2670&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
        }
    </style>
</head>
<body class="antialiased">

    <!-- Header & Navigasi -->
    <header class="main-color text-white py-4 shadow-lg">
        <div class="container mx-auto px-4 lg:px-8 flex flex-col lg:flex-row items-center justify-between">
            <!-- Logo dan Nama Kampus -->
            <div class="flex items-center space-x-2">
                <!-- Placeholder untuk logo -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.467 9.53 5 8 5a2 2 0 00-2 2v10a2 2 0 002 2c1.53 0 2.832-.467 4-1.253m0 0C13.168 5.467 14.47 5 16 5a2 2 0 012 2v10a2 2 0 01-2 2c-1.53 0-2.832-.467-4-1.253z" />
                </svg>
                <span class="text-2xl font-bold tracking-wider">STIES Gasantara</span>
            </div>

            <!-- Navigasi Desktop -->
            <nav class="hidden lg:flex items-center space-x-6 text-sm font-semibold mt-4 lg:mt-0">
                <a href="index.php" class="hover:text-amber-300 transition duration-300">Beranda</a>
                <a href="koleksi_buku.php" class="hover:text-amber-300 transition duration-300">Koleksi Buku</a>
                <a href="layanan.php" class="hover:text-amber-300 transition duration-300">Layanan</a>
                <a href="ruang_baca.php" class="hover:text-amber-300 transition duration-300">Ruang Baca</a>
                <a href="bantuan.php" class="hover:text-amber-300 transition duration-300">Bantuan/FAQ</a>
                <a href="login.php" class="bg-white text-main px-4 py-2 rounded-full shadow-md hover:bg-gray-100 transition duration-300">Masuk Akun</a>
            </nav>

            <!-- Navigasi Mobile (Hamburger) -->
            <div class="lg:hidden mt-4">
                <button id="menu-toggle" class="text-white focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Menu Mobile yang Tersembunyi -->
        <div id="mobile-menu" class="hidden lg:hidden flex flex-col items-center mt-4 space-y-4 text-center">
            <a href="index.php" class="text-white hover:text-amber-300 transition duration-300">Beranda</a>
            <a href="koleksi_buku.php" class="text-white hover:text-amber-300 transition duration-300">Koleksi Buku</a>
            <a href="layanan.php" class="text-white hover:text-amber-300 transition duration-300">Layanan</a>
            <a href="ruang_baca.php" class="text-white hover:text-amber-300 transition duration-300">Ruang Baca</a>
            <a href="bantuan.php" class="text-white hover:text-amber-300 transition duration-300">Bantuan/FAQ</a>
            <a href="login.php" class="bg-white text-main px-4 py-2 rounded-full shadow-md hover:bg-gray-100 transition duration-300">Masuk Akun</a>
        </div>
    </header>
