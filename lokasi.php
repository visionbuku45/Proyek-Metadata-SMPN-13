<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lokasi - Perpustakaan SMPN 13 Malang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body class="page-soft">
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
                    <a href="index.html" class="nav-link">Beranda</a>
                    <a href="katalog.html" class="nav-link">Katalog & Metadata</a>
                    <a href="lokasi.html" class="nav-link active">Lokasi & Jam Buka</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="content-page">
        <section class="container">
            <div class="page-header">
                <span class="eyebrow">Kunjungi kami</span>
                <h1>Lokasi perpustakaan dan jam layanan.</h1>
                <p>Datang sesuai jadwal layanan sekolah, atau gunakan peta untuk menemukan area SMPN 13 Malang.</p>
            </div>

            <div class="row g-4 align-items-stretch">
                <div class="col-lg-4">
                    <aside class="schedule-card h-100">
                        <span class="schedule-badge">Jam Operasional</span>
                        <h2>Siap membantu kegiatan baca dan belajar.</h2>
                        <ul class="schedule-list">
                            <li>
                                <strong>Senin - Kamis</strong>
                                <span>08.00 - 15.00 WIB</span>
                            </li>
                            <li>
                                <strong>Jumat</strong>
                                <span>08.00 - 11.30 WIB</span>
                            </li>
                            <li>
                                <strong>Sabtu - Minggu</strong>
                                <span class="closed">Tutup</span>
                            </li>
                        </ul>
                    </aside>
                </div>

                <div class="col-lg-8">
                    <div class="map-card h-100">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.4328227653244!2d112.61741877476834!3d-7.954124992060822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827931f6259d%3A0xc0f1998522a36d29!2sSMP%20Negeri%2013%20Malang!5e0!3m2!1sid!2sid!4v1715497283456!5m2!1sid!2sid"
                            width="100%" height="100%" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" title="Peta SMPN 13 Malang"></iframe>
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
