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
            min-width: 1080px;
            height: 1080px;
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
        .star-rating .star {
            font-size: 1.25rem;
        }
        .star-filled {
            color: #FFD700; /* Gold color for filled stars */
        }
        .star-empty {
            color: #d1d5db; /* Gray color for empty stars */
        }
        /* FAQ styles */
        .faq-item input[type="checkbox"] {
            display: none;
        }
        .faq-question {
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }
        .faq-item input[type="checkbox"]:checked ~ .faq-answer {
            max-height: 200px; /* Adjust as needed */
            transition: max-height 0.3s ease-in;
        }
        .faq-question .arrow {
            transition: transform 0.3s;
        }
        .faq-item input[type="checkbox"]:checked ~ .faq-question .arrow {
            transform: rotate(180deg);
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
    </style>
</head>
<body class="bg-[#004d40] text-gray-300 min-h-screen flex flex-col overflow-x-auto ">

    <div class="grid-container w-full h-full mx-auto rounded-3xl overflow-hidden">

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

        <aside class="sidebar glass-bg rounded-xl p-6 space-y-6">
            <div class="p-4 bg-white/10 rounded-xl space-y-4" id="sambutan-container">
                <div class="flex items-center space-x-4">
                    <img id="foto-kepala" src="https://placehold.co/80x80/2f80ed/ffffff?text=d" alt="Foto Profil" class="rounded-full border-2 border-white">
                    <div>
                        <h2 id="nama-kepala" class="text-lg font-bold">Memuat...</h2>
                        <p id="jabatan-kepala" class="text-xs text-gray-400">Memuat...</p>
                    </div>
                </div>
                <div class="text-sm space-y-2">
                    <p id="bio-kepala">Memuat sambutan...</p>
                </div>
            </div>

            <div class="p-4 bg-white/10 rounded-xl flex justify-between items-center">
                <div>
                    <p class="text-sm">Jakarta</p>
                    <p class="text-2xl font-bold">40°C</p>
                </div>
                <div class="text-right">
                    <p class="text-sm">10:13 WIB</p>
                    <p class="text-xs">Agustus, 28 2025</p>
                </div>
            </div>

            <div class="p-4 bg-white/10 rounded-xl text-center">
                <p class="text-sm font-bold">Rata-rata Rating</p>
                <div class="star-rating flex justify-center space-x-1 mt-2">
                    <span class="star star-filled">★</span>
                    <span class="star star-filled">★</span>
                    <span class="star star-filled">★</span>
                    <span class="star star-filled">★</span>
                    <span class="star star-empty">★</span>
                </div>
                <p class="text-xs mt-1">4.0/5</p>
            </div>

            <div class="p-4 bg-white/10 rounded-xl h-auto">
                <h3 class="text-lg font-bold mb-4">FAQ (Pertanyaan Umum)</h3>
                <div class="space-y-4">
                    <div class="faq-item">
                        <input type="checkbox" id="faq1" class="hidden">
                        <label for="faq1" class="faq-question">
                            <span class="font-medium">Apa itu BRMP?</span>
                            <span class="arrow">▼</span>
                        </label>
                        <div class="faq-answer mt-2 pl-4 text-sm text-gray-400">
                            BRMP adalah Balai Riset dan Pengembangan Pertanian.
                        </div>
                    </div>
                    <div class="faq-item">
                        <input type="checkbox" id="faq2">
                        <label for="faq2" class="faq-question">
                            <span class="font-medium">Bagaimana cara mendapatkan layanan?</span>
                            <span class="arrow">▼</span>
                        </label>
                        <div class="faq-answer mt-2 pl-4 text-sm text-gray-400">
                            Anda dapat melihat daftar layanan kami di halaman "Layanan" dan mengikuti petunjuk yang tersedia.
                        </div>
                    </div>
                    <div class="faq-item">
                        <input type="checkbox" id="faq3">
                        <label for="faq3" class="faq-question">
                            <span class="font-medium">Di mana saya bisa melihat hasil riset terbaru?</span>
                            <span class="arrow">▼</span>
                        </label>
                        <div class="faq-answer mt-2 pl-4 text-sm text-gray-400">
                            Hasil riset terbaru kami tersedia di halaman "Berita & Riset".
                        </div>
                    </div>
                </div>
            </div>
        </aside>

        <main class="content glass-bg rounded-xl p-6 space-y-6">
            <div class="p-4 bg-white/10 rounded-xl text-center">
                <h2 class="text-2xl font-bold">Selamat Datang di Wilayah Pengembangan Pusat Anjungan Informasi Mandiri BRMP Aneka Kacang</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4" id="galeri-container">
                <div class="rounded-xl overflow-hidden aspect-w-16 aspect-h-9 flex items-center justify-center bg-white/5 text-gray-500 text-sm border border-dashed border-gray-600">
                    <span>Image 1</span>
                </div>
                <div class="rounded-xl overflow-hidden aspect-w-16 aspect-h-9 flex items-center justify-center bg-white/5 text-gray-500 text-sm border border-dashed border-gray-600">
                    <span>Image 2</span>
                </div>
                <div class="rounded-xl overflow-hidden aspect-w-16 aspect-h-9 flex items-center justify-center bg-white/5 text-gray-500 text-sm border border-dashed border-gray-600">
                    <span>Image 3</span>
                </div>
            </div>

            <div class="relative bg-white/10 rounded-xl p-8 text-center flex flex-col items-center">
                <h3 class="text-xl font-bold mb-4">BRMP Aneka Kacang Menetapkan Standar Mutu Instrumen Pertanian</h3>
                <p class="text-sm leading-relaxed text-gray-400">
                    Balai Perakitan dan Pengujian Tanaman Aneka Kacang (BRMP Aneka Kacang) merupakan unit pelaksana teknis di bawah <b>Badan Perakitan dan Modernisasi Pertanian (BRMP)</b>, Kementerian Pertanian. BRMP Aneka Kacang berperan penting dalam memajukan pertanian kacang-kacangan di Indonesia.
                </p>
                <p class="text-sm leading-relaxed text-gray-400 mt-2">
                    Melalui fokus pada <b>riset, perekayasaan, dan pengujian</b>, balai ini tidak hanya mengembangkan varietas kacang unggul seperti kedelai, kacang tanah, dan kacang hijau, tetapi juga memastikan kualitas alat dan mesin pertanian yang digunakan. Dengan menetapkan standar mutu instrumen, BRMP Aneka Kacang bertujuan meningkatkan produktivitas, efisiensi, dan daya saing petani, sehingga mendukung ketahanan pangan nasional secara berkelanjutan.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-4 bg-white/10 rounded-xl flex items-center space-x-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <div>
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.5305208272025!2d112.6255475!3d-8.047239800000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6277941879d57%3A0xd0393bdec55ce256!2sBRMP%20ANEKA%20KACANG!5e0!3m2!1sid!2sid!4v1757381618989!5m2!1sid!2sid" width="400" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                       </iframe>
                    </div>
                </div>
                <div class="p-4 bg-white/10 rounded-xl space-y-2">
                    <p class="font-bold">Kontak</p>
                    <div class="flex items-center space-x-2 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span>brmp@gmail.com</span>
                    </div>
                    <div class="flex items-center space-x-2 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <span>(0361) 813 134</span>
                    </div>
                </div>
            </div>
        </main>
    </div>

     @include('footer')

    <script>
        // Fungsi untuk mengambil data dari API dan memperbarui galeri
        async function fetchGalleryImages() {
            const container = document.getElementById('galeri-container');
            
            try {
                // URL  benar dan API  berjalan
                const response = await fetch('http://localhost:8000/api/galeri-kegiatan');
                if (!response.ok) {
                    throw new Error('Gagal mengambil data dari API galeri.');
                }
                const data = await response.json();

                const images = data.data.slice(0, 3);
                container.innerHTML = ''; // Kosongkan placeholder sebelum mengisi dengan data asli

                if (images.length === 0) {
                    container.innerHTML = '<p class="col-span-3 text-center text-gray-500">Tidak ada gambar yang tersedia.</p>';
                } else {
                    images.forEach(image => {
                        const imageUrl = image.foto;
                        const altText = image.judul || 'Galeri BRMP';

                        const imageHtml = `
                            <div class="rounded-xl overflow-hidden aspect-w-16 aspect-h-9">
                                <img src="${imageUrl}" alt="${altText}" class="w-full h-full object-cover rounded-xl">
                            </div>
                        `;
                        container.innerHTML += imageHtml;
                    });
                }
            } catch (error) {
                console.error("Terjadi kesalahan:", error);
                // Jika gagal, tampilkan pesan error dan pertahankan placeholder
                container.innerHTML = `
                    <p class="col-span-3 text-center text-red-400 mb-4">Gagal memuat galeri. Silakan coba lagi nanti.</p>
                    <div class="rounded-xl overflow-hidden aspect-w-16 aspect-h-9 flex items-center justify-center bg-white/5 text-gray-500 text-sm border border-dashed border-red-600">
                        <span>Gagal: Slot Foto 1</span>
                    </div>
                    <div class="rounded-xl overflow-hidden aspect-w-16 aspect-h-9 flex items-center justify-center bg-white/5 text-gray-500 text-sm border border-dashed border-red-600">
                        <span>Gagal: Slot Foto 2</span>
                    </div>
                    <div class="rounded-xl overflow-hidden aspect-w-16 aspect-h-9 flex items-center justify-center bg-white/5 text-gray-500 text-sm border border-dashed border-red-600">
                        <span>Gagal: Slot Foto 3</span>
                    </div>
                `;
            }
        }

        // Panggil fungsi saat halaman dimuat
        document.addEventListener('DOMContentLoaded', () => {
            fetchGalleryImages();
            fetchSambutanKepala(); // Panggil fungsi baru ini
        });

        // Fungsi untuk mengambil data sambutan kepala
        async function fetchSambutanKepala() {
            const fotoKepala = document.getElementById('foto-kepala');
            const namaKepala = document.getElementById('nama-kepala');
            const jabatanKepala = document.getElementById('jabatan-kepala');
            const bioKepala = document.getElementById('bio-kepala');

            try {
                const response = await fetch('http://localhost:8000/api/sambutan-kepala');
                if (!response.ok) {
                    throw new Error('Gagal mengambil data sambutan kepala.');
                }
                const data = await response.json();
                
                // Ambil data pertama dari array 'data'
                const sambutan = data.data[0];

                if (sambutan) {
                    fotoKepala.src = sambutan.foto || 'https://placehold.co/80x80/2f80ed/ffffff?text=d';
                    fotoKepala.alt = `Foto ${sambutan.nama}`;
                    namaKepala.textContent = sambutan.nama || 'Nama Tidak Tersedia';
                    jabatanKepala.textContent = sambutan.jabatan || 'Jabatan Tidak Tersedia';
                    bioKepala.textContent = sambutan.bio || 'Sambutan tidak tersedia.';
                } else {
                    namaKepala.textContent = 'Data Tidak Tersedia';
                    jabatanKepala.textContent = 'Data Tidak Tersedia';
                    bioKepala.textContent = 'Tidak ada data sambutan kepala.';
                }

            } catch (error) {
                console.error("Terjadi kesalahan:", error);
                namaKepala.textContent = 'sambutan kepala';
                jabatanKepala.textContent = 'Gagal Memuat';
                bioKepala.textContent = 'Gagal memuat sambutan kepala. Silakan lagi.';
            }
        }

    </script>
</body>
</html>