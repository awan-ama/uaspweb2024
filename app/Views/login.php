<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="flex w-full h-full bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="w-1/2 h-full bg-cover bg-center" style="background-image: url('<?= base_url('/assets/images/yrllow hats.png') ?>')"></div>
        <div class="w-1/2 flex items-center justify-center p-8">
            <div class="w-full max-w-md">
                <div class="text-center mb-8">
                    <div class="flex justify-center items-center mb-4">
                        <img src="<?= base_url('/assets/images/ulm.png') ?>" alt="Logo Universitas Lambung Mangkurat" class="w-1/5 mr-2">
                        <div>
                            <h1 class="text-2xl font-bold">Fakultas Teknik</h1>
                            <h2 class="text-lg font-normal">Universitas Lambung Mangkurat</h2>
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-700">Login ke Akun Anda</h3>
                    <p class="text-gray-600">Masukkan Username dan password untuk login!</p>
                </div>
                <?= form_open('login'); ?>
                <form action="/login/save" method="post" id="text-editor">
                <label for="nim" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" id="nim" name="nim" placeholder="Masukkan Username" required class="block w-full p-3 border border-gray-300 rounded mb-4">

                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan Password" required class="block w-full p-3 border border-gray-300 rounded mb-4">

                    <div class="flex justify-end mb-4">
                        <a href="#" class="text-blue-500 text-sm">Lupa password?</a>
                    </div>

                    <button type="submit" class="w-full p-3 bg-blue-500 text-white rounded hover:bg-blue-700">Login</button>

                    <p class="text-center text-gray-600 mt-4">Belum Mempunyai Akun? <a href="<?= base_url('register') ?>" class="text-blue-500">Daftar</a></p>
                </form>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</body>
</html>
