<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanggapan Tanya FT</title>
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

        .input-gray {
            background-color: #f7fafc;
            border: 1px solid #cbd5e0;
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
        }

        .gray-box {
            background-color: #f7fafc;
            border: 1px solid #cbd5e0;
            padding: 0.75rem;
            border-radius: 0.375rem;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="bg-white w-64 shadow-md sidebar-sticky">
            <div class="p-6 flex items-center">
                <img src="assets/images/ulm.png" alt="Logo" class="h-12 w-12 mr-3">
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
                            <a href="dashboard.html" class="flex items-center text-gray-700 p-2 rounded hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                                </svg>
                                <span class="text-lg">Dashboard</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="mb-4">
                    <span class="text-gray-500 uppercase text-xs">Layanan</span>
                    <ul>
                        <li class="mb-4">
                            <a href="e-services.html" class="flex items-center text-gray-700 p-2 rounded hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 11h18M3 15h18M3 19h18" />
                                </svg>
                                <span class="text-lg">e-Services</span>
                            </a>
                        </li>
                        <li class="mb-4">
                            <a href="e-command-center.html" class="flex items-center text-gray-700 p-2 rounded hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                                </svg>
                                <span class="text-lg">e-Command Center</span>
                            </a>
                        </li>
                        <li class="mb-4">
                            <a href="e-response.html" class="flex items-center text-blue-500 font-bold bg-blue-100 p-2 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v6m4-6v6m-7 5h10a2 2 0 002-2v-3a2 2 0 00-2-2H5a2 2 0 00-2 2v3a2 2 0 002 2zM4 3h16a2 2 0 012 2v3a2 2 0 01-2 2H4a2 2 0 01-2-2V5a2 2 0 012-2z" />
                                </svg>
                                <span class="text-lg">e-Response</span>
                            </a>
                        </li>
                        <li class="mb-4">
                            <a href="e-commerce.html" class="flex items-center text-gray-700 p-2 rounded hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4h16v16H4z" />
                                </svg>
                                <span class="text-lg">e-Commerce</span>
                            </a>
                        </li>
                        <li class="mb-4">
                            <a href="e-office.html" class="flex items-center text-gray-700 p-2 rounded hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v10l4-3 4 3V7H8z" />
                                </svg>
                                <span class="text-lg">e-Office</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <span class="text-gray-500 uppercase text-xs">Other</span>
                    <ul>
                        <li class="mb-4">
                            <a href="kuisioner.html" class="flex items-center text-gray-700 p-2 rounded hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h4m0 0H8m4 0l2 2m-2-2l2-2M8 12h4" />
                                </svg>
                                <span class="text-lg">Kuisioner</span>
                            </a>
                        </li>
                        <li class="mb-4">
                            <a href="faq.html" class="flex items-center text-gray-700 p-2 rounded hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M8 14h8m-8 4h8" />
                                </svg>
                                <span class="text-lg">FAQ</span>
                            </a>
                        </li>
                        <li class="mb-4">
                            <a href="profile.html" class="flex items-center text-gray-700 p-2 rounded hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0-3.086 1.419-4.913 3-5.837C15.637 5.077 16 4.693 16 4a4 4 0 00-8 0c0 .693.363 1.077 1 1.163C10.581 6.087 12 7.914 12 11zm0 0c-1.084 0-1.92.364-2.403 1.02A4.385 4.385 0 009 14.31c0 1.27.51 2.586 1.597 3.41.646.488 1.432.78 2.403.78s1.757-.292 2.403-.78C15.49 16.897 16 15.58 16 14.31c0-1.27-.51-2.586-1.597-3.29-.483-.656-1.319-1.02-2.403-1.02zm0 0v.02V11z" />
                                </svg>
                                <span class="text-lg">Profile</span>
                            </a>
                        </li>
                        <li class="mb-4">
                            <a href="logout.html" class="flex items-center text-gray-700 p-2 rounded hover:bg-gray-100">
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
                        <span class="mr-4">Maulana</span>
                        <img src="assets/images/lego man.jpg" alt="Profile" class="h-10 w-10 rounded-full">
                    </div>
                </div>
            </header>

            <!-- Response Section -->
            <section class="mb-6">
                <a href="#" class="text-blue-500 mb-4 inline-block">Kembali</a>
                <h2 class="text-2xl font-semibold mb-4">Tanggapan Tanya FT</h2>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="mb-4">
                        <span class="block text-gray-700 font-semibold mb-2">Pertanyaan :</span>
                        <div class="">
                            <p>Apa saja keuntungan layanan FT ULM yang baru dibuat ini?</p>
                            <br>
                        </div>
                        <div class="gray-box">
                        
                            <a href="#" class="text-blue-500">Cek File</a>
                        </div>
                    </div>
                    <div>
                        <span class="block text-gray-700 font-semibold mb-2">Jawaban :</span>
                        <div class="">
                            Website layanan baru FT ULM dirancang untuk memberikan akses yang mudah dan cepat bagi mahasiswa, dosen, dan staf untuk mengakses berbagai layanan akademik dan administratif. Dengan antarmuka yang responsif dan ramah pengguna, pengguna dapat dengan mudah mengajukan permohonan, mengakses informasi akademik, memantau status pengajuan, dan berinteraksi dengan berbagai fitur lainnya secara efisien.
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>

</html>
