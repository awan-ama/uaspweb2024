<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="public/assets/css/output.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col">
        <!-- Sidebar -->
        <aside class="bg-white w-64 min-h-screen shadow-md">
            <div class="p-6">
                <img src="logo_url" alt="Logo" class="h-12 w-12">
            </div>
            <nav class="px-4 py-6">
                <ul>
                    <li class="mb-6">
                        <a href="#" class="flex items-center text-gray-700">
                            <span class="text-lg">Dashboard</span>
                        </a>
                    </li>
                    <!-- Add more menu items here -->
                </ul>
            </nav>
        </aside>

        <!-- Main content -->
        <main class="flex-1 p-6">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-bold">Dashboard</h1>
                <div class="flex items-center">
                    <span class="mr-4">Maulana</span>
                    <img src="profile_image_url" alt="Profile" class="h-10 w-10 rounded-full">
                </div>
            </div>

            <div class="mt-6 bg-white p-6 rounded-md shadow-md">
                <div class="flex items-center justify-between bg-yellow-100 p-4 rounded-md">
                    <span>Kamu belum mengisi kuisioner pada periode semester ini, silahkan isi Kuisioner Disini!</span>
                    <a href="#" class="text-blue-500">Disini</a>
                </div>

                <div class="mt-6 bg-blue-100 p-6 rounded-md">
                    <h2 class="text-xl font-semibold">Selamat Datang Maulana!</h2>
                    <p>Di website ini kamu dapat mengajukan layanan dan mengecek status pengajuannya</p>
                </div>

                <div class="mt-6 grid grid-cols-4 gap-4">
                    <div class="text-center">
                        <h3 class="text-3xl font-bold">4</h3>
                        <p>Layanan diajukan</p>
                    </div>
                    <div class="text-center">
                        <h3 class="text-3xl font-bold">2</h3>
                        <p>Menunggu persetujuan</p>
                    </div>
                    <div class="text-center">
                        <h3 class="text-3xl font-bold">1</h3>
                        <p>Layanan disetujui</p>
                    </div>
                    <div class="text-center">
                        <h3 class="text-3xl font-bold">1</h3>
                        <p>Layanan ditolak</p>
                    </div>
                </div>

                <div class="mt-6">
                    <h2 class="text-xl font-semibold">Mungkin yang kamu butuhkan</h2>
                    <div class="mt-4 grid grid-cols-3 gap-4">
                        <!-- Service cards -->
                        <div class="bg-white p-4 rounded-md shadow-md">
                            <h3 class="text-lg font-bold">Surat Keterangan Lulus</h3>
                            <p class="mt-2">Dapatkan Surat Kelulusan dengan Mudah melalui layanan ini</p>
                        </div>
                        <div class="bg-white p-4 rounded-md shadow-md">
                            <h3 class="text-lg font-bold">Surat Pengantar Izin PKL</h3>
                            <p class="mt-2">Berkas untuk PKL</p>
                        </div>
                        <div class="bg-white p-4 rounded-md shadow-md">
                            <h3 class="text-lg font-bold">Surat Pengantar Izin Penelitian</h3>
                            <p class="mt-2">Berkas untuk Penelitian</p>
                        </div>
                        <!-- Add more cards as needed -->
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
