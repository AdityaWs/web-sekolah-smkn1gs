<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jaringan Komputer & Telekomunikasi (TJKT) - SMKN 1 Gunung Sindur</title>
    <link rel="stylesheet" href="<?= base_url('bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('font-awesome/all.min.css') ?>">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700;900&display=swap" rel="stylesheet">
    <style>
        /* --- TJKT Page Serious Revamp --- */
        body {
            font-family: 'Poppins', Arial, sans-serif;
            background: linear-gradient(120deg, #e0e7ff 0%, #f8fafc 100%);
        }
        .section-title {
            font-size:2.5rem;
            font-weight:900;
            color:#1a237e;
            letter-spacing:2.5px;
            margin-bottom:1.3rem;
            text-shadow:0 2px 8px rgba(44,62,80,0.08);
        }
        .card {
            border-radius:28px;
            box-shadow:0 16px 48px 0 rgba(44,62,80,0.15);
            border: none;
            background: linear-gradient(120deg,#f8fafc 60%,#e3f0ff 100%);
        }
        .card-body {
            padding:3.2rem 2.2rem;
        }
        .desc {
            font-size:1.22rem;
            line-height:1.95;
            color:#222;
            font-weight:500;
            text-align:justify;
            background:rgba(240,245,255,0.7);
            border-radius:14px;
            padding:1.1rem 1.3rem;
            margin-bottom:1.7rem;
            box-shadow:0 4px 18px 0 rgba(44,62,80,0.07);
        }
        .lab-info {
            background: #e3f0ff;
            border-radius: 18px;
            padding: 1.5rem 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 8px 32px 0 rgba(44,62,80,0.10);
        }
        .lab-info h5 {
            color: #1a237e;
            font-weight: 700;
            margin-bottom: 1.1rem;
            font-size:1.18rem;
            letter-spacing:1px;
        }
        .lab-list {
            font-size:1.09rem;
            margin-bottom:1.2rem;
        }
        .lab-card {
            border-radius:18px;
            box-shadow:0 8px 32px 0 rgba(44,62,80,0.13);
            border:none;
            background:#fff;
            transition:transform 0.18s, box-shadow 0.18s;
        }
        .lab-card:hover {
            transform:scale(1.04);
            box-shadow:0 16px 48px 0 rgba(44,62,80,0.18);
        }
        .lab-card .card-body {
            padding:1.2rem 0.7rem;
        }
        .lab-card .card-body i {
            font-size:2.3rem;
            color:#1a237e;
            margin-bottom:0.3rem;
        }
        .lab-card .fw-bold {
            font-size:1.07rem;
            margin-bottom:0.2rem;
        }
        .lab-card .text-primary {
            font-size:1.18rem;
            font-weight:700;
        }
        .video-section {
            margin-top:2.7rem;
            text-align:center;
        }
        .video-section h5 {
            color:#1a237e;
            font-weight:700;
            margin-bottom:1.1rem;
            font-size:1.13rem;
        }
        .video-responsive {
            position:relative;
            padding-bottom:56.25%;
            height:0;
            overflow:hidden;
            border-radius:18px;
            box-shadow:0 8px 32px 0 rgba(44,62,80,0.13);
            max-width:800px;
            margin:0 auto;
        }
        .video-responsive iframe {
            position:absolute;
            top:0;
            left:0;
            width:100%;
            height:100%;
            border:0;
        }
        @media (max-width: 991px) {
            .card-body { padding: 1.5rem 0.7rem; }
            .section-title { font-size: 1.55rem; }
            .desc { font-size: 1.07rem; }
            .lab-info { padding: 1rem 0.7rem; }
            .video-responsive { max-width:100%; }
        }
        @media (max-width: 576px) {
            .container { padding: 0.7rem 0.2rem !important; }
            .section-title { font-size: 1.18rem; margin-bottom: 0.7rem; }
            .desc { font-size: 0.97rem; padding:0.7rem 0.3rem; }
            .lab-info { padding: 0.7rem 0.3rem; }
            .lab-info h5 { font-size: 1rem; }
            .card-body { padding: 0.7rem; }
            .lab-card { border-radius: 12px; }
            .video-section { margin-top: 1.2rem; }
            .video-responsive { border-radius:12px; }
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="card border-0 mb-4" style="background:linear-gradient(120deg,#e3f0ff 0%,#f8fafc 100%);">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <div class="d-flex justify-content-center align-items-center" style="gap:0;">
                                <div style="flex:1;text-align:right;">
                                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh09uZOojy50l16gXHyrJME1TbAyrhSroG8X6L2cRBdRpkEo5yxPEO2lPsJaBbpBxB_-5dcWPLSyecTnsJPf6K2QraA6u1we6wmQmdbhU3EfnyjQcrNRRbukKN9XJpfNfc3npkN0VgbLr8PNoxE8RvI6DbBJ2hGSxeXDYVBfji5ampG2kedO0be1cy7b_7_/s320/1000026053.png" alt="Logo TJKT" style="width:88px;height:88px;object-fit:contain;background:#e3f0ff;border-radius:16px;">
                                </div>
                                <div style="flex:0 0 48px;"></div>
                                <div style="flex:1;text-align:left;">
                                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgNVz0O585mcDK7tEZWJ2C_RpIlP6W4WOSADMRaYlYi1Ug6l21BoSGgPC5_A9499TVNd2XTcSfUKRcFS5v92LbNwkm7bKkJrtvwFR0fDZv3_yVBvcXoZmX1onDAPTYe2BWZRNtsSHp1ntY3oImtKvl5TbZHeKfiaEjL1tGcKqOg-xBIV0no5sWW6CfYKuGC/s320/OIP-removebg-preview.png" alt="Logo Sekolah" style="width:72px;height:72px;object-fit:contain;background:#e3f0ff;border-radius:16px;">
                                </div>
                            </div>
                        </div>
                        <h1 class="section-title text-center mb-3">Jaringan Komputer & Telekomunikasi (TJKT)</h1>
                        <div class="desc mb-3">
                            <strong>Jaringan Komputer & Telekomunikasi (TJKT)</strong> adalah program keahlian yang membekali siswa dengan keterampilan instalasi, konfigurasi, dan pemeliharaan jaringan komputer serta perangkat telekomunikasi. Siswa TJKT mempelajari teknologi jaringan kabel dan nirkabel, fiber optik, perangkat komunikasi, troubleshooting, serta keamanan jaringan. Lulusan TJKT siap bekerja di bidang IT, teknisi jaringan, telekomunikasi, maupun wirausaha di bidang teknologi informasi dan komunikasi.
                        </div>
                        <div class="lab-info mb-4">
                            <h5><i class="fas fa-network-wired me-2"></i>Jumlah Barang di Laboratorium TJKT</h5>
                            <div class="row g-4">
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="card lab-card h-100 text-center">
                                        <div class="card-body">
                                            <i class="fas fa-desktop"></i>
                                            <div class="fw-bold mt-2 mb-1">Komputer Desktop</div>
                                            <div class="text-primary">32 unit</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="card lab-card h-100 text-center">
                                        <div class="card-body">
                                            <i class="fas fa-laptop"></i>
                                            <div class="fw-bold mt-2 mb-1">Laptop</div>
                                            <div class="text-primary">8 unit</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="card lab-card h-100 text-center">
                                        <div class="card-body">
                                            <i class="fas fa-network-wired"></i>
                                            <div class="fw-bold mt-2 mb-1">Switch & Router</div>
                                            <div class="text-primary">12 unit</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="card lab-card h-100 text-center">
                                        <div class="card-body">
                                            <i class="fas fa-wifi"></i>
                                            <div class="fw-bold mt-2 mb-1">Access Point</div>
                                            <div class="text-primary">6 unit</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="card lab-card h-100 text-center">
                                        <div class="card-body">
                                            <i class="fas fa-cable"></i>
                                            <div class="fw-bold mt-2 mb-1">Kabel UTP & Fiber Optik</div>
                                            <div class="text-primary">100+ meter</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="card lab-card h-100 text-center">
                                        <div class="card-body">
                                            <i class="fas fa-server"></i>
                                            <div class="fw-bold mt-2 mb-1">Server</div>
                                            <div class="text-primary">2 unit</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="card lab-card h-100 text-center">
                                        <div class="card-body">
                                            <i class="fas fa-toolbox"></i>
                                            <div class="fw-bold mt-2 mb-1">Toolkit Jaringan</div>
                                            <div class="text-primary">10 set</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="card lab-card h-100 text-center">
                                        <div class="card-body">
                                            <i class="fas fa-satellite-dish"></i>
                                            <div class="fw-bold mt-2 mb-1">Perangkat Telekomunikasi</div>
                                            <div class="text-primary">5 unit</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="lab-list mb-3 ps-3">
                            <li>Instalasi & Konfigurasi Jaringan Komputer</li>
                            <li>Teknologi Jaringan Kabel, Wireless, & Fiber Optik</li>
                            <li>Perangkat Telekomunikasi & Komunikasi Data</li>
                            <li>Keamanan Jaringan & Troubleshooting</li>
                            <li>Dasar Pemrograman & Internet of Things (IoT)</li>
                        </ul>
                        <div class="video-section">
                            <h5><i class="fas fa-video me-2"></i>Video Profil TJKT</h5>
                            <div class="video-responsive">
                                <iframe src="https://www.youtube.com/embed/jHywnf4afrY?si=AiZU_9YXx1Vd5LDS" title="Video TJKT" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="mt-4 text-center">
                            <a href="/" class="btn btn-outline-primary px-4">Kembali ke Beranda</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
