<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arihant Transport | Home</title>
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <!-- Add AOS (Animate On Scroll) for scroll effects -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
</head>

<body style="background-color: #F6F7FA;">
<!-- Info Bar -->
<div class="infobar">
    <div class="infobar-left">
       <span>
    <i class="fas fa-map-marker-alt"></i> 
    <a href="https://maps.app.goo.gl/obXWBkFWWVkAsQ1r6" target="_blank" rel="noopener noreferrer" style="color:inherit; text-decoration:none;">
        A-124, Bijal Business Centre, Ahmedabad
    </a>
</span>

<span>
    <i class="fas fa-envelope"></i> 
    <a href="mailto:arihantransport4715@gmail.com" style="color:inherit; text-decoration:none;">
        arihanttransport4715@gmail.com
    </a>
</span>

        <span><i class="fas fa-clock"></i> Mon – Sun: 9.00 am – 8.00pm</span>
    </div>
    {{-- <div class="infobar-right">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-whatsapp"></i></a>
    </div> --}}
</div>

<!-- Main Navbar -->
<header class="navbar">
    <div class="navbar-left">
        {{-- <img src="{{ asset('images/logo.png') }}" alt="Arihant Logo" class="logo"> --}}
        <span class="brand-title">Arihant Transport</span>
    </div>
    <nav class="navbar-menu">
        <a href="#" class="menu-link active">Home</a>
        <a href="#" class="menu-link">About</a>
        <a href="#" class="menu-link">Services</a>
        <div class="dropdown">
            <a href="#" class="menu-link">Pages <i class="fas fa-chevron-down"></i></a>
            <!-- Add dropdown content here -->
        </div>
        <div class="dropdown">
            <a href="#" class="menu-link">Blog <i class="fas fa-chevron-down"></i></a>
            <!-- Add dropdown content here -->
        </div>
        <a href="#" class="menu-link buy-now">Enquire Now</a>
    </nav>
    {{-- <div class="navbar-right">
        <a href="#" class="quote-btn">Get A Quote</a>
        <div class="user-box">
            @auth
                <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                    @csrf
                    <button type="submit" title="Logout" class="user-action"><i class="fas fa-sign-out-alt"></i></button>
                </form>
            @else
                <a href="{{ route('login') }}" title="Login" class="user-action"><i class="fas fa-sign-in-alt"></i></a>
                <a href="{{ route('register') }}" title="Register" class="user-action"><i class="fas fa-user-plus"></i></a>
            @endauth
        </div>
    </div> --}}
</header>



<section class="hero-slider" data-aos="fade-up">
    <div class="slider-bg" id="slider-bg">
        <!-- slider background images will be handled by CSS & JavaScript -->
    </div>
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <span class="hero-subtitle">Trusted Logistic Service</span>
        <h1>
            We Are Professional <span class="brand-orange">Logistics</span><br>
            Service & <span class="brand-blue">Transportation</span>
        </h1>
        <p class="hero-desc">
            Reliable fleet, seamless booking, and curated tours for memorable journeys.<br>
            {{-- <span class="hero-highlight">Peace of mind on every mile.</span> --}}
        </p>
        <a href="#explore" class="hero-btn">Explore More</a>
    </div>
</section>



    <section class="tabs-section" data-aos="fade-up">
    <div class="tabs">
        <button class="tab-btn active" onclick="showTab('transport')">Transportation</button>
        <button class="tab-btn" onclick="showTab('tourism')">Tourism Packages</button>
    </div>
    <div id="transport" class="tab-content active">
        <h2 class="brand-blue">Transportation Services</h2>
        <p>Book comfortable rides with our modern fleet. Choose from buses, cars, or vans—guaranteed safety and punctuality.</p>
        <!-- Example: future booking widget here -->
    </div>
    <div id="tourism" class="tab-content">
        <h2 class="brand-orange">Tourism Packages</h2>
        <p>Explore curated tours, incredible destinations, and exclusive experiences with Arihant. <br>Our packages will be launching soon!</p>
        <!-- Example: future tour listings or booking widget -->
    </div>
</section>


    <section class="why-choose-us-section">
    <h2>Why Choose Arihant Transport</h2>
    <div class="choose-features">
        <div class="choose-feature">
            <div class="feature-icon">
                <i class="fas fa-car"></i>
            </div>
            <h3>Diverse Fleet</h3>
            <p>
                A wide range of vehicles to suit every need, from solo trips to large group travel.
            </p>
        </div>
        <div class="choose-feature">
            <div class="feature-icon">
                <i class="fas fa-plane"></i>
            </div>
            <h3>Seamless Booking</h3>
            <p>
                Easy and fast booking process for all our transport and tour services.
            </p>
        </div>
        <div class="choose-feature">
            <div class="feature-icon">
                <i class="fas fa-ship"></i>
            </div>
            <h3>Unforgettable Tours</h3>
            <p>
                Curated tour packages that offer unique and memorable experiences.
            </p>
        </div>
    </div>
</section>


    <section id="about" class="about-section" data-aos="fade-left">
        <h2 class="section-title">About Arihant</h2>
        <p>
            Arihant Transport is trusted by thousands for on-time travel, tailored tours, and dependable service.<br>
            <strong>Experience peace of mind on every journey.</strong>
        </p>
    </section>

<footer class="main-footer" data-aos="fade-up">
    <div class="footer-bg">
        <div class="footer-content">
            <!-- Column 1: Brand/About -->
            <div class="footer-col">
                <div class="footer-logo">
                    {{-- <img src="{{ asset('images/logo.png') }}" alt="Arihant Logo"> --}}
                    <span class="footer-brand-title">Arihant Transport</span>
                </div>
                <p class="footer-about">
                    Reliable travel and transport services for every journey. Trusted fleet, seamless booking, and exceptional tours.
                </p>
                <ul class="footer-contact">
                    <li><i class="fas fa-map-marker-alt"></i>&nbsp; 4b, Walse Street, USA</li>
                    <li><i class="fas fa-envelope"></i>&nbsp; arihant@gmail.com</li>
                    <li><i class="fas fa-phone"></i>&nbsp; +91 6351505076</li>
                    <li><i class="fas fa-phone"></i>&nbsp; +91 6351412661</li>
                    <li><i class="fas fa-clock"></i>&nbsp; Mon – Sun: 9.00 am – 8.00pm</li>
                </ul>
            </div>
            <!-- Column 2: Our Services -->
            <div class="footer-col">
                <h4 class="footer-title">Our Services <span class="footer-accent"><i class="fas fa-angle-double-right"></i></span></h4>
                <ul class="footer-links">
                    <li><a href="#">Bus Transport</a></li>
                    <li><a href="#">Car Rentals</a></li>
                    <li><a href="#">Tour Packages</a></li>
                    <li><a href="#">Custom Logistics</a></li>
                    <li><a href="#">Distribution</a></li>
                    <li><a href="#">Warehousing</a></li>
                </ul>
            </div>
            <!-- Column 3: Connect With Us -->
            <div class="footer-col">
                <h4 class="footer-title">Connect With Us <span class="footer-accent"><i class="fas fa-angle-double-right"></i></span></h4>
                <ul class="footer-links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Support Page</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Delivery Policy</a></li>
                </ul>
            </div>
            <!-- Column 4: Newsletter -->
            <div class="footer-col">
                <h4 class="footer-title">Newsletter <span class="footer-accent"><i class="fas fa-angle-double-right"></i></span></h4>
                <p class="footer-news-desc">
                    Get the latest news, tips, and special offers.
                </p>
                <form class="footer-newsletter">
                    <input type="email" placeholder="Email Address">
                    <button type="submit"><i class="fas fa-paper-plane"></i></button>
                </form>
                <a href="#" class="footer-buy-btn">Buy Now</a>
            </div>
        </div>
        <!-- Bottom Bar -->
        <div class="footer-bottom">
            <div>
                &copy; 2025 Arihant Transport. All Rights Reserved.
            </div>
            <div class="footer-social">
                
                <a href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </div>
</footer>


    <!-- Scroll animation JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 700, once: true });
    </script>
    <script>
    function showTab(tab) {
        document.querySelectorAll('.tab-btn').forEach(btn => 
            btn.classList.remove('active'));
        document.querySelectorAll('.tab-content').forEach(content =>
            content.classList.remove('active'));
        document.querySelector(`.tab-btn[onclick="showTab('${tab}')"]`).classList.add('active');
        document.getElementById(tab).classList.add('active');
    }
</script>

<script>
const sliderImages = [
    '/images/slide1.jpg',
    '/images/slide2.jpg',
    '/images/slide3.jpg',
    '/images/slide4.jpg',
    '/images/slide5.jpg',
    '/images/slide6.jpg'
];
// Preload images for smoother transitions
sliderImages.forEach(src => {
    const img = new Image();
    img.src = src;
});

let currentImage = 0;
const sliderBg = document.getElementById("slider-bg");

function updateSlider() {
    sliderBg.style.backgroundImage = `url('${sliderImages[currentImage]}')`;
}

function nextSlide() {
    currentImage = (currentImage + 1) % sliderImages.length;
    updateSlider();
}

// Initial render
updateSlider();
const sliderInterval = setInterval(nextSlide, 3500);
</script>


</body>
</html>
