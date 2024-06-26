</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('public/assets/styles/styles.css') ?>">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="fas fa-home"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-cogs"></i> e-Services
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-command"></i> e-Command Center
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-reply"></i> e-Response
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-shopping-cart"></i> e-Commerce
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-briefcase"></i> e-Office
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-poll"></i> Kuisoner
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-question-circle"></i> FAQ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-user"></i> Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                </div>

                <div class="alert alert-warning" role="alert">
                    Kamu belum mengisi kuisioner pada periode semester ini, Silahkan isi Kuisioner <a href="#" class="alert-link">Disini</a>. Kamu tidak dapat melakukan pengajuan layanan jika belum mengisi kuisioner. Oleh karena itu, kami mengharapkan agar setiap mahasiswa mengisi kuisioner pada awal setiap semester sebagai bagian dari proses yang diperlukan untuk memberikan pelayanan yang terbaik dan peningkatan kualitas serta evaluasi layanan FT ULM.
                </div>

                <div class="jumbotron">
                    <h1 class="display-4">Selamat Datang Maulana!</h1>
                    <p class="lead">Di website ini kamu dapat mengajukan layanan dan mengecek status pengajuannya.</p>
                </div>

                <h2>Ringkasan</h2>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <div class="card text-white bg-primary mb-3">
                            <div class="card-body">
                                <h5 class="card-title">4</h5>
                                <p class="card-text">Layanan diajukan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white bg-warning mb-3">
                            <div class="card-body">
                                <h5 class="card-title">2</h5>
                                <p class="card-text">Menunggu persetujuan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white bg-success mb-3">
                            <div class="card-body">
                                <h5 class="card-title">1</h5>
                                <p class="card-text">Layanan disetujui</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white bg-danger mb-3">
                            <div class="card-body">
                                <h5 class="card-title">1</h5>
                                <p class="card-text">Layanan ditolak</p>
                            </div>
                        </div>
                    </div>
                </div>

                <h2>Mungkin yang kamu butuhkan</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="<?= base_url('public/assets/images/image.png') ?>" class="card-img-top" alt="Surat Keterangan Lulus">
                            <div class="card-body">
                                <h5 class="card-title">Surat Keterangan Lulus</h5>
                                <p class="card-text">Dapatkan Surat Keterangan Lulus dengan Mudah Melalui Layanan Pengajuan Surat Keterangan Lulus Kami.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="<?= base_url('public/assets/images/image.png') ?>" class="card-img-top" alt="Surat Pengantar Izin PKL">
                            <div class="card-body">
                                <h5 class="card-title">Surat Pengantar Izin PKL</h5>
                                <p class="card-text">Bersiaplah untuk Pengalaman kerja di Dunia Nyata dengan Mengajukan Surat Pengantar Izin PKL Kami.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="<?= base_url('public/assets/images/image.png') ?>" class="card-img-top" alt="Surat Pengantar Izin Penelitian">
                            <div class="card-body">
                                <h5 class="card-title">Surat Pengantar Izin Penelitian</h5>
                                <p class="card-text">Manfaatkan Layanan Ini Untuk Mempercepat Proses Pengajuan Surat Pengantar Izin Penelitian Anda.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="<?= base_url('public/assets/images/image.png') ?>" class="card-img-top" alt="Permintaan Data MK/PKL/TA">
                            <div class="card-body">
                                <h5 class="card-title">Permintaan Data MK/PKL/TA</h5>
                                <p class="card-text">Pengajuan Surat Permintaan Data Mata Kuliah / Praktek Kerja Lapangan / Tugas Akhir Mahasiswa FT ULM.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="<?= base_url('public/assets/images/image.png') ?>" class="card-img-top" alt="Surat Tugas KE/TA">
                            <div class="card-body">
                                <h5 class="card-title">Surat Tugas KE/TA</h5>
                                <p class="card-text">Pengajuan Surat Tugas Kerja Praktik / Tugas Akhir Mahasiswa Fakultas Teknik Universitas Lambung Mangkurat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="<?= base_url('public/assets/images/image.png') ?>" class="card-img-top" alt="MBKM FT ULM">
                            <div class="card-body">
                                <h5 class="card-title">MBKM FT ULM</h5>
                                <p class="card-text">Layanan Ini adalah Pusat Informasi dan Pengajuan Surat Untuk Pelaksanaan Program MBKM FT ULM.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>