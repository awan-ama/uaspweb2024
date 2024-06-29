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
                <h2 class="text-2xl font-semibold mb-4">Layanan e-Respons</h2>
                <p>Inovasi Sistem informasi dan Pengaduan FT ULM</p>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- Card 1 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 1" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Lapor FT</h3>
                            <p class="mt-2">Layanan ini digunakan untuk menyampaikan keluhan atau saran di lingkungan Fakultas Teknik Universitas Lambung Mangkurat</p>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 2" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Tanya FT</h3>
                            <p class="mt-2">Layanan ini disediakan untuk menyampaikan permohonan informasi publik terkait Fakultas teknik ULM </p>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>

</html>
