<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url("font-awesome/all.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("bootstrap.css") ?>">
    <link rel="stylesheet" href="<?= base_url("beranda.css") ?>">
    <link rel="stylesheet" href="<?= base_url("style.css") ?>">
    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700;900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', Arial, sans-serif;
        }
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s forwards;
        }
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .card-info {
            border-radius: 18px;
            box-shadow: 0 8px 32px 0 rgba(31,38,135,0.12);
            transition: box-shadow 0.3s, transform 0.3s;
        }
        .card-info:hover {
            box-shadow: 0 16px 40px 0 rgba(31,38,135,0.18);
            transform: scale(1.03);
        }
        .hero {
            background: linear-gradient(120deg, #e3f0ff 0%, #f8fafc 100%);
            padding: 1.2rem 0 0.2rem 0;
        }
        .hero-img-main {
            width: 100%;
            max-width: 320px;
            height: auto;
            max-height: 180px;
            object-fit: cover;
            min-height: 120px;
            display: block;
            margin: 2.5rem auto 0 auto;
            box-shadow: 0 8px 32px 0 rgba(31,38,135,0.13);
            border-radius: 16px;
        }
        .hero-title {
            font-size: 2.6rem;
            font-weight: 900;
            color: #1a237e;
            letter-spacing: 2px;
            margin-bottom: 0.5rem;
        }
        .hero-slogan {
            font-size: 1.15rem;
            color: #3949ab;
            font-weight: 500;
            margin-bottom: 0.5rem;
        }
        .hero-title {
            position: relative;
            font-size: 3.2rem;
            font-weight: 900;
            color: #1a237e;
            letter-spacing: 2px;
            z-index: 2;
            margin-bottom: 0.5rem;
        }
        .hero-slogan {
            position: relative;
            font-size: 1.3rem;
            color: #3949ab;
            font-weight: 500;
            z-index: 2;
        }
        .hero-img-main {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 520px;
            height: auto;
            max-height: 340px;
            object-fit: cover;
            min-height: 180px;
            display: block;
            margin: 2.5rem auto 0 auto;
            box-shadow: 0 8px 32px 0 rgba(31,38,135,0.18);
            border-radius: 18px;
        }
        .section-title {
            font-size: 2.1rem;
            font-weight: 900;
            color: #1a237e;
            margin-bottom: 1.2rem;
            letter-spacing: 2px;
            text-align: center;
            word-break: break-word;
        }
        @media (max-width: 576px) {
            .section-title {
                font-size: 1.25rem;
                margin-bottom: 0.8rem;
                padding: 0 0.7rem;
                font-weight: 900;
                line-height: 1.3;
                letter-spacing: 1px;
                text-align: center;
                word-break: break-word;
            }
        }
        .footer {
            background: #e3f0ff;
            color: #222;
            padding: 2rem 0 1rem 0;
            font-size: 1rem;
        }
        /* Custom Dropdown Styling */
        .dropdown-menu {
            border-radius: 16px !important;
            box-shadow: 0 8px 32px 0 rgba(44,62,80,0.13);
            border: none;
            padding: 0.5rem 0;
            transition: opacity 0.25s cubic-bezier(.4,0,.2,1), transform 0.25s cubic-bezier(.4,0,.2,1);
            opacity: 0;
            transform: translateY(10px);
        }
        .dropdown-menu.show {
            opacity: 1;
            transform: translateY(0);
        }
        .dropdown-item {
            border-radius: 8px;
            margin: 2px 10px;
            padding: 0.65rem 1.1rem;
            transition: background 0.18s, color 0.18s;
        }
        .dropdown-item:hover, .dropdown-item:focus {
            background: #e3f0ff;
            color: #1a237e;
        }
    </style>
    
</head>
<body style="background: linear-gradient(120deg, #e0e7ff 0%, #f8fafc 100%); min-height: 100vh;">
    <?= $this->include("components/main_components.php") ?>
    <?= $this->renderSection("navbar") ?>
    <section class="fade-in">
        <div class="container pt-4 pb-4">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card shadow-lg border-0" style="border-radius: 28px; background: linear-gradient(120deg, #f8fafc 60%, #e3f0ff 100%); box-shadow: 0 8px 32px 0 rgba(44,62,80,0.10);">
                        <div class="card-body p-5">
                            <div class="text-center mb-4" style="position:relative;">
                                <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1600&q=80" alt="Banner SMKN 1 Gunung Sindur" style="width:100vw;max-width:100vw;height:320px;object-fit:cover;display:block;position:absolute;left:50%;top:0;transform:translateX(-50%);border-radius:0;box-shadow:0 4px 18px 0 rgba(44,62,80,0.10);z-index:1;">
                                <div style="position:relative;z-index:2;padding-top:320px;">
                                    <h2 class="section-title mb-2">SMKN 1 GUNUNG SINDUR</h2>
                                    <div class="mx-auto" style="max-width:650px;font-size:1.13rem;line-height:1.8;color:#222;font-weight:500;text-align:justify;">
                                      SMK Negeri 1 Gunung Sindur adalah salah satu sekolah menengah kejuruan negeri yang terletak di Desa Rawakalong, Kecamatan Gunung Sindur, Kabupaten Bogor, Jawa Barat. Berdiri sejak tahun 2011, sekolah ini kini telah menjelma menjadi salah satu pusat pendidikan vokasi unggulan di wilayah Bogor bagian selatan. Dengan visi untuk mencetak lulusan yang beriman, mandiri, siap kerja, dan berdaya saing global, SMKN 1 Gunung Sindur terus berkembang dan berinovasi mengikuti perkembangan dunia industri dan teknologi. Dari sisi pembelajaran karakter dan kreativitas, SMKN 1 Gunung Sindur secara aktif menyelenggarakan berbagai kegiatan seperti Smartren Tahunan, Workshop Fotografi bersama iNews Flash, dan Gelar Karya P5 (Profil Pelajar Pancasila). Melalui kegiatan tersebut, siswa tidak hanya dibekali keterampilan teknis, tetapi juga ditumbuhkan nilai-nilai spiritual, budaya kerja positif, serta kemampuan berkomunikasi dan berkarya di bidang seni dan teknologi. SMK ini juga mengembangkan program kerja ke luar negeri, terutama ke Jepang, yang diperuntukkan bagi siswa kelas 12 yang lolos seleksi bahasa dan keterampilan teknis. Ini menjadi nilai tambah bagi siswa yang ingin membangun karier internasional di bidang industri atau manufaktur.
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center mt-4">
                                <div class="col-md-8">
                                    <div class="card border-0 shadow-sm mb-3" style="border-radius:18px;background:linear-gradient(120deg,#e3f0ff 0%,#f8fafc 100%);">
                                        <div class="card-body py-4">
                                            <h4 class="text-center mb-3" style="color:#1a237e;font-weight:700;font-size:1.18rem;letter-spacing:1px;"><i class="fas fa-list-ul me-2"></i>Program Keahlian</h4>
                                            <div class="row g-2">
                                                <div class="d-flex justify-content-center w-100">
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle px-4 py-2" type="button" id="dropdownJurusan" data-bs-toggle="dropdown" aria-expanded="false" style="font-size:1.07rem;font-weight:600;border-radius:10px;background:#1a237e;">
                                                            Pilih Program Keahlian
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownJurusan" style="min-width:260px;">
                                                            <li><a class="dropdown-item" href="/jurusan/pemesinan"><i class="fas fa-cogs me-2"></i>Teknik Pemesinan</a></li>
                                                            <li><a class="dropdown-item" href="/jurusan/tkro"><i class="fas fa-car me-2"></i>Teknik Kendaraan Ringan Otomotif (TKRO)</a></li>
                                                            <li><a class="dropdown-item" href="/jurusan/elektronika"><i class="fas fa-microchip me-2"></i>Teknik Elektronika Industri</a></li>
                                                            <li><a class="dropdown-item" href="/jurusan/tjkt"><i class="fas fa-network-wired me-2"></i>Jaringan Komputer & Telekomunikasi (TJKT)</a></li>
                                                            <li><a class="dropdown-item" href="/jurusan/broadcast"><i class="fas fa-video me-2"></i>Broadcasting & Perfilman</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 px-2 py-2 text-center" style="background:rgba(240,245,255,0.7);border-radius:12px;font-size:1.07rem;line-height:1.7;color:#222;font-weight:500;">

<div class="text-start" style="max-width:700px;margin:0 auto;">
    <p><strong>SMK Negeri 1 Gunung Sindur</strong> memiliki lima jurusan yang dirancang untuk membekali siswa dengan keterampilan praktis sesuai kebutuhan dunia kerja modern. Pilih salah satu jurusan di atas untuk melihat halaman detail jurusan.</p>
</div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fasilitas, Guru, Lingkungan -->
    <section class="fade-in">
        <div class="container py-4">
            <h2 class="section-title text-center">Fasilitas, Guru, & Lingkungan</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card card-info h-100 text-center">
                        <div class="card-body">
                            <h5 class="mb-2" style="color:#1a237e;font-weight:700;"><i class="fas fa-building me-2"></i>Fasilitas</h5>
                            <ul class="mb-0 ps-3" style="text-align:left;">
                                <li>Laboratorium Komputer & Bahasa</li>
                                <li>Perpustakaan Modern</li>
                                <li>Ruang Kelas Nyaman & Ber-AC</li>
                                <li>Lapangan Olahraga & Area Hijau</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-info h-100 text-center">
                        <div class="card-body">
                            <h5 class="mb-2" style="color:#1a237e;font-weight:700;"><i class="fas fa-chalkboard-teacher me-2"></i>Guru</h5>
                            <ul class="mb-0 ps-3" style="text-align:left;">
                                <li>Tenaga Pendidik Profesional & Berpengalaman</li>
                                <li>Pembimbing Akademik & Karakter</li>
                                <li>Pelatihan Berkala & Sertifikasi</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-info h-100 text-center">
                        <div class="card-body">
                            <h5 class="mb-2" style="color:#1a237e;font-weight:700;"><i class="fas fa-tree me-2"></i>Lingkungan</h5>
                            <ul class="mb-0 ps-3" style="text-align:left;">
                                <li>Suasana Belajar Kondusif & Ramah</li>
                                <li>Area Hijau & Bersih</li>
                                <li>Program Kebersihan & Kesehatan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script>
        // Fade-in animation for all .fade-in
        document.addEventListener('DOMContentLoaded', function() {
            var els = document.querySelectorAll('.fade-in');
            els.forEach(function(el, i) {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                setTimeout(function() {
                    el.style.animation = 'fadeInUp 1s forwards';
                }, 200 + i*150);
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>