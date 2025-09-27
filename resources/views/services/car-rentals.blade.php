@extends('layouts.app')

@section('title', 'Car Rental Services - Arihant Transport')

@section('content')

<!-- Service Hero Section -->
<section class="service-hero fullwidth-cover themed-bg">
    <div class="service-hero-bg">
        <img src="{{ asset('images/service2.jpg') }}" 
             alt="Car Rental Services" 
             class="service-hero-img"
             loading="eager"
             onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTIwMCIgaGVpZ2h0PSI0MDAiIHZpZXdCb3g9IjAgMCAxMjAwIDQwMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjEyMDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjRjVGNUY1Ii8+CjxwYXRoIGQ9Ik02MDAgMTUwTDUwMCAyNTBINzAwTDYwMCAxNTBaIiBmaWxsPSIjRkY3QTAwIi8+Cjx0ZXh0IHg9IjYwMCIgeT0iMzAwIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSIjNjY2IiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMjQiPkNhciBSZW50YWwgU2VydmljZXM8L3RleHQ+Cjwvc3ZnPg=='" />
    </div>
    <div class="service-hero-overlay"></div>
    <div class="service-hero-content">
        <h1 class="service-hero-title">Car <span class="brand-orange">Rentals</span></h1>
        <p class="service-hero-desc">
            Premium car rental services for business travel, family trips, and special occasions across Gujarat.
        </p>
    </div>
</section>

<!-- Service Details Section -->
<section class="service-details-section">
    <div class="container">
        <div class="service-overview">
            <div class="service-overview-content">
                <h2 class="section-title">Our Car <span class="brand-orange">Rental</span> Services</h2>
                <p class="section-description">
                    Arihant Transport offers a diverse fleet of well-maintained vehicles for rent, catering to various needs from business travel to family vacations. Our car rental services combine quality, comfort, and affordability to ensure a seamless travel experience.
                </p>
                <div class="service-highlights">
                    <div class="highlight-item">
                        <div class="highlight-icon">
                            <i class="fas fa-car"></i>
                        </div>
                        <div class="highlight-content">
                            <h3>Diverse Fleet</h3>
                            <p>Choose from our wide range of vehicles including economy cars, luxury sedans, SUVs, and vans to suit your specific requirements.</p>
                        </div>
                    </div>
                    <div class="highlight-item">
                        <div class="highlight-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <div class="highlight-content">
                            <h3>Flexible Rental Options</h3>
                            <p>We offer hourly, daily, weekly, and monthly rental plans to accommodate both short-term and long-term needs.</p>
                        </div>
                    </div>
                    <div class="highlight-item">
                        <div class="highlight-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="highlight-content">
                            <h3>Professional Drivers</h3>
                            <p>Opt for our chauffeur services with experienced, professional drivers who know the roads well and prioritize your safety.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service-overview-image">
                <img src="{{ asset('images/service2.jpg') }}" 
                     alt="Car Rental Fleet" 
                     loading="lazy"
                     onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI2MDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjRjVGNUY1Ii8+CjxwYXRoIGQ9Ik0zMDAgMTUwTDI1MCAyMDBIMzUwTDMwMCAxNTBaIiBmaWxsPSIjRkY3QTAwIi8+Cjx0ZXh0IHg9IjMwMCIgeT0iMjUwIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSIjNjY2IiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTgiPkNhciBSZW50YWwgRmxlZXQ8L3RleHQ+Cjwvc3ZnPgo='">
            </div>
        </div>

        <!-- Service Types -->
        <div class="service-types">
            <h2 class="section-title">Our <span class="brand-orange">Vehicle</span> Categories</h2>
            <div class="service-types-grid">
                <div class="service-type-card" data-aos="fade-up">
                    <div class="service-type-icon">
                        <i class="fas fa-car-side"></i>
                    </div>
                    <h3 class="service-type-title">Economy Cars</h3>
                    <p class="service-type-description">
                        Fuel-efficient and budget-friendly options perfect for city travel and short trips.
                    </p>
                    <ul class="service-type-features">
                        <li><i class="fas fa-check"></i> Fuel-efficient models</li>
                        <li><i class="fas fa-check"></i> Ideal for 2-4 passengers</li>
                        <li><i class="fas fa-check"></i> Budget-friendly rates</li>
                    </ul>
                </div>
                
                <div class="service-type-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-type-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <h3 class="service-type-title">Luxury Sedans</h3>
                    <p class="service-type-description">
                        Premium vehicles offering superior comfort and style for business travel and special occasions.
                    </p>
                    <ul class="service-type-features">
                        <li><i class="fas fa-check"></i> Premium comfort features</li>
                        <li><i class="fas fa-check"></i> Professional chauffeur option</li>
                        <li><i class="fas fa-check"></i> Business-class experience</li>
                    </ul>
                </div>
                
                <div class="service-type-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-type-icon">
                        <i class="fas fa-truck-monster"></i>
                    </div>
                    <h3 class="service-type-title">SUVs</h3>
                    <p class="service-type-description">
                        Spacious and comfortable vehicles perfect for family trips and group travel.
                    </p>
                    <ul class="service-type-features">
                        <li><i class="fas fa-check"></i> 6-7 passenger capacity</li>
                        <li><i class="fas fa-check"></i> Ample luggage space</li>
                        <li><i class="fas fa-check"></i> Comfortable for long journeys</li>
                    </ul>
                </div>
                
                <div class="service-type-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-type-icon">
                        <i class="fas fa-shuttle-van"></i>
                    </div>
                    <h3 class="service-type-title">Vans & Minibuses</h3>
                    <p class="service-type-description">
                        Ideal for larger groups, corporate events, and airport transfers with ample space for passengers and luggage.
                    </p>
                    <ul class="service-type-features">
                        <li><i class="fas fa-check"></i> 8-15 passenger capacity</li>
                        <li><i class="fas fa-check"></i> Group travel specialist</li>
                        <li><i class="fas fa-check"></i> Corporate event transport</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Rental Options -->
        <div class="rental-options">
            <h2 class="section-title">Flexible <span class="brand-orange">Rental</span> Options</h2>
            <div class="rental-options-grid">
                <div class="rental-option-card" data-aos="fade-up">
                    <div class="rental-option-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="rental-option-title">Hourly Rentals</h3>
                    <p class="rental-option-description">
                        Perfect for short business meetings, shopping trips, or quick errands around the city.
                    </p>
                    <div class="rental-option-price">
                        <span>Starting from</span>
                        <strong>₹500</strong>
                        <span>per hour</span>
                    </div>
                </div>
                
                <div class="rental-option-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="rental-option-icon">
                        <i class="fas fa-calendar-day"></i>
                    </div>
                    <h3 class="rental-option-title">Daily Rentals</h3>
                    <p class="rental-option-description">
                        Ideal for day trips, business travel, or exploring the city at your own pace.
                    </p>
                    <div class="rental-option-price">
                        <span>Starting from</span>
                        <strong>₹2,000</strong>
                        <span>per day</span>
                    </div>
                </div>
                
                <div class="rental-option-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="rental-option-icon">
                        <i class="fas fa-calendar-week"></i>
                    </div>
                    <h3 class="rental-option-title">Weekly Rentals</h3>
                    <p class="rental-option-description">
                        Perfect for extended business trips, vacations, or when you need a vehicle for several days.
                    </p>
                    <div class="rental-option-price">
                        <span>Starting from</span>
                        <strong>₹12,000</strong>
                        <span>per week</span>
                    </div>
                </div>
                
                <div class="rental-option-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="rental-option-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3 class="rental-option-title">Monthly Rentals</h3>
                    <p class="rental-option-description">
                        Cost-effective solution for long-term needs, relocations, or extended stays in the city.
                    </p>
                    <div class="rental-option-price">
                        <span>Starting from</span>
                        <strong>₹40,000</strong>
                        <span>per month</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Benefits Section -->
        <div class="service-benefits">
            <div class="service-benefits-content">
                <h2 class="section-title">Why Choose Our <span class="brand-orange">Car Rental</span> Services?</h2>
                <ul class="benefits-list">
                    <li>
                        <i class="fas fa-car-crash"></i>
                        <div>
                            <h3>Well-Maintained Vehicles</h3>
                            <p>All our vehicles undergo regular maintenance and thorough cleaning to ensure safety and comfort.</p>
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-shield-alt"></i>
                        <div>
                            <h3>Comprehensive Insurance</h3>
                            <p>Every rental includes comprehensive insurance coverage for your peace of mind.</p>
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-map-marked-alt"></i>
                        <div>
                            <h3>GPS Navigation</h3>
                            <p>All vehicles are equipped with GPS navigation systems to help you navigate unfamiliar routes.</p>
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-headset"></i>
                        <div>
                            <h3>24/7 Roadside Assistance</h3>
                            <p>Our support team is available round the clock to assist you in case of any emergencies.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="service-benefits-image">
                <img src="{{ asset('images/service3.jpg') }}" 
                     alt="Car Rental Benefits" 
                     loading="lazy"
                     onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI2MDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjRjVGNUY1Ii8+CjxwYXRoIGQ9Ik0zMDAgMTUwTDI1MCAyMDBIMzUwTDMwMCAxNTBaIiBmaWxsPSIjRkY3QTAwIi8+Cjx0ZXh0IHg9IjMwMCIgeT0iMjUwIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSIjNjY2IiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTgiPkNhciBSZW50YWwgQmVuZWZpdHM8L3RleHQ+Cjwvc3ZnPgo='">
            </div>
        </div>

        <!-- CTA Section -->
        <div class="service-cta">
            <div class="cta-content">
                <h2 class="cta-title">Ready to Book Your Rental Car?</h2>
                <p class="cta-description">Contact us today to check availability and get a customized quote for your car rental needs.</p>
                <div class="cta-buttons">
                    <a href="{{ route('contact') }}" class="cta-primary-btn">Book Now</a>
                    <a href="tel:+916351505076" class="cta-secondary-btn"><i class="fas fa-phone"></i> Call Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Service Hero Styles */
    .service-hero {
        position: relative;
        height: 400px;
        overflow: hidden;
    }
    
    .service-hero-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
    }
    
    .service-hero-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .service-hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.7));
        z-index: 2;
    }
    
    .service-hero-content {
        position: relative;
        z-index: 3;
        max-width: 800px;
        margin: 0 auto;
        padding: 100px 20px;
        text-align: center;
        color: #fff;
    }
    
    .service-hero-title {
        font-size: 3rem;
        margin-bottom: 20px;
        font-weight: 700;
    }
    
    .service-hero-desc {
        font-size: 1.2rem;
        line-height: 1.6;
    }
    
    /* Service Details Styles */
    .service-details-section {
        padding: 80px 0;
    }
    
    .section-title {
        font-size: 2.2rem;
        margin-bottom: 30px;
        color: #333;
    }
    
    .section-description {
        font-size: 1.1rem;
        line-height: 1.7;
        color: #555;
        margin-bottom: 40px;
    }
    
    /* Service Overview */
    .service-overview {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 50px;
        margin-bottom: 80px;
        align-items: center;
    }
    
    .service-highlights {
        margin-top: 30px;
    }
    
    .highlight-item {
        display: flex;
        margin-bottom: 25px;
    }
    
    .highlight-icon {
        flex-shrink: 0;
        width: 60px;
        height: 60px;
        background: #f8f9fa;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 20px;
        color: #FF7A00;
        font-size: 1.5rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    }
    
    .highlight-content h3 {
        font-size: 1.3rem;
        margin-bottom: 10px;
        color: #333;
    }
    
    .highlight-content p {
        color: #666;
        line-height: 1.6;
    }
    
    .service-overview-image img {
        width: 100%;
        border-radius: 8px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    
    /* Service Types */
    .service-types {
        margin-bottom: 80px;
        text-align: center;
    }
    
    .service-types-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }
    
    .service-type-card {
        background: #fff;
        border-radius: 8px;
        padding: 30px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        text-align: left;
    }
    
    .service-type-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    
    .service-type-icon {
        font-size: 2.5rem;
        color: #FF7A00;
        margin-bottom: 20px;
    }
    
    .service-type-title {
        font-size: 1.4rem;
        margin-bottom: 15px;
        color: #333;
    }
    
    .service-type-description {
        color: #666;
        margin-bottom: 20px;
        line-height: 1.6;
    }
    
    .service-type-features {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .service-type-features li {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
        color: #555;
    }
    
    .service-type-features li i {
        color: #28a745;
        margin-right: 10px;
    }
    
    /* Rental Options */
    .rental-options {
        margin-bottom: 80px;
        text-align: center;
    }
    
    .rental-options-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }
    
    .rental-option-card {
        background: #fff;
        border-radius: 8px;
        padding: 30px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        text-align: center;
    }
    
    .rental-option-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    
    .rental-option-icon {
        font-size: 2.5rem;
        color: #FF7A00;
        margin-bottom: 20px;
    }
    
    .rental-option-title {
        font-size: 1.4rem;
        margin-bottom: 15px;
        color: #333;
    }
    
    .rental-option-description {
        color: #666;
        margin-bottom: 20px;
        line-height: 1.6;
    }
    
    .rental-option-price {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    
    .rental-option-price span {
        color: #666;
        font-size: 0.9rem;
    }
    
    .rental-option-price strong {
        font-size: 1.8rem;
        color: #FF7A00;
        margin: 5px 0;
    }
    
    /* Benefits Section */
    .service-benefits {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 50px;
        margin-bottom: 80px;
        align-items: center;
    }
    
    .benefits-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .benefits-list li {
        display: flex;
        margin-bottom: 25px;
    }
    
    .benefits-list li i {
        flex-shrink: 0;
        width: 50px;
        height: 50px;
        background: #f8f9fa;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 20px;
        color: #FF7A00;
        font-size: 1.2rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    }
    
    .benefits-list li div h3 {
        font-size: 1.3rem;
        margin-bottom: 8px;
        color: #333;
    }
    
    .benefits-list li div p {
        color: #666;
        line-height: 1.6;
    }
    
    .service-benefits-image img {
        width: 100%;
        border-radius: 8px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    
    /* CTA Section */
    .service-cta {
        background: linear-gradient(135deg, #FF7A00, #e56e00);
        border-radius: 10px;
        padding: 60px;
        text-align: center;
        color: #fff;
        box-shadow: 0 10px 30px rgba(255, 122, 0, 0.2);
    }
    
    .cta-title {
        font-size: 2.2rem;
        margin-bottom: 15px;
    }
    
    .cta-description {
        font-size: 1.1rem;
        margin-bottom: 30px;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .cta-buttons {
        display: flex;
        justify-content: center;
        gap: 20px;
    }
    
    .cta-primary-btn {
        display: inline-block;
        padding: 15px 30px;
        background: #fff;
        color: #FF7A00;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .cta-primary-btn:hover {
        background: #f8f9fa;
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .cta-secondary-btn {
        display: inline-block;
        padding: 15px 30px;
        background: rgba(255,255,255,0.2);
        color: #fff;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .cta-secondary-btn:hover {
        background: rgba(255,255,255,0.3);
        transform: translateY(-3px);
    }
    
    /* Responsive Styles */
    @media (max-width: 992px) {
        .service-overview,
        .service-benefits {
            grid-template-columns: 1fr;
            gap: 40px;
        }
        
        .service-overview-image,
        .service-benefits-image {
            order: -1;
        }
        
        .service-cta {
            padding: 40px 30px;
        }
    }
    
    @media (max-width: 768px) {
        .service-hero-title {
            font-size: 2.5rem;
        }
        
        .section-title {
            font-size: 2rem;
        }
        
        .service-types-grid,
        .rental-options-grid {
            grid-template-columns: 1fr;
        }
        
        .cta-buttons {
            flex-direction: column;
            gap: 15px;
        }
        
        .service-cta {
            padding: 40px 20px;
        }
    }
    
    @media (max-width: 480px) {
        .service-hero-title {
            font-size: 2rem;
        }
        
        .service-hero-desc {
            font-size: 1rem;
        }
        
        .highlight-item {
            flex-direction: column;
        }
        
        .highlight-icon {
            margin-bottom: 15px;
            margin-right: 0;
        }
    }
</style>

@endsection