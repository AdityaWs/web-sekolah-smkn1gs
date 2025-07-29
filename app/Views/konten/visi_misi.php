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
    
</head>
<body style="background: linear-gradient(135deg, #dce4ecff 0%, #f5f7fa 50%, #e0e7ff 100%); min-height: 100vh;">

<?= $this->include("components/main_components.php") ?>
<?= $this->renderSection("navbar") ?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 fade-section" style="border-radius: 26px; background: linear-gradient(120deg, #f8fafc 60%, #e3f0ff 100%); box-shadow: 0 8px 32px 0 rgba(44,62,80,0.10);">
                <div class="card-body p-5">
                    <div class="text-center mb-4">
                        <span class="d-inline-block mb-2" style="font-size:6.8rem; color:#3949ab;">
                            <i class="fas fa-bullseye"></i>
                        </span>
                        <h1 style="font-family:'Poppins',Arial,sans-serif;font-weight:900;font-size:2.3rem;letter-spacing:2px;color:#222;">Visi & Misi</h1>
                    </div>
                    <div class="row g-4 align-items-center">
                        <div class="col-md-5">
                            <div class="fade-section">
                                <div class="mb-3 text-center" style="font-size:2.2rem;color:#43a047;">
                                    <i class="fas fa-eye"></i>
                                </div>
                                <h4 class="text-success text-center mb-2" style="font-weight:700;">Visi</h4>
                                <p class="mb-0 text-center" style="font-size:1.15rem; line-height:1.7;">
                                    Menjadi sekolah menengah kejuruan unggulan yang menghasilkan lulusan berkarakter kuat, kompeten di bidangnya, serta siap bersaing di dunia kerja maupun melanjutkan pendidikan ke jenjang yang lebih tinggi.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="fade-section">
                                <div class="mb-3 text-center" style="font-size:2.2rem;color:#1e88e5;">
                                    <i class="fas fa-tasks"></i>
                                </div>
                                <h4 class="text-primary text-center mb-4" style="font-weight:700;">Misi</h4>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-3 d-flex align-items-start">
                                        <span class="me-2" style="font-size:1.3rem;color:#43a047;"><i class="fas fa-bullseye"></i></span>
                                        <span style="font-size:1.08rem;line-height:1.6;">Menyelenggarakan pendidikan kejuruan yang relevan dan berkualitas sesuai kebutuhan dunia industri.</span>
                                    </li>
                                    <li class="mb-3 d-flex align-items-start">
                                        <span class="me-2" style="font-size:1.3rem;color:#43a047;"><i class="fas fa-lightbulb"></i></span>
                                        <span style="font-size:1.08rem;line-height:1.6;">Mengembangkan potensi, kreativitas, dan kemandirian siswa melalui pembelajaran aktif serta kegiatan ekstrakurikuler.</span>
                                    </li>
                                    <li class="mb-3 d-flex align-items-start">
                                        <span class="me-2" style="font-size:1.3rem;color:#43a047;"><i class="fas fa-user-shield"></i></span>
                                        <span style="font-size:1.08rem;line-height:1.6;">Menanamkan nilai karakter, kedisiplinan, integritas, dan semangat inovasi dalam setiap aktivitas sekolah.</span>
                                    </li>
                                    <li class="mb-3 d-flex align-items-start">
                                        <span class="me-2" style="font-size:1.3rem;color:#43a047;"><i class="fas fa-handshake"></i></span>
                                        <span style="font-size:1.08rem;line-height:1.6;">Menjalin kemitraan strategis dengan dunia usaha dan industri untuk mendukung penyaluran kerja dan pengembangan kompetensi siswa.</span>
                                    </li>
                                    <li class="mb-3 d-flex align-items-start">
                                        <span class="me-2" style="font-size:1.3rem;color:#43a047;"><i class="fas fa-users"></i></span>
                                        <span style="font-size:1.08rem;line-height:1.6;">Meningkatkan kolaborasi antara sekolah, orang tua, dan masyarakat dalam mendukung pendidikan siswa.</span>
                                    </li>
                                    <li class="mb-3 d-flex align-items-start">
                                        <span class="me-2" style="font-size:1.3rem;color:#43a047;"><i class="fas fa-book-open"></i></span>
                                        <span style="font-size:1.08rem;line-height:1.6;">Mendorong inovasi pembelajaran berbasis teknologi dan digital.</span>
                                    </li>
                                    <li class="mb-3 d-flex align-items-start">
                                        <span class="me-2" style="font-size:1.3rem;color:#43a047;"><i class="fas fa-award"></i></span>
                                        <span style="font-size:1.08rem;line-height:1.6;">Meningkatkan prestasi akademik dan non-akademik siswa melalui kompetisi dan penghargaan.</span>
                                    </li>
                                    <li class="mb-3 d-flex align-items-start">
                                        <span class="me-2" style="font-size:1.3rem;color:#43a047;"><i class="fas fa-globe-asia"></i></span>
                                        <span style="font-size:1.08rem;line-height:1.6;">Membuka peluang kerjasama internasional untuk memperluas wawasan dan pengalaman siswa.</span>
                                    </li>
                                    <li class="mb-3 d-flex align-items-start">
                                        <span class="me-2" style="font-size:1.3rem;color:#43a047;"><i class="fas fa-heart"></i></span>
                                        <span style="font-size:1.08rem;line-height:1.6;">Menanamkan kepedulian sosial dan lingkungan hidup dalam setiap program sekolah.</span>
                                    </li>
                                    <li class="mb-3 d-flex align-items-start">
                                        <span class="me-2" style="font-size:1.3rem;color:#43a047;"><i class="fas fa-graduation-cap"></i></span>
                                        <span style="font-size:1.08rem;line-height:1.6;">Mempersiapkan siswa untuk melanjutkan pendidikan ke jenjang yang lebih tinggi.</span>
                                    </li>
                                    <li class="mb-3 d-flex align-items-start">
                                        <span class="me-2" style="font-size:1.3rem;color:#43a047;"><i class="fas fa-briefcase"></i></span>
                                        <span style="font-size:1.08rem;line-height:1.6;">Membekali siswa dengan keterampilan kerja dan kewirausahaan agar siap menghadapi tantangan masa depan.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Fade-in animation on scroll for all .fade-section
document.addEventListener('DOMContentLoaded', function() {
    function fadeInOnScroll() {
        var elements = document.querySelectorAll('.fade-section');
        var windowHeight = window.innerHeight;
        elements.forEach(function(el, i) {
            var position = el.getBoundingClientRect().top;
            if (position < windowHeight - 60) {
                el.style.opacity = 1;
                el.style.transform = 'translateY(0)';
                el.style.transition = 'opacity 0.7s cubic-bezier(.34,1.56,.64,1) '+(i*0.15)+'s, transform 0.7s cubic-bezier(.34,1.56,.64,1) '+(i*0.15)+'s';
            } else {
                el.style.opacity = 0;
                el.style.transform = 'translateY(40px)';
            }
        });
    }
    fadeInOnScroll();
    window.addEventListener('scroll', fadeInOnScroll);
    // Responsive: re-trigger on resize
    window.addEventListener('resize', fadeInOnScroll);
});
</script>
</body>
</html>