@extends('layouts.app')

@section('title', 'Transport Trucks Services - Arihant Transport')

@section('content')

<!-- Service Hero Section -->
<section class="service-hero fullwidth-cover themed-bg">
    <div class="service-hero-bg">
        <img src="{{ asset('images/service1.jpg') }}" 
             alt="Transport Trucks Services" 
             class="service-hero-img"
             loading="eager"
             onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTIwMCIgaGVpZ2h0PSI0MDAiIHZpZXdCb3g9IjAgMCAxMjAwIDQwMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjEyMDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjRjVGNUY1Ii8+CjxwYXRoIGQ9Ik02MDAgMTUwTDUwMCAyNTBINzAwTDYwMCAxNTBaIiBmaWxsPSIjRkY3QTAwIi8+Cjx0ZXh0IHg9IjYwMCIgeT0iMzAwIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSIjNjY2IiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMjQiPlRyYW5zcG9ydCBUcnVja3MgU2VydmljZXM8L3RleHQ+Cjwvc3ZnPg=='" />
    </div>
    <div class="service-hero-overlay"></div>
    <div class="service-hero-content">
        <h1 class="service-hero-title">Transport <span class="brand-orange">Trucks</span></h1>
        <p class="service-hero-desc">
            Reliable and efficient transportation solutions for goods of all sizes across Gujarat and beyond.
        </p>
    </div>
</section>

<!-- Service Details Section -->
<section class="service-details-section">
    <div class="container">
        <div class="service-overview">
            <div class="service-overview-content">
                <h2 class="section-title">Our Transport <span class="brand-orange">Truck</span> Services</h2>
                <p class="section-description">
                    At Arihant Transport, we offer a comprehensive range of transport truck services designed to meet the diverse needs of businesses across various industries. Our modern fleet of trucks ensures safe, timely, and cost-effective transportation of goods.
                </p>
                <div class="service-highlights">
                    <div class="highlight-item">
                        <div class="highlight-icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        <div class="highlight-content">
                            <h3>Modern Fleet</h3>
                            <p>Our well-maintained fleet of trucks ranges from light commercial vehicles to heavy-duty trucks capable of handling various load capacities.</p>
                        </div>
                    </div>
                    <div class="highlight-item">
                        <div class="highlight-icon">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <div class="highlight-content">
                            <h3>Extensive Coverage</h3>
                            <p>We provide transportation services throughout Gujarat and neighboring states, ensuring your goods reach their destination safely.</p>
                        </div>
                    </div>
                    <div class="highlight-item">
                        <div class="highlight-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="highlight-content">
                            <h3>Safety First</h3>
                            <p>Our drivers are trained professionals who prioritize safety and follow all transportation regulations and guidelines.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service-overview-image">
                <img src="{{ asset('images/service1.jpg') }}" 
                     alt="Transport Truck Fleet" 
                     loading="lazy"
                     onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI2MDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjRjVGNUY1Ii8+CjxwYXRoIGQ9Ik0zMDAgMTUwTDI1MCAyMDBIMzUwTDMwMCAxNTBaIiBmaWxsPSIjRkY3QTAwIi8+Cjx0ZXh0IHg9IjMwMCIgeT0iMjUwIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSIjNjY2IiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTgiPlRyYW5zcG9ydCBUcnVjayBGbGVldDwvdGV4dD4KPC9zdmc+Cg=='">
            </div>
        </div>

        <!-- Service Types -->
        <div class="service-types">
            <h2 class="section-title">Our <span class="brand-orange">Truck</span> Types</h2>
            <div class="service-types-grid">
                <div class="service-type-card" data-aos="fade-up">
                    <div class="service-type-icon">
                        <i class="fas fa-truck-moving"></i>
                    </div>
                    <h3 class="service-type-title">Light Commercial Vehicles</h3>
                    <p class="service-type-description">
                        Perfect for urban deliveries and smaller loads, our LCVs offer flexibility and efficiency for last-mile deliveries.
                    </p>
                    <ul class="service-type-features">
                        <li><i class="fas fa-check"></i> Payload capacity: 1-3 tons</li>
                        <li><i class="fas fa-check"></i> Ideal for urban areas</li>
                        <li><i class="fas fa-check"></i> Cost-effective for smaller loads</li>
                    </ul>
                </div>
                
                <div class="service-type-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-type-icon">
                        <i class="fas fa-truck-loading"></i>
                    </div>
                    <h3 class="service-type-title">Medium Duty Trucks</h3>
                    <p class="service-type-description">
                        Versatile trucks suitable for regional transportation and medium-sized cargo loads.
                    </p>
                    <ul class="service-type-features">
                        <li><i class="fas fa-check"></i> Payload capacity: 5-10 tons</li>
                        <li><i class="fas fa-check"></i> Suitable for regional transport</li>
                        <li><i class="fas fa-check"></i> Versatile cargo options</li>
                    </ul>
                </div>
                
                <div class="service-type-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-type-icon">
                        <i class="fas fa-truck-monster"></i>
                    </div>
                    <h3 class="service-type-title">Heavy Duty Trucks</h3>
                    <p class="service-type-description">
                        Our heavy-duty fleet handles large-scale transportation needs with power and reliability.
                    </p>
                    <ul class="service-type-features">
                        <li><i class="fas fa-check"></i> Payload capacity: 15+ tons</li>
                        <li><i class="fas fa-check"></i> Long-distance capability</li>
                        <li><i class="fas fa-check"></i> Heavy cargo specialists</li>
                    </ul>
                </div>
                
                <div class="service-type-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-type-icon">
                        <i class="fas fa-temperature-low"></i>
                    </div>
                    <h3 class="service-type-title">Refrigerated Trucks</h3>
                    <p class="service-type-description">
                        Temperature-controlled transportation for perishable goods, ensuring product integrity throughout transit.
                    </p>
                    <ul class="service-type-features">
                        <li><i class="fas fa-check"></i> Temperature monitoring</li>
                        <li><i class="fas fa-check"></i> Perishable goods transport</li>
                        <li><i class="fas fa-check"></i> Cold chain compliance</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Benefits Section -->
        <div class="service-benefits">
            <div class="service-benefits-content">
                <h2 class="section-title">Why Choose Our <span class="brand-orange">Transport</span> Services?</h2>
                <ul class="benefits-list">
                    <li>
                        <i class="fas fa-clock"></i>
                        <div>
                            <h3>Timely Delivery</h3>
                            <p>We understand the importance of timely deliveries and strive to maintain punctuality in all our services.</p>
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-money-bill-wave"></i>
                        <div>
                            <h3>Competitive Pricing</h3>
                            <p>Our transparent pricing structure ensures you get the best value for your transportation needs.</p>
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-headset"></i>
                        <div>
                            <h3>24/7 Support</h3>
                            <p>Our customer support team is available round the clock to address any queries or concerns.</p>
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-route"></i>
                        <div>
                            <h3>Real-time Tracking</h3>
                            <p>Stay informed about your shipment's location with our advanced tracking system.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="service-benefits-image">
                <img src="{{ asset('images/service2.jpg') }}" 
                     alt="Transport Benefits" 
                     loading="lazy"
                     onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI2MDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjRjVGNUY1Ii8+CjxwYXRoIGQ9Ik0zMDAgMTUwTDI1MCAyMDBIMzUwTDMwMCAxNTBaIiBmaWxsPSIjRkY3QTAwIi8+Cjx0ZXh0IHg9IjMwMCIgeT0iMjUwIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSIjNjY2IiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTgiPlRyYW5zcG9ydCBCZW5lZml0czwvdGV4dD4KPC9zdmc+Cg=='">
            </div>
        </div>

        <!-- CTA Section -->
        <div class="service-cta">
            <div class="cta-content">
                <h2 class="cta-title">Ready to Ship Your Goods?</h2>
                <p class="cta-description">Contact us today to discuss your transportation requirements and get a customized quote.</p>
                <div class="cta-buttons">
                    <a href="{{ route('contact') }}" class="cta-primary-btn">Get a Quote</a>
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
        
        .service-types-grid {
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