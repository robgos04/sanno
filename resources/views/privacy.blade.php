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
                    <a href="{{ route('show.career') }}" id="career_menu" class="nav-link">Career</a>
                    <a href="{{ route('show.contact') }}" id="contact_menu" class="nav-link">Contact Us</a>
                </div>

            </div>
        </nav>

        <!-- HERO: Top -->
        <div class="row career-top text-start">
            <h1><img src="{{ asset('/images/about_sanno_icon.png') }}" alt="Product icon"> Privacy Policy</h1>
        </div>

        <!-- BODY -->
        <div class="container">
            <div class="row footer-content-list">
                
                <div class="col-12 footer_content_paragraph">
                    <p>Terakhir diperbarui: 03-Juni-2026</p><br>
                    <p>Kami menghargai privasi Anda dan berkomitmen untuk melindungi data pribadi yang Anda berikan saat mengakses dan menggunakan website kami. Kebijakan Privasi ini menjelaskan bagaimana kami mengumpulkan, menggunakan, menyimpan, dan melindungi informasi yang diperoleh melalui website ini.</p>
                    <h2>1. Informasi yang Kami Kumpulkan</h2>
                    <p>Kami dapat mengumpulkan informasi yang Anda berikan secara sukarela, termasuk namun tidak terbatas pada:</p>
                    <ul>
                        <li>Nama lengkap</li>
                        <li>Nama perusahaan</li>
                        <li>Alamat email</li>
                        <li>Nomor telepon</li>
                        <li>Alamat atau lokasi proyek</li>
                        <li>Informasi lain yang Anda kirimkan melalui formulir kontak, permintaan penawaran, atau komunikasi lainnya</li>
                    </ul>
                    <p>Selain itu, kami juga dapat mengumpulkan data teknis secara otomatis, seperti:</p>
                    <ul>
                        <li>Alamat IP</li>
                        <li>Jenis perangkat dan browser</li>
                        <li>Halaman yang dikunjungi</li>
                        <li>Waktu dan durasi kunjungan</li>
                        <li>Data analitik website lainnya</li>
                    </ul>
                    <h2>2. Penggunaan Informasi</h2>
                    <p>Kami dapat mengumpulkan informasi yang Anda berikan secara sukarela, termasuk namun tidak terbatas pada:</p>
                    <ul>
                        <li>Menanggapi pertanyaan dan permintaan Anda</li>
                        <li>Memberikan informasi mengenai produk dan layanan kami</li>
                        <li>Menyusun penawaran atau konsultasi proyek</li>
                        <li>Meningkatkan kualitas layanan dan pengalaman pengguna website</li>
                        <li>Melakukan analisis dan pengembangan website</li>
                        <li>Memenuhi kewajiban hukum yang berlaku</li>
                    </ul>
                    <h2>3. Perlindungan Data</h2>
                    <p>Kami menerapkan langkah-langkah keamanan yang wajar untuk melindungi informasi pribadi Anda dari akses, penggunaan, perubahan, atau pengungkapan yang tidak sah.</p>
                    <p>Meskipun demikian, tidak ada metode transmisi data melalui internet yang sepenuhnya aman. Oleh karena itu, kami tidak dapat menjamin keamanan data secara mutlak.</p>
                    <h2>4. Pengungkapan Informasi kepada Pihak Ketiga</h2>
                    <p>Kami tidak menjual, menyewakan, atau memperdagangkan informasi pribadi pengguna kepada pihak ketiga.</p>
                    <p>Informasi Anda hanya dapat dibagikan apabila:</p>
                    <ul>
                        <li>Diperlukan untuk memberikan layanan yang Anda minta.</li>
                        <li>Diwajibkan oleh hukum atau peraturan yang berlaku.</li>
                        <li>Diperlukan untuk melindungi hak, keamanan, dan kepentingan perusahaan.</li>
                    </ul>
                    <h2>5. Cookies</h2>
                    <p>Website ini dapat menggunakan cookies untuk meningkatkan pengalaman pengguna dan membantu kami memahami bagaimana website digunakan.</p>
                    <p>Pengguna dapat mengatur browser untuk menolak atau menghapus cookies, namun beberapa fitur website mungkin tidak berfungsi secara optimal.</p>
                    <h2>6. Tautan ke Website Lain</h2>
                    <p>Website kami dapat berisi tautan ke website pihak ketiga. Kami tidak bertanggung jawab atas praktik privasi maupun isi dari website tersebut. Kami menyarankan Anda untuk membaca kebijakan privasi masing-masing website yang dikunjungi.</p>
                    <h2>7. Hak Pengguna</h2>
                    <p>Anda berhak untuk:</p>
                    <ul>
                        <li>Meminta akses terhadap data pribadi yang kami miliki.</li>
                        <li>Memperbarui atau mengoreksi informasi yang tidak akurat.</li>
                        <li>Meminta penghapusan data pribadi sesuai ketentuan hukum yang berlaku.</li>
                        <li>Menarik persetujuan penggunaan data tertentu jika memungkinkan.</li>
                    </ul>
                    <h2>8. Perubahan Kebijakan Privasi</h2>
                    <p>Kami berhak memperbarui Kebijakan Privasi ini sewaktu-waktu. Setiap perubahan akan dipublikasikan melalui halaman ini dan berlaku sejak tanggal pembaruan.</p>
                    <h2>9. Hubungi Kami</h2>
                    <p>Jika Anda memiliki pertanyaan mengenai Kebijakan Privasi ini atau penggunaan data pribadi Anda, silakan menghubungi kami melalui:</p>
                    <p>PT. SANNO ABADI CEMERLANG</p>
                    <p>Email: sannooffice.kima@gmail.com</p>
                    <p>Telepon: 0853-9727-7930</p>
                    <p>Alamat: Jl. Kima XIV Kav. SS-14, Daya, Kec. Biringkanaya, Kota Makassar, Sulawesi Selatan 90242</p>
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
                            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
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
