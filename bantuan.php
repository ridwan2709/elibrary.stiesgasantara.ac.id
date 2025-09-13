<?php
include 'template/header.php';
?>
    <!-- Konten Halaman Bantuan/FAQ -->
    <main class="container mx-auto px-4 lg:px-8 mt-10">
        <h1 class="text-3xl md:text-4xl font-extrabold text-center text-main mb-4">Bantuan & Tanya Jawab (FAQ)</h1>
        <p class="text-center text-gray-600 max-w-2xl mx-auto mb-12">
            Temukan jawaban atas pertanyaan yang paling sering diajukan mengenai layanan perpustakaan kami.
        </p>

        <!-- Bagian FAQ -->
        <section class="max-w-3xl mx-auto">
            <!-- FAQ Item 1 -->
            <div class="mb-4">
                <button class="faq-question w-full text-left p-4 rounded-lg shadow-md flex justify-between items-center transition duration-300 bg-white" onclick="toggleAnswer(1)">
                    <span class="font-semibold text-lg text-gray-800">Bagaimana cara mendaftar sebagai anggota perpustakaan?</span>
                    <svg class="w-6 h-6 transform transition-transform duration-300" id="icon-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div id="answer-1" class="faq-answer mt-2 p-4 bg-white rounded-lg shadow-inner hidden">
                    <p class="text-gray-600">Anda dapat mendaftar langsung di meja layanan perpustakaan dengan membawa kartu mahasiswa atau kartu identitas.</p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="mb-4">
                <button class="faq-question w-full text-left p-4 rounded-lg shadow-md flex justify-between items-center transition duration-300 bg-white" onclick="toggleAnswer(2)">
                    <span class="font-semibold text-lg text-gray-800">Berapa lama batas waktu peminjaman buku?</span>
                    <svg class="w-6 h-6 transform transition-transform duration-300" id="icon-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div id="answer-2" class="faq-answer mt-2 p-4 bg-white rounded-lg shadow-inner hidden">
                    <p class="text-gray-600">Batas waktu peminjaman buku adalah 7 hari. Anda dapat memperpanjangnya satu kali secara online atau di meja layanan.</p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="mb-4">
                <button class="faq-question w-full text-left p-4 rounded-lg shadow-md flex justify-between items-center transition duration-300 bg-white" onclick="toggleAnswer(3)">
                    <span class="font-semibold text-lg text-gray-800">Apakah saya bisa meminjam lebih dari satu buku?</span>
                    <svg class="w-6 h-6 transform transition-transform duration-300" id="icon-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div id="answer-3" class="faq-answer mt-2 p-4 bg-white rounded-lg shadow-inner hidden">
                    <p class="text-gray-600">Anggota aktif diperbolehkan meminjam hingga 3 buku secara bersamaan.</p>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="mb-4">
                <button class="faq-question w-full text-left p-4 rounded-lg shadow-md flex justify-between items-center transition duration-300 bg-white" onclick="toggleAnswer(4)">
                    <span class="font-semibold text-lg text-gray-800">Apa yang harus saya lakukan jika buku hilang atau rusak?</span>
                    <svg class="w-6 h-6 transform transition-transform duration-300" id="icon-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div id="answer-4" class="faq-answer mt-2 p-4 bg-white rounded-lg shadow-inner hidden">
                    <p class="text-gray-600">Silakan lapor ke staf perpustakaan. Anda mungkin akan diminta untuk mengganti buku tersebut dengan judul yang sama atau membayar biaya penggantian sesuai kebijakan.</p>
                </div>
            </div>

        </section>
    </main>
    <script>
        // Mengubah visibilitas menu mobile saat tombol hamburger diklik
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // Logika untuk FAQ
        function toggleAnswer(id) {
            const answer = document.getElementById(`answer-${id}`);
            const icon = document.getElementById(`icon-${id}`);
            
            answer.classList.toggle('hidden');
            if (icon.style.transform === 'rotate(180deg)') {
                icon.style.transform = 'rotate(0deg)';
            } else {
                icon.style.transform = 'rotate(180deg)';
            }
        }
    </script>
    <?php
    include 'template/footer.php';
    ?>
