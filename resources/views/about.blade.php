<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('head')
    <style>
    .gallery_bg{
        background-image:url("{{ asset('/images/gallery_bg_1.png') }}"), url("{{ asset('/images/gallery_bg_2.png') }}");
        background-position: left bottom, right bottom;
        background-size:30%;
        background-repeat: no-repeat;
        margin-top: 0;
    }

    @media screen and (min-width: 1280px) and (max-width: 1800px) { /* macbook 13 inch */
        #about_body {
            margin-bottom: 10%;
        }
    }

    @media screen and (max-width: 600px) {
        .gallery_bg{
            background-image:url("{{ asset('/images/gallery_bg_1.png') }}"), url("{{ asset('/images/gallery_bg_2.png') }}");
            background-position: left bottom, right top;
            background-size:contain;
            background-repeat: no-repeat;
            margin-top:0;
            padding-top:2px;
        }
    }
    .about-top{
        background-image: url("{{ asset('/images/about_us_bg.png') }}");
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        height: 260px;
        display:flex;
        align-items:center;
        justify-content:flex-start;
        color: #ffffff;
        padding-left: 100px;
    }
    .about-top h1{font-size:36px; font-weight:700; display:inline-flex; align-items:center; gap:12px; margin:0;}
    .about-body-row{
        background-image: url("{{ asset('/images/product_background.png') }}");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
    .about_left{
        background-image: none !important;
        background-color: transparent !important;
        padding: 10% !important;
        font-family: 'Inter', sans-serif;
        font-size: 25px;
        color: #ffffff;
    }
    /* Make the standalone about photo match vm-section styling */
    .about-photo {
        position: relative;
        background-color: #c0281c;
        border-radius: 20px;
        overflow: hidden;
        margin-left:10%;
        margin-right:10%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .about-photo img {
        width: 100%;
        height: auto;
        display: block;
        border-radius: 12px;
        object-fit: cover;
    }
    @media screen and (max-width: 600px) {
        .about-top{height:200px; padding-left:50px; justify-content:flex-start;}
        .about-top h1{font-size:24px;}
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
                    <a href="{{ route('show.about') }}" id="about_menu" class="nav-link active">About Us</a>
                    <a href="{{ route('show.product') }}" id="product_menu" class="nav-link">Product</a>
                    <a href="{{ route('show.project') }}" id="project_menu" class="nav-link">Project</a>
                    <a href="{{ route('show.news') }}" id="news_menu" class="nav-link">News</a>
                    <!--<a href="{{ route('show.career') }}" id="career_menu" class="nav-link">Career</a> -->
                    <a href="{{ route('show.contact') }}" id="contact_menu" class="nav-link">Contact Us</a>
                </div>

            </div>
        </nav>

        <!-- HERO: About Top -->
        <div class="row about-top text-start">
            <h1><img src="{{ asset('/images/about_sanno_icon.png') }}" alt="About icon"> About Us</h1>
        </div>

        <!-- ABOUT BODY -->
        <div class="container-fluid">
            <div id="about_body" style="padding:0;">
                <div class="row about-body-row">
                    <div class="col-md-6 col-sm-6 about_left">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <p>PT. Sanno Abadi Cemerlang was founded in 1985 and is based in Makassar, South Sulawesi.</p>
                                <img src="{{ asset('/images/about_left_img.png') }}" alt="About left image" style="width:100%; height:auto; margin-top:20px;">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 about_right">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <p>PT. SANNO is the first Tempered Glass factory in South Sulawesi. Our production facilities include Tempered Glass Manufacturing, Glass Cutting, Beveling, Polishing, and CNC Processing.</p>
                                <p>Our products can be found in various residential and commercial buildings throughout Makassar. As the largest and most technologically advanced glass processing company in Eastern Indonesia, we are committed to delivering the highest quality—faster and better every day.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row about_section">
                    <div class="col-md-12 col-sm-12">
                        <!-- =============================================
                            Vision & Mission Section
                            ============================================= -->
                        <section class="vm-section">
                            <div class="vm-inner">
                        
                                <!-- Left: Glass image -->
                                <div class="vm-image">
                                    <img src="{{ asset('/images/about_vision_mission_img.png') }}" alt="Tempered Glass">
                                </div>
                        
                                <!-- Right: Content -->
                                <div class="vm-content">
                        
                                    <!-- Vision -->
                                    <div class="vm-block">
                                        <h2 class="vm-title">
                                            <img src="{{ asset('/images/about_sanno_icon.png') }}" class="vm-icon" alt="">
                                            Vision
                                        </h2>
                                        <p class="vm-text">
                                            To become the leading glass processing company in Eastern Indonesia, trusted for quality, innovation, and reliability in every piece we create.
                                        </p>
                                    </div>
                        
                                    <div class="vm-separator" aria-hidden="true"></div>
                        
                                    <!-- Mission -->
                                    <div class="vm-block">
                                        <h2 class="vm-title">
                                            <img src="{{ asset('/images/about_sanno_icon.png') }}" class="vm-icon" alt="">
                                            Mission
                                        </h2>
                                        <ul class="vm-mission-list">
                                            <li>To produce high-quality glass product with precise technology and consistent standards.</li>
                                            <li>To continuously improve efficiency, speed, and craftsmanship in every process.</li>
                                            <li>To support residential and commercial development with reliable glass solutions.</li>
                                            <li>To grow as a modern, innovative company while maintaining long-term trust with our partners.</li>
                                        </ul>
                                    </div>
                        
                                </div>
                            </div>
                        
                        </section>
                        <br>
                        <section class="about-photo">
                            <img src="{{ asset('/images/about_photo_img.png') }}" alt="Tempered Glass">
                        </section>
                    </div>
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
                            <a href="#">Contact Us <img src="{{ asset('/images/cta_arrow.png') }}"></img></a>
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
    // Minimal nav JS (keeps behavior similar to welcome)
    document.getElementById('navToggle').addEventListener('click', function () {
        this.classList.toggle('open');
        var links = document.getElementById('navLinks');
        if(links) links.classList.toggle('open');
    });

    document.querySelectorAll('.nav-link').forEach(function (link) {
        link.addEventListener('click', function () {
            document.getElementById('navToggle').classList.remove('open');
            var links = document.getElementById('navLinks');
            if(links) links.classList.remove('open');
            document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
            this.classList.add('active');
        });
    });

    function setActiveMenu(id) {
        document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
        var el = document.getElementById(id);
        if(el) el.classList.add('active');
    }
    </script>
</html>
