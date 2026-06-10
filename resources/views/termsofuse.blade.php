<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('head')
    <style>
    .available-career {
        font-family: 'Asenpro', sans-serif;
        font-size: 1.25rem;
        font-weight: 700;
        color: #5A5A5A;
        margin-top: 5%;
    }

    /* ── Column spacing ─────────────────────────── */
    .footer-content-list .col-md-6 {
        padding-left: 12px;
        padding-right: 12px;
    }
    .career-top{
        background-image: url("{{ asset('/images/about_us_bg.png') }}");
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        height: 260px;
        display:flex;
        align-items:center;
        justify-content:space-between;
        color: #ffffff;
        padding-left: 100px;
        padding-right: 100px;
    }
    .career-top h1{font-size:36px; font-weight:700; display:inline-flex; align-items:center; gap:12px; margin:4% 0 0 -2%;}
    .career-top-copy {
        max-width: 420px;
        text-align: left;
        font-family: 'Inter', sans-serif;
        font-size: 1rem;
        line-height: 1.6;
        color: rgba(255,255,255,0.92);
        margin: 0;
    }
    .footer-content-list {
        margin-bottom: 12%;
        gap: 24px 0;        /* vertical gap between card rows */
    }
    .footer-content-list h2{
        color: black !important;
    }
    .footer_content_paragraph {
         padding: 40px 12px; 
         color: #888;
    }

    @media screen and (max-width: 600px) {
        .career-top{height:auto; padding-left:50px; padding-right:50px; justify-content:center; flex-wrap:wrap; text-align:center; padding-top: 20%; padding-bottom: 40px;}
        .career-top h1{font-size:24px; width:100%; justify-content:center;}
        .career-top-copy { width:100%; text-align:center; margin-top: 18px; }
        .footer-content-list{ margin-bottom: 40%; }
        .footer_content_paragraph { padding: 40px 22px; }
    }
    </style>
    <body>
        <!-- MENU BAR -->
        <nav id="mainNav">
            <div class="nav-inner">

                <!-- Logo -->
                <a href="{{ route('show.home') }}" class="nav-logo" onclick="$('#home_menu').click()">
                    <img src="{{ asset('/images/pt_sanno.png') }}" alt="PT. SANNO">
                </a>

                <!-- Hamburger (mobile) -->
                <button class="nav-hamburger" id="navToggle" aria-label="Toggle menu">
                    <span></span><span></span><span></span>
                </button>

                <!-- Links -->
                <div class="nav-links" id="navLinks">
                    <a href="{{ route('show.home') }}" id="home_menu" class="nav-link">Home</a>
                    <a href="{{ route('show.about') }}" id="about_menu" class="nav-link">About Us</a>
                    <a href="{{ route('show.product') }}" id="product_menu" class="nav-link">Product</a>
                    <a href="{{ route('show.project') }}" id="project_menu" class="nav-link">Project</a>
                    <a href="{{ route('show.news') }}" id="news_menu" class="nav-link">News</a>
                    <!--<a href="{{ route('show.career') }}" id="career_menu" class="nav-link">Career</a> -->
                    <a href="{{ route('show.contact') }}" id="contact_menu" class="nav-link">Contact Us</a>
                </div>

            </div>
        </nav>

        <!-- HERO: Top -->
        <div class="row career-top text-start">
            <h1><img src="{{ asset('/images/about_sanno_icon.png') }}" alt="Product icon"> Terms of Use</h1>
        </div>

        <!-- BODY -->
        <div class="container">
            <div class="row footer-content-list">
                
                <div class="col-12 footer_content_paragraph">
                    <p>Selamat datang di website kami. Dengan mengakses dan menggunakan website ini, Anda dianggap telah membaca, memahami, dan menyetujui seluruh syarat dan ketentuan yang berlaku. Jika Anda tidak menyetujui salah satu bagian dari syarat dan ketentuan ini, mohon untuk tidak menggunakan website ini.</p>
                    <h2>1. Penggunaan Website</h2>
                    <p>Website ini disediakan untuk memberikan informasi mengenai perusahaan, produk, layanan, dan aktivitas yang kami jalankan. Pengguna setuju untuk menggunakan website ini hanya untuk tujuan yang sah dan tidak melanggar peraturan perundang-undangan yang berlaku.</p>
                    <h2>2. Informasi Produk dan Layanan</h2>
                    <p>Kami berupaya menyediakan informasi produk dan layanan yang akurat dan terkini. Namun, spesifikasi, ukuran, warna, ketersediaan produk, serta informasi lainnya dapat berubah sewaktu-waktu tanpa pemberitahuan sebelumnya.</p>
                    <p>Informasi yang ditampilkan pada website ini tidak dapat dianggap sebagai penawaran yang mengikat dan dapat berubah sesuai kebutuhan operasional perusahaan.</p>
                    <h2>3. Hak Kekayaan Intelektual</h2>
                    <p>Seluruh konten yang terdapat pada website ini, termasuk namun tidak terbatas pada teks, gambar, logo, desain, grafik, video, dan materi lainnya merupakan milik perusahaan atau digunakan dengan izin yang sah.</p>
                    <p>Pengguna dilarang menyalin, menggandakan, mendistribusikan, memodifikasi, atau menggunakan konten website tanpa persetujuan tertulis dari perusahaan.</p>
                    <h2>4. Tanggung Jawab Pengguna</h2>
                    <p>Pengguna bertanggung jawab atas segala aktivitas yang dilakukan saat mengakses website ini dan tidak diperkenankan untuk:</p>
                    <ul>
                        <li>Menggunakan website untuk tujuan yang melanggar hukum.</li>
                        <li>Menyebarkan virus, malware, atau program berbahaya lainnya.</li>
                        <li>Mengakses atau mencoba mengakses sistem tanpa izin.</li>
                        <li>Mengganggu operasional atau keamanan website.</li>
                    </ul>
                    <h2>5. Batasan Tanggung Jawab</h2>
                    <p>Perusahaan tidak bertanggung jawab atas kerugian langsung maupun tidak langsung yang timbul akibat penggunaan atau ketidakmampuan menggunakan website ini, termasuk kesalahan informasi, gangguan layanan, atau masalah teknis lainnya.</p>
                    <h2>6. Tautan ke Situs Pihak Ketiga</h2>
                    <p>Website ini dapat berisi tautan ke situs pihak ketiga untuk tujuan informasi atau referensi. Kami tidak memiliki kendali atas isi maupun kebijakan situs tersebut dan tidak bertanggung jawab atas informasi yang disediakan oleh pihak ketiga.</p>
                    <h2>7. Perubahan Syarat dan Ketentuan</h2>
                    <p>Perusahaan berhak mengubah, memperbarui, atau menyesuaikan syarat dan ketentuan ini sewaktu-waktu tanpa pemberitahuan sebelumnya. Perubahan akan berlaku sejak dipublikasikan pada website ini.</p>
                    <h2>8. Hukum yang Berlaku</h2>
                    <p>Syarat dan ketentuan ini diatur dan ditafsirkan berdasarkan hukum yang berlaku di Republik Indonesia.</p>
                    <h2>9. Kontak</h2>
                    <p>Apabila Anda memiliki pertanyaan terkait syarat dan ketentuan ini, silakan menghubungi kami melalui informasi kontak yang tersedia pada website.</p>
                </div>
                
            </div>
        </div>
        <br>

        <!-- CTA "Make your home be modern" -->
        <div id="contact_body">
            <section class="cta-section">
                <div class="container">
                    <div class="row align-items-center">

                    <div class="col-12 col-md-7">
                        <h2>Modern Spaces with Glass</h2>
                        <p>Clean glass designs create a modern look while making your space feel brighter, wider, and more elegant.</p>
                        <div class="sanno_cta">
                            <a href="{{ route('show.contact') }}">Contact Us <img src="{{ asset('/images/cta_arrow.png') }}"></img></a>
                        </div>
                    </div>

                    </div>
                </div>
            </section>
        </div>

        <footer>

                <div class="footer-main row">

                    <div class="col-12 col-md-5 footer-brand">
                        <img src="{{ asset('/images/pt_sanno.png') }}" alt="PT. SANNO" class="footer-logo">
                        <p class="footer-tagline"><strong>PT. SANNO</strong> is the first Tempered Glass factory in South Sulawesi.</p>
                        <div class="footer-socials">
                            <a href="https://www.instagram.com/diana.flatglass/" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.facebook.com/share/17jwUP67ve/" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 footer-links">
                        <h6 class="footer-col-title">Links</h6>
                        <ul>
                            <li><a href="{{ route('show.home') }}">Home</a></li>
                            <li><a href="{{ route('show.about') }}">About Us</a></li>
                            <li><a href="{{ route('show.product') }}">Product</a></li>
                            <li><a href="{{ route('show.project') }}">Project</a></li>
                        </ul>
                        <br>
                        <h6 class="footer-col-title">Company</h6>
                        <ul>
                            <li><a href="{{ route('show.news') }}">News</a></li>
                            <li><a href="{{ route('show.career') }}">Careers</a></li>
                            <li><a href="{{ route('show.contact') }}">Contact Us</a></li>
                        </ul>
                    </div>

                    <!-- Col 3: Connect with Us -->
                    <div class="col-12 col-md-4 footer-connect">
                        <h6 class="footer-col-title">Connect with Us</h6>

                        <div class="footer-location">
                            <p class="footer-location-title"><i class="fas fa-map-marker-alt"></i> Jl. Kima XIV Kav. SS-14, Daya, Kec. Biringkanaya, Kota Makassar, Sulawesi Selatan 90242</p>
                            <hr class="footer-divider">
                            <p><i class="fas fa-envelope"></i> <a href="mailto:info@sannoglass.com" style="color:#ffffff !important;">info@sannoglass.com</a></p>
                            <hr class="footer-divider">
                            <p><i class="fas fa-phone"></i> <a href="https://wa.me/+6285397277930" target="_blank" style="color:#ffffff !important;">0853-9727-7930</a></p>
                        </div>
                
                    </div>

                </div>

                <div class="footer-bottom row align-items-center">
                    <div class="col-12 col-md-6">
                        <p>Copyright &copy;2026 PT. SANNO</p>
                    </div>
                    <div class="col-12 col-md-6 text-md-right">
                        <a href="{{ route('show.disclaimer') }}">Disclaimer</a>
                        <a href="{{ route('show.terms') }}">Terms of User</a>
                        <a href="{{ route('show.privacy') }}">Privacy Policy</a>
                    </div>
                </div>

        </footer>
    </body>
    <script>
    document.getElementById('navToggle').addEventListener('click', function () {
        this.classList.toggle('open');
        var links = document.getElementById('navLinks');
        if (links) links.classList.toggle('open');
    });

    document.querySelectorAll('.nav-link').forEach(function (link) {
        link.addEventListener('click', function () {
            document.getElementById('navToggle').classList.remove('open');
            var links = document.getElementById('navLinks');
            if (links) links.classList.remove('open');
            document.querySelectorAll('.nav-link').forEach(function (l) { l.classList.remove('active'); });
            this.classList.add('active');
        });
    });

    function setActiveMenu(id) {
        document.querySelectorAll('.nav-link').forEach(function (l) { l.classList.remove('active'); });
        var el = document.getElementById(id);
        if (el) el.classList.add('active');
    }
    </script>
</html>
