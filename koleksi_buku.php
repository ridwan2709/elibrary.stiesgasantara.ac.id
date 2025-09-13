 <?php
 include 'template/header.php';
 ?>
    <!-- Konten Halaman Koleksi -->
    <main class="container mx-auto px-4 lg:px-8 mt-10">
        <h1 class="text-3xl md:text-4xl font-extrabold text-center text-main mb-8">Koleksi Buku Lengkap</h1>

        <!-- Pencarian Koleksi -->
        <div class="relative w-full max-w-xl mx-auto mb-10">
            <input type="text" id="search-input" placeholder="Cari buku, penulis, kategori..." class="w-full pl-5 pr-12 py-3 rounded-full border-2 border-gray-300 focus:outline-none focus:border-main text-gray-700 placeholder-gray-400 text-base shadow-sm">
            <button class="absolute right-2 top-1/2 -translate-y-1/2 bg-gray-400 text-white p-2 rounded-full hover:bg-gray-500 transition duration-300" onclick="filterBooks()">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </button>
        </div>

        <!-- Daftar Buku -->
        <section class="book-list-container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6" id="books-list">
            <?php
            include 'inc/koneksi.php';
            $sql = $koneksi->query("SELECT * FROM tb_buku ORDER BY judul_buku");
            while ($data = $sql->fetch_assoc()) {
            ?>
            <div class="book-card bg-white rounded-lg shadow-md hover:shadow-xl transition duration-300 p-4 flex flex-col items-center text-center" 
                 data-title="<?php echo htmlspecialchars($data['judul_buku']); ?>" 
                 data-author="<?php echo htmlspecialchars($data['pengarang']); ?>" 
                 data-category="<?php echo htmlspecialchars($data['penerbit']); ?>">
                
                <?php if (!empty($data['cover_image'])): ?>
                    <img src="uploads/book_covers/<?php echo $data['cover_image']; ?>" 
                         alt="Cover <?php echo htmlspecialchars($data['judul_buku']); ?>" 
                         class="w-2/3 md:w-full rounded-md shadow-lg mb-4" 
                         style="height: 200px; object-fit: cover;">
                <?php else: ?>
                    <div class="w-2/3 md:w-full rounded-md shadow-lg mb-4 bg-gray-200 flex items-center justify-center" 
                         style="height: 200px;">
                        <span class="text-gray-500 text-sm">No Cover</span>
                    </div>
                <?php endif; ?>
                
                <h3 class="font-semibold text-sm md:text-base text-gray-800 line-clamp-2"><?php echo htmlspecialchars($data['judul_buku']); ?></h3>
                <p class="text-xs text-gray-500 mt-1">oleh <?php echo htmlspecialchars($data['pengarang']); ?></p>
                <p class="text-xs text-gray-400 mt-1">Penerbit: <?php echo htmlspecialchars($data['penerbit']); ?></p>
                <p class="text-xs text-gray-400 mt-1">Tahun: <?php echo $data['th_terbit']; ?></p>
                <button class="mt-4 w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md transition duration-300 view-details-btn">
                    Lihat Detail
                </button>
            </div>
            <?php } ?>
        </section>
    </main>

    <!-- Modal untuk Detail Buku -->
    <div id="details-modal" class="modal hidden">
        <div class="modal-content">
            <button id="close-modal-btn-details" class="absolute top-4 right-4 text-gray-500 hover:text-gray-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <h2 class="text-xl font-bold text-main mb-4" id="modal-title-details"></h2>
            <div id="modal-content-details" class="text-gray-700"></div>
        </div>
    </div>

    <script>
        // Mengubah visibilitas menu mobile saat tombol hamburger diklik
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // Logika untuk menampilkan detail buku
        document.querySelectorAll('.view-details-btn').forEach(button => {
            button.addEventListener('click', function() {
                const card = this.closest('.book-card');
                const title = card.dataset.title;
                const author = card.dataset.author;
                const category = card.dataset.category;
                showDetails(title, author, category);
            });
        });

        // Menutup modal detail buku
        document.getElementById('close-modal-btn-details').addEventListener('click', function() {
            document.getElementById('details-modal').classList.add('hidden');
        });
        
        const showDetails = (title, author, category) => {
            const modal = document.getElementById('details-modal');
            const modalTitle = document.getElementById('modal-title-details');
            const modalContent = document.getElementById('modal-content-details');

            modalTitle.textContent = `Detail Buku: ${title}`;
            modalContent.innerHTML = `
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="md:w-1/3">
                        <img src="uploads/book_covers/${document.querySelector(`[data-title="${title}"] img`).src.split('/').pop()}" 
                             alt="Cover ${title}" class="w-full rounded-md shadow-lg">
                    </div>
                    <div class="md:w-2/3">
                        <p><strong>Judul:</strong> ${title}</p>
                        <p><strong>Penulis:</strong> ${author}</p>
                        <p><strong>Penerbit:</strong> ${category}</p>
                        <p class="mt-4 text-gray-500">
                            Buku ini tersedia di perpustakaan. Silakan hubungi petugas untuk informasi lebih lanjut tentang ketersediaan dan peminjaman.
                        </p>
                    </div>
                </div>
            `;
            modal.classList.remove('hidden');
        };

        const filterBooks = () => {
            const input = document.getElementById('search-input').value.toLowerCase();
            const bookCards = document.querySelectorAll('.book-card');
            
            bookCards.forEach(card => {
                const title = card.dataset.title.toLowerCase();
                const author = card.dataset.author.toLowerCase();
                const category = card.dataset.category.toLowerCase();

                if (title.includes(input) || author.includes(input) || category.includes(input)) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        };
    </script>
    
    <?php
    include 'template/footer.php';
    ?>
