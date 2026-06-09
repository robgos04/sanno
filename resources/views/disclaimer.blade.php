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
    .career-top h1{font-size:36px; font-weight:700; display:inline-flex; align-items:center; gap:12px; margin:0;}
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
            <h1><img src="{{ asset('/images/about_sanno_icon.png') }}" alt="Product icon"> Disclaimer</h1>
        </div>

        <!-- BODY -->
        <div class="container">
            <div class="row footer-content-list">
                
                <div class="col-12 footer_content_paragraph">
                    <p>Informasi yang tersedia di website ini disediakan untuk tujuan informasi umum. Kami berupaya untuk memastikan seluruh informasi, spesifikasi produk, dan konten yang ditampilkan akurat serta terkini. Namun, kami tidak memberikan jaminan atas kelengkapan, keakuratan, atau kesesuaian informasi tersebut untuk kebutuhan tertentu.</p>
                    <p>Spesifikasi produk, ukuran, warna, ketersediaan, dan informasi teknis dapat berubah sewaktu-waktu tanpa pemberitahuan sebelumnya sebagai bagian dari pengembangan dan peningkatan kualitas produk kami. Tampilan gambar atau ilustrasi pada website ini dapat berbeda dengan produk sebenarnya.</p>
                    <p>Setiap informasi teknis, rekomendasi, atau panduan yang disajikan di website ini sebaiknya digunakan sebagai referensi dan diverifikasi kembali oleh pihak yang berwenang, seperti arsitek, kontraktor, konsultan, atau profesional terkait sebelum diterapkan pada suatu proyek.</p>
                    <p>Perusahaan tidak bertanggung jawab atas segala kerugian, kerusakan, atau konsekuensi yang timbul akibat penggunaan informasi yang terdapat pada website ini.</p>
                    <p>Website ini juga dapat memuat tautan ke situs pihak ketiga. Kami tidak memiliki kendali atas isi maupun kebijakan situs tersebut dan tidak bertanggung jawab atas informasi yang disediakan oleh pihak ketiga.</p>
                    <p>Dengan mengakses dan menggunakan website ini, Anda dianggap telah memahami dan menyetujui isi disclaimer ini.</p>
                    <p>Untuk informasi lebih lanjut mengenai produk dan layanan kami, silakan menghubungi tim kami.</p>
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
            <div class="container">

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
                    <div class="col-12 col-md-6 text-md-end">
                        <a href="{{ route('show.disclaimer') }}">Disclaimer</a>
                        <a href="{{ route('show.terms') }}">Terms of User</a>
                        <a href="{{ route('show.privacy') }}">Privacy Policy</a>
                    </div>
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
