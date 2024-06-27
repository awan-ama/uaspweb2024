<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
</head>
<body>
    <div class="container">
        <div class="image-side">
            <img src="<?= base_url('assets/images/yrllow hats.png') ?>" alt="Yellow Helmets">
        </div>
        <div class="form-side">
            <div class="header">
                <div class="logo-and-title">
                    <img src="assets/images/ulm.png" alt="Logo Universitas Lambung Mangkurat" class="logo">
                    <div class="title">
                        <h1>Fakultas Teknik test</h1>
                        <h2>Universitas Lambung Mangkurat</h2>
                    </div>
                </div>
                <h3>Login ke Akun Anda</h3>
                <p>Masukkan Username dan password untuk login!</p>
            </div>
            <form>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Masukkan Username" required>
                
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan Password" required>
                
                <div class="form-options">
                    <a href="#">Lupa password?</a>
                </div>
                
                <button type="submit">Login</button>
                
                <p>Belum Mempunyai Akun? <a href="<?= base_url('register') ?>">Daftar</a></p>
            </form>
        </div>
    </div>
</body>
</html>
