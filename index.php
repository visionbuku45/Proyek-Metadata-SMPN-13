<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan SMPN 13 Malang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg custom-navbar sticky-top">
        <div class="container">
            <a class="navbar-brand brand-title" href="index.html">
                <span class="brand-mark">P13</span>
                <span>Perpustakaan SMPN 13 Malang</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                aria-controls="mainNavbar" aria-expanded="false" aria-label="Buka navigasi">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="mainNavbar">
                <div class="navbar-nav nav-links">
                    <a href="index.html" class="nav-link active">Beranda</a>
                    <a href="katalog.html" class="nav-link">Katalog & Metadata</a>
                    <a href="lokasi.html" class="nav-link">Lokasi & Jam Buka</a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <header class="hero-section">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <span class="eyebrow">Digital library experience</span>
                        <h1>Ruang baca sekolah yang lebih cepat ditemukan, lebih nyaman dijelajahi.</h1>
                        <p class="hero-copy">
                            Telusuri koleksi e-book, cek metadata Dublin Core, dan akses bahan belajar dari satu
                            tampilan yang ringan untuk siswa, guru, dan pustakawan.
                        </p>
                        <div class="hero-actions">
                            <a href="katalog.html" class="btn btn-custom btn-lg">Mulai Eksplorasi</a>
                            <a href="lokasi.html" class="btn btn-ghost btn-lg">Lihat Jam Buka</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="library-visual" aria-label="Ilustrasi rak buku digital">
                            <div class="visual-panel panel-left">
                                <span class="panel-kicker">Katalog</span>
                                <strong>Metadata</strong>
                                <small>Dublin Core ready</small>
                            </div>
                            <div class="book-stack">
                                <span class="book book-a"></span>
                                <span class="book book-b"></span>
                                <span class="book book-c"></span>
                                <span class="book book-d"></span>
                            </div>
                            <div class="visual-panel panel-right">
                                <span class="panel-kicker">Akses</span>
                                <strong>E-Book</strong>
                                <small>Belajar mandiri</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hero-metrics">
                    <div>
                        <strong>24/7</strong>
                        <span>Akses katalog</span>
                    </div>
                    <div>
                        <strong>DC</strong>
                        <span>Standar metadata</span>
                    </div>
                    <div>
                        <strong>3</strong>
                        <span>Langkah ke e-book</span>
                    </div>
                </div>
            </div>
        </header>

        <section class="home-section">
            <div class="container">
                <div class="section-heading">
                    <span class="eyebrow">Fitur utama</span>
                    <h2>Dirancang untuk pencarian koleksi yang lebih praktis.</h2>
                </div>
                <div class="row g-4">
                    <div class="col-md-4">
                        <article class="feature-card">
                            <span class="feature-index">01</span>
                            <h3>Pencarian cepat</h3>
                            <p>Cari judul, pengarang, atau subjek tanpa harus membuka banyak halaman.</p>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="feature-card">
                            <span class="feature-index">02</span>
                            <h3>Metadata jelas</h3>
                            <p>Informasi koleksi ditata ringkas agar mudah dibaca dan dipakai kembali.</p>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="feature-card">
                            <span class="feature-index">03</span>
                            <h3>Akses e-book</h3>
                            <p>Tombol akses dibuat menonjol supaya siswa bisa langsung lanjut membaca.</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="custom-footer">
        <div class="container">
            <p>&copy; 2026 Perpustakaan SMPN 13 Malang</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
