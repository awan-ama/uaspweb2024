<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Services</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .sticky {
            position: sticky;
            top: 0;
            z-index: 50;
            background-color: white;
        }

        .sidebar-sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            height: 100%;
            overflow-y: auto;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex">
    <!-- Sidebar -->
    <?= $this->include('layout/sidebar') ?>
        <!-- Main content -->
        <main class="flex-1 p-6">
            <!-- Header -->
            <?= $this->include('layout/header') ?>
            
            <!-- e-Services Section -->
            <section class="mb-6">
                <h2 class="text-2xl font-semibold mb-4">Layanan e-Services</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- Card 1 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 1" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Izin Penelitian TA Lulus FT</h3>
                            <p class="mt-2">Layanan ini digunakan untuk pengajuan Surat Izin Penelitian Tugas Akhir di laboratorium Fakultas Teknik ULM</p>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 2" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Kendali Kegiatan Ormawa</h3>
                            <p class="mt-2">layanan ini digunakn untuk pengajuan proposal atau laporan kegiatan organisasi mahasiswa FT ULM</p>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 3" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Keterangan Bebas Lab & Perpus</h3>
                            <p class="mt-2">Digunakan ntuk pengajuan Surat Keterangan Bebas Lab dan Perpus di lingkunan FT sebagai persyaratan Wisuda Mahasiswa FT ULM</p>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 4" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Kotak Pos FT</h3>
                            <p class="mt-2">Layanan ini disediakan untuk memberikan kemudahan bagi para pihak dalam menjalin komunikasi dengan pihak FT ULM</p>
                        </div>
                    </div>
                    <!-- Card 5 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 5" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Legalisir Akreditasi Program Studi</h3>
                            <p class="mt-2">Layanan ini digunakan untuk pengajuan legalisir Akreditasi Program Studi untuk kebutuhan Dokumen Legal Bertanda Tangan</p>
                        </div>
                    </div>
                    <!-- Card 6 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 6" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Legalisir Ijazah</h3>
                            <p class="mt-2">Layanan ini digunakan untuk pengajuan legalisir ijaszah secara online dan dapat diambil secara offline atau dikirim melalui COD</p>
                        </div>
                    </div>
                    <!-- Card 7 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 7" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Legalitas Transkrip Akademik</h3>
                            <p class="mt-2">Layanan ini digunakan untuk penggajuan</p>
                        </div>
                    </div>
                    <!-- Card 8 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 8" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">MBKM FT ULM</h3>
                            <p class="mt-2">Deskripsi layanan 8</p>
                        </div>
                    </div>
                    <!-- Card 9 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 9" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Permintaan Data MK/PKL/TA</h3>
                            <p class="mt-2">Deskripsi layanan 9</p>
                        </div>
                    </div>
                    <!-- Card 10 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 10" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Permintaan Tenaga Ahli</h3>
                            <p class="mt-2">Deskripsi layanan 10</p>
                        </div>
                    </div>
                    <!-- Card 11 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 11" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Pengurangan Kategori UKT</h3>
                            <p class="mt-2">Deskripsi layanan 11</p>
                        </div>
                    </div>
                    <!-- Card 12 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 12" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Surat Aktif Kuliah</h3>
                            <p class="mt-2">Deskripsi layanan 12</p>
                        </div>
                    </div>
                    <!-- Card 13 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 13" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Surat Keterangan Jomblo/Tunawisma</h3>
                            <p class="mt-2">Deskripsi layanan 13</p>
                        </div>
                    </div>
                    <!-- Card 14 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 14" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Surat Keterangan Lulus</h3>
                            <p class="mt-2">Deskripsi layanan 14</p>
                        </div>
                    </div>
                    <!-- Card 15 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 15" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Surat Pengantar Izin Penelitian</h3>
                            <p class="mt-2">Deskripsi layanan 15</p>
                        </div>
                    </div>
                    <!-- Card 16 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 16" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Surat Pengantar Izin PKL</h3>
                            <p class="mt-2">Deskripsi layanan 16</p>
                        </div>
                    </div>
                    <!-- Card 17 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 17" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Surat Rekomendasi Mahasiswa</h3>
                            <p class="mt-2">Deskripsi layanan 17</p>
                        </div>
                    </div>
                    <!-- Card 18 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 18" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Surat Tugas</h3>
                            <p class="mt-2">Deskripsi layanan 18</p>
                        </div>
                    </div>
                    <!-- Card 19 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 19" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Surat Tugas PKL/TA</h3>
                            <p class="mt-2">Deskripsi layanan 19</p>
                        </div>
                    </div>
                    <!-- Card 20 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 20" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Sertifikat Uji Plagiat Artikel Jurnal TA</h3>
                            <p class="mt-2">Deskripsi layanan 20</p>
                        </div>
                    </div>
                    <!-- Card 21 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 21" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Ujian Tugas Akhir</h3>
                            <p class="mt-2">Deskripsi layanan 21</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>

</html>
