@extends('layouts.app')

@section('title', 'Our Services - Arihant Transport')

@section('content')

<!-- Services Hero Section -->
<section class="services-hero fullwidth-cover themed-bg">
    <div class="services-hero-bg">
        <img src="{{ asset('images/service1.jpg') }}" 
             alt="Arihant Transport Services" 
             class="services-hero-img"
             loading="eager"
             onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTIwMCIgaGVpZ2h0PSI0MDAiIHZpZXdCb3g9IjAgMCAxMjAwIDQwMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjEyMDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjRjVGNUY1Ii8+CjxwYXRoIGQ9Ik02MDAgMTUwTDUwMCAyNTBINzAwTDYwMCAxNTBaIiBmaWxsPSIjRkY3QTAwIi8+Cjx0ZXh0IHg9IjYwMCIgeT0iMzAwIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSIjNjY2IiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMjQiPkFyaWhhbnQgVHJhbnNwb3J0IFNlcnZpY2VzPC90ZXh0Pgo8L3N2Zz4K'" />
    </div>
    <div class="services-hero-overlay"></div>
    <div class="services-hero-content">
        <h1 class="services-hero-title">Our <span class="brand-orange">Services</span></h1>
        <p class="services-hero-desc">
            Comprehensive logistics and transportation solutions tailored to meet your business needs across Gujarat and beyond.
        </p>
    </div>
</section>

<!-- Main Services Section -->
<section class="main-services-section">
    <div class="container">
        <div class="services-header">
            <div class="section-badge">
                <i class="fas fa-gift"></i>
                <span>WHAT WE OFFER</span>
            </div>
            <h2 class="section-title">
                Professional <span class="brand-orange">Transportation</span> & 
                <span class="brand-blue">Logistics</span> Solutions
            </h2>
            <p class="services-description">
                From local deliveries to international shipping, we provide end-to-end logistics solutions with reliability and efficiency.
            </p>
        </div>
        
        <!-- Featured Services Categories -->
        {{-- <div class="featured-services">
            <h3 class="featured-services-title">Our Core Services</h3>
            <div class="featured-services-grid">
                <!-- Transport Trucks Service -->
                <div class="featured-service-card" data-aos="fade-up">
                    <div class="featured-service-image">
                        <img src="{{ asset('images/service1.jpg') }}" 
                             alt="Transport Trucks" 
                             loading="lazy"
                             onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjI1MCIgdmlld0JveD0iMCAwIDQwMCAyNTAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI0MDAiIGhlaWdodD0iMjUwIiBmaWxsPSIjRjVGNUY1Ii8+CjxwYXRoIGQ9Ik0yMDAgMTAwTDE1MCAxNTBIMjUwTDIwMCAxMDBaIiBmaWxsPSIjRkY3QTAwIi8+Cjx0ZXh0IHg9IjIwMCIgeT0iMTgwIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSIjNjY2IiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTQiPlRyYW5zcG9ydCBUcnVja3M8L3RleHQ+Cjwvc3ZnPgo='">
                    </div>
                    <div class="featured-service-content">
                        <h4 class="featured-service-title">Transport Trucks</h4>
                        <p class="featured-service-description">
                            Our fleet of modern transport trucks provides reliable and efficient transportation for goods of all sizes across Gujarat and beyond.
                        </p>
                        <a href="{{ route('services.transport-trucks') }}" class="featured-service-btn">Explore Service</a>
                    </div>
                </div>
                
                <!-- Car Rentals Service -->
                <div class="featured-service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="featured-service-image">
                        <img src="{{ asset('images/service2.jpg') }}" 
                             alt="Car Rentals" 
                             loading="lazy"
                             onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjI1MCIgdmlld0JveD0iMCAwIDQwMCAyNTAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI0MDAiIGhlaWdodD0iMjUwIiBmaWxsPSIjRjVGNUY1Ii8+CjxwYXRoIGQ9Ik0yMDAgMTAwTDE1MCAxNTBIMjUwTDIwMCAxMDBaIiBmaWxsPSIjRkY3QTAwIi8+Cjx0ZXh0IHg9IjIwMCIgeT0iMTgwIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSIjNjY2IiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTQiPkNhciBSZW50YWxzPC90ZXh0Pgo8L3N2Zz4K='">
                    </div>
                    <div class="featured-service-content">
                        <h4 class="featured-service-title">Car Rentals</h4>
                        <p class="featured-service-description">
                            Choose from our wide range of vehicles for business travel, family trips, or special occasions with flexible rental options.
                        </p>
                        <a href="{{ route('services.car-rentals') }}" class="featured-service-btn">Explore Service</a>
                    </div>
                </div>
                
                <!-- Tour Packages Service -->
                <div class="featured-service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="featured-service-image">
                        <img src="{{ asset('images/service3.jpg') }}" 
                             alt="Tour Packages" 
                             loading="lazy"
                             onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjI1MCIgdmlld0JveD0iMCAwIDQwMCAyNTAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI0MDAiIGhlaWdodD0iMjUwIiBmaWxsPSIjRjVGNUY1Ii8+CjxwYXRoIGQ9Ik0yMDAgMTAwTDE1MCAxNTBIMjUwTDIwMCAxMDBaIiBmaWxsPSIjRkY3QTAwIi8+Cjx0ZXh0IHg9IjIwMCIgeT0iMTgwIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSIjNjY2IiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTQiPlRvdXIgUGFja2FnZXM8L3RleHQ+Cjwvc3ZnPgo='">
                    </div>
                    <div class="featured-service-content">
                        <h4 class="featured-service-title">Tour Packages</h4>
                        <p class="featured-service-description">
                            Discover Gujarat and beyond with our curated tour packages, including transportation, accommodation, and guided experiences.
                        </p>
                        <a href="{{ route('services.tour-packages') }}" class="featured-service-btn">Explore Service</a>
                    </div>
                </div>
                
                <!-- Logistics Service -->
                <div class="featured-service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="featured-service-image">
                        <img src="{{ asset('images/service4.jpg') }}" 
                             alt="Logistics" 
                             loading="lazy"
                             onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjI1MCIgdmlld0JveD0iMCAwIDQwMCAyNTAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI0MDAiIGhlaWdodD0iMjUwIiBmaWxsPSIjRjVGNUY1Ii8+CjxwYXRoIGQ9Ik0yMDAgMTAwTDE1MCAxNTBIMjUwTDIwMCAxMDBaIiBmaWxsPSIjRkY3QTAwIi8+Cjx0ZXh0IHg9IjIwMCIgeT0iMTgwIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSIjNjY2IiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTQiPkxvZ2lzdGljczwvdGV4dD4KPC9zdmc+Cg='">
                    </div>
                    <div class="featured-service-content">
                        <h4 class="featured-service-title">Logistics</h4>
                        <p class="featured-service-description">
                            End-to-end logistics solutions including warehousing, inventory management, and distribution for businesses of all sizes.
                        </p>
                        <a href="{{ route('services.logistics') }}" class="featured-service-btn">Explore Service</a>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="services-grid">
            <!-- Service 1: Export & Import -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                <div class="service-image">
                    <img src="{{ asset('images/service1.jpg') }}" 
                         alt="Truck Transport Service" 
                         loading="lazy"
                         onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjI1MCIgdmlld0JveD0iMCAwIDQwMCAyNTAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI0MDAiIGhlaWdodD0iMjUwIiBmaWxsPSIjRjVGNUY1Ii8+CjxwYXRoIGQ9Ik0yMDAgMTAwTDE1MCAxNTBIMjUwTDIwMCAxMDBaIiBmaWxsPSIjRkY3QTAwIi8+Cjx0ZXh0IHg9IjIwMCIgeT0iMTgwIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSIjNjY2IiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTQiPlRydWNrIFRyYW5zcG9ydCBTZXJ2aWNlPC90ZXh0Pgo8L3N2Zz4K'">
                    <div class="service-overlay">
                        <div class="service-icon">
                            <i class="fas fa-truck"></i>
                        </div>
                    </div>
                </div>
                <div class="service-content">
                    <h3 class="service-title">Truck Transport Services</h3>
                    <p class="service-description">
                        Reliable and cost-effective truck transport solutions for goods movement across cities, states, and nationwide routes.
                    </p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Door-to-Door Delivery</li>
                        <li><i class="fas fa-check"></i> Real-Time Tracking</li>
                        <li><i class="fas fa-check"></i> Wide Fleet Network</li>
                        <li><i class="fas fa-check"></i> Secure & Timely Transit</li>
                    </ul>
                    <a href="{{ route('services.transport-trucks') }}" class="service-btn">Explore More</a>
                </div>
            </div>
            

            <!-- Service 2: Port Logistics -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                <div class="service-image">
                    <img src="{{ asset('images/service2.jpg') }}" 
                         alt="Rented Car Service" 
                         loading="lazy"
                         onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjI1MCIgdmlld0JveD0iMCAwIDQwMCAyNTAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI0MDAiIGhlaWdodD0iMjUwIiBmaWxsPSIjRjVGNUY1Ii8+CjxwYXRoIGQ9Ik0yMDAgMTAwTDE1MCAxNTBIMjUwTDIwMCAxMDBaIiBmaWxsPSIjRkY3QTAwIi8+Cjx0ZXh0IHg9IjIwMCIgeT0iMTgwIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSIjNjY2IiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTQiPlJlbnRlZCBDYXIgU2VydmljZTwvdGV4dD4KPC9zdmc+'">
                    <div class="service-overlay">
                        <div class="service-icon">
                            <i class="fas fa-car"></i>
                        </div>
                    </div>
                </div>
                <div class="service-content">
                    <h3 class="service-title">Rented Car Services</h3>
                    <p class="service-description">
                        Affordable and comfortable car rental solutions for city travel, outstation trips, and corporate transportation.
                    </p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Wide Range of Cars</li>
                        <li><i class="fas fa-check"></i> Chauffeur & Self-Drive Options</li>
                        <li><i class="fas fa-check"></i> Flexible Rental Plans</li>
                        <li><i class="fas fa-check"></i> 24/7 Customer Support</li>
                    </ul>
                    <a href="{{ route('services.car-rentals') }}" class="service-btn">Explore More</a>
                </div>
            </div>
            

            <!-- Service 3: Warehousing -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                <div class="service-image">
                    <img src="{{ asset('images/service3.jpg') }}" 
                         alt="Tour Packages" 
                         loading="lazy"
                         onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjI1MCIgdmlld0JveD0iMCAwIDQwMCAyNTAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI0MDAiIGhlaWdodD0iMjUwIiBmaWxsPSIjRjVGNUY1Ii8+CjxwYXRoIGQ9Ik0yMDAgMTAwTDE1MCAxNTBIMjUwTDIwMCAxMDBaIiBmaWxsPSIjRkY3QTAwIi8+Cjx0ZXh0IHg9IjIwMCIgeT0iMTgwIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSIjNjY2IiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTQiPlRvdXIgUGFja2FnZXM8L3RleHQ+Cjwvc3ZnPgo='">
                    <div class="service-overlay">
                        <div class="service-icon">
                            <i class="fas fa-route"></i>
                        </div>
                    </div>
                </div>
                <div class="service-content">
                    <h3 class="service-title">Tour Packages</h3>
                    <p class="service-description">
                        Exciting domestic and international tour packages with curated itineraries, guided travel, and all-inclusive services.
                    </p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Custom Itineraries</li>
                        <li><i class="fas fa-check"></i> Hotel & Transport Included</li>
                        <li><i class="fas fa-check"></i> Group & Solo Tours</li>
                        <li><i class="fas fa-check"></i> Affordable Packages</li>
                    </ul>
                    <a href="{{ route('services.tour-packages') }}" class="service-btn">Explore More</a>
                </div>
            </div>
            

            <!-- Service 4: Fleet Management -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="400">
                <div class="service-image">
                    <img src="{{ asset('images/service4.jpg') }}" 
                         alt="Logistics Services" 
                         loading="lazy"
                         onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjI1MCIgdmlld0JveD0iMCAwIDQwMCAyNTAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI0MDAiIGhlaWdodD0iMjUwIiBmaWxsPSIjRjVGNUY1Ii8+CjxwYXRoIGQ9Ik0yMDAgMTAwTDE1MCAxNTBIMjUwTDIwMCAxMDBaIiBmaWxsPSIjRkY3QTAwIi8+Cjx0ZXh0IHg9IjIwMCIgeT0iMTgwIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSIjNjY2IiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTQiPkxvZ2lzdGljcyBTZXJ2aWNlczwvdGV4dD4KPC9zdmc+'">
                    <div class="service-overlay">
                        <div class="service-icon">
                            <i class="fas fa-boxes"></i>
                        </div>
                    </div>
                </div>
                <div class="service-content">
                    <h3 class="service-title">Logistics Services</h3>
                    <p class="service-description">
                        End-to-end logistics solutions including supply chain management, cargo handling, and seamless transportation services.
                    </p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Supply Chain Management</li>
                        <li><i class="fas fa-check"></i> Cargo Handling</li>
                        <li><i class="fas fa-check"></i> Nationwide Delivery</li>
                        <li><i class="fas fa-check"></i> On-Time & Secure Transit</li>
                    </ul>
                    <a href="{{ route('services.logistics') }}" class="service-btn">Explore More</a>
                </div>
            </div>
            

            <!-- Service 5: Cement Delivery -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="500">
                <div class="service-image">
                    <img src="{{ asset('images/service5.jpg') }}" 
                         alt="Cement Delivery" 
                         loading="lazy"
                         onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjI1MCIgdmlld0JveD0iMCAwIDQwMCAyNTAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI0MDAiIGhlaWdodD0iMjUwIiBmaWxsPSIjRjVGNUY1Ii8+CjxwYXRoIGQ9Ik0yMDAgMTAwTDE1MCAxNTBIMjUwTDIwMCAxMDBaIiBmaWxsPSIjRkY3QTAwIi8+Cjx0ZXh0IHg9IjIwMCIgeT0iMTgwIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSIjNjY2IiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTQiPkNlbWVudCBEZWxpdmVyeTwvdGV4dD4KPC9zdmc+Cg=='">
                    <div class="service-overlay">
                        <div class="service-icon">
                            <i class="fas fa-industry"></i>
                        </div>
                    </div>
                </div>
                <div class="service-content">
                    <h3 class="service-title">Cement Delivery</h3>
                    <p class="service-description">
                        Specialized cement transportation with bulk carriers, quality assurance, and timely delivery to construction sites.
                    </p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Bulk Carriers</li>
                        <li><i class="fas fa-check"></i> Quality Assurance</li>
                        <li><i class="fas fa-check"></i> Timely Delivery</li>
                        <li><i class="fas fa-check"></i> Plant Partnerships</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="service-btn">Get Quote</a>
                </div>
            </div>

            <!-- Service 6: Goods Transportation -->
            <div class="service-card" data-aos="fade-up" data-aos-delay="600">
                <div class="service-image">
                    <img src="{{ asset('images/service6.jpg') }}" 
                         alt="Goods Transportation" 
                         loading="lazy"
                         onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjI1MCIgdmlld0JveD0iMCAwIDQwMCAyNTAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI0MDAiIGhlaWdodD0iMjUwIiBmaWxsPSIjRjVGNUY1Ii8+CjxwYXRoIGQ9Ik0yMDAgMTAwTDE1MCAxNTBIMjUwTDIwMCAxMDBaIiBmaWxsPSIjRkY3QTAwIi8+Cjx0ZXh0IHg9IjIwMCIgeT0iMTgwIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSIjNjY2IiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTQiPkdvb2RzIFRyYW5zcG9ydGF0aW9uPC90ZXh0Pgo8L3N2Zz4K'">
                    <div class="service-overlay">
                        <div class="service-icon">
                            <i class="fas fa-boxes"></i>
                        </div>
                    </div>
                </div>
                <div class="service-content">
                    <h3 class="service-title">Goods Transportation</h3>
                    <p class="service-description">
                        Reliable goods transportation across India with various vehicle types to handle different cargo requirements.
                    </p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Multi-Modal Transport</li>
                        <li><i class="fas fa-check"></i> Cargo Protection</li>
                        <li><i class="fas fa-check"></i> Nationwide Coverage</li>
                        <li><i class="fas fa-check"></i> Real-time Tracking</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="service-btn">Get Quote</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-choose-services">
    <div class="container">
        <div class="why-choose-header">
            <h2 class="why-choose-title">Why Choose <span class="brand-orange">Arihant Transport</span></h2>
            <p class="why-choose-desc">
                With over 22 years of experience and a commitment to excellence, we deliver unmatched logistics solutions.
            </p>
        </div>
        
        <div class="why-choose-grid">
            <div class="why-choose-item" data-aos="fade-up" data-aos-delay="100">
                <div class="why-choose-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Reliable & Secure</h3>
                <p>Your cargo is protected with comprehensive insurance and secure handling procedures.</p>
            </div>
            
            <div class="why-choose-item" data-aos="fade-up" data-aos-delay="200">
                <div class="why-choose-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3>On-Time Delivery</h3>
                <p>We understand the importance of deadlines and ensure timely delivery of your shipments.</p>
            </div>
            
            <div class="why-choose-item" data-aos="fade-up" data-aos-delay="300">
                <div class="why-choose-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3>24/7 Support</h3>
                <p>Round-the-clock customer support to address your queries and provide real-time updates.</p>
            </div>
            
            <div class="why-choose-item" data-aos="fade-up" data-aos-delay="400">
                <div class="why-choose-icon">
                    <i class="fas fa-rupee-sign"></i>
                </div>
                <h3>Competitive Pricing</h3>
                <p>Best-in-class services at competitive rates without compromising on quality.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="services-cta">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Ready to Ship with <span class="brand-orange">Arihant Transport</span>?</h2>
            <p class="cta-desc">
                Get a personalized quote for your transportation needs. Our experts are ready to help you find the best solution.
            </p>
            <div class="cta-buttons">
                <a href="#contact" class="cta-btn primary">Get Free Quote</a>
                <a href="tel:+916351505076" class="cta-btn secondary">
                    <i class="fas fa-phone"></i> Call Now
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* Services Hero Section */
.services-hero {
    position: relative;
    height: 400px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    color: #fff;
}

/* Featured Services Styles */
.featured-services {
    margin: 60px 0;
    text-align: center;
}

.featured-services-title {
    font-size: 2rem;
    margin-bottom: 40px;
    color: #333;
    position: relative;
    display: inline-block;
}

.featured-services-title:after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 3px;
    background: linear-gradient(to right, #FF7A00, #0056b3);
}

.featured-services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 30px;
    margin-top: 30px;
}

.featured-service-card {
    background: #fff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.featured-service-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}

.featured-service-image {
    height: 200px;
    overflow: hidden;
    position: relative;
}

.featured-service-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.featured-service-card:hover .featured-service-image img {
    transform: scale(1.05);
}

.featured-service-content {
    padding: 20px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.featured-service-title {
    font-size: 1.5rem;
    margin-bottom: 15px;
    color: #333;
}

.featured-service-description {
    color: #666;
    margin-bottom: 20px;
    flex-grow: 1;
}

.featured-service-btn {
    display: inline-block;
    padding: 10px 25px;
    background: #FF7A00;
    color: #fff;
    border-radius: 4px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    align-self: flex-start;
    position: relative;
    overflow: hidden;
}

.featured-service-btn:before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.7s ease;
}

.featured-service-btn:hover {
    background: #e56e00;
    transform: translateY(-2px);
}

.featured-service-btn:hover:before {
    left: 100%;
}

@media (max-width: 992px) {
    .featured-services-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .featured-services-grid {
        grid-template-columns: 1fr;
    }
    
    .featured-service-image {
        height: 180px;
    }
}

.services-hero-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}

.services-hero-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(0.7);
}

.services-hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.7));
    z-index: 2;
}

.services-hero-content {
    position: relative;
    z-index: 3;
    text-align: center;
    max-width: 800px;
    padding: 0 2rem;
}

.services-hero-title {
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
    font-family: 'Poppins', sans-serif;
}

.services-hero-desc {
    font-size: 1.3rem;
    line-height: 1.6;
    opacity: 0.95;
}

/* Main Services Section */
.main-services-section {
    padding: 5rem 0;
    background: #fff;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
}

.services-header {
    text-align: center;
    margin-bottom: 4rem;
}

.services-subtitle {
    color: #FF7A00;
    font-size: 1.1rem;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-bottom: 1rem;
    display: block;
}

.services-title {
    font-size: 2.8rem;
    font-weight: 700;
    color: #171e29;
    margin-bottom: 1.5rem;
    line-height: 1.2;
}

.services-description {
    font-size: 1.2rem;
    color: #666;
    max-width: 700px;
    margin: 0 auto;
    line-height: 1.6;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2.5rem;
    margin-top: 3rem;
    align-items: stretch; /* Ensure all grid items stretch to match the tallest item */
}

.service-card {
    background: #fff;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    height: 100%; /* Ensure all cards have the same height */
    display: flex;
    flex-direction: column;
}

.service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
}

.service-image {
    position: relative;
    height: 250px;
    overflow: hidden;
}

.service-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease, opacity 0.3s ease;
    background-color: #f5f5f5;
    background-image: linear-gradient(45deg, #f0f0f0 25%, transparent 25%), 
                      linear-gradient(-45deg, #f0f0f0 25%, transparent 25%), 
                      linear-gradient(45deg, transparent 75%, #f0f0f0 75%), 
                      linear-gradient(-45deg, transparent 75%, #f0f0f0 75%);
    background-size: 20px 20px;
    background-position: 0 0, 0 10px, 10px -10px, -10px 0px;
    opacity: 1; /* Changed from 0 to 1 */
}

@keyframes fadeInImage {
    from {
        opacity: 0.7;
    }
    to {
        opacity: 1;
    }
}

.service-image img.loaded {
    background: none;
}

.service-card:hover .service-image img {
    transform: scale(1.05);
    filter: brightness(0.9);
}

.service-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(25, 118, 210, 0.8) 0%, rgba(255, 122, 0, 0.8) 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
    z-index: 3; /* Added z-index to ensure overlay appears above image */
}

.service-card:hover .service-overlay {
    opacity: 1;
}

.service-icon {
    font-size: 3rem;
    color: #fff;
}

.service-content {
    padding: 2rem;
    flex: 1; /* Make content area fill available space */
    display: flex;
    flex-direction: column;
}

.service-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #171e29;
    margin-bottom: 1rem;
}

.service-description {
    color: #666;
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

.service-features {
    list-style: none;
    padding: 0;
    margin-bottom: 2rem;
    flex-grow: 1; /* Allow the features list to grow and push the button down */
}

.service-features li {
    display: flex;
    align-items: center;
    margin-bottom: 0.5rem;
    color: #555;
}

.service-features li i {
    color: #FF7A00;
    margin-right: 0.5rem;
    font-size: 0.9rem;
}

.service-btn {
    display: inline-block;
    background: linear-gradient(135deg, #FF7A00 0%, #FF9500 100%);
    color: #fff;
    padding: 0.8rem 2rem;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    text-align: center;
    width: 100%;
    margin-top: auto; /* Push button to bottom of flex container */
    position: relative;
    overflow: hidden;
}

.service-btn:hover {
    background: linear-gradient(135deg, #e66a00 0%, #e68500 100%);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(255, 122, 0, 0.3);
}

.service-btn:before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.7s;
}

.service-btn:hover:before {
    left: 100%;
}

/* Why Choose Us Section */
.why-choose-services {
    padding: 5rem 0;
    background: #f8f9fa;
}

.why-choose-header {
    text-align: center;
    margin-bottom: 4rem;
}

.why-choose-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #171e29;
    margin-bottom: 1rem;
}

.why-choose-desc {
    font-size: 1.2rem;
    color: #666;
    max-width: 600px;
    margin: 0 auto;
}

.why-choose-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
}

.why-choose-item {
    text-align: center;
    padding: 2rem;
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s ease;
}

.why-choose-item:hover {
    transform: translateY(-5px);
}

.why-choose-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #FF7A00 0%, #FF9500 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    font-size: 2rem;
    color: #fff;
}

.why-choose-item h3 {
    font-size: 1.3rem;
    font-weight: 700;
    color: #171e29;
    margin-bottom: 1rem;
}

.why-choose-item p {
    color: #666;
    line-height: 1.6;
}

/* CTA Section */
.services-cta {
    padding: 5rem 0;
    background: linear-gradient(135deg, #1976D2 0%, #FF7A00 100%);
    color: #fff;
}

.cta-content {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.cta-title {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
}

.cta-desc {
    font-size: 1.2rem;
    margin-bottom: 2.5rem;
    opacity: 0.95;
}

.cta-buttons {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}

.cta-btn {
    display: inline-block;
    padding: 1rem 2.5rem;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    font-size: 1.1rem;
    transition: all 0.3s ease;
}

.cta-btn.primary {
    background: #fff;
    color: #1976D2;
}

.cta-btn.primary:hover {
    background: #f0f0f0;
    transform: translateY(-2px);
}

.cta-btn.secondary {
    background: transparent;
    color: #fff;
    border: 2px solid #fff;
}

.cta-btn.secondary:hover {
    background: #fff;
    color: #1976D2;
}

.cta-btn i {
    margin-right: 0.5rem;
}

/* Responsive Design */
@media (max-width: 1024px) {
    .container {
        padding: 0 1.5rem;
    }
    
    .services-hero-title {
        font-size: 3rem;
    }
    
    .services-title {
        font-size: 2.2rem;
    }
    
    .services-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 2rem;
    }
    
    .why-choose-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 2rem;
    }
}

@media (max-width: 768px) {
    .container {
        padding: 0 1rem;
    }
    
    .services-hero {
        height: 400px;
    }
    
    .services-hero-title {
        font-size: 2.2rem;
        line-height: 1.3;
    }
    
    .services-hero-desc {
        font-size: 1rem;
    }
    
    .services-title {
        font-size: 2rem;
        line-height: 1.3;
    }
    
    .services-description {
        font-size: 1rem;
    }
    
    .services-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .service-image {
        height: 200px;
    }
    
    .service-content {
        padding: 1.5rem;
    }
    
    .service-title {
        font-size: 1.3rem;
    }
    
    .service-description {
        font-size: 0.95rem;
    }
    
    .service-features li {
        font-size: 0.9rem;
    }
    
    .service-btn {
        padding: 0.8rem 1.5rem;
        font-size: 0.95rem;
    }
    
    .why-choose-title {
        font-size: 2rem;
    }
    
    .why-choose-desc {
        font-size: 1rem;
    }
    
    .why-choose-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .why-choose-card {
        padding: 1.5rem;
    }
    
    .why-choose-card h3 {
        font-size: 1.2rem;
    }
    
    .why-choose-card p {
        font-size: 0.9rem;
    }
    
    .cta-title {
        font-size: 2rem;
    }
    
    .cta-desc {
        font-size: 1rem;
    }
    
    .cta-buttons {
        flex-direction: column;
        align-items: center;
        gap: 1rem;
    }
    
    .cta-btn {
        width: 100%;
        max-width: 280px;
        padding: 0.9rem 1.5rem;
        font-size: 1rem;
    }
}

@media (max-width: 480px) {
    .container {
        padding: 0 0.8rem;
    }
    
    .services-hero {
        height: 350px;
    }
    
    .services-hero-title {
        font-size: 1.8rem;
        line-height: 1.2;
    }
    
    .services-hero-desc {
        font-size: 0.95rem;
    }
    
    .services-title {
        font-size: 1.6rem;
    }
    
    .services-description {
        font-size: 0.95rem;
    }
    
    .services-subtitle {
        font-size: 1rem;
    }
    
    .service-image {
        height: 180px;
    }
    
    .service-content {
        padding: 1.2rem;
    }
    
    .service-title {
        font-size: 1.2rem;
    }
    
    .service-description {
        font-size: 0.9rem;
    }
    
    .service-features li {
        font-size: 0.85rem;
    }
    
    .service-btn {
        padding: 0.7rem 1.2rem;
        font-size: 0.9rem;
    }
    
    .why-choose-title {
        font-size: 1.6rem;
    }
    
    .why-choose-desc {
        font-size: 0.95rem;
    }
    
    .why-choose-card {
        padding: 1.2rem;
    }
    
    .why-choose-card h3 {
        font-size: 1.1rem;
    }
    
    .why-choose-card p {
        font-size: 0.85rem;
    }
    
    .cta-title {
        font-size: 1.6rem;
    }
    
    .cta-desc {
        font-size: 0.95rem;
    }
    
    .cta-btn {
        padding: 0.8rem 1.2rem;
        font-size: 0.95rem;
    }
}

@media (max-width: 360px) {
    .container {
        padding: 0 0.5rem;
    }
    
    .services-hero-title {
        font-size: 1.6rem;
    }
    
    .services-title {
        font-size: 1.4rem;
    }
    
    .service-content,
    .why-choose-card {
        padding: 1rem 0.8rem;
    }
    
    .service-title,
    .why-choose-card h3 {
        font-size: 1rem;
    }
    
    .service-description,
    .why-choose-card p {
        font-size: 0.8rem;
    }
    
    .service-features li {
        font-size: 0.8rem;
    }
    
    .service-btn {
        padding: 0.6rem 1rem;
        font-size: 0.85rem;
    }
    
    .cta-title {
        font-size: 1.4rem;
    }
    
    .cta-desc {
        font-size: 0.9rem;
    }
    
    .cta-btn {
        padding: 0.7rem 1rem;
        font-size: 0.9rem;
    }
}

.brand-orange {
    color: #FF7A00;
}

.brand-blue {
    color: #1976D2;
}

/* Image loading indicator */
.image-loading-indicator {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #FF7A00;
    font-size: 2rem;
    z-index: 4; /* Increased z-index to be above overlay */
    background: rgba(255, 255, 255, 0.9);
    border-radius: 50%;
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.service-image {
    position: relative;
}

.service-image img.loading {
    opacity: 0.7;
    animation: pulse 1.5s ease-in-out infinite;
}

/* Add a subtle pulse animation for loading state */
@keyframes pulse {
    0% {
        opacity: 0.7;
    }
    50% {
        opacity: 0.9;
    }
    100% {
        opacity: 0.7;
    }
}

/* Responsive image improvements */
@media (max-width: 768px) {
    .service-image {
        height: 200px;
    }
    
    .image-loading-indicator {
        width: 50px;
        height: 50px;
        font-size: 1.5rem;
    }
}

@media (max-width: 480px) {
    .service-image {
        height: 180px;
    }
}
</style>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Enhanced image loading with progress indicators
    const serviceImages = document.querySelectorAll('.service-image img');
    
    serviceImages.forEach((img, index) => {
        // Add loading class initially
        img.classList.add('loading');
        
        // Create loading indicator
        const loadingIndicator = document.createElement('div');
        loadingIndicator.className = 'image-loading-indicator';
        loadingIndicator.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';
        img.parentNode.appendChild(loadingIndicator);
        
        // Handle successful image load
        img.addEventListener('load', function() {
            this.classList.remove('loading');
            this.classList.add('loaded');
            loadingIndicator.style.display = 'none';
            this.style.opacity = '1';
        });
        
        // Handle image load error
        img.addEventListener('error', function() {
            this.classList.remove('loading');
            loadingIndicator.style.display = 'none';
            console.warn(`Failed to load image: ${this.src}`);
        });
        
        // Preload images for better performance
        const preloadImg = new Image();
        preloadImg.src = img.src;
        
        // Force image reload with a small delay to ensure proper loading
        if (img.complete) {
            // If image is already loaded from cache
            img.classList.remove('loading');
            img.classList.add('loaded');
            loadingIndicator.style.display = 'none';
            img.style.opacity = '1';
        } else {
            // Add a small delay between image loads to prevent overwhelming the browser
            setTimeout(() => {
                // Only reload if not already loaded
                if (img.classList.contains('loading')) {
                    const currentSrc = img.src;
                    img.src = currentSrc;
                }
            }, index * 150);
        }
    });
    
    // Intersection Observer for lazy loading
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                        observer.unobserve(img);
                    }
                }
            });
        });
        
        // Observe all lazy-loaded images
        document.querySelectorAll('img[loading="lazy"]').forEach(img => {
            imageObserver.observe(img);
        });
    }
    
    // Add smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Add hover effects to service cards
    const serviceCards = document.querySelectorAll('.service-card');
    serviceCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
});
</script>
@endpush

@endsection
