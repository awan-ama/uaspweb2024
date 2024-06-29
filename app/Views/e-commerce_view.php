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
                <h2 class="text-2xl font-semibold mb-4">Layanan e-Commerce</h2>
                <p>Inovasi Sistem informasi Karya Intelektual FT ULM</p>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- Card 1 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 1" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Aplikasi Serasah</h3>
                            <p class="mt-2">Aplikasi Mobile untuk masyarakat agar dapat menjual sampah rumah tangga baik organik atau inorganik</p>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 2" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Bank Sampah FT</h3>
                            <p class="mt-2">Aplikasi pengelolaan sampah mandiri FT ULM sebagau bentuk kepedulian dan inovasi dalam mengelola sampah</p>
                        </div>
                    </div>
                     <!-- Card 3 -->
                     <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 2" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Engineering Techno Park</h3>
                            <p class="mt-2">taman Fakultas teknik ULM dengan berbagai penerapan teknologi yang inovatif dan bermanfaat</p>
                        </div>
                    </div>
                     <!-- Card 4 -->
                     <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 2" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">FT Book Store</h3>
                            <p class="mt-2">(Coming Soon)</p>
                        </div>
                    </div>
                     <!-- Card 5 -->
                     <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 2" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">FT Job Market</h3>
                            <p class="mt-2">(Coming Soon)</p>
                        </div>
                    </div>
                     <!-- Card 6 -->
                     <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 2" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">FT Lab Services</h3>
                            <p class="mt-2">Layanan ini disediakan untuk memudahkan proses Administrasi dan pencatatan kegiatan layanan Laboratorium di lingkungan FT ULM</p>
                        </div>
                    </div>
                </div>
            </div>
            </section>
        </main>
    </div>
</body>

</html>
