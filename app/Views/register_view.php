<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
</head>
<body>
    <div class="login-container">
        <div class="login-image">
            <img src="<?php echo base_url('assets/images/image.png'); ?>" alt="Register Image">
        </div>
        <div class="login-form">
            <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="Logo" class="logo">
            <h2>Fakultas Teknik</h2>
            <h3>Universitas Lambung Mangkurat</h3>
            <h1>Buat Sebuah Akun</h1>
            <p>Isi data diri dengan benar!</p>
            <form id="registerForm">
                <div class="input-group">
                    <label for="fullName">Nama Lengkap <span class="required">*</span></label>
                    <input type="text" id="fullName" name="fullName" placeholder="Masukkan Nama Lengkap" required>
                </div>
                <div class="input-group">
                    <label for="phone">No. Telephone <span class="required">*</span></label>
                    <input type="text" id="phone" name="phone" placeholder="Masukkan No. Telephone" required>
                </div>
                <div class="input-group">
                    <label for="email">Email <span class="required">*</span></label>
                    <input type="email" id="email" name="email" placeholder="Masukkan Email" required>
                </div>
                <div class="input-group">
                    <label for="role">Masuk Sebagai <span class="required">*</span></label>
                    <select id="role" name="role" required>
                        <option value="" disabled selected>Pilih Jenis Pengguna</option>
                        <option value="Student">Student</option>
                        <option value="Teacher">Teacher</option>
                        <option value="Admin">Admin</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="password">Password <span class="required">*</span></label>
                    <input type="password" id="password" name="password" placeholder="Masukkan Password" required>
                </div>
                <div class="input-group">
                    <label for="confirmPassword">Konfirmasi Password <span class="required">*</span></label>
                    <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Masukkan Konfirmasi Password" required>
                </div>
                <button type="submit">Daftar</button>
            </form>
            <p class="register-link">Sudah Mempunyai Akun? <a href="#">Login</a></p>
        </div>
    </div>
    <script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
</body>
</html>
