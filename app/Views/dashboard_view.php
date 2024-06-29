<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
            
            <!-- Notification Section -->
            <section class="bg-yellow-100 p-4 rounded-md mb-6">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-orange-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01m6.938 4H4.062c-.534 0-1.05-.21-1.425-.586A2.002 2.002 0 012 18.062V5.938c0-.534.21-1.05.586-1.425A2.002 2.002 0 014.062 4h15.876c.534 0 1.05.21 1.425.586A2.002 2.002 0 0122 5.938v12.124c0 .534-.21 1.05-.586 1.425A2.002 2.002 0 0119.938 20z"></path>
                    </svg>
                    <span class="text-gray-800 font-semibold">Kamu belum mengisi kuisioner pada periode semester ini, Silahkan isi Kuisioner <a href="#" class="text-blue-500">Disini</a></span>
                </div>
                <p class="text-gray-600 mt-2">Kamu tidak dapat melakukan pengajuan layanan jika belum mengisi kuisioner. Oleh karena itu, kami mengharapkan agar setiap mahasiswa mengisi kuisioner pada awal setiap semester sebagai bagian dari proses yang diperlukan untuk memberikan pelayanan yang terbaik dan peningkatan kualitas serta evaluasi layanan FT ULM.</p>
            </section>

            <!-- Welcome Section -->
            <section class="bg-blue-500 p-6 rounded-md mb-6">
                <h2 class="text-xl font-semibold mb-2 text-white">Selamat Datang Maulana!</h2>
                <p class="text-white">Di website ini kamu dapat mengajukan layanan dan mengecek status pengajuannya</p>
            </section>

            <!-- Statistics Section -->
            <section class="grid grid-cols-1 lg:grid-cols-4 gap-4 mb-6">
                <div class="bg-white p-4 rounded-md shadow-md text-center">
                    <h3 class="text-3xl font-bold">4</h3>
                    <p>Layanan diajukan</p>
                </div>
                <div class="bg-white p-4 rounded-md shadow-md text-center">
                    <h3 class="text-3xl font-bold">2</h3>
                    <p>Menunggu persetujuan</p>
                </div>
                <div class="bg-white p-4 rounded-md shadow-md text-center">
                    <h3 class="text-3xl font-bold">1</h3>
                    <p>Layanan disetujui</p>
                </div>
                <div class="bg-white p-4 rounded-md shadow-md text-center">
                    <h3 class="text-3xl font-bold">1</h3>
                    <p>Layanan ditolak</p>
                </div>
            </section>

            <!-- Service Cards Section -->
            <section>
                <h2 class="text-xl font-semibold mb-4">Mungkin yang kamu butuhkan</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="/assets/images/orang.jpeg" alt="Surat Keterangan Lulus" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Surat Keterangan Lulus</h3>
                            <p class="mt-2">Dapatkan Surat Kelulusan dengan Mudah melalui layanan ini</p>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="/assets/images/orang.jpeg" alt="Surat Pengantar Izin PKL" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Surat Pengantar Izin PKL</h3>
                            <p class="mt-2">Berkas untuk PKL</p>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="/assets/images/orang.png" alt="Surat Pengantar Izin Penelitian" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Surat Pengantar Izin Penelitian</h3>
                            <p class="mt-2">Berkas untuk Penelitian</p>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="/assets/images/orang.jpeg" alt="Permintaan Data MK/PKL/TA" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Permintaan Data MK/PKL/TA</h3>
                            <p class="mt-2">Surat Permintaan Data Mata Kuliah / Praktek Kerja Lapangan / Tugas Akhir Mahasiswa FT ULM</p>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="/assets/images/orang.jpeg" alt="Surat Tugas PKL/TA" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Surat Tugas PKL/TA</h3>
                            <p class="mt-2">Pengajuan Surat Tugas untuk Praktek Kerja Lapangan / Tugas Akhir</p>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="/assets/images/orang.jpeg" alt="MBKM FT ULM" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">MBKM FT ULM</h3>
                            <p class="mt-2">Layanan ini digunakan untuk pendaftaran dan pengajuan program MBKM Fakultas Teknik Universitas Lambung Mangkurat</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>