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
        .layanan-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }
        .layanan-table th, .layanan-table td {
            text-align: left;
            padding: 1rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        .layanan-table th {
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
            <h2 class="text-xl font-bold text-white">LAYANAN</h2>
            <nav class="sidebar-menu w-full space-y-2">
                <a href="#" class="sidebar-item active" data-target="laboratorium-penguji">
                    <span>Laboratorium Penguji</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
                <a href="#" class="sidebar-item" data-target="program-magang">
                    <span>Program Magang</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
                <a href="#" class="sidebar-item" data-target="kunjungan-on-site">
                    <span>Kunjungan On Site</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
                <a href="#" class="sidebar-item" data-target="pendamping-narasumber">
                    <span>Pendamping/Narasumber</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
                <a href="#" class="sidebar-item" data-target="kerjasama">
                    <span>Kerjasama</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </nav>

            <div class="p-4 bg-white/10 rounded-xl w-full h-64 mt-auto"></div>
        </aside>

        <main class="content glass-bg rounded-xl p-6 space-y-6">
            <div id="laboratorium-penguji" class="content-section active">
                <div class="p-4 bg-white/10 rounded-xl">
                    <h2 class="text-2xl font-bold" id="lab-uji-title"></h2>
                    <p class="mt-4" id="lab-uji-description"></p>
                </div>
            </div>

            <div id="program-magang" class="content-section">
                <h2 class="text-2xl font-bold">Daftar Program Magang</h2>
                <div class="p-4 bg-white/10 rounded-xl overflow-x-auto">
                    <table class="layanan-table">
                        <thead>
                            <tr>
                                <th>Lembaga</th>
                                <th>Jumlah Orang</th>
                                <th>Mulai</th>
                                <th>Selesai</th>
                            </tr>
                        </thead>
                        <tbody id="magang-table-body">
                            </tbody>
                    </table>
                </div>
            </div>

            <div id="kunjungan-on-site" class="content-section">
                <h2 class="text-2xl font-bold">Daftar Kunjungan On Site</h2>
                <div class="p-4 bg-white/10 rounded-xl overflow-x-auto">
                    <table class="layanan-table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody id="kunjungan-table-body">
                            </tbody>
                    </table>
                </div>
            </div>

            <div id="pendamping-narasumber" class="content-section">
                <h2 class="text-2xl font-bold">Daftar Pendamping/Narasumber</h2>
                <div class="p-4 bg-white/10 rounded-xl overflow-x-auto">
                    <table class="layanan-table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Asal</th>
                            </tr>
                        </thead>
                        <tbody id="narasumber-table-body">
                            </tbody>
                    </table>
                </div>
            </div>

            <div id="kerjasama" class="content-section">
                <h2 class="text-2xl font-bold">Kerjasama</h2>
                <div class="p-4 bg-white/10 rounded-xl overflow-x-auto">
                    <table class="layanan-table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Lembaga</th>
                                <th>Jenis</th>
                                <th>Mulai</th>
                                <th>Selesai</th>
                            </tr>
                        </thead>
                        <tbody id="kerjasama-table-body">
                            </tbody>
                    </table>
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
                'laboratorium-penguji': { url: 'lab-uji', contentId: 'laboratorium-penguji', type: 'card' },
                'program-magang': { url: 'magang', contentId: 'program-magang', type: 'table' },
                'kunjungan-on-site': { url: 'kunjungan', contentId: 'kunjungan-on-site', type: 'table' },
                'pendamping-narasumber': { url: 'narasumber', contentId: 'pendamping-narasumber', type: 'table' },
                'kerjasama': { url: 'kerjasama', contentId: 'kerjasama', type: 'table' }
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
                        let tableBodyId;
                        let headers;
                        let colspan;
                        
                        if (targetId === 'kerjasama') {
                            tableBodyId = 'kerjasama-table-body';
                            headers = ['nama', 'lembaga', 'jenis', 'mulai', 'selesai'];
                            colspan = 5;
                        } else if (targetId === 'pendamping-narasumber') {
                            tableBodyId = 'narasumber-table-body';
                            headers = ['nama', 'asal'];
                            colspan = 2;
                        } else if (targetId === 'kunjungan-on-site') {
                            tableBodyId = 'kunjungan-table-body';
                            headers = ['nama', 'tanggal', 'keterangan'];
                            colspan = 3;
                        } else if (targetId === 'program-magang') {
                            // Tambahkan konfigurasi untuk Program Magang
                            tableBodyId = 'magang-table-body';
                            headers = ['lembaga', 'jumlah_orang', 'mulai', 'selesai'];
                            colspan = 4;
                        }

                        const tableBody = document.getElementById(tableBodyId);
                        tableBody.innerHTML = '';

                        if (items.length > 0) {
                            items.forEach(item => {
                                const row = document.createElement('tr');
                                let rowHtml = '';
                                headers.forEach(header => {
                                    rowHtml += `<td>${item[header] || '-'}</td>`; 
                                });
                                row.innerHTML = rowHtml;
                                tableBody.appendChild(row);
                            });
                        } else {
                            const row = document.createElement('tr');
                            row.innerHTML = `<td colspan="${colspan}" class="text-center py-4">Tidak ada data yang tersedia.</td>`;
                            tableBody.appendChild(row);
                        }

                    } else if (config.type === 'card') {
                        const content = items.length > 0 ? items[0] : null;
                        const titleElement = contentSection.querySelector('h2');
                        const descElement = contentSection.querySelector('p');

                        if (content) {
                            if (titleElement) titleElement.textContent = content.nama || content.judul || "Judul Tidak Tersedia";
                            if (descElement) descElement.innerHTML = content.deskripsi || content.isi || "Deskripsi Tidak Tersedia";
                        } else {
                            if (titleElement) titleElement.textContent = "Data tidak ditemukan.";
                            if (descElement) descElement.textContent = "";
                        }
                    }
                } catch (error) {
                    console.error("Gagal mengambil konten:", error);
                    const contentSection = document.getElementById(config.contentId);
                    if (contentSection) {
                        if (config.type === 'table') {
                            const tableBody = contentSection.querySelector('tbody');
                            if (tableBody) tableBody.innerHTML = `<tr><td colspan="5" class="text-center py-4 text-red-400">Gagal memuat data. Silakan coba lagi nanti.</td></tr>`;
                        } else if (config.type === 'card') {
                            const titleElement = contentSection.querySelector('h2');
                            if (titleElement) titleElement.textContent = "Gagal memuat data.";
                            const descElement = contentSection.querySelector('p');
                            if (descElement) descElement.textContent = "Silakan coba lagi nanti.";
                        }
                    }
                }
            };

            const activateTab = (targetId) => {
                sidebarItems.forEach(i => i.classList.remove('active'));
                const clickedItem = document.querySelector(`.sidebar-item[data-target="${targetId}"]`);
                if (clickedItem) {
                    clickedItem.classList.add('active');
                }
                contentSections.forEach(content => content.classList.remove('active'));
                const targetContent = document.getElementById(targetId);
                if (targetContent) {
                    targetContent.classList.add('active');
                }
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