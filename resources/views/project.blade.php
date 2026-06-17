<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('head')
    <style>
    .project-top{
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
    .project-top h1{font-size:36px; font-weight:700; display:inline-flex; align-items:center; gap:12px; margin:4% 0 0 -2%;}
    .project-top-copy {
        max-width: 420px;
        text-align: left;
        font-family: 'Inter', sans-serif;
        font-size: 1rem;
        line-height: 1.6;
        color: rgba(255,255,255,0.92);
        margin: 0;
    }
    .project-list {
        margin-bottom: 10%;
    }
    .project-list .col-md-4,
    .project-list .col-sm-4 {
        padding: 0;
    }
    .project-list img {
        width: 100%;
        height: auto;
        display: block;
        object-fit: cover;
    }

    .card-label {
        padding: 10px 25px !important;
        background: rgba(0,0,0,0.2) !important;
    }

    .project-badge-coming-soon {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.45);
        color: #ffffff;
        font-size: 1.1rem;
        font-weight: 700;
        font-family: 'Asenpro', sans-serif;
        font-style: italic;
        letter-spacing: 0.04em;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 10;
        pointer-events: none;
    }
    /**/ 

    .project-sanno {
        position: relative;
        overflow: hidden;
        cursor: pointer;
    }

    .project-sanno img {
        width: 100%;
        display: block;
        transition: transform .5s ease;
    }

    /* Gradient */
    .project-sanno::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(
            to top,
            rgba(0,0,0,.24),
            transparent
        );
        opacity: 0;
        transition: .4s ease;
        z-index: 1;
    }

    /* Text awalnya hilang */
    .project-sanno p {
        position: absolute;
        left: 40px;
        bottom: 30px;
        color: #fff;
        margin: 0;
        z-index: 2;
        opacity: 0;
        transform: translateY(20px);
        transition: all .4s ease;
    }

    /* Hover */
    .project-sanno:hover::before {
        opacity: 1;
    }

    .project-sanno:hover p {
        opacity: 1;
        transform: translateY(0);
    }

    .project-sanno:hover img {
        transform: scale(1.08);
    }

    .product-section {
        padding-top: 64px;
    }

    .project-name {
        position: absolute;
        left: 40px;
        bottom: 30px;
        margin: 0;
        font-family: 'Asen Pro', sans-serif;
        font-weight: bold;
        color: #fff;
        font-size: 18px;
        z-index: 2;
    }

    @media screen and (max-width: 600px) {
        .project-top{height:auto; padding-left:50px; padding-right:50px; justify-content:center; flex-wrap:wrap; text-align:center; padding-top: 20%; padding-bottom: 80px;}
        .project-top h1{font-size:24px; width:100%; justify-content:center;}
        .project-top-copy { width:100%; text-align:center; margin-top: 18px; }
        .project-list {
            margin-bottom: 40%;
        }
        .card-label { padding: 10px 20px; }
    }
    @media screen and (min-width: 1900px) { /* large screen pc */
        .project-top { height: 300px; }
        .project-top h1 { margin-left: 0; }
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
                    <a href="{{ route('show.project') }}" id="project_menu" class="nav-link active">Project</a>
                    <a href="{{ route('show.news') }}" id="news_menu" class="nav-link">News</a>
                    <!--<a href="{{ route('show.career') }}" id="career_menu" class="nav-link">Career</a> -->
                    <a href="{{ route('show.contact') }}" id="contact_menu" class="nav-link">Contact Us</a>
                </div>

            </div>
        </nav>

        <!-- HERO: Project Top -->
        <div class="row project-top text-start">
            <h1><img src="{{ asset('/images/about_sanno_icon.png') }}" alt="Project icon"> Our Project</h1>
            <div class="project-top-copy">
                <p>Every project is completed with high standards,<br>quality materials, and expert craftmanship for<br>precise results.</p>
            </div>
        </div>

        <!-- PROJECT BODY -->
        <div class="container-fluid">
            <div class="row project-list">
                @forelse($projects as $project)
                    <div class="col-md-4 col-sm-4">
                        <div class="project-sanno">
                            <img src="{{ asset('images/projects/' . $project->projectpic) }}" alt="{{ $project->projectname }}" loading="lazy">

                            {{-- Coming Soon badge on the latest project --}}
                            @if($project->id === $latestProjectId)
                                <div class="project-badge-coming-soon">Many more Projects</div>
                            @endif

                            <div class="card-overlay">
                                <p class="project-name"><i>{{ $project->projectname }}</i></p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p style="color:#aaa;">No projects yet.</p>
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
                            <a href="{{ route('show.contact') }}">Contact Us <i class="ri-arrow-right-circle-line"></i></a>
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
