<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="container">
        <div class="image-side">
            <img src="assets/images/yrllow hats.png" alt="Yellow Helmets">
        </div>
        <div class="form-side">
            <div class="header">
                <div class="logo-and-title">
                    <img src="assets/images/ulm.png" alt="Logo Universitas Lambung Mangkurat" class="logo">
                    <div class="title">
                        <h1>Fakultas Teknik</h1>
                        <h2>Universitas Lambung Mangkurat</h2>
                    </div>
                </div>
                <h3>Buat Sebuah Akun</h3>
                <p>isi data diri dengan benar!</p>
            </div>
            <form>
                <label for="fullname">Nama Lengkap *</label>
                <input type="text" id="fullname" name="fullname" placeholder="Masukkan Nama Lengkap" required>

                <label for="nim">NIM *</label>
                <input type="text" id="nim" name="nim" placeholder="Masukkan NIM" required>
                
                <label for="phone">No. Telepon *</label>
                <input type="text" id="phone" name="phone" placeholder="Masukkan No. Telepon" required>
                
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" placeholder="Masukkan Email" required>
                
                <label for="role">Masuk Sebagai *</label>
                <select id="role" name="role" required>
                    <option value="">Pilih Jenis Pengguna</option>
                    <option value="student">Contoh</option>
                    <!-- Add more options as needed -->
                </select>
                
                <label for="password">Password *</label>
                <input type="password" id="password" name="password" placeholder="Masukkan Password" required>
                
                <label for="confirm-password">Konfirmasi Password *</label>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Masukkan Konfirmasi Password" required>
                
                <button type="submit">Daftar</button>
                
                <p>Sudah Mempunyai Akun? <a href="<?= base_url('login') ?>">Login</a></p>
            </form>
        </div>
    </div>
</body>
</html>
