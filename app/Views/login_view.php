<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="container">
        <div class="image-side">
            <img src="assets/yrllow hats.png" alt="Yellow Helmets">
        </div>
        <div class="form-side">
            <div class="header">
                <img src="assets/images/ulm.png" alt="Universitas Lambung Mangkurat" class="logo">
                <h1>Fakultas Teknik</h1>
                <h2>Universitas Lambung Mangkurat</h2>
                <h3>Login ke Akun Anda</h3>
                <p>Masukkan Username dan password untuk login!</p>
            </div>
            <form>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Masukkan Username">
                
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan Password">
                
                <div class="form-options">
                    <a href="#">Lupa password?</a>
                </div>
                
                <button type="submit">Login</button>
                
                <p>Belum Mempunyai Akun? <a href="#">Daftar</a></p>
            </form>
        </div>
    </div>
</body>
</html>
