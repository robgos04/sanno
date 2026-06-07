<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('head')
    <style>
    .news-detail-hero {
        background-image: url("{{ asset('/images/about_us_bg.png') }}");
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        height: 260px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        color: #ffffff;
        padding-left: 100px;
        padding-right: 100px;
    }
    .news-detail-hero h1 {
        font-size: 36px;
        font-weight: 700;
        display: inline-flex;
        align-items: center;
        gap: 12px;
        margin: 0;
    }
    .news-detail-body {
        margin-top: 2%;
        margin-bottom: 0;
        position: relative;
        z-index: 2;
        background: #ffffff;
        padding-bottom: 15%;
    }
    .news-detail-cover {
        width: 100%;
        max-height: 480px;
        object-fit: cover;
        border-radius: 16px;
        display: block;
        margin-bottom: 36px;
    }
    .news-detail-meta {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-bottom: 20px;
        flex-wrap: wrap;
    }
    .news-detail-date-box {
        background: rgba(192, 40, 28, 0.95);
        border-radius: 12px;
        padding: 10px 16px;
        color: #fff;
        text-align: center;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .news-detail-date-box .news-date-day {
        font-size: 1.5rem;
        font-weight: 800;
        line-height: 1;
    }
    .news-detail-date-box .news-date-month-year {
        display: flex;
        flex-direction: column;
        font-size: 0.8rem;
        opacity: 0.92;
        text-align: left;
    }
    .news-detail-source-badge {
        background: rgba(0,0,0,0.07);
        color: #555;
        border-radius: 20px;
        padding: 6px 16px;
        font-size: 0.82rem;
        font-weight: 600;
        letter-spacing: 0.03em;
    }
    .news-detail-title {
        font-size: 2rem;
        font-weight: 700;
        color: #111;
        margin-bottom: 24px;
        line-height: 1.3;
        font-family: 'AsenPro', sans-serif;
    }
    .news-detail-content {
        font-size: 1rem;
        line-height: 1.9;
        color: #333;
        font-family: 'Inter', sans-serif;
        white-space: pre-line;
    }
    .news-detail-footer {
        margin-top: 40px;
        padding-top: 24px;
        border-top: 1px solid rgba(0,0,0,0.1);
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 16px;
    }

    .news-breadcrumb {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 20px;
        font-size: 0.85rem;
        font-family: 'Inter', sans-serif;
        flex-wrap: wrap;
    }

    .news-breadcrumb a {
        color: #888;
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .news-breadcrumb a:hover {
        color: #c0281c;
    }

    .news-breadcrumb .breadcrumb-separator {
        color: #bbb;
        font-size: 0.75rem;
    }

    .news-breadcrumb .breadcrumb-current {
        color: #111;
        font-weight: 600;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 300px;
    }
    #contact_body {
        position: relative;
        z-index: 3;
        clear: both;
    }

    @media screen and (max-width: 600px) {
        .news-detail-hero {
            height: auto;
            padding-left: 30px;
            padding-right: 30px;
            padding-top: 20%;
            padding-bottom: 40px;
            flex-wrap: wrap;
            justify-content: center;
            text-align: center;
        }
        .news-detail-hero h1 {
            font-size: 24px;
            justify-content: center;
        }
        .news-detail-body {
            margin-top: 5%;
            margin-bottom: 0;
            padding-bottom: 43%;
        }
        .news-detail-title {
            font-size: 1.4rem;
        }
        .news-detail-footer {
            flex-direction: column;
            align-items: flex-start;
        }
    }
    </style>
    <body>
        <!-- MENU BAR -->
        <nav id="mainNav">
            <div class="nav-inner">
                <a href="#" class="nav-logo" onclick="$('#home_menu').click()">
                    <img src="{{ asset('/images/pt_sanno.png') }}" alt="PT. SANNO">
                </a>
                <button class="nav-hamburger" id="navToggle" aria-label="Toggle menu">
                    <span></span><span></span><span></span>
                </button>
                <div class="nav-links" id="navLinks">
                    <a href="{{ route('show.home') }}"    id="home_menu"    class="nav-link">Home</a>
                    <a href="{{ route('show.about') }}"   id="about_menu"   class="nav-link">About Us</a>
                    <a href="{{ route('show.product') }}" id="product_menu" class="nav-link">Product</a>
                    <a href="{{ route('show.project') }}" id="project_menu" class="nav-link">Project</a>
                    <a href="{{ route('show.news') }}"    id="news_menu"    class="nav-link active">News</a>
                    <a href="{{ route('show.career') }}"  id="career_menu"  class="nav-link">Career</a>
                    <a href="{{ route('show.contact') }}" id="contact_menu" class="nav-link">Contact Us</a>
                </div>
            </div>
        </nav>

        <!-- HERO -->
        <div class="row news-detail-hero">
            <h1><img src="{{ asset('/images/about_sanno_icon.png') }}" alt="News icon"> News Detail</h1>
        </div>

        <!-- DETAIL BODY -->
        <div class="container news-detail-body">
            <div class="row justify-content-center">
                <div class="col-12 col-md-9">

                    <!-- Breadcrumb -->
                    <nav class="news-breadcrumb">
                        <a href="{{ route('show.home') }}">Home</a>
                        <span class="breadcrumb-separator">›</span>
                        <a href="{{ route('show.news') }}">News</a>
                        <span class="breadcrumb-separator">›</span>
                        <span class="breadcrumb-current">{{ $news->newstitle }}</span>
                    </nav>

                    <!-- Cover Image -->
                    <img src="{{ asset('images/news/' . $news->newspic) }}"
                        alt="{{ $news->newstitle }}"
                        class="news-detail-cover">

                    <!-- Meta: Date + Source -->
                    <div class="news-detail-meta">
                        <div class="news-detail-date-box">
                            <div class="news-date-day">
                                {{ \Carbon\Carbon::parse($news->newsdate)->format('d') }}
                            </div>
                            <div class="news-date-month-year">
                                <span>{{ \Carbon\Carbon::parse($news->newsdate)->format('F') }}</span>
                                <span>{{ \Carbon\Carbon::parse($news->newsdate)->format('Y') }}</span>
                            </div>
                        </div>
                        @if($news->newssource === 'Internal')
                            <span class="news-detail-source-badge">By Sanno</span>
                        @else
                            <span class="news-detail-source-badge">{{ $news->newssource }}</span>
                        @endif
                    </div>

                    <!-- Title -->
                    <div class="news-detail-title">{{ $news->newstitle }}</div>

                    <!-- Full Content -->
                    <div class="news-detail-content">{{ $news->newscontent }}</div>

                    <!-- Footer: External Link only -->
                    @if($news->newssource === 'External' && $news->newslink)
                    <div class="news-detail-footer">
                        <a href="{{ $news->newslink }}" target="_blank">
                            <div class="sanno_cta">
                                Visit Source <img src="{{ asset('/images/cta_arrow.png') }}">
                            </div>
                        </a>
                    </div>
                    @endif

                </div>
            </div>
        </div>

        <!-- CTA -->
        <div id="contact_body">
            <section class="cta-section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-7">
                            <h2>Modern Spaces with Glass</h2>
                            <p>Clean glass designs create a modern look while making your space feel brighter, wider, and more elegant.</p>
                            <div class="sanno_cta">
                                <a href="{{ route('show.contact') }}">Contact Us <img src="{{ asset('/images/cta_arrow.png') }}"></a>
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
    </script>
</html>