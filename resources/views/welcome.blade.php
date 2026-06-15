<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('head')
    <style>
    #home_body .sanno_cta {
        margin-left: 40%;
    }

    #gallery_modal .modal-content{
        background-image:url("{{ asset('/images/bg_residence.png') }}");
        background-size: 20% 40%;
        background-repeat: no-repeat;
    }

    .diana_content{
        background-image: url("{{ asset('/images/diana_content_bg.png') }}");
        background-size: cover;
        background-position: center;
        height: 100%;
        width: 100%;
        padding: 4% 4% 4% 5%;
        color: #ffffff;
    }
    .diana_right {
        padding-top: 5%;
        padding-left: 14%;
    }
    .sanno_left p{
        padding-top: 1%;
    }

    .cards-row-wrapper {
        position: relative;
    }

    .cards-row {
        display: flex;
        flex-wrap: nowrap;
        overflow-x: auto;
        scroll-behavior: smooth;
        gap: 16px;
        padding: 16px 0;
        margin-bottom: 30px;

        /* Hide scrollbar for Chrome, Safari */
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none; /* Firefox */
        -ms-overflow-style: none; /* IE/Edge */
    }

    .cards-row::-webkit-scrollbar {
        display: none;
    }

    .cards-row .col-12 {
        flex: 0 0 400px;
        max-width: 400px;
    }

    .project-card {
        min-width: 400px;
    }

    .cards-arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: none;
        background: rgba(255, 255, 255, 0.95);
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.12);
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 2;
        opacity: 0;
        transition: opacity 0.2s ease;
    }

    .cards-row-wrapper:hover .cards-arrow {
        opacity: 1;
    }

    .cards-arrow-left {
        left: 0;
        margin-left: 8px;
    }

    .cards-arrow-right {
        right: 0;
        margin-right: 8px;
    }

    .cards-arrow i {
        color: #333;
        font-size: 1rem;
    }

    .home_left h1{
        line-height: 1.3;
    }
    .about_cta {
        margin-top: 56px;
    }
    .coming-soon {
        background:#ffffff; 
        color:#d32f2f; 
        padding:4px 8px; 
        border-radius:4px; 
        font-size:0.65rem; 
        font-weight:700; 
        margin-left:3px;
        vertical-align: top;
    }
    .project_button {
        margin-top: 4%;
        padding-left: 30%;
    }
    .service-name {
        font-family: 'Asen Pro', sans-serif !important;
    }
    #faq_body{
        background-image: url("{{ asset('/images/faq_pattern.png') }}"), url("{{ asset('/images/faq_bg.png') }}");

        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px); /* Required for Safari browser support */
        background-size: contain, 100% 100%;
        background-position: left top, center center; 
        background-repeat: no-repeat, no-repeat;
        font-family: 'Asen Pro', sans-serif;
        font-size: 16px;
        color: #ffffff !important;
        padding: 4% 0 12% 0;
    }
    .faq_left {
        padding-top: 3%;
        padding-bottom: 5%;
        padding-left: 5%;
        padding-right: 8%;
    }
    .faq_right {
        padding: 3% 6% 3% 3%;
    }

    /* --- FAQ Accordion Layout (Glassmorphism) --- */
    .faq-list {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .faq-item {
        background: rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 16px;
        padding: 20px 24px;
        transition: all 0.3s ease;
    }

    .faq-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
    }

    .faq-header h4 {
        font-size: 1.15rem;
        font-weight: 500;
        margin: 0;
        color: #ffffff;
    }

    .faq-icon {
        width: 28px;
        height: 28px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: #ffffff;
        transition: transform 0.3s ease;
    }

    /* For open items */
    .faq-item.active .faq-icon {
        transform: rotate(180deg);
    }

    .faq-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-out;
        color: rgba(255, 255, 255, 0.75);
        font-size: 0.95rem;
        line-height: 1.6;
    }

    /* When the item is expanded */
    .faq-item.active .faq-content {
        max-height: 200px; /* Adjust based on content length */
        margin-top: 14px;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        padding-top: 14px;
    }

    @media screen and (max-width: 600px) { /* For mobile devices: Adjust gallery background for better visibility and spacing */

        .diana_right {
            padding-top: 2%;
            padding-left: 3%;
        }
        .product_left { 
            padding-top: 5%; 
            padding-left: 10%;
        }
        #faq_body{
            padding-top: 5%;
            padding-left: 10%;
            padding-right: 5%;
            padding-bottom: 40%;
        }
    }

    @media screen and (max-width: 768px) {
        #home_body .sanno_cta {
            margin-left: 2%;
        }
        .home_left h1{
            padding-left: 2%;
            font-size: 2rem;
        }
        .cards-row {
            padding: 16px 36px;
            gap: 190px;
        }
        .cards-row .col-12 {
            flex: 0 0 85%;
            max-width: 85%;
        }
        .cards-arrow {
            opacity: 1;
            width: 36px;
            height: 36px;
            margin: 0;
        }
        .diana_content {
            padding-left: 10%;
            padding-bottom: 6%;
        }
    }

    @media screen and (min-width: 1900px) { /* large screen pc */
        #home_body .sanno_cta {
            margin-left: 40%;
        }
        .diana_right {
            padding-top: 3%;
            padding-left: 18%;
        }
        .product_left { padding-top: 7%; }
        .project_button { margin-top: 2%; padding-left: 34%; }
        .footer-tagline { font-size: 1rem; }
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
                    <a href="{{ route('show.home') }}" id="home_menu" class="nav-link active">Home</a>
                    <a href="{{ route('show.about') }}" id="about_menu" class="nav-link">About Us</a>
                    <a href="{{ route('show.product') }}" id="product_menu" class="nav-link">Product</a>
                    <a href="{{ route('show.project') }}" id="project_menu" class="nav-link">Project</a>
                    <a href="{{ route('show.news') }}" id="news_menu" class="nav-link">News</a>
                    <!--<a href="{{ route('show.career') }}" id="career_menu" class="nav-link">Career</a> -->
                    <a href="{{ route('show.contact') }}" id="contact_menu" class="nav-link">Contact Us</a>
                </div>

            </div>
        </nav>
        <!-- -->

        <!-- BODY -->
        <div class="container-fluid">
            <!-- home -->
            <div id="home_body" class="home_title">
                <div class="row">
                    <div class="col-md-8 col-sm-8 home_left">
                        <h1><b><i>Leading Tempered Glass </i></b><br>Processor in Eastern Indonesia</h1>
                    </div>
                    <div class="col-md-4 col-sm-4">
                    </div>     
                </div>
                <div class="row">
                    <div class="col-md-8 col-sm-8" id="home_short_desc">
                        <p>We are the first tempered glass factory provider in Eastern Indonesia.</p>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="sanno_cta">
                            <a href="{{ route('show.project') }}">Explore Project <i class="ri-arrow-right-circle-line"></i></a>
                        </div>
                    </div>
                </div>   
            </div>
            
            <!-- about -->
            <div id="about_body">
                <div class="row">
                    <div class="col-md-6 col-sm-6 about_left">
                    </div>
                    <div class="col-md-6 col-sm-6 about_right">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <h2><img src="{{ asset('/images/about_sanno_icon.png') }}"></img> About PT. SANNO</h2><br>
                                <p>PT. Sanno Abadi Cemerlang was founded in 1985  and is based in Makassar, South Sulawesi.</p>
                                <p>PT. SANNO is the first Tempered Glass factory in South Sulawesi. Our production facilities include <b><i>Tempered Glass Manufacturing, Glass Cutting, Beveling, Polishing, and CNC Processing.</i></b></p>
                                <p>Our products can be found in various residential  and commercial buildings throughout Makassar.  As the largest and most technologically advanced glass processing company in Eastern  Indonesia, we are committed to delivering the  highest quality—faster and better every day.</p>
                                <p class="about_cta">
                                    <div class="sanno_cta">
                                        <a href="{{ route('show.about') }}">
                                            Read More <i class="ri-arrow-right-circle-line"></i>
                                        </a>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Diana -->
            <div id="diana_body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 diana_content">
                        <div class="row">
                            <div class="col-md-8 col-sm-8 sanno_left">
                                <h2><b>Professional</b><i> Glass Aplicator</i></h2>
                                <p>As a trusted glass applicator, Diana Glass ensures that every installation process is carried out with high quality and safety standards.</p>
                            </div>
                            <div class="col-md-4 col-sm-4 diana_right">
                                <div class="sanno_cta">
                                    <a href="https://www.dianaflatglass.co.id/">Read More <i class="ri-arrow-right-circle-line"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- product -->
            <div id="product_body">
                <div class="row">
                    <div class="col-md-6 col-sm-6 product_left">
                        <h2><img src="{{ asset('/images/about_sanno_icon.png') }}"></img> Glass Processing</h2>
                        <br>
                        <!-- Service Items -->
                        <div class="service-list">
                
                            <div class="service-item">
                                <div class="service-number">1</div>
                                <div class="service-body">
                                    <h3 class="service-name">Cut Size Glass</h3>
                                    <p class="service-desc">Custom sizes tailored to your needs.</p>
                                </div>
                            </div>
                            <div class="divider"></div>
                
                            <div class="service-item">
                                <div class="service-number">2</div>
                                <div class="service-body">
                                    <h3 class="service-name">Polish &amp; Bevel</h3>
                                    <p class="service-desc">Smooths the surface & shapes the glass edges.</p>
                                </div>
                            </div>
                            <div class="divider"></div>
                
                            <div class="service-item">
                                <div class="service-number">3</div>
                                <div class="service-body">
                                    <h3 class="service-name">Glass Washing</h3>
                                    <p class="service-desc">Automatically cleans and dries glass surfaces.</p>
                                </div>
                            </div>
                            <div class="divider"></div>
                
                            <div class="service-item">
                                <div class="service-number">4</div>
                                <div class="service-body">
                                    <h3 class="service-name">Computer Numerical Control</h3>
                                    <p class="service-desc">Automatically cuts and shapes glass with high precision.</p>
                                </div>
                            </div>
                            <div class="divider"></div>

                            <div class="service-item">
                                <div class="service-number">5</div>
                                <div class="service-body">
                                    <h3 class="service-name">Tempered Glass</h3>
                                    <p class="service-desc">Strengthens the glass with high impact resistance, making it up to 5x stronger than regular glass.</p>
                                </div>
                            </div>
                            <div class="divider"></div>

                            <div class="service-item">
                                <div class="service-number">6</div>
                                <div class="service-body">
                                    <h3 class="service-name">
                                        Laminated Glass
                                        <span class="coming-soon">
                                            COMING SOON
                                        </span>
                                    </h3>
                                    <p class="service-desc">Layered safety glass designed for extra strength, security, and reduced glass shattering risk.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 product_right">
                        <center><img src="{{ asset('/images/product_image.png') }}" style="height:auto;width:70%;" loading="lazy"></img></center>
                    </div>
                </div>
            </div>

            <!-- project -->
            <div id="project_body">
                <section class="our-project-section">

                <!-- Dark overlay -->
                <div class="overlay"></div>

                <div class="project_content">
                    <div class="row align-items-center mb-4">

                    <!-- Left: Title & Description -->
                    <div class="col-md-6 col-sm-6">
                        <h2><img src="{{ asset('/images/about_sanno_icon.png') }}"></img> Our Project</h2>
                        <p>Every project is completed with high standards, quality materials, and expert craftsmanship for precise results.</p>
                    </div>

                    <!-- Right: Button -->
                    <div class="col-md-6 col-sm-6 d-flex project_button">
                        <div class="sanno_cta">
                            <a href="{{ route('show.project') }}">See All Project <i class="ri-arrow-right-circle-line"></i></a>
                        </div>
                    </div>

                    </div>

                    <!-- Project Cards -->
                    <div class="cards-row-wrapper">
                        <button type="button" class="cards-arrow cards-arrow-left">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <div class="cards-row" id="projectCardsRow">

                        @forelse($projects as $project)
                        <div class="col-12 col-md-4">
                            <div class="project-card">
                            <img src="{{ asset('images/projects/' . $project->projectpic) }}" alt="{{ $project->projectname }}" loading="lazy" />
                            <p class="card-label"><b><i>{{ $project->projectname }}</i></b></p>
                            </div>
                        </div>
                        @empty
                        <div class="col-12">
                            <p style="color:#aaa;">No projects yet.</p>
                        </div>
                        @endforelse

                        </div>
                        <button type="button" class="cards-arrow cards-arrow-right">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>

                </section>
            </div>

            <!-- certificate -->
            <!--<div id="certificate_body">
                <section class="certificate-section">

                <div class="overlay"></div>

                <div class="container">
                    <div class="row align-items-center mb-4">

                        <div class="col-md-12 col-sm-12">
                            <center><h1><img src="{{ asset('/images/about_sanno_icon.png') }}"></img> Certificate</h1></center>
                        </div>

                    </div>
                    <br>
                    <div class="cards-row">

                        <div class="col-12 col-md-3">
                            <div class="project-card">
                            <img src="{{ asset('/images/sni_cert.png') }}" alt="Tempered Glass Stairs Railing" />
                            </div>
                        </div>

                        <div class="col-12 col-md-3">
                            <div class="project-card">
                            <img src="{{ asset('/images/sni_cert.png') }}" alt="Tempered Glass Frameless Door" />
                            </div>
                        </div>

                        <div class="col-12 col-md-3">
                            <div class="project-card">
                            <img src="{{ asset('/images/sni_cert.png') }}" alt="Tempered Glass Shower Box" />
                            </div>
                        </div>

                        <div class="col-12 col-md-3">
                            <div class="project-card">
                            <img src="{{ asset('/images/sni_cert.png') }}" alt="Tempered Glass Shower Box" />
                            </div>
                        </div>

                        <div class="col-12 col-md-3">
                            <div class="project-card">
                            <img src="{{ asset('/images/sni_cert.png') }}" alt="Tempered Glass Shower Box" />
                            </div>
                        </div>

                    </div> 
                </div>

                </section>
            </div>-->

            <!-- FAQ -->
            <div id="faq_body">
                <div class="row">
                    <div class="col-md-6 col-sm-6 faq_left">
                        <h2><img src="{{ asset('/images/about_sanno_icon.png') }}"></img> Frequently Asked Questions</h2>
                        <br>
                        <p>Explore common questions about tempered glass, laminated glass, cut-size glass, and installation services from <b><i>PT.SANNO</i></b>.</p>
                    </div>
                    <div class="col-md-6 col-sm-6 faq_right">
                        <div class="faq-list">

                            <!-- Item 1 (Active/Expanded State) -->
                            <div class="faq-item active">
                                <div class="faq-header">
                                    <h4>What is tempered glass?</h4>
                                    <div class="faq-icon"><i class="ri-arrow-down-circle-line"></i></div>
                                </div>
                                <div class="faq-content">
                                    <p>Tempered glass is a safety glass processed through heat treatment to improve strength, durability, and safety for architectural and interior applications.</p>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="faq-item">
                                <div class="faq-header">
                                    <h4>Can Tempered Glass be cut?</h4>
                                    <div class="faq-icon"><i class="ri-arrow-down-circle-line"></i></div>
                                </div>
                                <div class="faq-content">
                                    <p>No. Tempered glass cannot be cut, drilled, or modified after the tempering process. All cutting, shaping, and fabrication must be completed before the glass is tempered.</p>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="faq-item">
                                <div class="faq-header">
                                    <h4>Do you provide custom cut-size glass?</h4>
                                    <div class="faq-icon"><i class="ri-arrow-down-circle-line"></i></div>
                                </div>
                                <div class="faq-content">
                                    <p>Yes, we offer custom glass cutting services based on project specifications and design requirements.</p>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="faq-item">
                                <div class="faq-header">
                                    <h4>What industries and projects do you serve?</h4>
                                    <div class="faq-icon"><i class="ri-arrow-down-circle-line"></i></div>
                                </div>
                                <div class="faq-content">
                                    <p>We support residential, commercial, hospitality, retail, and large-scale construction projects.</p>
                                </div>
                            </div>

                            <!-- Item 5 -->
                            <div class="faq-item">
                                <div class="faq-header">
                                    <h4>Do you provide glass installation services?</h4>
                                    <div class="faq-icon"><i class="ri-arrow-down-circle-line"></i></div>
                                </div>
                                <div class="faq-content">
                                    <p>Yes. Through our professional applicator team, Diana Glass provides installation services for tempered glass, laminated glass, partitions, facades, railings, shower enclosures, and various interior and exterior glass applications.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA "Make your home be modern" -->
            <div id="contact_body">
                <section class="cta-section">
                    <div class="container">
                        <div class="row align-items-center">

                        <div class="col-12 col-md-7">
                            <h2>Modern Space with Glass</h2>
                            <p>Clean glass designs create a modern look while making your space feel brighter, wider, and more elegant.</p>
                            <div class="sanno_cta">
                                <a href="{{ route('show.contact') }}">Contact Us <i class="ri-arrow-right-circle-line"></i></a>
                            </div>
                        </div>

                        </div>
                    </div>
                </section>
            </div>

        </div>
        <!-- -->
    </body>
    <footer>

            <div class="footer-main row">

                <!-- Col 1: Logo + Tagline + Socials -->
                <div class="col-12 col-md-5 footer-brand">
                    <img src="{{ asset('/images/pt_sanno.png') }}" alt="PT. SANNO" class="footer-logo">
                    <p class="footer-tagline"><strong><i>PT. SANNO</i></strong> is the first Tempered Glass factory in South Sulawesi.</p>
                    <div class="footer-socials">
                        <a href="https://www.instagram.com/diana.flatglass/" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.facebook.com/share/17jwUP67ve/" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <!-- Col 2: Links -->
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

            <!-- Bottom Bar -->
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
</html>
<script>
var position = 0;
var baseUrl = "{{ asset('/images/') }}";

// ── Hamburger toggle ──────────────────────────
document.getElementById('navToggle').addEventListener('click', function () {
    this.classList.toggle('open');
    document.getElementById('navLinks').classList.toggle('open');
});

// ── Close mobile menu on link click ──────────
document.querySelectorAll('.nav-link').forEach(function (link) {
    link.addEventListener('click', function () {
        document.getElementById('navToggle').classList.remove('open');
        document.getElementById('navLinks').classList.remove('open');

        // Update active state
        document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
        this.classList.add('active');
    });
});

// FAQ Accordion Toggle
$('.faq-header').on('click', function() {
    var item = $(this).closest('.faq-item');
    
    // Toggle active class on clicked element
    item.toggleClass('active');
    
    // Optional: Collapse other open FAQ elements automatically
    item.siblings().removeClass('active');
});

$(document).ready(function(){
    //Back to home every time reload
    $(window).scrollTop(0);
    window.location.replace("#");

    if (typeof window.history.replaceState == 'function') {
        history.replaceState({}, '', window.location.href.slice(0, -1));
    }
    //

    //Hide the arrow for carousel in company profile if only 1 slide
    var lengthSlide = $("#companyProfileText").find(".carousel-item");
    if(lengthSlide.length == 1){
        $(".arrow_text_company_profile").hide();
    }
    //

    $(".carousel_prev").find('img').hide();
    $(".carousel_next").find('img').hide();

    //Menu Product
    $.each(product_array, function( index, value ) {
        var image_src = baseUrl+"/product/"+value.name+"/"+value.logo;
        $("#inside_box_solution").append('<div class="contentBlock_solution" id="'+value.name+'"><center><img src="'+image_src+'" style="height:120%;width:100%" loading="lazy"></center></div>');
        $("#"+value.name).on("click", function(){

            if(value.type == "image"){
                $('.product_modal').modal('show');
                $('.product_modal').attr('id', 'division_'+value.name);
                $("#division_"+value.name).find("#template_product_popup_image .row").children().remove();
                $("#division_"+value.name).find(".division_name").html('<center><img src="'+image_src+'" style="height:20%;width:20%;"></center><br><br>');
                $("#division_"+value.name).find(".division_desc").html('<center><p>'+value.desc+'</p></center><br><br>');

                $("#division_"+value.name).find("#template_product_popup_image").show();

                //Show overflow scroll if brand is more than 4
                if(value.product.length > 4){
                    $("#division_"+value.name).find("#template_product_popup_image").css({"overflow-y":"scroll","overflow-x":"hidden","height":"210px"});
                }
                //

                $.each(value.product, function(index, content){
                    var product_logo = baseUrl+"/product/"+value.name+"/"+content.product_name+"/"+content.product_logo;
                    $("#division_"+value.name).find("#template_product_popup_image .row").append('<div class="col-md-3 col-sm-3" id="product_'+content.product_name+'"><center><img src="'+product_logo+'" style="height:55%;width:55%;cursor:pointer;"></center></div>');

                    $("#product_"+content.product_name).on("click",function(){
                        var product_table = baseUrl+"/product/"+value.name+"/"+content.product_name+"/"+content.product_table;
                        $("#division_"+value.name).modal('hide');
                        $('#detailProduct_modal').modal('show');
                        $('#detailProduct_modal').find('.product_gallery .row').children().remove();
                        $('#detailProduct_modal').find('.modal-header .fa-arrow-left').attr("data-target", "#division_"+value.name);
                        $('#detailProduct_modal').find('.product_desc').html(content.product_desc);
                        $('#detailProduct_modal').find('.product_table img').attr("src", product_table);
                        $("#carouselProdukImage").find("ul.carousel-indicators").children().remove();
                        $("#carouselProdukImage").find(".carousel-inner").children().remove();

                        $.each(content.product_image, function(index, img){
                            var imgName = baseUrl+"/product/"+value.name+"/"+content.product_name+"/"+img.url;
                            $('#detailProduct_modal').find('.product_gallery .row').append('<div class="col-md-3 col-sm-3 imgProduct" id="img_'+index+'"><center><img src="'+imgName+'" style="height:90%;width:90%;"></center></div>');
                            $('#carouselProdukImage').find(".ul.carousel-indicators").append('<li data-target="#carouselProdukImage" data-slide-to="'+index+'"></li>');
                            $('#carouselProdukImage').find(".carousel-inner").append('<div class="carousel-item" data-id="'+index+'"><center><img id="imgCarousel" src="'+imgName+'" style="cursor:zoom-in;"><center></div>');
                            if(index == 0){
                                $("#carouselProdukImage").find(".carousel-item").addClass("active");
                            }

                            $(".imgProduct#img_"+index).on("click", function(){
                                //var bigImage = baseUrl+"/product/"+value.name+"/"+content.product_name+"/"+content.product_image[index].url;
                                $('#carouselProdukImage').find(".carousel-item.active").removeClass('active');
                                $('#carouselProdukImage').find(".carousel-item[data-id="+index+"]").addClass('active');
                            });
                        });

                    });
                });
            }else if(value.type == "text"){
                $('.product_modal').modal('show');
                $('.product_modal').attr('id', 'division_'+value.name);
                $("#division_"+value.name).find("#template_product_popup_image").css({"height":"auto"});
                $("#division_"+value.name).find("#template_product_popup_image .row").children().remove();
                $("#division_"+value.name).find(".division_name").html('<center><img src="'+image_src+'" style="height:20%;width:20%;"></center><br><br>');
                $("#division_"+value.name).find(".division_desc").html('<center><p>'+value.desc+'</p></center><br><br>');

                $.each(value.product, function(index, content){
                    var product_logo = baseUrl+"/product/"+value.name+"/"+content.product_name+"/"+content.product_logo;
                    $("#division_"+value.name).find("#template_product_popup_image .row").append('<div class="col-md-3 col-sm-3" id="product_'+content.product_name+'"><center><img src="'+product_logo+'" style="height:55%;width:55%;cursor:pointer;"></center></div>');

                    $("#product_"+content.product_name).on("click",function(){
                        var Urlproduct = baseUrl+"/product/"+value.name+"/"+content.product_name;
                        $("#division_"+value.name).modal('hide');
                        $('#subOption_modal').modal('show');
                        
                        //Hide the right arrow and left arrow if subMenu is only 4 or less than 5
                        if(!content.hasOwnProperty("product_submenu") || (content.hasOwnProperty("product_submenu") && content.product_submenu.length <= 4) ){
                            $(".solution_subOption-prev").hide();
                            $(".solution_subOption-next").hide();
                        }else{
                            $(".solution_subOption-prev").show();
                            $(".solution_subOption-next").show();
                        }
                        //

                        $('#subOption_modal').find('#inside_box_subOption').children().remove();
                        $('#subOption_modal').find('.modal-header .fa-arrow-left').show();
                        $("#template_submenu").find("ul").children().remove();
                        $('#subOption_modal').find('.modal-header .fa-arrow-left').attr("data-target", "#division_"+value.name);
                        $('#subOption_modal').find('.division_name').html('<center><img src="'+Urlproduct+"/"+content.product_logo+'" style="height:20%;width:20%;"></center><br><br>'); 
                        $('#subOption_modal').find('.division_desc').html("<p>"+content.product_desc+"</p>");

                        $.each(content.product_submenu, function(index, menu){
                            $('#subOption_modal').find('.division_brand #template_product_popup_text #inside_box_subOption').append('<div class="col-md-4 col-sm-4 menuProduct" id="menu_'+index+'"><center>'+menu.menu_name+'</center></div>');
                            if(content.product_submenu.length == 1){
                                $('#subOption_modal').find('#inside_box_subOption .menuProduct').css({"border-right":"none"});
                            }
                            $("#menu_"+index).on("click",function(){
                                $("#template_submenu").find("ul").children().remove();
                                $.each(menu.menu_submenu, function(indexSubMenu, submenu){
                                    $("#template_submenu").find("ul").append("<li style='cursor:pointer;' class='subMenu_"+index+"_"+indexSubMenu+"'>"+submenu.subMenu_name+"</li>");

                                    $(".subMenu_"+index+"_"+indexSubMenu).on("click",function(){
                                        $("#subOption_modal").modal('hide');
                                        $('#detailProduct_modal').modal('show');

                                        $('#detailProduct_modal').find('.product_gallery .row').children().remove();
                                        $('#carouselProdukImage').find(".ul.carousel-indicators").children().remove();
                                        $('#carouselProdukImage').find(".carousel-inner").children().remove();
                                        $('#detailProduct_modal').find('.modal-header .fa-arrow-left').attr("data-target", "#subOption_modal");
                                        $('#detailProduct_modal').find('.product_desc').html("<p>"+submenu.subMenu_desc+"</p>");

                                        if(submenu.subMenu_table != ''){
                                            var product_table_url = baseUrl+"/product/"+value.name+"/"+content.product_name+"/"+menu.menu_folder+"/"+submenu.subMenu_table;
                                            $('#detailProduct_modal').find('.product_table img').show();
                                            $('#detailProduct_modal').find('.product_table img').attr("src", product_table_url);
                                        }else{
                                            $('#detailProduct_modal').find('.product_table img').hide();
                                            $('#detailProduct_modal').find('.product_table').html("<p>No specification table</p>");
                                        }
                                        $.each(submenu.subMenu_image, function(indexImage, imageSubMenu){
                                            var imgName = baseUrl+"/product/"+value.name+"/"+content.product_name+"/"+menu.menu_folder+"/"+imageSubMenu.url;
                                            $('#detailProduct_modal').find('.product_gallery .row').append('<div class="col-md-3 col-sm-3 imgProduct" id="img_'+indexImage+'"><center><img src="'+imgName+'" style="height:90%;width:90%;"></center></div>');
                                            $('#carouselProdukImage').find(".ul.carousel-indicators").append('<li data-target="#carouselProdukImage" data-slide-to="'+indexImage+'"></li>');
                                            $('#carouselProdukImage').find(".carousel-inner").append('<div class="carousel-item" data-id="'+indexImage+'"><center><img src="'+imgName+'" id="imgCarouselText" style="cursor:zoom-in;"><center></div>');

                                            if(indexImage == 0){
                                                $("#carouselProdukImage").find(".carousel-item").addClass("active");
                                            }

                                            $(".imgProduct#img_"+indexImage).on("click", function(){
                                                //var bigImage = baseUrl+"/product/"+value.name+"/"+content.product_name+"/"+content.product_image[index].url;
                                                $('#carouselProdukImage').find(".carousel-item.active").removeClass('active');
                                                $('#carouselProdukImage').find(".carousel-item[data-id="+indexImage+"]").addClass('active');
                                            });
                                        });

                                    });
                                });
                            });
                        });
                    });
                });
            }else if(value.type == "gallery"){
                var active_index = 0;
                $('.productGallery2_modal').modal('show');
                $('.productGallery2_modal').find(".fa.fa-arrow-left").hide();

                $(".division_list").find('.row').children().remove();
                $('#carouselProdukGallery2Image').find(".ul.carousel-indicators").children().remove();
                $('#carouselProdukGallery2Image').find(".carousel-inner").children().remove();
                $('.productGallery2_modal').attr('id', 'division_'+value.name);

                $.each(value.product, function(index, content){
                    var product_logo = baseUrl+"/product/"+value.name+"/"+content.product_logo;

                    $('.division_list').find('.row').append('<div class="col-md-12 col-sm-12 imgProduct" id="img_'+index+'"><center><img src="'+product_logo+'" style="height:50%;width:50%;"></center></div>');

                    $('#carouselProdukGallery2Image').find(".ul.carousel-indicators").append('<li data-target="#carouselProdukGallery2Image" data-slide-to="'+index+'"></li>');
                    $('#carouselProdukGallery2Image').find(".carousel-inner").append('<div class="carousel-item" data-id="'+index+'"><center><img id="imgCarousel2" src="'+product_logo+'"><br><br><center></div>');
                    if(index == 0){
                        $("#carouselProdukGallery2Image").find(".carousel-item").addClass("active");
                        $(".imgProduct#img_"+index).addClass("active");
                    }

                    $(".imgProduct#img_"+index).on("click", function(){
                        //var bigImage = baseUrl+"/product/"+value.name+"/"+content.product_name+"/"+content.product_image[index].url;
                        $('#carouselProdukGallery2Image').find(".carousel-item.active").removeClass('active');
                        $('#carouselProdukGallery2Image').find(".carousel-item[data-id="+index+"]").addClass('active');
                        $(".row").find(".imgProduct.active").removeClass("active");
                        $(".imgProduct#img_"+index).addClass("active");
                    });
                });

                $("#carouselProdukGallery2Image .carousel_prev, #carouselProdukGallery2Image .carousel_next").on("click", function(){
                    $(".row").find(".imgProduct.active").removeClass("active");
                    active_index = $('#carouselProdukGallery2Image').find(".carousel-item.active").attr("data-id");
                });
            
            }else if(value.type == "brandGallery"){

                $('#subOption_modal').modal('show');
                $('.productGallery_modal').find(".fa.fa-arrow-left").show();
                $('#subOption_modal').find('#template_submenu ul').children().remove();
                $('#subOption_modal').find('.modal-header .fa-arrow-left').hide();
                $('#subOption_modal').find('#inside_box_subOption').children().remove();
                $('#subOption_modal').find(".division_name").html('<center><img src="'+image_src+'" style="height:20%;width:20%;"></center><br><br>');
                $('#subOption_modal').find(".division_desc").html('<p>'+value.desc+'</p>');

                $('#subOption_modal').find("#template_product_popup_text").show();

                //Hide the right arrow and left arrow if subMenu is only 4 or less than 5
                if((value.product).length <= 4 ){
                    $(".solution_subOption-prev").hide();
                    $(".solution_subOption-next").hide();
                }else{
                    $(".solution_subOption-prev").show();
                    $(".solution_subOption-next").show();
                }
                //

                $.each(value.product, function(productIndex, content){
                    $('#subOption_modal').find('.division_brand #template_product_popup_text #inside_box_subOption').append('<div class="col-md-3 col-sm-3 menuProduct" id="product_'+productIndex+'" data-id="'+productIndex+'"><center>'+content.product_name+'</center></div>');

                    $("#product_"+productIndex).on("click",function(){
                        $('.productGallery_modal').modal('show');
                        $('#subOption_modal').modal('hide');

                        $(".division_list").find('.row').children().remove();
                        $('#carouselProdukGalleryImage').find(".ul.carousel-indicators").children().remove();
                        $('#carouselProdukGalleryImage').find(".carousel-inner").children().remove();
                        var idProduct = $(this).attr("data-id");
                        $('.productGallery_modal').attr('id', 'division_'+idProduct);
                        $('.productGallery_modal').find('.modal-header .fa-arrow-left').attr("data-target", '#subOption_modal');

                        $.each(value.product[idProduct].product_image, function(imageIndex, imageContent){
                            var product_logo = baseUrl+"/product/"+value.name+"/"+content.product_name+"/"+imageContent.url;

                            $('.division_list').find('.row').append('<div class="col-md-12 col-sm-12 imgProduct" id="imgBrand_'+imageIndex+'"><center><img src="'+product_logo+'" style="height:50%;width:50%;"></center></div>');

                            $('#carouselProdukGalleryImage').find(".ul.carousel-indicators").append('<li data-target="#carouselProdukGalleryImage" data-slide-to="'+imageIndex+'"></li>');
                            $('#carouselProdukGalleryImage').find(".carousel-inner").append('<div class="carousel-item" data-id="'+imageIndex+'"><center><img id="imgCarousel2" src="'+product_logo+'"><br><br><center></div>');

                            if(imageIndex == 0){
                                $("#carouselProdukGalleryImage").find(".carousel-item").addClass("active");
                                $(".imgProduct#img_"+imageIndex).addClass("active");
                            }

                            $(".imgProduct#imgBrand_"+imageIndex).on("click", function(){
                                //var bigImage = baseUrl+"/product/"+value.name+"/"+content.product_name+"/"+content.product_image[index].url;
                                $('#carouselProdukGalleryImage').find(".carousel-item.active").removeClass('active');
                                $('#carouselProdukGalleryImage').find(".carousel-item[data-id="+imageIndex+"]").addClass('active');
                                $(".row").find(".imgProduct.active").removeClass("active");
                                $(".imgProduct#img_"+imageIndex).addClass("active");
                            });
                        });
                    });
                });
            }

        });
    });

    //Menu Service
    $.each(service_array, function( index, value ) {
        var service_url = baseUrl+"/service/";
        var image_src = service_url+"/"+value.before;
        var image_after_src = service_url+"/"+value.after;
        var image_popup_src = service_url+"/"+value.big;
        $("#inside_box").append('<div class="contentBlock" id="'+value.id+'"><center><img src="'+image_src+'" class="service_image"><br>'+value.text+'</center></div>');

        // Hover function
        $("#"+value.id).find("img").hover(function(){
            $(this).attr("src", image_after_src);
        }, function(){
            $(this).attr("src", image_src);
        });

        //Click to show modal
        $("#"+value.id).on("click", function(){
            $('#service_modal').modal('show');
            
            $("#service_modal").find(".service_popup_img").html('<center><img src="'+image_popup_src+'" class="service_image_popup"><br><br><h4>'+value.text+'</h4></center>');
            if(value.id != "understand_service"){
                $("#service_modal").find("#demo").hide();
                $("#service_modal").find("#content_service").show();
                $("#service_modal").find("#content_service").html(value.desc);
            }else{
                $("#demo").find("ul.carousel-indicators").children().remove();
                $("#demo").find(".carousel-inner").children().remove();
                $("#service_modal").find("#content_service").hide();
                $("#service_modal").find("#demo").show();
                $.each(value.desc, function( index, content ) {
                    $("#demo").find("ul.carousel-indicators").append('<li data-target="#demo" data-slide-to="'+index+'"></li>');
                    $("#demo").find(".carousel-inner").append('<div class="carousel-item"><center><div class="col-md-12 col-sm-12" id="content_service">'+content+'</div><center></div>');
                    if(index == 0){
                        $("#demo").find(".carousel-item").addClass("active");
                    }
                });
            }
        });
    });

    function showGalleryContent(imgArray, category){
        $('#carouselGalleryImage').find(".ul.carousel-indicators").children().remove();
        $('#carouselGalleryImage').find(".carousel-inner").children().remove();
        //looping image for residence
        $.each(imgArray, function( index, value ) {
            var base_url = baseUrl+"/gallery/";
            var image_src = base_url+"/"+category+"/"+value.url;
            $(".content_gallery").append('<div class="col-md-3 col-sm-3 gallery_box"><img src="'+image_src+'" class="gallery_box_img" data-index="'+index+'"></div>');

            $(".gallery_box_img").on("click",function(){
                //var imgsrc = $(this).attr('src');
                //$(".gallery_show_img").attr("src", imgsrc);
                //if(imgsrc == image_src){
                    //$(".gallery_desc").text(value.desc);
                //}
                var nomor = $(this).attr('data-index');
                $('#carouselGalleryImage').find(".carousel-item.active").removeClass('active');
                $('#carouselGalleryImage').find(".carousel-item[data-id="+nomor+"]").addClass('active');
            });

            $("#carouselGalleryImage").find(".carousel-inner").append('<div class="carousel-item" data-id="'+index+'"><center><img data-enlargeable src="'+image_src+'" class="gallery_show_img"></center></div>');

            if(index == 0){
                $("#carouselGalleryImage").find(".carousel-item").addClass("active");
            }
        });
    }

    $(".topnav").find('a').each(function(){
        var idMenu = $(this).attr("id");        

        $("#"+idMenu).on("click", function(){
            $("#"+idMenu).parent().find('.active').removeClass('active');
            $("#"+idMenu).addClass("active");
            if(idMenu == "about_menu"){
                $(".logo_video").css({"opacity":"1","transition":"opacity 2s linear","transition-delay":"2s"});
            }
            if($(".topnav").hasClass('responsive')){
                myFunction();
            }
        });
    });

    $(".img_gallery_opt.residence_img").hover(function(){
        $(this).addClass('img_hover');
        $(this).attr("src", baseUrl+"/residence.jpg");
    }, function(){
        $(this).attr("src", baseUrl+"/residence_red.jpg");
    });
    $(".img_gallery_opt.building_img").hover(function(){
        $(this).attr("src", baseUrl+"/building.jpg");
    }, function(){
        $(this).attr("src", baseUrl+"/building_red.jpg");
    });
    $(".img_gallery_opt.retail_img").hover(function(){
        $(this).attr("src", baseUrl+"/retail.jpg");
    }, function(){
        $(this).attr("src", baseUrl+"/retail_red.jpg");
    });

    //$('img[data-enlargeable]').addClass('img-enlargeable').click(function(){
    $('.largeable_img .carousel-inner').click(function(){
        //var src = $(this).attr('src');
        var src = $(this).find(".active img").attr('src');
        var modal;
        function removeModal(){ 
            modal.remove(); 
            $('body').off('keyup.modal-close'); 
        }
        modal = $('<div class="bigBackground">').css({
            //background: 'url('+src+') ',
            //backgroundColor: 'blue',
            backgroundSize: 'contain',
            backgroundRepeat: 'no-repeat',
            position:'fixed',
            zIndex:'10000',
            cursor: 'zoom-out',
            }).append("<img src="+src+" class='imgBigBackground'></img>").click(function(){
            removeModal();
        }).appendTo('body');

        //handling ESC
        $('body').on('keyup.modal-close', function(e){
            if(e.key==='Escape'){ removeModal(); } 
        });
    });

    var $projectCardsRow = $('#projectCardsRow');
    if ($projectCardsRow.length) {
        var projectCardWidth = $projectCardsRow.find('.col-12').first().outerWidth(true) || 320;
        $('.cards-arrow-left').on('click', function(){
            $projectCardsRow.animate({ scrollLeft: '-=' + projectCardWidth }, 300);
        });
        $('.cards-arrow-right').on('click', function(){
            $projectCardsRow.animate({ scrollLeft: '+=' + projectCardWidth }, 300);
        });

        if ($projectCardsRow[0].scrollWidth <= $projectCardsRow.outerWidth()) {
            $('.cards-arrow-left, .cards-arrow-right').hide();
        }
    }

    $('.zoomIn').addClass('img-enlargeable').click(function(){
        var src = $(this).attr('src');
        var modal;
        function removeModal(){ 
            modal.remove(); 
            $('body').off('keyup.modal-close'); 
        }
        modal = $('<div class="zoomInBackground">').css({
            backgroundSize: 'contain',
            backgroundRepeat: 'no-repeat',
            position:'fixed',
            zIndex:'10000',
            cursor: 'zoom-out',
            }).append("<img src="+src+" class='imgZoomBackground'></img>").click(function(){
            removeModal();
        }).appendTo('body');

        //handling ESC
        $('body').on('keyup.modal-close', function(e){
            if(e.key==='Escape'){ removeModal(); } 
        });
    });

    $('.product_image_chosen .carousel-inner').click(function(){
        var src = $(this).find(".active img").attr('src');

        var modal;
        function removeModal(){ 
            modal.remove(); 
            $('body').off('keyup.modal-close'); 
        }
        modal = $('<div class="productZoomInBackground">').css({
            backgroundSize: 'contain',
            backgroundRepeat: 'no-repeat',
            position:'fixed',
            zIndex:'10000',
            cursor: 'zoom-out',
            }).append("<img src="+src+" class='productImgZoomBackground' height='75%'></img>").click(function(){
            removeModal();
        }).appendTo('body');

        //handling ESC
        $('body').on('keyup.modal-close', function(e){
            if(e.key==='Escape'){ removeModal(); } 
        });
    });

    /*$(".contentBlock_solution").on("click",function(){
        $('#product_modal').modal('show');
    });*/

});

//Hover Carousel in service popup
$(".carousel_prev").hover(function(){
    $(".carousel_prev").find('img').show();
}, function(){
    $(".carousel_prev").find('img').hide();
});

$(".carousel_next").hover(function(){
    $(".carousel_next").find('img').show();
}, function(){
    $(".carousel_next").find('img').hide();
});
//

/*$(".horizon-next").hover(function(){
    loopNext();
}, function(){
    $('.container_vision').stop();
});*/
$(".horizon-prev").on("click", function(){
    loopPrev();
});
$(".horizon-next").on("click", function(){
    loopNext();
});

/*function loopNext(){
    $('.container_vision').animate({scrollLeft:'+=50'}, 'fast', 'linear', loopNext);
}*/
function loopNext(){
    $('.container_vision').animate({scrollLeft:'+=70'}, 'fast', 'linear');
}
function loopPrev(){
    $('.container_vision').animate({scrollLeft:'-=70'}, 'fast', 'linear');
}

$('.solution_horizon-prev').on("click",function() {
    loopPrevSolution();
});

$(".solution_horizon-next").on("click",function(){
    loopNextSolution();
});

function loopNextSolution(){
    $('.container_solution').animate({scrollLeft:'+=70'}, 'fast', 'linear');
}
function loopPrevSolution(){
    $('.container_solution').animate({scrollLeft:'-=70'}, 'fast', 'linear');
}

$('.solution_subOption-prev').on("click",function() {
    loopPrevsubOption();
});

$(".solution_subOption-next").on("click",function(){
    loopNextsubOption();
});

function loopNextsubOption(){
    $('.container_subOption').animate({scrollLeft:'+=40'}, 'fast', 'linear');
}
function loopPrevsubOption(){
    $('.container_subOption').animate({scrollLeft:'-=40'}, 'fast', 'linear');
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

var widthScreen = $(window).width();
$(window).resize(function() {
    widthScreen = $(window).width();
});

function setActiveMenu(id) {
    $(".nav-link").removeClass("active");
    $("#" + id).addClass("active");
}
/*
$(window).scroll(function() {
    var scrollTop = $(window).scrollTop();
    console.log("big: "+scrollTop+" -- "+widthScreen);
    $(".topnav").find('.active').removeClass('active');
    if(widthScreen >= 1425 && widthScreen <= 1905){ //1425 macbook 13inch 1903 pc
        if(scrollTop < 1004){
            $("#home_menu").addClass("active");
        }else if(scrollTop >= 1004 && scrollTop < 1774) {
            $("#about_menu").addClass("active");
            $(".logo_video").css({"opacity":"1","transition":"opacity 2s linear","transition-delay":"3s"});
        }else if(scrollTop >= 1774 && scrollTop < 2652){
            $("#product_menu").addClass("active");
        }else if(scrollTop >= 2652 && scrollTop < 3448){
            $("#project_menu").addClass("active");
        }else if(scrollTop >= 3448){
            $("#contact_menu").addClass("active");
        }
    }else if(widthScreen <= 375){ //iphone X screen 375 x 812
        if(scrollTop < 500){
            $("#home_menu").addClass("active");
        }else if(scrollTop >= 500 && scrollTop < 1200) {
            $("#about_menu").addClass("active");
            $(".logo_video").css({"opacity":"1","transition":"opacity 2s linear","transition-delay":"3s"});
        }else if(scrollTop >= 1200 && scrollTop < 1700){
            $("#product_menu").addClass("active");
        }else if(scrollTop >= 1700 && scrollTop < 2500){
            $("#project_menu").addClass("active");
        }else if(scrollTop >= 2500){
            $("#contact_menu").addClass("active");
        }
    }
});*/
//Check scroll on viewport https://stackoverflow.com/questions/34838507/change-css-on-scroll-depending-on-screen-size
//GMAPS: https://developers.google.com/maps/documentation/embed/get-started
//Billing https://console.cloud.google.com/billing/01FF86-116910-4810DF/manage?cloudshell=false&project=dianaglass
//Remove anchor tags https://stackoverflow.com/questions/20198731/how-do-you-remove-anchor-tags-from-url
</script>