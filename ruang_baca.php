<?php
include 'template/header.php';
?>
    <!-- Konten Halaman Ruang Baca -->
    <main class="container mx-auto px-4 lg:px-8 mt-10">
        <h1 class="text-3xl md:text-4xl font-extrabold text-center text-main mb-8">Fasilitas Ruang Baca</h1>
        <p class="text-center text-gray-600 max-w-2xl mx-auto mb-12">
            Nikmati berbagai fasilitas yang kami sediakan untuk menunjang kenyamanan Anda dalam belajar dan berdiskusi.
        </p>

        <!-- Daftar Fasilitas dalam Grid -->
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Kartu Fasilitas: Ruang Diskusi -->
            <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-main mb-4" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                   <path d="M3 19h18"></path>
                   <path d="M5 19v-14a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v14"></path>
                   <path d="M8 15h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-2v8z"></path>
                   <line x1="16" y1="9" x2="16" y2="15"></line>
                   <line x1="12" y1="12" x2="16" y2="12"></line>
                </svg>
                <h3 class="text-xl font-semibold mb-2">Ruang Diskusi Kelompok</h3>
                <p class="text-gray-500 text-sm">Tersedia ruang-ruang khusus yang nyaman untuk mengerjakan tugas bersama dengan tim.</p>
            </div>

            <!-- Kartu Fasilitas: Zona Tenang -->
            <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-main mb-4" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                   <circle cx="12" cy="12" r="9"></circle>
                   <path d="M14 10a2 2 0 1 0 -4 0v4a2 2 0 1 0 4 0"></path>
                   <line x1="12" y1="10" x2="12" y2="14"></line>
                   <path d="M3 15h18"></path>
                </svg>
                <h3 class="text-xl font-semibold mb-2">Zona Tenang</h3>
                <p class="text-gray-500 text-sm">Area khusus untuk fokus belajar dan membaca tanpa gangguan, cocok untuk persiapan ujian.</p>
            </div>

            <!-- Kartu Fasilitas: Stasiun Komputer -->
            <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-main mb-4" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                   <rect x="4" y="4" width="16" height="16" rx="2"></rect>
                   <path d="M8 16h8"></path>
                   <path d="M12 4v12"></path>
                </svg>
                <h3 class="text-xl font-semibold mb-2">Stasiun Komputer</h3>
                <p class="text-gray-500 text-sm">Akses komputer dengan internet berkecepatan tinggi untuk riset dan tugas daring.</p>
            </div>
            
            <!-- Kartu Fasilitas: Area Santai -->
            <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-main mb-4" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                   <path d="M12 12v.01"></path>
                   <path d="M12 12a2 2 0 1 0 2 2a2 2 0 0 0 -2 -2z"></path>
                   <path d="M17 12a5 5 0 1 0 -5 5a5 5 0 0 0 5 -5z"></path>
                   <path d="M7 12a5 5 0 1 0 -5 5a5 5 0 0 0 5 -5z"></path>
                   <path d="M12 7a5 5 0 1 0 5 -5a5 5 0 0 0 -5 5z"></path>
                   <path d="M12 17a5 5 0 1 0 -5 -5a5 5 0 0 0 5 5z"></path>
                </svg>
                <h3 class="text-xl font-semibold mb-2">Area Santai</h3>
                <p class="text-gray-500 text-sm">Area dengan kursi empuk dan suasana yang lebih santai untuk membaca ringan atau istirahat sejenak.</p>
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
