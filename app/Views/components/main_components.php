
<?= $this->section("navbar") ?>

<div class="cnavbar">
    <div class="cnavbar--icon">
        <img src="https://upload.wikimedia.org/wikipedia/id/1/1d/Logo_SMKN_1_Gunung_Sindur.jpg" alt="LOGO">
    </div>
    <div class="cnavbar--title">
        <b>SMKN 1 GUNUNG SINDUR</b>
    </div>
    <a href="#" class="cnavbar--button">
        <div class="fa fa-bars"></div>
    </a>
</div>

<?= $this->endSection() ?>

<?= $this->section("footer") ?>

<footer class="footer">
    <div class="container-fluid">
        <div class="footer--items row">
            <div class="col-md-6 col-sm-12 col-12">
            <h5>SMKN 1 GUNUNG SINDUR</h5>
            <p class="text-muted-custom">Sekolah Pusat Keunggulan 2024. Disiplin, Bersih, dan Religius</p>
            <p class="text-muted-custom">&copy; 2024 SKMN 1 GUNUNG SINDUR. Hak Cipta Dilindungi.</p>
            </div>
            <div class="col-md-2 col-sm-6 col-12">
                <h5>Sekolah</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="#">Sejarah Sekolah</a></li>
                    <li><a href="#">Visi Sekolah</a></li>
                    <li><a href="#">Misi Sekolah</a></li>
                    <li><a href="#">Jurusan Yang Tersedia</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-6 col-12">
                <h5>Lainnya</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Berita</a></li>
                    <li><a href="#">Prestasi dan Penghargaan Kami</a></li>
                    <li><a href="#">Sekolah 3D</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-6 col-12">
                <h5>Dukungan</h5>
                <ul class="list-unstyled">
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Kontak</a></li>
                    <li><a href="#">Privasi</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<?= $this->endSection() ?>
