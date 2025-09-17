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
            transition: opacity 0.3s ease;
        }
        .sidebar-menu a:not(.active) svg {
            opacity: 0;
        }
        .sidebar-menu a.active svg {
            opacity: 1;
        }
        .header-content {
            height: 100px; /* Menentukan tinggi header secara eksplisit */
            padding-left: 2rem;
            padding-right: 2rem;
            display: flex;
            align-items: center;
        }
        .content-card-berita {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        .content-card-berita img {
            width: 100%;
            height: auto;
            border-radius: 0.5rem;
        }
        @media (max-width: 1024px) {
            .grid-container {
                grid-template-areas:
                    "header"
                    "content"
                    "sidebar"
                    "footer";
                grid-template-columns: 1fr;
            }
        }
        /* Style untuk tabel */
        .agenda-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }
        .agenda-table th, .agenda-table td {
            text-align: left;
            padding: 1rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        .agenda-table th {
            background-color: rgba(255, 255, 255, 0.1);
            font-weight: 600;
        }
    </style>
</head>
<body class="bg-[#004d40] text-gray-300 min-h-screen flex flex-col overflow-x-auto">

    <div class="grid-container mx-auto rounded-3xl overflow-hidden">

        <header class="header rounded-xl glass-bg flex gap-6 overflow-hidden">
            <div class="header-content w-1/2 p-4 flex items-center justify-start bg-white/10">
                <h1 class="text-xl font-bold">Anjungan Informasi Mandiri</h1>
            </div>
            <div class="header-content w-1/2 p-4 flex items-center justify-end space-x-6 text-sm font-medium bg-white/5">
                <span class="text-white">Beranda</span>
                <span>Anjungan</span>
                <span>Bantuan</span>
            </div>
        </header>

        <aside class="sidebar glass-bg rounded-xl p-6 space-y-6 flex flex-col items-start justify-start">
            <h2 class="text-xl font-bold text-white">Berita Kegiatan</h2>
            <nav class="sidebar-menu w-full space-y-2">
                <a href="#" class="sidebar-item active" data-target="agenda">
                    <span>Agenda</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
                <a href="#" class="sidebar-item" data-target="berita">
                    <span>Berita</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
                <a href="#" class="sidebar-item" data-target="galeri-kegiatan">
                    <span>Galeri Kegiatan</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </nav>

            <div class="p-4 bg-white/10 rounded-xl w-full h-64 mt-auto"></div>
        </aside>

        <main class="content glass-bg rounded-xl p-6 space-y-6">
            <div id="agenda" class="content-section active">
                <h2 class="text-2xl font-bold">Agenda Kegiatan</h2>
                <div class="p-4 bg-white/10 rounded-xl overflow-x-auto">
                    <table class="agenda-table">
                        <thead>
                            <tr>
                                <th>Nama Agenda</th>
                                <th>Tanggal Acara</th>
                                <th>Lokasi</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody id="agenda-table-body">
                            </tbody>
                    </table>
                </div>
            </div>

            <div id="berita" class="content-section">
                <div class="p-4 bg-white/10 rounded-xl content-card-berita">
                    <img id="berita-image" src="" alt="Gambar Berita" class="hidden">
                    <h2 class="text-2xl font-bold" id="berita-title"></h2>
                    <p class="mt-4" id="berita-description"></p>
                </div>
            </div>

            <div id="galeri-kegiatan" class="content-section">
                <div class="p-4 bg-white/10 rounded-xl content-card-berita">
                    <img id="galeri-kegiatan-image" src="" alt="Gambar Galeri Kegiatan" class="hidden">
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
            const apiUrl = 'http://127.0.0.1:8000/api';

            const endpointMap = {
                'agenda': { url: 'agenda', contentId: 'agenda', type: 'table' },
                'berita': { url: 'berita', contentId: 'berita', type: 'card', imageId: 'berita-image' },
                'galeri-kegiatan': { url: 'galeri-kegiatan', contentId: 'galeri-kegiatan', type: 'card', imageId: 'galeri-kegiatan-image' }
            };

            const fetchAndDisplayContent = async (targetId) => {
                const config = endpointMap[targetId];
                if (!config) return;

                const contentSection = document.getElementById(config.contentId);
                if (!contentSection) return;

                try {
                    const response = await fetch(`${apiUrl}/${config.url}`);
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    const data = await response.json();
                    const items = data.data || [];

                    if (config.type === 'table') {
                        const tableBody = document.getElementById('agenda-table-body');
                        tableBody.innerHTML = ''; // Kosongkan tabel sebelum mengisi

                        if (items.length > 0) {
                            items.forEach(item => {
                                const originalDate = new Date(item.tanggal);
                                const formattedDate = originalDate.toLocaleDateString('id-ID', {
                                    day: '2-digit',
                                    month: 'long',
                                    year: 'numeric'
                                });

                                const row = document.createElement('tr');
                                row.innerHTML = `
                                    <td>${item.nama_agenda || '-'}</td>
                                    <td>${formattedDate || '-'}</td>
                                    <td>${item.lokasi || '-'}</td>
                                    <td>${item.keterangan || '-'}</td>
                                `;
                                tableBody.appendChild(row);
                            });
                        } else {
                            const row = document.createElement('tr');
                            row.innerHTML = `<td colspan="4" class="text-center py-4">Tidak ada agenda yang tersedia.</td>`;
                            tableBody.appendChild(row);
                        }
                    } else if (config.type === 'card') {
                        // Logika untuk menampilkan card (berita atau galeri)
                        const content = items.length > 0 ? items[0] : null;
                        const titleElement = contentSection.querySelector('h2');
                        const descElement = contentSection.querySelector('p');
                        const imageElement = config.imageId ? document.getElementById(config.imageId) : null;

                        if (content) {
                            if (titleElement) titleElement.textContent = content.judul || "Judul Tidak Tersedia";
                            if (descElement) descElement.innerHTML = content.isi || "Deskripsi Tidak Tersedia";
                            if (imageElement && content.cover) {
                                imageElement.src = `http://127.0.0.1:8000/storage/${content.cover}`;
                                imageElement.classList.remove('hidden');
                            } else if (imageElement) {
                                imageElement.classList.add('hidden');
                            }
                        } else {
                            if (titleElement) titleElement.textContent = "Data tidak ditemukan.";
                            if (descElement) descElement.textContent = "";
                            if (imageElement) imageElement.classList.add('hidden');
                        }
                    }
                } catch (error) {
                    console.error("Gagal mengambil konten:", error);
                    const contentSection = document.getElementById(config.contentId);
                    if (contentSection) {
                        if (config.type === 'table') {
                            const tableBody = contentSection.querySelector('tbody');
                            if (tableBody) tableBody.innerHTML = `<tr><td colspan="4" class="text-center py-4 text-red-400">Gagal memuat data. Silakan coba lagi nanti.</td></tr>`;
                        } else if (config.type === 'card') {
                            const titleElement = contentSection.querySelector('h2');
                            if (titleElement) titleElement.textContent = "Gagal memuat data.";
                            const descElement = contentSection.querySelector('p');
                            if (descElement) descElement.textContent = "Silakan coba lagi nanti.";
                            const imageElement = config.imageId ? document.getElementById(config.imageId) : null;
                            if (imageElement) imageElement.classList.add('hidden');
                        }
                    }
                }
            };

            const activateTab = (targetId) => {
                sidebarItems.forEach(i => i.classList.remove('active'));
                const clickedItem = document.querySelector(`.sidebar-item[data-target="${targetId}"]`);
                if (clickedItem) clickedItem.classList.add('active');

                contentSections.forEach(content => content.classList.remove('active'));
                const targetContent = document.getElementById(targetId);
                if (targetContent) targetContent.classList.add('active');
            };

            sidebarItems.forEach(item => {
                item.addEventListener('click', function (e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('data-target');
                    activateTab(targetId);
                    fetchAndDisplayContent(targetId);
                });
            });

            const initialActiveItem = document.querySelector('.sidebar-item.active');
            if (initialActiveItem) {
                const initialTargetId = initialActiveItem.getAttribute('data-target');
                activateTab(initialTargetId);
                fetchAndDisplayContent(initialTargetId);
            }
        });
    </script>
</body>
</html>