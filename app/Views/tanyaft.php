<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanya FT</title>
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
        <aside class="bg-white w-64 shadow-md sidebar-sticky">
            <div class="p-6 flex items-center">
                <img src="/assets/images/ulm.png" alt="Logo" class="h-12 w-12 mr-3">
                <div>
                    <h1 class="text-xl font-bold">Fakultas Teknik</h1>
                    <p class="text-gray-600 text-sm">Universitas Lambung Mangkurat</p>
                </div>
            </div>
            <nav class="px-4 py-6">
                <div class="mb-4">
                    <span class="text-gray-500 uppercase text-xs">Menu</span>
                    <ul>
                        <li class="mb-4">
                        <a href="<?= base_url('user/dashboard') ?>" class="flex items-center text-gray-700 p-3 rounded hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="M520-600v-240h320v240H520ZM120-440v-400h320v400H120Zm400 320v-400h320v400H520Zm-400 0v-240h320v240H120Zm80-400h160v-240H200v240Zm400 320h160v-240H600v240Zm0-480h160v-80H600v80ZM200-200h160v-80H200v80Zm160-320Zm240-160Zm0 240ZM360-280Z"/></svg>
                                <span class="text-lg">Dashboard</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="mb-4">
                    <span class="text-gray-500 uppercase text-xs">Layanan</span>
                    <ul>
                        <li class="mb-4">
                        <a href="<?= base_url('user/e_services') ?>" class="flex items-center text-gray-700 p-3 rounded hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z"/></svg>
                                <span class="text-lg">e-Services</span>
                            </a>
                        </li>
                        <li class="mb-4">
                        <a href="<?= base_url('user/e_command_center') ?>" class="flex items-center text-gray-700 p-3 rounded hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="M280-400q17 0 28.5-11.5T320-440q0-17-11.5-28.5T280-480q-17 0-28.5 11.5T240-440q0 17 11.5 28.5T280-400Zm0-160q17 0 28.5-11.5T320-600q0-17-11.5-28.5T280-640q-17 0-28.5 11.5T240-600q0 17 11.5 28.5T280-560Zm80 160h360v-80H360v80Zm0-160h360v-80H360v80Zm-40 440v-80H160q-33 0-56.5-23.5T80-280v-480q0-33 23.5-56.5T160-840h640q33 0 56.5 23.5T880-760v480q0 33-23.5 56.5T800-200H640v80H320ZM160-280h640v-480H160v480Zm0 0v-480 480Z"/></svg>
                                <span class="text-lg">e-Command Center</span>
                            </a>
                        </li>
                        <li class="mb-4">
                        <a href="<?= base_url('user/e_response') ?>" class="flex items-center text-blue-500 font-bold bg-blue-100 p-3 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="M240-400h320v-80H240v80Zm0-120h480v-80H240v80Zm0-120h480v-80H240v80ZM80-80v-720q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v480q0 33-23.5 56.5T800-240H240L80-80Zm126-240h594v-480H160v525l46-45Zm-46 0v-480 480Z"/></svg>                                <span class="text-lg">e-Response</span>
                            </a>
                        </li>
                        <li class="mb-4">
                        <a href="<?= base_url('user/e_commerce') ?>" class="flex items-center text-gray-700 p-3 rounded hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="M880-720v480q0 33-23.5 56.5T800-160H160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720Zm-720 80h640v-80H160v80Zm0 160v240h640v-240H160Zm0 240v-480 480Z"/></svg>
                                <span class="text-lg">e-Commerce</span>
                            </a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="flex items-center text-gray-700 p-3 rounded hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="M160-120q-33 0-56.5-23.5T80-200v-440q0-33 23.5-56.5T160-720h160v-80q0-33 23.5-56.5T400-880h160q33 0 56.5 23.5T640-800v80h160q33 0 56.5 23.5T880-640v440q0 33-23.5 56.5T800-120H160Zm0-80h640v-440H160v440Zm240-520h160v-80H400v80ZM160-200v-440 440Z"/></svg>
                                <span class="text-lg">e-Office</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <span class="text-gray-500 uppercase text-xs">Other</span>
                    <ul>
                        <li class="mb-4">
                            <a href="#" class="flex items-center text-gray-700 p-3 rounded hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="18px" fill="#000000">
                                <path d="m424-312 282-282-56-56-226 226-114-114-56 56 170 170ZM200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm0-560v560-560Z"/>
                            </svg>
                                <span class="text-lg">Kuisioner</span>
                            </a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="flex items-center text-gray-700 p-3 rounded hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M8 14h8m-8 4h8" />
                                </svg>
                                <span class="text-lg">FAQ</span>
                            </a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="flex items-center text-gray-700 p-3 rounded hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0-3.086 1.419-4.913 3-5.837C15.637 5.077 16 4.693 16 4a4 4 0 00-8 0c0 .693.363 1.077 1 1.163C10.581 6.087 12 7.914 12 11zm0 0c-1.084 0-1.92.364-2.403 1.02A4.385 4.385 0 009 14.31c0 1.27.51 2.586 1.597 3.41.646.488 1.432.78 2.403.78s1.757-.292 2.403-.78C15.49 16.897 16 15.58 16 14.31c0-1.27-.51-2.586-1.597-3.29-.483-.656-1.319-1.02-2.403-1.02zm0 0v.02V11z" />
                                </svg>
                                <span class="text-lg">Profile</span>
                            </a>
                        </li>
                        <li class="mb-4">
                        <a href="../logout" class="flex items-center text-gray-700 p-3 rounded hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12h5.5M15 12H9m6 0a4.5 4.5 0 00-9 0h9zm-6-3h5M9 12h6m-6 9V3h6v18H9z" />
                                </svg>
                                <span class="text-lg">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </aside>


        <!-- Main content -->
        <main class="flex-1 p-6">
            <!-- Header -->
            <header class="bg-white shadow-md py-4 mb-6 flex items-center sticky top-0 justify-between">
                <div class="flex items-center">
                    <div>
                    </div>
                </div>
                <div class="flex items-center">
                    <input type="text" placeholder="Cari Layanan..." class="border border-gray-300 rounded-md py-2 px-4 mr-4 w-80">
                    <button class="relative mr-4">
                        <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A7.953 7.953 0 0018 10a7.953 7.953 0 00-1.595-5.595L15 4h5v5l-1.405-1.405A7.953 7.953 0 0018 10a7.953 7.953 0 001.595 5.595L20 17z"></path>
                        </svg>
                        <span class="absolute top-0 right-0 inline-flex items-center justify-center h-5 w-5 rounded-full bg-red-500 text-white text-xs">1</span>
                    </button>
                    <div class="flex items-center">
                        <img src="/assets/images/lego man.jpg" alt="Profile" class="h-10 w-10 rounded-full">
                        <!-- <span class="mr-4">< $fullname ?></span> -->
                    </div>
                </div>
            </header>

            <!-- Tanya FT Section -->
             <section class="mb-6">
             <a href="<?= base_url('user/e_response') ?>" class="text-blue-500 mb-4 text-2x1 inline-block">Kembali</a> <br>
                <div class="flex mb-4">
                    <img src="/assets/images/campusphoto.png" alt="Tanya FT" class="rounded-md w-1/4 h-auto mr-4">
                    <div>
                        <h2 class="text-2xl font-semibold mb-2">Tanya FT</h2>
                        <p class="text-gray-600">
                            Layanan ini disediakan untuk menyampaikan permohonan informasi publik terkait Fakultas Teknik ULM
                        </p>
                    </div>
                </div>
                <p class="mb-4">
                    TANYA FT merupakan Layanan Informasi Publik FT ULM. Layanan ini disediakan bagi para pihak untuk menyampaikan permohonan informasi publik terkait Fakultas Teknik Universitas Lambung Mangkurat. Setiap permohonan dikelola oleh Unit Layanan Administrasi Terpadu FT ULM sebagai pelaksana tugas Pejabat Pengelola Informasi dan Dokumentasi (PPID) FT ULM dan didistribusikan kepada Kelompok Kerja (POKJA) yang berkaitan atau langsung kepada Pimpinan FT ULM secara daring (online). Jawaban/Tanggapan dapat dipantau melalui fitur status pengajuan.
                </p>
                <h3 class="text-xl font-semibold mb-2">Alur Pengajuan</h3>
                <ol class="list-decimal list-inside mb-4">
                    <li>Mahasiswa mengisi data pertanyaan</li>
                    <li>Admin Akademik akan menanggapi pertanyaan tersebut</li>
                    <li>Tanggapan dapat dilihat melalui tabel pengajuan</li>
                </ol>
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-semibold mb-2">Tabel Pengajuan</h3>
                    <a href="tanyaFT/new" class="bg-blue-500 text-white py-2 px-4 rounded">Tambah Pengajuan</a>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b">No</th>
                                <th class="py-2 px-4 border-b">ID Pengajuan</th>
                                <th class="py-2 px-4 border-b">Jenis Pengajuan</th>
                                <th class="py-2 px-4 border-b">Tanggal Pengajuan</th>
                                <th class="py-2 px-4 border-b">Status</th>
                                <th class="py-2 px-4 border-b">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $counter = 1; ?>
                        <?php foreach ($forms as $form): ?>
                                <tr>
                                    <td class="py-2 px-4 border-b text-center"><?= $counter ?></td>
                                    <td class="py-2 px-4 border-b text-center"><?= $form['id'] ?></td>
                                    <td class="py-2 px-4 border-b text-center">Tanya FT</td>
                                    <td class="py-2 px-4 border-b text-center">
                                    <?php 
                                    $date = new DateTime($form['created_at']);
                                    echo $date->format('j F Y');
                                    ?>
                                    </td>
                                    <td class="py-2 px-4 border-b text-center"><?= $form['status'] ?></td>
                                    <td class="py-2 px-4 border-b text-center">
                                        <a href="<?= base_url('user/e_response/tanyaFT/'.$form['id'].'/detail') ?>" class="text-blue-500 hover:underline">Detail</a> |
                                        <a href="<?= base_url('user/e_response/tanyaFT/'.$form['id'].'/tanggapan') ?>" class="text-red-500 hover:underline">Tanggapan</a>
                                    <td>
                                    </tr>
                                    <?php $counter++; ?>
                                <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>
</body>
</html>

