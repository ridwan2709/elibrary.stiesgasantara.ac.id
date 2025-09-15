<?php
include 'template/header.php';
?>

    <!-- Area Pencarian Utama -->
    <main class="container mx-auto px-4 lg:px-8 mt-10">
        <div class="hero-background p-8 md:p-12 rounded-lg shadow-xl text-center">
            <div class="absolute inset-0 bg-[url('assets/img/perpus.jpg')] rounded-lg"> </div>
            <div class="relative z-10 text-white">
                <h1 class="text-3xl md:text-5xl font-extrabold mb-4">Temukan Buku Impian Anda</h1>
                <p class="text-lg text-gray-200 mb-6">Jelajahi koleksi digital dan fisik kami yang luas. Mulai cari sekarang!</p>
                <div class="relative w-full max-w-2xl mx-auto">
                    <input type="text" placeholder="Cari judul, penulis, tahun terbit..." class="w-full pl-5 pr-12 py-4 rounded-full border-2 border-transparent focus:outline-none focus:border-main text-gray-700 placeholder-gray-400 text-base shadow-sm">
                    <button class="absolute right-2 top-1/2 -translate-y-1/2 main-color text-white p-3 rounded-full hover:bg-gray-800 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Bagian Unggulan (Featured Books) -->
        <section class="mt-16">
            <h2 class="text-2xl font-bold text-main mb-6">Buku Unggulan Minggu Ini</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6" id="books-container">
                <!-- Contoh Kartu Buku -->
                 <?php 
                 include 'inc/koneksi.php';
                 $sql = $koneksi->query("SELECT * FROM tb_buku ORDER BY judul_buku");
                 while ($data = $sql->fetch_assoc()) {
                 ?>
                <div class="book-card bg-white rounded-lg shadow-md hover:shadow-xl transition duration-300 p-4 flex flex-col items-center text-center" data-title="<?php echo $data['judul_buku']; ?>">
                    <?php 
                    
                    if ($data['cover_image']) { ?>
                        <?php if($data['pdf_file']) { ?>
                            <a target="_blank" href="<?= "admin/uploads/book_pdfs/".$data['pdf_file'] ?>"><img src="<?php echo 'admin/uploads/book_covers/'.$data['cover_image']; ?>" alt="Cover Buku" class="w-2/3 md:w-full rounded-md shadow-lg mb-4"></a>
                        <?php }else{ ?>
                           <button class="show-notif"><img src="<?php echo 'admin/uploads/book_covers/'.$data['cover_image']; ?>" alt="Cover Buku" class="w-2/3 md:w-full rounded-md shadow-lg mb-4"></button>
                        <?php } ?>
                    <?php } else { ?>
                        <div style="width: 195px; height: 280px; background-color: #f5f5f5; border: 1px solid #ddd; display: flex; align-items: center; justify-content: center; font-size: 10px; color: #999;">
                            No Image
                        </div>
                    <?php } ?>
                    <h3 class="font-semibold text-sm md:text-base text-gray-800 line-clamp-2"><?php echo $data['judul_buku']; ?></h3>
                    <p class="text-xs text-gray-500 mt-1">oleh <?php echo $data['pengarang']; ?></p>
                   
                    <button class="mt-4 w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md transition duration-300 show-summary-btn">
                        Ringkasan Buku ✨
                    </button>
                </div>
                <?php } ?>
            </div>
        </section>

        <!-- Bagian Pengumuman & Informasi Penting -->
        <section class="mt-16 grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Pengumuman -->
            <div class="lg:col-span-2 bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-bold text-main mb-4">Pengumuman & Acara</h2>
                <ul class="space-y-4">
                    <li class="border-b border-gray-200 pb-3 last:border-b-0">
                        <a href="#" class="block text-gray-800 hover:text-main font-semibold transition duration-300">
                            Perubahan Jam Operasional Perpustakaan Selama Libur Lebaran
                        </a>
                        <p class="text-sm text-gray-500 mt-1">05 April 2024</p>
                    </li>
                    <li class="border-b border-gray-200 pb-3 last:border-b-0">
                        <a href="#" class="block text-gray-800 hover:text-main font-semibold transition duration-300">
                            Webinar: Strategi Menulis Skripsi Efektif
                        </a>
                        <p class="text-sm text-gray-500 mt-1">20 Maret 2024</p>
                    </li>
                    <li class="border-b border-gray-200 pb-3 last:border-b-0">
                        <a href="#" class="block text-gray-800 hover:text-main font-semibold transition duration-300">
                            Koleksi Buku Baru Jurusan Akuntansi Sudah Tersedia!
                        </a>
                        <p class="text-sm text-gray-500 mt-1">10 Maret 2024</p>
                    </li>
                </ul>
            </div>

            <!-- Jam Operasional & Kontak -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-bold text-main mb-4">Informasi Perpustakaan</h2>
                <div class="space-y-4 text-gray-700">
                    <div class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-main" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div>
                            <h3 class="font-semibold">Jam Operasional</h3>
                            <p class="text-sm">Senin - Jumat: 08.00 - 17.00</p>
                            <p class="text-sm">Sabtu: 08.00 - 12.00</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3">
                         <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-main" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <div>
                            <h3 class="font-semibold">Kontak Kami</h3>
                            <p class="text-sm">Telp: (021) 123-4567</p>
                            <p class="text-sm">Email: perpus@sties-gasantara.ac.id</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Modal untuk Ringkasan Buku -->
    <div id="summary-modal" class="modal hidden">
        <div class="modal-content">
            <button id="close-modal-btn-summary" class="absolute top-4 right-4 text-gray-500 hover:text-gray-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <h2 class="text-xl font-bold text-main mb-4" id="modal-title-summary"></h2>
            <div id="modal-content-summary" class="text-gray-700"></div>
        </div>
    </div>
    <!-- Modal untuk Notif -->
    <div id="notif-modal" class="modal hidden">
        <div class="modal-content">
            <button id="close-modal-btn-notif" class="absolute top-4 right-4 text-gray-500 hover:text-gray-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <h2 class="text-xl font-bold text-main mb-4" id="notif"></h2>
        </div>
    </div>
    <script>
        // Mengubah visibilitas menu mobile saat tombol hamburger diklik
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // Logika untuk menampilkan notifikasi jika buku bukan pdf
        document.querySelectorAll('.show-notif').forEach(button => {
            button.addEventListener('click', function() {
                const bookTitle = this.closest('.book-card').dataset.title;
                document.getElementById('notif-modal').classList.remove('hidden');
                document.getElementById('notif').textContent = `Untuk buku "${bookTitle}" Tidak ada file Pdf`;
            });
        });
        // Logika untuk menampilkan ringkasan buku
        document.querySelectorAll('.show-summary-btn').forEach(button => {
            button.addEventListener('click', function() {
                const bookTitle = this.closest('.book-card').dataset.title;
                showSummary(bookTitle);
            });
        });

        // Menutup modal ringkasan
        document.getElementById('close-modal-btn-summary').addEventListener('click', function() {
            document.getElementById('summary-modal').classList.add('hidden');
        });
        // Menutup modal notif
        document.getElementById('close-modal-btn-notif').addEventListener('click', function() {
            document.getElementById('notif-modal').classList.add('hidden');
        });
        
        const showSummary = async (bookTitle) => {
            const modal = document.getElementById('summary-modal');
            const modalTitle = document.getElementById('modal-title-summary');
            const modalContent = document.getElementById('modal-content-summary');

            modalTitle.textContent = `Ringkasan untuk "${bookTitle}"`;
            modalContent.innerHTML = `<p class="text-center text-gray-500">Memuat ringkasan...</p>`;
            modal.classList.remove('hidden');

            try {
                const prompt = `Berikan ringkasan buku yang sangat ringkas, padat, dan singkat tentang "${bookTitle}". Ringkaslah dalam 3 kalimat atau kurang.`;
                const apiKey = "AIzaSyDGeT5_zcW7LMMABIsN7xwMlky0wdj45FI"; // API key akan disediakan di runtime
                const apiUrl = `https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash-preview-05-20:generateContent?key=${apiKey}`;

                const payload = {
                    contents: [{ parts: [{ text: prompt }] }],
                };

                const response = await fetch(apiUrl, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(payload)
                });

                if (!response.ok) {
                    throw new Error(`Error API: ${response.status} ${response.statusText}`);
                }

                const result = await response.json();
                const summary = result?.candidates?.[0]?.content?.parts?.[0]?.text;

                if (summary) {
                    modalContent.innerHTML = `<p>${summary}</p>`;
                } else {
                    modalContent.innerHTML = `<p class="text-red-500">Maaf, ringkasan tidak dapat dimuat saat ini. Silakan coba lagi nanti.</p>`;
                }
            } catch (error) {
                console.error("Gagal mendapatkan ringkasan:", error);
                modalContent.innerHTML = `<p class="text-red-500">Terjadi kesalahan saat memuat ringkasan. Silakan coba lagi.</p>`;
            }
        };
    </script>
    <?php
    include 'template/footer.php';
    ?>
