<?php
include 'template/header.php';
?>
    <!-- Konten Halaman Layanan -->
    <main class="container mx-auto px-4 lg:px-8 mt-10">
        <h1 class="text-3xl md:text-4xl font-extrabold text-center text-main mb-8">Berbagai Layanan Kami</h1>
        <p class="text-center text-gray-600 max-w-2xl mx-auto mb-12">
            Perpustakaan STIES Gasantara menyediakan beragam layanan untuk mendukung kegiatan akademik Anda.
        </p>

        <!-- Daftar Layanan dalam Grid -->
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Kartu Layanan: Peminjaman & Pengembalian -->
            <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-main mb-4" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                   <path d="M12 5v14m0 0l-4 -4m4 4l4 -4"></path>
                   <path d="M16 11c1.503 1.758 2.59 3.935 2.85 6.456"></path>
                   <path d="M19.043 17.568c.32 .303 .58 .367 .904 .283"></path>
                   <path d="M4 15a4 4 0 0 1 4 4a4 4 0 0 1 4 -4a4 4 0 0 1 4 -4a4 4 0 0 1 4 4"></path>
                </svg>
                <h3 class="text-xl font-semibold mb-2">Peminjaman & Pengembalian</h3>
                <p class="text-gray-500 text-sm">Proses peminjaman dan pengembalian buku fisik dengan mudah dan cepat. Tersedia layanan mandiri dan dibantu staf.</p>
            </div>

            <!-- Kartu Layanan: Ruang Diskusi -->
            <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-main mb-4" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                   <path d="M3 19h18"></path>
                   <path d="M5 19v-14a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v14"></path>
                   <path d="M8 15h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-2v8z"></path>
                   <line x1="16" y1="9" x2="16" y2="15"></line>
                   <line x1="12" y1="12" x2="16" y2="12"></line>
                </svg>
                <h3 class="text-xl font-semibold mb-2">Ruang Diskusi & Kerja</h3>
                <p class="text-gray-500 text-sm">Manfaatkan ruang-ruang khusus untuk belajar kelompok atau mengerjakan tugas bersama.</p>
            </div>

            <!-- Kartu Layanan: Akses Jurnal Elektronik -->
            <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-main mb-4" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                   <path d="M12 10a2 2 0 0 1 2 -2a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2a2 2 0 0 1 -2 -2v-8z"></path>
                   <path d="M8 12a2 2 0 0 1 2 -2a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2a2 2 0 0 1 -2 -2v-8z"></path>
                   <path d="M16 8a2 2 0 0 1 2 -2a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2a2 2 0 0 1 -2 -2v-8z"></path>
                   <path d="M4 14a2 2 0 0 1 2 -2a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2a2 2 0 0 1 -2 -2v-8z"></path>
                </svg>
                <h3 class="text-xl font-semibold mb-2">Akses Jurnal Elektronik</h3>
                <p class="text-gray-500 text-sm">Akses ribuan jurnal, tesis, dan artikel ilmiah dari berbagai database kredibel.</p>
            </div>

            <!-- Kartu Layanan: Pelatihan Literasi Informasi -->
            <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-main mb-4" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                   <path d="M12 17l-2 2l-2 -2"></path>
                   <path d="M12 17v-8l-2 2l-2 -2"></path>
                   <path d="M12 17l2 2l2 -2"></path>
                   <path d="M12 17v-8l2 2l2 -2"></path>
                   <path d="M12 3a9 9 0 0 1 9 9a9 9 0 0 1 -9 9a9 9 0 0 1 -9 -9a9 9 0 0 1 9 -9z"></path>
                </svg>
                <h3 class="text-xl font-semibold mb-2">Pelatihan Literasi Informasi</h3>
                <p class="text-gray-500 text-sm">Ikut serta dalam lokakarya untuk mengoptimalkan pencarian data dan penulisan karya ilmiah.</p>
            </div>

            <!-- Kartu Layanan: Permintaan Buku Baru -->
            <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-main mb-4" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                   <line x1="12" y1="5" x2="12" y2="19"></line>
                   <line x1="5" y1="12" x2="19" y2="12"></line>
                   <path d="M19 12a7 7 0 1 0 -14 0a7 7 0 1 0 14 0z"></path>
                   <path d="M5 12h14"></path>
                   <path d="M12 5v14"></path>
                </svg>
                <h3 class="text-xl font-semibold mb-2">Permintaan Buku Baru</h3>
                <p class="text-gray-500 text-sm">Usulkan judul buku yang Anda butuhkan untuk koleksi perpustakaan.</p>
            </div>
            
            <!-- Kartu Layanan: Pendaftaran Anggota -->
            <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-main mb-4" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                   <circle cx="12" cy="7" r="4"></circle>
                   <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                   <path d="M3 10l5 -5"></path>
                   <path d="M16 5l5 5"></path>
                </svg>
                <h3 class="text-xl font-semibold mb-2">Pendaftaran Anggota</h3>
                <p class="text-gray-500 text-sm">Panduan dan formulir untuk menjadi anggota perpustakaan resmi.</p>
            </div>
        </section>
    </main>

    <script>
        // Mengubah visibilitas menu mobile saat tombol hamburger diklik
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>

    <?php
    include 'template/footer.php';
    ?>
