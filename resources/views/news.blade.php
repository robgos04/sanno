<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('head')
    <style>
    .news-top{
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
    .news-top h1{font-size:36px; font-weight:700; display:inline-flex; align-items:center; gap:12px; margin:4% 0 0 -2%;}
    .news-top-copy {
        max-width: 420px;
        text-align: left;
        font-family: 'Inter', sans-serif;
        font-size: 1rem;
        line-height: 1.6;
        color: rgba(255,255,255,0.92);
        margin: 0;
    }
    .news-list {
        margin-bottom: 15%;
    }
    .news-active {
        margin-top: 40px;
        margin-bottom: 24px;
    }
    .news-non-active {
        margin-top: 24px;
    }
    .news-card {
        position: relative;
        display: flex;
        flex-wrap: wrap;
        background: #ffffff;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 20px 50px rgba(0,0,0,0.08);
        align-items: stretch;
    }
    .news-context {
        padding-top: 16%;
    }
    .news-card .news-image {
        flex: 0 0 45%;
        min-width: 280px;
        max-height: 420px;
        height: 100%;
        overflow: hidden;
    }
    .news-card .news-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }
    .news-card .news-text-section {
        flex: 1;
        padding: 36px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        position: relative;
        background-image: url("{{ asset('/images/news_bg.png') }}");
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        color: #111;
    }
    .news-card .news-text-section h2 {
        margin: 0 0 16px;
        font-size: 1.5rem;
        line-height: 1.1;
        color: #ffffff;
        font-family: 'AsenPro', sans-serif;
    }
    .news-card .news-text-section p {
        margin: 0;
        color: #ffffff;
        line-height: 1.8;
        font-size: 0.9rem;
        font-family: 'Inter', sans-serif;
    }
    .news-card .news-text-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 32px;
    }
    .news-card .news-date-box {
        position: absolute;
        top: 24px;
        right: 24px;
        background: rgba(192, 40, 28, 0.98);
        border-radius: 18px;
        padding: 14px 10px;
        color: #fff;
        text-align: center;
        min-width: 10%;
        z-index: 1;
    }
    .news-card-vertical {
        flex-direction: column;
    }
    .news-card-vertical .news-image {
        width: 100%;
        max-height: 320px;
        min-height: 240px;
    }
    .news-card-vertical .news-text-section {
        padding: 28px;
    }
    .news-card-vertical .news-text-footer {
        justify-content: flex-start;
        margin-top: 24px;
    }
    .news-card .news-date-box .news-date-day {
        font-size: 1.75rem;
        font-weight: 800;
        line-height: 1;
        margin-bottom: 4px;
    }
    .news-card .news-date-box .news-date-month-year {
        display: flex;
        justify-content: space-between;
        gap: 4px;
        font-size: 0.85rem;
        opacity: 0.92;
    }
    .news-card .news-date-box .news-date-month-year span {
        display: inline-block;
    }
    
    @media screen and (max-width: 900px) {
        .news-card {
            flex-direction: column;
        }
        .news-card .news-image {
            flex: 1 1 100%;
            min-width: 100%;
            max-height: 320px;
        }
        .news-card .news-text-section {
            padding: 24px;
            padding-bottom: 32px;
        }
        .news-card .news-date-box {
            position: static;
            margin-bottom: 18px;
            text-align: left;
            align-self: flex-start;
            padding: 10px 14px;
            min-width: auto;
            width: auto;
        }
        .news-date-day {
            margin-left: 7px;
        }
        .news-card .news-date-box .news-date-month-year {
            justify-content: flex-start;
            gap: 6px;
        }
        .news-card .news-text-footer {
            flex-direction: column;
            align-items: flex-start;
            gap: 16px;
        }
    }
    @media screen and (max-width: 600px) {
        .news-top{height:auto; padding-left:50px; padding-right:50px; justify-content:center; flex-wrap:wrap; text-align:center; padding-top: 20%; padding-bottom: 80px;}
        .news-top h1{font-size:24px; width:100%; justify-content:center;}
        .news-top-copy { width:100%; text-align:center; margin-top: 18px; }
        .news-list {
            margin-bottom: 40%;
        }
        .news-context { padding-top: 0; }
    }
    @media screen and (min-width: 1900px) { /* large screen pc */
        .news-top { height: 300px; }
        .news-top h1 { margin-left: 0; }
    }
    </style>
    <body>
        @include('head')
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
                    <a href="{{ route('show.news') }}" id="news_menu" class="nav-link active">News</a>
                    <!--<a href="{{ route('show.career') }}" id="career_menu" class="nav-link">Career</a> -->
                    <a href="{{ route('show.contact') }}" id="contact_menu" class="nav-link">Contact Us</a>
                </div>

            </div>
        </nav>

        <!-- HERO: Product Top -->
        <div class="row news-top text-start">
            <h1><img src="{{ asset('/images/about_sanno_icon.png') }}" alt="Product icon"> News</h1>
            <div class="project-top-copy">
                <p>Get the latest information about our projects,<br>technology, events, and milestones in the glass<br>industry.</p>
            </div>
        </div>

        <!-- NEWS BODY -->
        <div class="container">
            <div class="row news-list">
                @forelse($news as $item)

                    @if($loop->first)
                    {{-- ── Featured (first/latest) news ── --}}
                    <div class="col-md-12 col-sm-12 news-active">
                        <div class="news-card">
                            <div class="news-image">
                                <img src="{{ asset('images/news/' . $item->newspic) }}" alt="{{ $item->newstitle }}">
                            </div>
                            <div class="news-text-section">
                                <div class="news-date-box">
                                    <div class="news-date-day">
                                        {{ \Carbon\Carbon::parse($item->newsdate)->format('d') }}
                                    </div>
                                    <div class="news-date-month-year">
                                        <span>{{ \Carbon\Carbon::parse($item->newsdate)->format('M') }}</span>
                                        <span>{{ \Carbon\Carbon::parse($item->newsdate)->format('y') }}</span>
                                    </div>
                                </div>
                                <div class="news-context">
                                    <h2>{{ $item->newstitle }}</h2>
                                    <p>{{ Str::limit($item->newscontent, 120) }}</p>
                                </div>
                                <div class="news-text-footer">
                                    @if($item->newssource === 'Internal')
                                        <div class="sanno_cta">
                                            <a href="{{ route('show.news.detail', $item->id) }}">
                                                Read More <img src="{{ asset('/images/cta_arrow.png') }}">
                                            </a>
                                        </div>
                                    @else
                                        <div class="sanno_cta">
                                            <a href="{{ $item->newslink }}" target="_blank">
                                                Visit News <img src="{{ asset('/images/cta_arrow.png') }}">
                                            </a>
                                        </div>
                                    @endif
                                    <span style="font-size:0.78rem; color:rgba(255,255,255,0.55);">
                                        {{ $item->newssource === 'Internal' ? 'By Sanno': '' }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    @else
                    {{-- ── Remaining news (2-column grid) ── --}}
                    <div class="col-md-6 col-sm-6 news-non-active">
                        <div class="news-card news-card-vertical">
                            <div class="news-image">
                                <img src="{{ asset('images/news/' . $item->newspic) }}" alt="{{ $item->newstitle }}">
                            </div>
                            <div class="news-text-section">
                                <div class="news-date-box">
                                    <div class="news-date-day">
                                        {{ \Carbon\Carbon::parse($item->newsdate)->format('d') }}
                                    </div>
                                    <div class="news-date-month-year">
                                        <span>{{ \Carbon\Carbon::parse($item->newsdate)->format('M') }}</span>
                                        <span>{{ \Carbon\Carbon::parse($item->newsdate)->format('y') }}</span>
                                    </div>
                                </div>
                                <div class="news-context">
                                    <h2>{{ $item->newstitle }}</h2>
                                    <p>{{ Str::limit($item->newscontent, 120) }}</p>
                                </div>
                                <div class="news-text-footer">
                                    @if($item->newssource === 'Internal')
                                        <div class="sanno_cta">
                                            <a href="{{ route('show.news.detail', $item->id) }}">
                                                Read More <img src="{{ asset('/images/cta_arrow.png') }}">
                                            </a>
                                        </div>
                                    @else
                                        <div class="sanno_cta">
                                            <a href="{{ $item->newslink }}" target="_blank">
                                                Visit News <img src="{{ asset('/images/cta_arrow.png') }}">
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                @empty
                <div class="col-12" style="padding: 60px 0; text-align:center; color:#aaa;">
                    <p>No news articles yet.</p>
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

