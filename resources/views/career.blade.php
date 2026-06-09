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
    .career-list {
        margin-bottom: 15%;
        gap: 24px 0;        /* vertical gap between card rows */
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
        font-family: 'Asenpro', sans-serif;
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

    /* ── Bottom: Date + Button ──────────────────── */
    .career-card-moredetail {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 16px 30px 24px;
        border-top: 1px solid rgba(255, 255, 255, 0.18);
    }

    .career-card-moredetail p {
        font-size: 0.82rem !important;
        color: rgba(255, 255, 255, 0.65) !important;
        margin: 0 !important;
    }

    /* ── See Detail button ──────────────────────── */
    .career-card-moredetail a {
        text-decoration: none;
    }

    .career-card-moredetail .sanno_cta {
        background: transparent !important;
        border: 2px solid rgba(255, 255, 255, 0.85) !important;
        color: #fff !important;
        font-size: 0.85rem !important;
        font-weight: 600;
        padding: 9px 22px;
        border-radius: 8px;
        letter-spacing: 0.02em;
        transition: background 0.2s ease, border-color 0.2s ease;
        white-space: nowrap;
        display: inline-block;
    }

    .career-card-moredetail a:hover .sanno_cta {
        background: rgba(255, 255, 255, 0.15) !important;
        border-color: #fff !important;
    }
    .career_empty {
        padding: 40px 12px; 
        color: #888;
    }

    @media screen and (max-width: 600px) {
        .career-top{height:auto; padding-left:50px; padding-right:50px; justify-content:center; flex-wrap:wrap; text-align:center; padding-top: 20%; padding-bottom: 40px;}
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
        .career_empty {
            padding: 40px 22px; 
        }
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
                    <!--<a href="{{ route('show.career') }}" id="career_menu" class="nav-link active">Career</a> -->
                    <a href="{{ route('show.contact') }}" id="contact_menu" class="nav-link">Contact Us</a>
                </div>

            </div>
        </nav>

        <!-- HERO: Career Top -->
        <div class="row career-top text-start">
            <h1><img src="{{ asset('/images/about_sanno_icon.png') }}" alt="Product icon"> Career</h1>
            <div class="project-top-copy">
                <p>Join our team and grow with a glass company<br>committed to quality, innovation, and professionalism in every process.</p>
            </div>
        </div>

        <!-- CAREER BODY -->
        <div class="container">
            @if($careers->count() != 0)
            <div class="available-career">
                <p>Available Jobs ({{ $careers->count() }})</p>
            </div>
            @endif
            <div class="row career-list">
                @forelse($careers as $career)
                <div class="col-md-6 col-sm-6">
                    <div class="career-card">
                        <div class="career-card-jobtitle">
                            <h2>{{ $career->careername }}</h2>
                            <p><i>Diana Glass / PT. SANNO</i></p>
                        </div>
                        <div class="career-card-jobdesc">
                            <p>{{ $career->careerdesc }}</p>
                        </div>
                        <div class="career-card-moredetail">
                            <p>{{ \Carbon\Carbon::parse($career->careerdate)->diffForHumans() }}</p>
                            <a href="#"><div class="sanno_cta">
                                See Detail
                            </div></a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 career_empty">
                    <h1 style="color: black;">Join Our Team</h1>
                    <p style="color: black;">We are always looking for talented and passionate individuals to join our team. If you are interested in working with us, please send your CV and portfolio to <b><i><a href="mailto:info@sannoglass.com" style="color:black;">info@sannoglass.com</a></i></b></p>
                </div>
                @endforelse
                
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
