<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="h-screen overflow-auto bg-gray-100">
    <div class="flex h-full min-h-screen">
        <div class="w-1/2 bg-cover bg-center" style="background-image: url('assets/images/yrllow hats.png')"></div>
        <div class="w-1/2 flex items-center justify-center p-8">
            <div class="w-full max-w-md">
                <div class="text-center mb-8">
                    <div class="flex justify-center items-center mb-4">
                        <img src="assets/images/ulm.png" alt="Logo Universitas Lambung Mangkurat" class="w-1/5 mr-2">
                        <div>
                            <h1 class="text-2xl font-bold">Fakultas Teknik</h1>
                            <h2 class="text-lg font-normal">Universitas Lambung Mangkurat</h2>
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-700">Buat Sebuah Akun</h3>
                    <p class="text-gray-600">Isi data diri dengan benar!</p>
                </div>
                <form>
                    <label for="fullname" class="block text-sm font-medium text-gray-700">Nama Lengkap *</label>
                    <input type="text" id="fullname" name="fullname" placeholder="Masukkan Nama Lengkap" required class="block w-full p-3 border border-gray-300 rounded mb-4">

                    <label for="nim" class="block text-sm font-medium text-gray-700">NIM *</label>
                    <input type="text" id="nim" name="nim" placeholder="Masukkan NIM" required class="block w-full p-3 border border-gray-300 rounded mb-4">

                    <label for="department" class="block text-sm font-medium text-gray-700">Program Studi *</label>
                    <select id="department" name="department" required class="block w-full p-3 border border-gray-300 rounded mb-4">
                        <option value="">Pilih Program Studi</option>
                        <option value="sipil">Teknik Sipil</option>
                        <option value="arsitektur">Arsitektur</option>
                        <option value="tambang">Teknik Pertambangan</option>
                        <option value="kimia">Teknik Kimia</option>
                        <option value="lingkungan">Teknik Lingkungan</option>
                        <option value="mesin">Teknik Mesin</option>
                        <option value="informasi">Teknologi Informasi</option>
                        <option value="geologi">Rekayasa Geologi</option>
                        <option value="elektro">Rekayasa Elektro</option>
                    </select>

                    <label for="phone" class="block text-sm font-medium text-gray-700">No. Telepon *</label>
                    <input type="text" id="phone" name="phone" placeholder="Masukkan No. Telepon" required class="block w-full p-3 border border-gray-300 rounded mb-4">

                    <label for="email" class="block text-sm font-medium text-gray-700">Email *</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan Email" required class="block w-full p-3 border border-gray-300 rounded mb-4">

                    <label for="role" class="block text-sm font-medium text-gray-700">Masuk Sebagai *</label>
                    <select id="role" name="role" required class="block w-full p-3 border border-gray-300 rounded mb-4">
                        <option value="">Pilih Jenis Pengguna</option>
                        <option value="student">Mahasiswa</option>
                    </select>

                    <label for="password" class="block text-sm font-medium text-gray-700">Password *</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan Password" required class="block w-full p-3 border border-gray-300 rounded mb-4">

                    <label for="confirm-password" class="block text-sm font-medium text-gray-700">Konfirmasi Password *</label>
                    <input type="password" id="confirm-password" name="confirm-password" placeholder="Masukkan Konfirmasi Password" required class="block w-full p-3 border border-gray-300 rounded mb-4">

                    <button type="submit" class="w-full p-3 bg-blue-500 text-white rounded hover:bg-blue-700">Daftar</button>

                    <p class="text-center text-gray-600 mt-4">Sudah Mempunyai Akun? <a href="<?= base_url('login') ?>" class="text-blue-500">Login</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
