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
            max-height: 1080px;
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
            opacity: 0;
        }
        .sidebar-menu a.active svg {
            opacity: 1;
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
        /* Style untuk tabel */
        .profile-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }
        .profile-table th, .profile-table td {
            text-align: left;
            padding: 1rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        .profile-table th {
            background-color: rgba(255, 255, 255, 0.1);
            font-weight: 600;
        }
        .profile-table img {
            width: 80px; /* Ukuran gambar dalam tabel */
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
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
            <h2 class="text-xl font-bold text-white">PROFILE</h2>
            <nav class="sidebar-menu w-full space-y-2">
                <a href="#" class="sidebar-item active" data-target="tentang-kami">
                    <span>Tentang kami</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
                <a href="#" class="sidebar-item" data-target="struktur-organisasi">
                    <span>Struktur Organisasi</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
                <a href="#" class="sidebar-item" data-target="sambutan-kepala">
                    <span>Sambutan Kepala BRMP</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </nav>

            <div class="p-4 bg-white/10 rounded-xl w-full h-64 mt-auto"></div>
        </aside>

        <main class="content glass-bg rounded-xl p-6 space-y-6">
            <div id="tentang-kami" class="content-section active">
                <div class="p-4 bg-white/10 rounded-xl">
                    <h2 class="text-2xl font-bold">Tentang Kami</h2>
                    <p id="about-us-content" class="mt-4">Memuat...</p>
                </div>
            </div>

            <div id="struktur-organisasi" class="content-section">
                <h2 class="text-2xl font-bold">Struktur Organisasi</h2>
                <div class="p-4 bg-white/10 rounded-xl overflow-x-auto">
                    <table class="profile-table">
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                            </tr>
                        </thead>
                        <tbody id="struktur-table-body">
                            </tbody>
                    </table>
                </div>
            </div>

            <div id="sambutan-kepala" class="content-section">
                <div class="p-4 bg-white/10 rounded-xl">
                    <h2 class="text-2xl font-bold">Sambutan Kepala BRMP</h2>
                    <div class="flex items-center space-x-4 mt-4">
                        <img id="head-photo" src="https://placehold.co/100x100/2f80ed/ffffff?text=Memuat" alt="Foto Kepala BRMP" class="rounded-full border-2 border-white">
                        <div>
                            <h3 id="head-name" class="text-lg font-bold">Memuat...</h3>
                            <p id="head-title" class="text-sm text-gray-400">Memuat...</p>
                        </div>
                    </div>
                    <p id="head-speech" class="mt-4 text-justify">Memuat...</p>
                </div>
            </div>
        </main>
    </div>

    @include('footer')

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sidebarItems = document.querySelectorAll('.sidebar-item');
            const contentSections = document.querySelectorAll('.content-section');
            
            // Set the active state for the initial page load
            const initialActiveItem = document.querySelector('.sidebar-item.active');
            if (initialActiveItem) {
                const icon = initialActiveItem.querySelector('svg');
                if (icon) {
                    icon.classList.add('opacity-1');
                }
            }

            sidebarItems.forEach(item => {
                item.addEventListener('click', function (e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('data-target');

                    // Sembunyikan semua konten dan hapus kelas aktif dari sidebar
                    contentSections.forEach(content => content.classList.remove('active'));
                    sidebarItems.forEach(i => i.classList.remove('active'));

                    // Tampilkan konten yang sesuai dan tambahkan kelas aktif
                    const targetContent = document.getElementById(targetId);
                    if (targetContent) {
                        targetContent.classList.add('active');
                    }
                    this.classList.add('active');

                    // Panggil fungsi pengambilan data yang sesuai
                    if (targetId === 'tentang-kami') {
                        fetchTentangKami();
                    } else if (targetId === 'struktur-organisasi') {
                        fetchStrukturOrganisasi();
                    } else if (targetId === 'sambutan-kepala') {
                        fetchSambutanKepala();
                    }
                });
            });

            // Panggil fungsi fetch untuk konten awal
            fetchTentangKami();
        });

        // Fungsi untuk mengambil data "Tentang Kami" dari API
        async function fetchTentangKami() {
            const aboutUsContent = document.getElementById('about-us-content');
            aboutUsContent.textContent = 'Memuat...';
            try {
                const response = await fetch('http://localhost:8000/api/tentang-kami');
                const data = await response.json();
                const tentangKami = data.data[0];
                if (tentangKami && tentangKami.isi) {
                    aboutUsContent.textContent = tentangKami.isi;
                } else {
                    aboutUsContent.textContent = 'Konten "Tentang Kami" tidak tersedia.';
                }
            } catch (error) {
                console.error('Failed to fetch about us data:', error);
                aboutUsContent.textContent = 'Gagal memuat konten. Silakan coba lagi.';
            }
        }

        // Fungsi untuk mengambil data "Struktur Organisasi" dari API
        async function fetchStrukturOrganisasi() {
            const strukturTableBody = document.getElementById('struktur-table-body');
            strukturTableBody.innerHTML = '<tr><td colspan="3" class="text-center py-4">Memuat...</td></tr>';

            try {
                const response = await fetch('http://localhost:8000/api/struktur');
                if (!response.ok) {
                    throw new Error('Gagal memuat data struktur organisasi.');
                }
                const data = await response.json();
                const items = data.data || [];

                strukturTableBody.innerHTML = ''; // Kosongkan tabel sebelum mengisi
                
                if (items.length > 0) {
                    items.forEach(item => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                            <td>
                                <img src="${item.foto || 'https://placehold.co/80x80/004d40/ffffff?text=No+Foto'}" 
                                     alt="Foto ${item.nama || 'Anggota'}" 
                                     class="rounded-full">
                            </td>
                            <td>${item.nama || '-'}</td>
                            <td>${item.jabatan || '-'}</td>
                        `;
                        strukturTableBody.appendChild(row);
                    });
                } else {
                    const row = document.createElement('tr');
                    row.innerHTML = `<td colspan="3" class="text-center py-4">Tidak ada data yang tersedia.</td>`;
                    strukturTableBody.appendChild(row);
                }

            } catch (error) {
                console.error('Failed to fetch organization structure data:', error);
                const row = document.createElement('tr');
                row.innerHTML = `<td colspan="3" class="text-center py-4 text-red-400">Gagal memuat data. Silakan coba lagi.</td>`;
                strukturTableBody.appendChild(row);
            }
        }

        // Fungsi untuk mengambil data "Sambutan Kepala BRMP" dari API
        async function fetchSambutanKepala() {
            const headPhoto = document.getElementById('head-photo');
            const headName = document.getElementById('head-name');
            const headTitle = document.getElementById('head-title');
            const headSpeech = document.getElementById('head-speech');

            headName.textContent = 'Memuat...';
            headTitle.textContent = 'Memuat...';
            headSpeech.textContent = 'Memuat...';
            headPhoto.src = 'https://placehold.co/100x100/2f80ed/ffffff?text=Memuat';
            headPhoto.alt = 'Memuat foto...';

            try {
                const response = await fetch('http://localhost:8000/api/sambutan-kepala');
                if (!response.ok) {
                    throw new Error('Gagal memuat data sambutan kepala.');
                }
                const data = await response.json();
                const sambutan = data.data[0];

                if (sambutan) {
                    headName.textContent = sambutan.nama || 'Nama Tidak Tersedia';
                    headTitle.textContent = sambutan.jabatan || 'Jabatan Tidak Tersedia';
                    headSpeech.textContent = sambutan.isi || 'Sambutan tidak tersedia.';
                    
                    if (sambutan.foto) {
                        headPhoto.src = sambutan.foto;
                        headPhoto.alt = `Foto ${sambutan.nama || 'Kepala BRMP'}`;
                    } else {
                        headPhoto.src = 'https://placehold.co/100x100/2f80ed/ffffff?text=Tidak+Ada+Foto';
                        headPhoto.alt = 'Foto tidak tersedia.';
                    }
                } else {
                    headName.textContent = 'Data Tidak Tersedia';
                    headTitle.textContent = 'Data Tidak Tersedia';
                    headSpeech.textContent = 'Tidak ada data sambutan.';
                    headPhoto.src = 'https://placehold.co/100x100/2f80ed/ffffff?text=Tidak+Ada+Foto';
                    headPhoto.alt = 'Foto tidak tersedia.';
                }
            } catch (error) {
                console.error('Failed to fetch head of BRMP data:', error);
                headName.textContent = 'Gagal Memuat';
                headTitle.textContent = 'Gagal Memuat';
                headSpeech.textContent = 'Gagal memuat sambutan. Silakan coba lagi.';
                headPhoto.src = 'https://placehold.co/100x100/ff0000/ffffff?text=Error';
                headPhoto.alt = 'Gagal memuat foto.';
            }
        }
    </script>
</body>
</html>