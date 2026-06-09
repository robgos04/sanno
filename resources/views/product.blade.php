<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('head')
    <style>
    .product-top{
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
    .product-top h1{font-size:36px; font-weight:700; display:inline-flex; align-items:center; gap:12px; margin:0;}
    .product-top-copy {
        max-width: 420px;
        text-align: left;
        font-family: 'Inter', sans-serif;
        font-size: 1rem;
        line-height: 1.6;
        color: rgba(255,255,255,0.92);
        margin: 0;
    }
    .product-list {
        margin-top: 10%;
        margin-bottom: 20%;
    }
    .product-list .col-md-4,
    .product-list .col-sm-4 {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 24px;
    }
    .product-card {
        position: relative;
        width: 100%;
        overflow: hidden;
        border-radius: 16px;
    }
    .product-card img {
        width: 100%;
        height: auto;
        display: block;
        object-fit: cover;
    }
    .product-card-overlay {
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        padding: 20px;
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
        gap: 16px;
        background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.72) 100%);
        color: #ffffff;
    }
    .product-card-text {
        max-width: calc(100% - 48px);
    }
    .product-card-text h2 {
        margin: 0 0 6px;
        font-size: 1.25rem;
        font-weight: 700;
    }
    .product-card-text p {
        margin: 0;
        font-size: 0.95rem;
        line-height: 1.5;
        opacity: 0.92;
    }
    .product-card-cta {
        flex-shrink: 0;
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .product-card-cta img {
        width: 100%;
        height: auto;
        display: block;
        filter: brightness(0) invert(1);
    }
    .product-badge-coming-soon {
        position: absolute;
        top: 14px;
        right: 14px;
        background: #E53935;
        color: #ffffff;
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        padding: 4px 10px;
        border-radius: 20px;
        z-index: 10;
        pointer-events: none;
        box-shadow: 0 2px 8px rgba(0,0,0,0.25);
    }
    @media screen and (max-width: 600px) {
        .product-top{height:auto; padding-left:50px; padding-right:50px; justify-content:center; flex-wrap:wrap; text-align:center; padding-top: 20%; padding-bottom: 40px;}
        .product-top h1{font-size:24px; width:100%; justify-content:center;}
        .product-top-copy { width:100%; text-align:center; margin-top: 18px; }
        .product-list{ margin-bottom: 40%; }
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
                    <a href="{{ route('show.product') }}" id="product_menu" class="nav-link active">Product</a>
                    <a href="{{ route('show.project') }}" id="project_menu" class="nav-link">Project</a>
                    <a href="{{ route('show.news') }}" id="news_menu" class="nav-link">News</a>
                    <!--<a href="{{ route('show.career') }}" id="career_menu" class="nav-link">Career</a> -->
                    <a href="{{ route('show.contact') }}" id="contact_menu" class="nav-link">Contact Us</a>
                </div>

            </div>
        </nav>

        <!-- Lightbox Modal -->
        <div id="lightbox" onclick="closeLightbox()" style="
            display: none;
            position: fixed;
            inset: 0;
            z-index: 9999;
            background: rgba(0, 0, 0, 0.88);
            align-items: center;
            justify-content: center;
            padding: 24px;
            cursor: zoom-out;
        ">
            <!-- Close button -->
            <button onclick="closeLightbox()" style="
                position: absolute;
                top: 20px;
                right: 24px;
                background: rgba(255,255,255,0.12);
                border: none;
                color: #fff;
                font-size: 1.5rem;
                width: 40px;
                height: 40px;
                border-radius: 50%;
                cursor: pointer;
                display: flex;
                align-items: center;
                justify-content: center;
                line-height: 1;
                transition: background 0.2s;
            ">&times;</button>

            <!-- Image -->
            <div onclick="event.stopPropagation()" style="
                max-width: 90vw;
                max-height: 90vh;
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 16px;
            ">
                <img id="lightbox-img" src="" alt=""
                    style="max-width:100%; max-height:80vh; object-fit:contain; border-radius:12px; box-shadow: 0 20px 60px rgba(0,0,0,0.5);">
                <p id="lightbox-caption" style="color:rgba(255,255,255,0.8); font-size:0.95rem; margin:0;"></p>
                <p id="lightbox-desc" style="color:rgba(255,255,255,0.8); font-size:0.9rem; margin:0; max-width:80vw; text-align:center;"></p>
            </div>
        </div>

        <!-- HERO: Product Top -->
        <div class="row product-top text-start">
            <h1><img src="{{ asset('/images/about_sanno_icon.png') }}" alt="Product icon"> Our Product</h1>
            <div class="project-top-copy">
                <p>Our high-quality glass products not only offer<br>strength and security, but also add aesthetic<br>value to modern Architectural Design.</p>
            </div>
        </div>

        <!-- PRODUCT BODY -->
        <div class="container">
            <div class="row product-list">

                @forelse($products as $index => $product)
                <div class="col-md-4 col-sm-4">
                    <div class="product-card">
                        <img src="{{ asset('images/products/' . $product->productpic) }}" alt="{{ $product->productname }}">
                        
                        {{-- Coming Soon badge on the latest product --}}
                        @if($product->id === $latestProductId)
                        <div class="product-badge-coming-soon">Coming Soon</div>
                        @endif

                        <div class="product-card-overlay">
                            <div class="product-card-text">
                                <h2>{{ $product->productname }}</h2>
                                <p>{{ Str::limit($product->productdesc, 30) }}</p>
                            </div>
                            <div class="product-card-cta"
                                onclick="openLightbox('{{ asset('images/products/' . $product->productpic) }}', '{{ $product->productname }}', '{{ $product->productdesc }}')"
                                style="cursor:pointer;">
                                <img src="{{ asset('/images/cta_arrow.png') }}" alt="View">
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <p style="color:#aaa;">No products yet.</p>
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
    // ── Lightbox ──────────────────────────────────
    function openLightbox(src, caption, desc) {
        document.getElementById('lightbox-img').src = src;
        document.getElementById('lightbox-caption').textContent = caption;
        document.getElementById('lightbox-desc').textContent = desc;
        var lb = document.getElementById('lightbox');
        lb.style.display = 'flex';
        document.body.style.overflow = 'hidden';  // prevent scroll behind modal
    }

    function closeLightbox() {
        document.getElementById('lightbox').style.display = 'none';
        document.getElementById('lightbox-img').src = '';
        document.body.style.overflow = '';
    }

    // Close on ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closeLightbox();
    });

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
