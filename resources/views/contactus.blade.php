<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('head')
    <style>
    footer {
        padding-top: 70px;
    }
    /* ── Career list row gap ────────────────────── */
    .career-list {
        margin-top: 10%;
        margin-bottom: 20%;
        gap: 24px 0;        /* vertical gap between card rows */
    }

    /* ── Column spacing ─────────────────────────── */
    .career-list .col-md-6 {
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
    .career-list {
        margin-top: 10%;
        margin-bottom: 20%;
    }
    .career-card {
        background-image: url("{{ asset('/images/career_card_bg.png') }}");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        border-radius: 12px;
        overflow: hidden;           /* now works correctly — card is no longer a col */
        color: #fff;
        display: flex;
        flex-direction: column;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        height: 100%; 
    }
    /* ── Top: Job Title band ────────────────────── */
    .career-card-jobtitle {
        padding: 24px 30px 20px;
        border-left: 5px solid #ff6b4a;
    }
    .career-card-jobtitle h2 {
        font-size: 1.15rem !important;   /* !important to override global h2 */
        font-weight: 700 !important;
        color: #fff !important;
        margin: 0 0 6px !important;
        line-height: 1.3;
    }
    .career-card-jobtitle p {
        font-size: 0.85rem !important;
        color: rgba(255, 255, 255, 0.80) !important;
        margin: 0 !important;
        font-style: italic;
    }
    
    /* ── Middle: Description ────────────────────── */
    .career-card-jobdesc {
        padding: 20px 30px;
        flex: 1;
    }

    .career-card-jobdesc p {
        font-size: 0.9rem !important;
        line-height: 1.65;
        color: rgba(255, 255, 255, 0.90) !important;
        margin: 0 !important;
    }

    .contact-input {
        background: rgba(255, 255, 255, 0.08) !important;
        border: 1px solid rgba(255, 255, 255, 0.25) !important;
        color: #fff !important;
        border-radius: 8px !important;
        padding: 12px 16px !important;
        font-size: 0.95rem !important;
        transition: border-color 0.2s ease, background 0.2s ease;
    }

    .contact-input::placeholder {
        color: rgba(255, 255, 255, 0.45) !important;
    }

    .contact-input:focus {
        background: rgba(255, 255, 255, 0.13) !important;
        border-color: rgba(255, 255, 255, 0.6) !important;
        box-shadow: none !important;
        color: #fff !important;
        outline: none !important;
    }

    .map-wrapper {
        position: relative;
        width: 100%;
        padding-bottom: 56.25%; /* 16:9 ratio */
        height: 0;
        overflow: hidden;
        border-radius: 12px;
    }

    .map-wrapper iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }

    @media screen and (max-width: 600px) {
        .career-top{height:auto; padding-left:50px; padding-right:50px; justify-content:center; flex-wrap:wrap; text-align:center; padding-top: 20%; padding-bottom: 80px;}
        .career-top h1{font-size:24px; width:100%; justify-content:center;}
        .career-top-copy { width:100%; text-align:center; margin-top: 18px; }
        .career-list{ margin-bottom: 40%; }
        .career-card {
            margin-bottom: 16px;
        }

        .career-card-jobtitle {
            padding: 20px 23px 16px;
        }

        .career-card-jobdesc {
            padding: 16px 23px;
        }

        .career-card-moredetail {
            padding: 14px 23px 20px;
        }
        .map-wrapper {
            padding-bottom: 75%; /* taller on mobile for better visibility */
            border-radius: 8px;
        }
        footer { margin-top: -145px; }
    }
    @media screen and (min-width: 1900px) { /* large screen pc */
        .career-top { height: 300px; }
        .career-top h1 { margin-left: 0; }
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
                    <a href="{{ route('show.contact') }}" id="contact_menu" class="nav-link active">Contact Us</a>
                </div>

            </div>
        </nav>

        <!-- HERO: Contact Us Top -->
        <div class="row career-top text-start">
            <h1><img src="{{ asset('/images/about_sanno_icon.png') }}" alt="Product icon"> Contact Us</h1>
            <div class="project-top-copy">
                <p>Join our team and grow with a glass company<br>committed to quality, innovation, and professionalism in every process.</p>
            </div>
        </div>

        <!-- CONTACT US BODY -->
        <div class="container-fluid px-0">
            <section class="cta-section-page" style="min-height: auto; padding: 60px 0 80px;">
                <div class="container">

                    <!-- Form -->
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-7">

                            <h2 style="color:#fff; font-weight:700; margin-bottom:6px;">Let's Connect</h2>
                            <p style="color:rgba(255,255,255,0.70); margin-bottom:32px;">Have questions or need a custom glass solution? Our team is ready to help you with reliable support and professional service.</p>

                            <div class="mb-3">
                                <input type="text" name="contact_name" id="contact_name" class="form-control contact-input" placeholder="Your Name">
                            </div>
                            <div class="mb-3">
                                <input type="text" name="contact_email" id="contact_email" class="form-control contact-input" placeholder="Email Address">
                            </div>
                            <div class="mb-3">
                                <input type="number" name="contact_no" id="contact_no" class="form-control contact-input" placeholder="Phone Number">
                            </div>
                            <div class="mb-4">
                                <textarea name="contact_message" id="contact_message" class="form-control contact-input" rows="4" placeholder="Your message, address, or social media"></textarea>
                            </div>

                            <div class="d-flex align-items-center gap-4">
                                <button type="submit" class="btn_email sanno_cta" style="cursor:pointer;">
                                    Submit <img src="{{ asset('/images/cta_arrow.png') }}">
                                </button>
                            </div>

                        </div>
                    </div>
                    <br><br>

                    <!-- Map -->
                    <div class="row mb-5">
                        <div class="col-12">
                            <div class="map-wrapper">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.0409855792172!2d119.50444567504107!3d-5.097075994879873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefd7b66055dcb%3A0x7cead8cbd5b09a10!2sPT.%20Sanno%20Abadi%20Cemerlang!5e0!3m2!1sen!2stw!4v1780158123980!5m2!1sen!2stw"
                                    allowfullscreen=""
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>
        <br>

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

    $(".btn_email").on("click",function(){
        sendEmail();
    });

    function sendEmail(){
        $.ajax({
            url: '{{ route("send.email") }}',
            method: 'GET',
            data: {
                'name': $("#contact_name").val(),
                'email': $("#contact_email").val(),
                'phone':$("#contact_no").val(),
                'message':$("#contact_message").val(),
            },
            success: function(resp) {
                alert("Email sent");
                $("#contact_name").val('');
                $("#contact_email").val('');
                $("#contact_no").val('');
                $("#contact_message").val('');
            },
            cache: false
        });
    }
    </script>
</html>
