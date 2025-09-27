<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Arihant Transport')</title>
    
    <!-- Critical CSS inline for above-the-fold content -->
    <style>
        /* Critical CSS will be inserted here */
        @php echo App\Helpers\PerformanceHelper::getCriticalCSS(); @endphp
    </style>
    
    <!-- Preload critical resources -->
    @foreach(App\Helpers\PerformanceHelper::getPreloadLinks()['fonts'] as $font)
        <link rel="preload" href="{{ $font }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="{{ $font }}"></noscript>
    @endforeach
    
    @foreach(App\Helpers\PerformanceHelper::getPreloadLinks()['images'] as $image)
        <link rel="preload" href="{{ asset($image) }}" as="image">
    @endforeach
    
    <!-- Resource hints -->
    @foreach(App\Helpers\PerformanceHelper::getResourceHints()['dns-prefetch'] as $dns)
        <link rel="dns-prefetch" href="//{{ $dns }}">
    @endforeach
    
    @foreach(App\Helpers\PerformanceHelper::getResourceHints()['preconnect'] as $preconnect)
        <link rel="preconnect" href="https://{{ $preconnect }}" crossorigin>
    @endforeach
    
    <!-- Non-critical CSS loaded asynchronously -->
    @if(file_exists(public_path('css/theme.min.css')))
        <link rel="preload" href="{{ asset('css/theme.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="{{ asset('css/theme.min.css') }}"></noscript>
    @else
        <link rel="preload" href="{{ asset('css/theme.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="{{ asset('css/theme.css') }}"></noscript>
    @endif
    
    <!-- Font Awesome -->
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"></noscript>
    
    <!-- AOS (Animate On Scroll) -->
    <link rel="preload" href="https://unpkg.com/aos@2.3.1/dist/aos.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css"></noscript>
    
    <!-- Prefetch non-critical resources -->
    @foreach(App\Helpers\PerformanceHelper::getResourceHints()['prefetch'] as $prefetch)
        <link rel="prefetch" href="{{ asset($prefetch) }}">
    @endforeach
    <!-- Custom CSS for dropdown menu -->
    <style>
        /* Dropdown Menu Styles */
        .nav-dropdown {
            position: relative;
            display: inline-block;
        }
        
        .nav-dropdown .nav-link {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .nav-dropdown .fa-chevron-down {
            font-size: 0.8em;
            transition: transform 0.3s ease;
        }
        
        .nav-dropdown:hover .fa-chevron-down {
            transform: rotate(180deg);
        }
        
        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #fff;
            min-width: 200px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            border-radius: 4px;
            padding: 8px 0;
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.3s ease;
            z-index: 100;
        }
        
        .nav-dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .dropdown-menu.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .dropdown-item {
            display: block;
            padding: 8px 16px;
            color: #333;
            text-decoration: none;
            transition: all 0.2s ease;
        }
        
        .dropdown-item:hover, .dropdown-item.active {
            background-color: #f8f9fa;
            color: #FF7A00;
        }
        
        /* Mobile dropdown styles */
        @media (max-width: 991px) {
            .dropdown-menu {
                position: static;
                box-shadow: none;
                opacity: 0;
                visibility: hidden;
                height: 0;
                padding: 0;
                margin: 0;
                overflow: hidden;
                transform: none;
                transition: all 0.3s ease;
            }
            
            .dropdown-menu.show {
                opacity: 1;
                visibility: visible;
                height: auto;
                padding: 8px 0;
                margin-top: 5px;
                margin-bottom: 5px;
                background-color: #f5f5f5;
                border-radius: 4px;
            }
            
            .dropdown-item {
                padding: 8px 24px;
            }
            
            .nav-dropdown .nav-link {
                justify-content: space-between;
                width: 100%;
            }
        }
            color: #FF7A00;
        }
        
        /* Mobile Dropdown Styles */
        @media (max-width: 768px) {
            .dropdown-menu {
                position: static;
                box-shadow: none;
                background-color: #f8f9fa;
                opacity: 1;
                visibility: hidden;
                height: 0;
                overflow: hidden;
                padding: 0;
                margin-left: 20px;
                transform: none;
                transition: height 0.3s ease;
            }
            
            .nav-dropdown.active .dropdown-menu {
                visibility: visible;
                height: auto;
                padding: 8px 0;
            }
            
            .nav-dropdown .nav-link {
                justify-content: space-between;
            }
        }
    </style>
</head>
<body>

<!-- Top Info Bar -->
<div class="top-info-bar">
    <div class="container">
        <div class="info-content">
            <div class="info-left">
                <span class="info-item">
                    <i class="fas fa-phone"></i>
                    <a href="tel:+916351505076">+91 63515 05076</a>
                </span>
                <span class="info-item">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:contact@arihanttransport.com">contact@arihanttransport.com</a>
                </span>
            </div>
            <div class="info-right">
                <span class="info-item">
                    <i class="fas fa-clock"></i>
                    Mon - Sun: 9:00 AM - 8:00 PM
                </span>
            </div>
        </div>
    </div>
</div>

<!-- Main Navigation -->
<header class="main-navbar">
    <div class="container">
        <div class="navbar-content">
            <div class="navbar-brand">
                <a href="{{ route('home') }}" class="brand-link">
                    <i class="fas fa-truck"></i>
                    <span class="brand-text">Arihant Transport</span>
                </a>
            </div>
            
            <nav class="navbar-nav">
                <a href="{{ route('home') }}" class="nav-link @if(request()->routeIs('home')) active @endif">
                    <span>Home</span>
                </a>
                <a href="{{ route('about') }}" class="nav-link @if(request()->routeIs('about')) active @endif">
                    <span>About</span>
                </a>
                <div class="nav-dropdown">
                    <a href="{{ route('services') }}" class="nav-link @if(request()->routeIs('services') || request()->routeIs('services.*')) active @endif">
                        <span>Services</span>
                        <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="dropdown-menu">
                        <a href="{{ route('services') }}" class="dropdown-item @if(request()->routeIs('services') && !request()->routeIs('services.*')) active @endif">All Services</a>
                        <a href="{{ route('services.transport-trucks') }}" class="dropdown-item @if(request()->routeIs('services.transport-trucks')) active @endif">Transport Trucks</a>
                        <a href="{{ route('services.car-rentals') }}" class="dropdown-item @if(request()->routeIs('services.car-rentals')) active @endif">Car Rentals</a>
                        <a href="{{ route('services.tour-packages') }}" class="dropdown-item @if(request()->routeIs('services.tour-packages')) active @endif">Tour Packages</a>
                        <a href="{{ route('services.logistics') }}" class="dropdown-item @if(request()->routeIs('services.logistics')) active @endif">Logistics</a>
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="nav-link @if(request()->routeIs('contact')) active @endif">
                    <span>Contact</span>
                </a>
            </nav>
            
            <div class="navbar-actions">
                <a href="{{ route('contact') }}" class="cta-button">
                    <i class="fas fa-phone"></i>
                    <span>Get Quote</span>
                </a>
            </div>
            
            <!-- Mobile Menu Toggle -->
            <button class="mobile-menu-toggle" id="mobile-menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>

<!-- Dynamic Content -->
<main>
    @yield('content')
</main>

<!-- Footer -->
<footer class="main-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-main">
                <div class="footer-brand">
                    <div class="footer-logo">
                        <i class="fas fa-truck"></i>
                        <span class="footer-brand-text">Arihant Transport</span>
                    </div>
                    <p class="footer-description">
                        Your trusted partner for transportation and travel services across India. 
                        From heavy-duty transport to luxury car rentals and tour packages.
                    </p>
                    <div class="footer-contact-info">
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <a href="tel:+916351505076">+91 63515 05076</a>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:contact@arihanttransport.com">contact@arihanttransport.com</a>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Sector 8, Gandhinagar, Gujarat 382007</span>
                        </div>
                    </div>
                </div>
                
                <div class="footer-links">
                    <h4 class="footer-title">Quick Links</h4>
                    <ul class="footer-nav">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-services">
                    <h4 class="footer-title">Our Services</h4>
                    <ul class="footer-nav">
                        <li><a href="{{ route('services') }}">Transport Trucks</a></li>
                        <li><a href="{{ route('services') }}">Car Rentals</a></li>
                        <li><a href="{{ route('services') }}">Tour Packages</a></li>
                        <li><a href="{{ route('services') }}">Logistics</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <div class="footer-copyright">
                    <p>&copy; 2025 Arihant Transport. All rights reserved.</p>
                </div>
                <div class="footer-social">
                    <a href="#" class="social-link" title="WhatsApp">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="#" class="social-link" title="Facebook">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="social-link" title="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="social-link" title="LinkedIn">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({ duration: 700, once: true });
    
    // Mobile dropdown functionality
    document.addEventListener('DOMContentLoaded', function() {
        // Mobile dropdown functionality
        const navDropdowns = document.querySelectorAll('.nav-dropdown');
        
        if (window.innerWidth <= 768) {
            navDropdowns.forEach(dropdown => {
                const dropdownLink = dropdown.querySelector('.nav-link');
                
                dropdownLink.addEventListener('click', function(e) {
                    // Only prevent default if we're in mobile view
                    if (window.innerWidth <= 768) {
                        e.preventDefault();
                        dropdown.classList.toggle('active');
                    }
                });
            });
        }
    });
</script>

@stack('scripts')

<style>
/* Top Info Bar */
.top-info-bar {
    background: linear-gradient(135deg, #171e29 0%, #FF7A00 100%);
    color: #fff;
    padding: 0.5rem 0;
    font-size: 0.9rem;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
}

.info-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 1rem;
}

.info-left {
    display: flex;
    gap: 2rem;
    flex-wrap: wrap;
}

.info-right {
    display: flex;
    align-items: center;
}

.info-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.info-item i {
    color: #fff;
    font-size: 0.9rem;
}

.info-item a {
    color: #fff;
    text-decoration: none;
    transition: opacity 0.3s ease;
}

.info-item a:hover {
    opacity: 0.8;
}

/* Main Navigation */
.main-navbar {
    background: #fff;
    box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
    position: static;
    top: 100px;
    z-index: 1000;
    transition: all 0.3s ease;
}

.navbar-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1rem 0;
}

.navbar-brand {
    flex-shrink: 0;
}

.brand-link {
    display: flex;
    align-items: center;
    gap: 0.8rem;
    text-decoration: none;
    color: #171e29;
    font-weight: 700;
    font-size: 1.5rem;
    transition: color 0.3s ease;
}

.brand-link:hover {
    color: #FF7A00;
}

.brand-link i {
    font-size: 2rem;
    color: #FF7A00;
}

.brand-text {
    font-family: 'Poppins', sans-serif;
}

.navbar-nav {
    display: flex;
    align-items: center;
    gap: 2rem;
    flex: 1;
    justify-content: center;
}

.nav-link {
    position: relative;
    text-decoration: none;
    color: #171e29;
    font-weight: 500;
    font-size: 1rem;
    padding: 0.5rem 0;
    transition: color 0.3s ease;
}

.nav-link:hover,
.nav-link.active {
    color: #FF7A00;
}

.nav-link::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 2px;
    background: #FF7A00;
    transition: width 0.3s ease;
}

.nav-link:hover::after,
.nav-link.active::after {
    width: 100%;
}

.navbar-actions {
    flex-shrink: 0;
}

.cta-button {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    background: linear-gradient(135deg, #FF7A00 0%, #FF9500 100%);
    color: #fff;
    padding: 0.8rem 1.5rem;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.95rem;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(255, 122, 0, 0.3);
}

.cta-button:hover {
    background: linear-gradient(135deg, #e66a00 0%, #e68500 100%);
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(255, 122, 0, 0.4);
}

.mobile-menu-toggle {
    display: none;
    flex-direction: column;
    gap: 4px;
    background: none;
    border: none;
    cursor: pointer;
    padding: 0.5rem;
}

.mobile-menu-toggle span {
    width: 25px;
    height: 3px;
    background: #171e29;
    transition: all 0.3s ease;
}

/* Footer */
.main-footer {
    background: #171e29;
    color: #fff;
    padding: 3rem 0 1rem;
}

.footer-content {
    display: flex;
    flex-direction: column;
    gap: 2rem;
}

.footer-main {
    display: flex;
    justify-content: space-between;
    gap: 3rem;
    align-items: start;
}

.footer-brand {
    display: flex;
    flex-direction: column;
    width: 500px;
    gap: 1.5rem;
}

.footer-logo {
    display: flex;
    align-items: center;
    gap: 0.8rem;
    margin-bottom: 1rem;
}

.footer-logo i {
    font-size: 2rem;
    color: #FF7A00;
}

.footer-brand-text {
    font-size: 1.5rem;
    font-weight: 700;
    color: #fff;
}

.footer-description {
    color: #ccd6e1;
    line-height: 1.6;
    font-size: 1rem;
    margin-bottom: 1rem;

}

.footer-contact-info {
    display: flex;
    flex-direction: column;
    gap: 0.8rem;
}

.contact-item {
    display: flex;
    align-items: flex-start
    gap: 0.8rem;
    color: #ccd6e1;
    font-size: 0.95rem;
}

.contact-item i {
    color: #FF7A00;
    width: 16px;
    text-align: center;
}

.contact-item a {
    color: #ccd6e1;
    text-decoration: none;
    transition: color 0.3s ease;
}

.contact-item a:hover {
    color: #FF7A00;
}

.footer-title {
    font-size: 1.2rem;
    font-weight: 700;
    color: #fff;
    margin-bottom: 1.5rem;
    position: relative;
}

.footer-title::after {
    content: '';
    position: absolute;
    bottom: -0.5rem;
    left: 0;
    width: 30px;
    height: 2px;
    background: #FF7A00;
}

.footer-nav {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 0.8rem;
}

.footer-nav a {
    color: #ccd6e1;
    text-decoration: none;
    font-size: 0.95rem;
    transition: color 0.3s ease;
    position: relative;
    padding-left: 0;
}

.footer-nav a:hover {
    color: #FF7A00;
    padding-left: 1rem;
}

.footer-nav a::before {
    content: '→';
    position: absolute;
    left: -1rem;
    opacity: 0;
    transition: all 0.3s ease;
    color: #FF7A00;
}

.footer-nav a:hover::before {
    opacity: 1;
    left: 0;
}

.footer-bottom {
    border-top: 1px solid #29344a;
    padding-top: 2rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 1rem;
}

.footer-copyright p {
    color: #ccd6e1;
    font-size: 0.9rem;
    margin: 0;
}

.footer-social {
    display: flex;
    gap: 1rem;
}

.social-link {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    background: rgba(255, 122, 0, 0.1);
    border: 1px solid rgba(255, 122, 0, 0.3);
    border-radius: 50%;
    color: #FF7A00;
    text-decoration: none;
    font-size: 1.1rem;
    transition: all 0.3s ease;
}

.social-link:hover {
    background: #FF7A00;
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(255, 122, 0, 0.3);
}

/* Responsive Design */
@media (max-width: 768px) {
    .container {
        padding: 0 1rem;
    }
    
    .info-content {
        flex-direction: column;
        text-align: center;
        gap: 0.5rem;
    }
    
    .info-left {
        justify-content: center;
        gap: 1rem;
    }
    
    .navbar-content {
        flex-wrap: no-wrap;
        gap: 1rem;
        padding: .7rem;
    }
    
    .navbar-nav {
        display: none;
        width: 100%;
        flex-direction: column;
        gap: 0.5rem;
        padding: 1rem 0;
        border-top: 1px solid #29344a;
        margin-top: 1rem;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
    
    .navbar-nav.active {
        display: flex;
    }
    
    .mobile-menu-toggle {
        display: flex;
        padding: 0.5rem;
    }
    
    .mobile-menu-toggle i {
        font-size: 1.2rem;
    }
    
    .nav-link {
        padding: 0.8rem 1rem;
        font-size: 0.95rem;
        border-radius: 5px;
        transition: all 0.3s ease;
    }
    
    .nav-link:hover {
        background: #f8f9fa;
        color: #FF7A00;
    }
    
}
@media (max-width: 600px) {
    .main-footer .footer-content {
        padding: 28px 0 16px 0;
        gap: 1rem;
    }
    .footer-main {
        flex-direction: column;
        gap: 1rem;
        align-items: flex-start;
        padding-bottom: 10px;
    }
    .footer-brand,
    .footer-links,
    .footer-services {
        width: 100%;
        max-width: 100%;
        text-align: left;
        margin-bottom: 10px;
    }
    .footer-brand {
        border-bottom: 1px solid #29344a;
        padding-bottom: 14px;
    }
    .footer-logo,
    .footer-description,
    .footer-contact-info {
        justify-content: flex-start;
        text-align: left;
    }
    .footer-description{
        font-size: .8rem;
    }
    .footer-contact-info .contact-item {
        margin-bottom: 7px;
        font-size: .8em;
    }
    .footer-title {
        font-size: 1em;
        margin-bottom: 20px;
    }
    .footer-nav {
        padding-left: 0;
        margin-bottom: 10px;
        gap: 0;
        font-size: .7rem;
    }
    .footer-nav li {
        margin-bottom: 8px;
    }
    .footer-nav li a{
        font-size: .8rem;
    }
    .footer-bottom {
        flex-direction: column;
        align-items: center;
        gap: 10px;
        padding-top: 10px;
        border-top: 1px solid #29344a;
    }
    .footer-social {
        margin-top: 7px;
    }
    .footer-social .social-link {
        font-size: 1.25em;
        margin-right: 12px;
    }
}


@media (max-width: 480px) {
    .brand-text {
        font-size: 1.2rem;
    }
    
    .brand-link i {
        font-size: 1.5rem;
    }
    
    .cta-button {
        display: none;
    }
    
    .footer-logo i {
        font-size: 1.5rem;
    }
    
    .footer-brand-text {
        font-size: 1.2rem;
    }
}

@media (max-width: 1024px) {
    .container {
        padding: 0 1.5rem;
    }
    
    .info-content {
        gap: 1rem;
    }
    
    .info-item {
        font-size: 0.9rem;
    }
    
    .navbar-nav {
        gap: 1.5rem;
    }
    
    .nav-link {
        font-size: 0.95rem;
    }
    
    .footer-main {
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
    }
}

@media (max-width: 360px) {
    .container {
        padding: 0 1rem;
    }
    
    .info-item {
        font-size: 0.75rem;
    }
    
    .brand-text {
        font-size: 1.1rem;
    }
    
    .brand-link i {
        font-size: 1.4rem;
    }
    
    .nav-link {
        padding: 0.6rem 0.7rem;
        font-size: 0.85rem;
    }
    
    .cta-button {
        padding: 0.5rem 1rem;
        font-size: 0.8rem;
    }
    
    .footer-section h3 {
        font-size: 1.1rem;
    }
    
    .footer-section p,
    .footer-section li {
        font-size: 0.8rem;
    }
    
    .footer-bottom p {
        font-size: 0.75rem;
    }
    
    .social-link {
        width: 30px;
        height: 30px;
        font-size: 0.85rem;
    }
}
@media (max-width: 600px) {
    .top-info-bar {
        display: none; /* Hide timeslot on mobile */
    }
}
</style>

<!-- Scripts -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const mobileToggle = document.getElementById('mobile-menu-toggle');
    const drawerNav = document.querySelector('.navbar-nav.drawer');
    const body = document.body;

    if (!mobileToggle || !drawerNav) return;

    mobileToggle.addEventListener('click', () => {
        mobileToggle.classList.toggle('active');
        drawerNav.classList.toggle('active');
        body.classList.toggle('menu-open');
    });

    // Mobile dropdown toggles for drawer submenus
    drawerNav.querySelectorAll('.nav-dropdown > .nav-link').forEach(link => {
        link.addEventListener('click', e => {
            if (window.innerWidth <= 800) {
                e.preventDefault();
                const dropdown = link.nextElementSibling;
                if (dropdown) dropdown.classList.toggle('active');
                link.parentElement.classList.toggle('active');
            }
        });
    });

    // Close drawer clicking outside
    body.addEventListener('click', e => {
        if (!drawerNav.contains(e.target) && !mobileToggle.contains(e.target) && body.classList.contains('menu-open')) {
            drawerNav.classList.remove('active');
            mobileToggle.classList.remove('active');
            body.classList.remove('menu-open');
        }
    });

    // Navbar scroll background effect
    const navbar = document.querySelector('.main-navbar');
    let lastScrolled = false;
    window.addEventListener('scroll', () => {
        const isScrolled = window.pageYOffset > 100;
        if (isScrolled !== lastScrolled) {
            if (isScrolled) {
                navbar.style.background = 'rgba(255, 255, 255, 0.95)';
                navbar.style.backdropFilter = 'blur(10px)';
            } else {
                navbar.style.background = '#fff';
                navbar.style.backdropFilter = 'none';
            }
            lastScrolled = isScrolled;
        }
    });
});

// Load AOS asynchronously
function loadAOS() {
    if (!document.querySelector('script[src*="aos.js"]')) {
        const script = document.createElement('script');
        script.src = 'https://unpkg.com/aos@2.3.1/dist/aos.js';
        script.onload = () => AOS.init({ duration: 1000, once: true, offset: 100 });
        document.head.appendChild(script);
    } else if (typeof AOS !== 'undefined') {
        AOS.init({ duration: 1000, once: true, offset: 100 });
    }
}
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', loadAOS);
} else {
    loadAOS();
}

// Web Vitals

function sendWebVitals(data) {
    if (typeof gtag !== 'undefined') {
        gtag('event', data.name, {
            event_category: 'Web Vitals',
            value: Math.round(data.value),
            event_label: data.id,
            non_interaction: true,
        });
    }
}

function loadWebVitals() {
    if (!document.querySelector('script[src*="web-vitals.attribution.js"]')) {
        const script = document.createElement('script');
        script.src = 'https://unpkg.com/web-vitals@3/dist/web-vitals.attribution.js';
        script.onload = function() {
            getCLS(sendWebVitals);
            getFID(sendWebVitals);
            getFCP(sendWebVitals);
            getLCP(sendWebVitals);
            getTTFB(sendWebVitals);
        };
        document.head.appendChild(script);
    }
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', loadWebVitals);
} else {
    loadWebVitals();
}
</script>

<!-- Performance optimization scripts -->
@if(file_exists(public_path('js/performance.min.js')))
    <script src="{{ asset('js/performance.min.js') }}" defer></script>
@else
    <script src="{{ asset('js/performance.js') }}" defer></script>
@endif

@stack('scripts')

</body>
</html>