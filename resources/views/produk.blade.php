<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRMP Website</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #004d40; /* Dark teal background */
            color: #d1d5db; /* Light gray text */
            overflow-x: auto;
        }
        .grid-container {
            display: grid;
            grid-template-areas:
                "header header header"
                "sidebar content content"
                "footer footer footer";
            grid-template-columns: 1fr 2fr 1fr;
            gap: 1rem;
            padding: 1rem;
            max-width: 1920px;
            /* Same as the PROFILE page */
            min-width: 1400px;
            margin: auto;
        }
        .header {
            grid-area: header;
        }
        .sidebar {
            grid-area: sidebar;
        }
        .content {
            grid-area: content;
        }
        .footer {
            grid-area: footer;
        }
        .glass-bg {
            background-color: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .sidebar-menu a {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0.75rem 1rem;
            border-radius: 0.5rem;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .sidebar-menu a:hover {
            background-color: rgba(255, 255, 255, 0.2);
            color: #ffffff;
        }
        .sidebar-menu a.active {
            background-color: #00796b; /* Warna hijau yang lebih cerah */
            color: #ffffff;
            font-weight: 600;
        }
        .content-section {
            display: none;
        }
        .content-section.active {
            display: block;
        }
        .sidebar-menu a svg {
            transition: opacity 0.3s ease, transform 0.3s ease;
            transform: translateX(0);
            opacity: 0;
        }
        .sidebar-menu a.active svg {
            opacity: 1;
            transform: translateX(5px);
        }
        @media (max-width: 1030px) {
            .grid-container {
                grid-template-areas:
                    "header"
                    "content"
                    "sidebar"
                    "footer";
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body class="bg-[#004d40] text-gray-300 min-h-screen flex flex-col overflow-x-auto">

    <div class="grid-container mx-auto rounded-3xl overflow-hidden">
        <header class="header rounded-xl glass-bg flex gap-6 overflow-hidden">
            <div class="w-1/2 p-4 flex items-center justify-start bg-white/10">
                <h1 class="text-xl font-bold">Anjungan Informasi Mandiri</h1>
            </div>
            <div class="w-1/2 p-4 flex items-center justify-end space-x-6 text-sm font-medium bg-white/5">
                <span class="text-white">Beranda</span>
                <span>Anjungan</span>
                <span>Bantuan</span>
            </div>
        </header>

        <aside class="sidebar glass-bg rounded-xl p-6 space-y-6 flex flex-col items-start justify-start">
            <h2 class="text-xl font-bold text-white">PRODUK UNGGULAN</h2>
            <nav class="sidebar-menu w-full space-y-2">
                <a href="#" class="sidebar-item active" data-target="varietas-unggul">
                    <span>Varietas unggul</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
                <a href="#" class="sidebar-item" data-target="teknologi-budidaya">
                    <span>Teknologi Budidaya</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
                <a href="#" class="sidebar-item" data-target="galeri-produk">
                    <span>Galeri Produk</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </nav>

            <div class="p-4 bg-white/10 rounded-xl w-full h-64 mt-auto"></div>
        </aside>

        <main class="content glass-bg rounded-xl p-6 space-y-6">
            <div id="varietas-unggul" class="content-section active">
                <div class="p-4 bg-white/10 rounded-xl">
                    <h2 class="text-2xl font-bold" id="varietas-unggul-title"></h2>
                    <p class="mt-4" id="varietas-unggul-description"></p>
                </div>
            </div>

            <div id="teknologi-budidaya" class="content-section">
                <div class="p-4 bg-white/10 rounded-xl">
                    <h2 class="text-2xl font-bold" id="teknologi-budidaya-title"></h2>
                    <p class="mt-4" id="teknologi-budidaya-description"></p>
                </div>
            </div>

            <div id="galeri-produk" class="content-section">
                <div class="p-4 bg-white/10 rounded-xl">
                    <h2 class="text-2xl font-bold" id="galeri-kegiatan-title"></h2>
                    <p class="mt-4" id="galeri-kegiatan-description"></p>
                </div>
            </div>
        </main>
    </div>

    @include('footer')
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sidebarItems = document.querySelectorAll('.sidebar-item');
            const contentSections = document.querySelectorAll('.content-section');
            const apiUrl = 'http://127.0.0.1:8000/api/'; // Ganti dengan URL API Anda jika berbeda

            const endpointMap = {
                'varietas-unggul': { url: 'varietas-unggul', titleId: 'varietas-unggul-title', descId: 'varietas-unggul-description' },
                'teknologi-budidaya': { url: 'teknologi-budidaya', titleId: 'teknologi-budidaya-title', descId: 'teknologi-budidaya-description' },
                // Menggunakan endpoint 'galeri-kegiatan' karena 'galeri-produk' tidak ada di api.php
                'galeri-produk': { url: 'galeri-kegiatan', titleId: 'galeri-kegiatan-title', descId: 'galeri-kegiatan-description' } 
            };

            const fetchContent = async (endpoint, titleId, descId) => {
                try {
                    const response = await fetch(`${apiUrl}${endpoint}`);
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    const data = await response.json();
                    
                    // Asumsi data yang diterima adalah array, dan kita ambil item pertama
                    const content = data.data && data.data.length > 0 ? data.data[0] : null;

                    if (content) {
                        const titleElement = document.getElementById(titleId);
                        const descElement = document.getElementById(descId);
                        
                        if (titleElement) {
                            // Ganti 'nama' atau 'judul' dengan nama field yang benar dari API Anda
                            titleElement.textContent = content.nama || content.judul || "Judul Tidak Tersedia"; 
                        }
                        if (descElement) {
                            // Ganti 'deskripsi' atau 'isi' dengan nama field yang benar dari API Anda
                            descElement.innerHTML = content.deskripsi || content.isi || "Deskripsi Tidak Tersedia"; 
                        }
                    } else {
                         // Jika tidak ada data, kosongkan konten
                        const titleElement = document.getElementById(titleId);
                        const descElement = document.getElementById(descId);
                        if(titleElement) titleElement.textContent = "Data tidak ditemukan.";
                        if(descElement) descElement.textContent = "";
                    }

                } catch (error) {
                    console.error("Gagal mengambil konten:", error);
                    const titleElement = document.getElementById(titleId);
                    if(titleElement) titleElement.textContent = "Gagal memuat data.";
                    const descElement = document.getElementById(descId);
                    if(descElement) descElement.textContent = "Silakan coba lagi nanti.";
                }
            };

            // Fungsi untuk mengaktifkan tab
            const activateTab = (targetId) => {
                // Hapus class 'active' dari semua item sidebar
                sidebarItems.forEach(i => {
                    i.classList.remove('active');
                    const icon = i.querySelector('svg');
                    if (icon) {
                        icon.style.opacity = '0';
                        icon.style.transform = 'translateX(0)';
                    }
                });

                // Tambahkan class 'active' ke item yang baru diklik
                const clickedItem = document.querySelector(`.sidebar-item[data-target="${targetId}"]`);
                if (clickedItem) {
                    clickedItem.classList.add('active');
                    const icon = clickedItem.querySelector('svg');
                    if (icon) {
                        icon.style.opacity = '1';
                        icon.style.transform = 'translateX(5px)';
                    }
                }

                // Sembunyikan semua konten
                contentSections.forEach(content => {
                    content.classList.remove('active');
                });

                // Tampilkan konten yang sesuai
                const targetContent = document.getElementById(targetId);
                if (targetContent) {
                    targetContent.classList.add('active');
                }
            };

            // Event listener untuk setiap item sidebar
            sidebarItems.forEach(item => {
                item.addEventListener('click', function (e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('data-target');
                    const { url, titleId, descId } = endpointMap[targetId];
                    
                    activateTab(targetId);
                    fetchContent(url, titleId, descId);
                });
            });

            // Muat konten awal untuk tab yang aktif saat pertama kali halaman dimuat
            const initialActiveItem = document.querySelector('.sidebar-item.active');
            if (initialActiveItem) {
                const initialTargetId = initialActiveItem.getAttribute('data-target');
                const { url, titleId, descId } = endpointMap[initialTargetId];
                fetchContent(url, titleId, descId);
            }
        });
    </script>
</body>
</html>