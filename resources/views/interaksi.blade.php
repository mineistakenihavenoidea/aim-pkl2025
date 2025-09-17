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
            display: flex; /* Menggunakan flexbox untuk tata letak */
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
        .sidebar-menu a svg {
            transition: opacity 0.3s ease;
            opacity: 0;
        }
        .sidebar-menu a.active svg {
            opacity: 1;
        }
        .content-section {
            display: none;
        }
        .content-section.active {
            display: block;
        }
        .content-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
        }
        @media (max-width: 1024px) {
            .content-grid {
                grid-template-columns: 1fr;
            }
        }
        .input-group {
            width: 100%;
            height: 48px;
            background-color: rgba(255, 255, 255, 0.2);
            border: none;
            border-radius: 0.5rem;
            padding: 0 1rem;
            color: #fff;
            font-weight: 500;
        }
        .input-group::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }
        .btn-submit {
            background-color: #00796b; /* Sesuaikan dengan warna aktif sidebar */
            color: #ffffff;
            font-weight: 600;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        .btn-submit:hover {
            background-color: #004d40; /* Sesuaikan dengan warna background */
        }
        .btn-cancel {
            background-color: #607d8b; /* A more subdued grey-blue for cancel */
            color: #ffffff;
            font-weight: 600;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        .btn-cancel:hover {
            background-color: #455a64; /* Darker grey-blue on hover */
        }
        .rating-stars {
            direction: rtl; /* Untuk membalikkan urutan bintang */
        }
        .rating-stars input[type="radio"] {
            display: none;
        }
        .rating-stars label {
            font-size: 2rem;
            color: rgba(255, 255, 255, 0.3);
            cursor: pointer;
            transition: color 0.2s;
        }
        .rating-stars input[type="radio"]:checked ~ label,
        .rating-stars label:hover,
        .rating-stars label:hover ~ label {
            color: #FFD700; /* Gold color */
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
            <h2 class="text-xl font-bold text-white">INTERAKSI</h2>
            <nav class="sidebar-menu w-full space-y-2">
                <a href="#" class="sidebar-item active" data-target="interaksi-content">
                    <span>Interaksi</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </nav>
        </aside>

        <main class="content glass-bg rounded-xl p-6 space-y-6">
            <div id="interaksi-content" class="content-section active">
                <div class="content-grid">
                    <div class="p-4 glass-bg rounded-xl flex flex-col space-y-4">
                        <h3 class="text-lg font-bold">Formulir Pertanyaan</h3>
                        <form id="form-pertanyaan" class="flex flex-col space-y-4">
                            <input type="text" name="nama" placeholder="Nama" class="input-group" required>
                            <input type="text" name="kontak" placeholder="Kontak" class="input-group" required>
                            <input type="text" name="subjek" placeholder="Subjek" class="input-group" required>
                            <textarea name="pesan" placeholder="Pesan" class="input-group h-40 pt-4" required></textarea>
                            <button type="submit" class="btn-submit">Kirim Pesan</button>
                        </form>
                    </div>

                    <div class="p-4 glass-bg rounded-xl flex flex-col space-y-4">
                        <h3 class="text-lg font-bold">Berikan Feedback</h3>
                        <form id="form-feedback" class="flex flex-col space-y-4">
                            <p class="text-sm font-medium">Beri kami rating:</p>
                            <div class="rating-stars flex justify-center space-x-2">
                                <input type="radio" id="star5" name="rating" value="5" required/><label for="star5">★</label>
                                <input type="radio" id="star4" name="rating" value="4" /><label for="star4">★</label>
                                <input type="radio" id="star3" name="rating" value="3" /><label for="star3">★</label>
                                <input type="radio" id="star2" name="rating" value="2" /><label for="star2">★</label>
                                <input type="radio" id="star1" name="rating" value="1" /><label for="star1">★</label>
                            </div>
                            <textarea name="pesan" placeholder="Pesan & saran Anda" class="input-group h-40 pt-4" required></textarea>
                            <button type="submit" class="btn-submit">Kirim Feedback</button>
                        </form>
                    </div>

                    <div class="p-4 glass-bg rounded-xl flex flex-col space-y-4">
                        <h3 class="text-lg font-bold">Buku Tamu</h3>
                        <form id="form-buku-tamu" class="flex flex-col space-y-4">
                            <input type="text" name="nama" placeholder="Nama" class="input-group" required>
                            <input type="text" name="kontak" placeholder="Nomor Kontak" class="input-group" required>
                            <input type="text" name="pekerjaan" placeholder="Pekerjaan" class="input-group" required>
                            <input type="text" name="instansi" placeholder="Asal Instansi/ Lembaga" class="input-group" required>
                            <input type="text" name="konsultasi" placeholder="Konsultasi" class="input-group" required>
                            <input type="text" name="pegawai_tujuan" placeholder="Pegawai yang dituju" class="input-group" required>
                            <input type="text" name="tujuan" placeholder="Tujuan" class="input-group" required>
                            <input type="text" name="topik" placeholder="Topik" class="input-group" required>
                            <button type="submit" class="btn-submit">Kirim Data Pengunjung</button>
                            <button type="button" class="btn-cancel">Batal</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        
    </div>

       @include('footer')

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const apiUrl = 'http://127.0.0.1:8000/api/'; // Ganti dengan URL API Anda jika berbeda

            // Fungsi untuk mengirim data ke API
            const postData = async (url, data) => {
                try {
                    const response = await fetch(url, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json'
                        },
                        body: JSON.stringify(data)
                    });

                    if (!response.ok) {
                        const errorData = await response.json();
                        throw new Error(errorData.message || `HTTP error! Status: ${response.status}`);
                    }

                    return await response.json();
                } catch (error) {
                    console.error('Error:', error);
                    alert('Terjadi kesalahan saat mengirim data: ' + error.message);
                }
            };

            // Event listener untuk Formulir Pertanyaan
            document.getElementById('form-pertanyaan').addEventListener('submit', async (e) => {
                e.preventDefault();

                const form = e.target;
                const data = {
                    nama: form.nama.value,
                    kontak: form.kontak.value,
                    subjek: form.subjek.value,
                    pesan: form.pesan.value
                };

                const result = await postData(`${apiUrl}form-pertanyaan`, data);
                if (result) {
                    alert('Pesan berhasil dikirim!');
                    form.reset();
                }
            });

            // Event listener untuk Formulir Feedback
            document.getElementById('form-feedback').addEventListener('submit', async (e) => {
                e.preventDefault();

                const form = e.target;
                const rating = form.querySelector('input[name="rating"]:checked');
                const data = {
                    rating: rating ? rating.value : null,
                    pesan: form.pesan.value
                };

                const result = await postData(`${apiUrl}feedback`, data);
                if (result) {
                    alert('Feedback berhasil dikirim!');
                    form.reset();
                }
            });

            // Event listener untuk Formulir Buku Tamu
            document.getElementById('form-buku-tamu').addEventListener('submit', async (e) => {
                e.preventDefault();

                const form = e.target;
                const data = {
                    nama: form.nama.value,
                    kontak: form.kontak.value,
                    pekerjaan: form.pekerjaan.value,
                    instansi: form.instansi.value,
                    konsultasi: form.konsultasi.value,
                    pegawai_tujuan: form.pegawai_tujuan.value,
                    tujuan: form.tujuan.value,
                    topik: form.topik.value
                };

                const result = await postData(`${apiUrl}buku-tamu`, data);
                if (result) {
                    alert('Data Buku Tamu berhasil dikirim!');
                    form.reset();
                }
            });
            
            // Logika aktivasi tab yang ada sebelumnya
            const sidebarItems = document.querySelectorAll('.sidebar-item');
            const contentSections = document.querySelectorAll('.content-section');

            // Set 'Interaksi' as active initially
            document.querySelector('.sidebar-item[data-target="interaksi-content"]').classList.add('active');
            document.getElementById('interaksi-content').classList.add('active');

            sidebarItems.forEach(item => {
                item.addEventListener('click', function (e) {
                    e.preventDefault();
                    sidebarItems.forEach(i => { i.classList.remove('active'); });
                    this.classList.add('active');
                    contentSections.forEach(content => { content.classList.remove('active'); });
                    const targetId = this.getAttribute('data-target');
                    const targetContent = document.getElementById(targetId);
                    if (targetContent) { targetContent.classList.add('active'); }
                });
            });
        });
    </script>
</body>
</html>