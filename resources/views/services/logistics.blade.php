@extends('layouts.app')

@section('title', 'Logistics Services - Arihant Transport')

@section('content')

<!-- Service Hero Section -->
<section class="service-hero fullwidth-cover themed-bg">
    <div class="service-hero-bg">
        <img src="{{ asset('images/service4.jpg') }}" 
             alt="Logistics Services" 
             class="service-hero-img"
             loading="eager"
             onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTIwMCIgaGVpZ2h0PSI0MDAiIHZpZXdCb3g9IjAgMCAxMjAwIDQwMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjEyMDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjRjVGNUY1Ii8+CjxwYXRoIGQ9Ik02MDAgMTUwTDUwMCAyNTBINzAwTDYwMCAxNTBaIiBmaWxsPSIjRkY3QTAwIi8+Cjx0ZXh0IHg9IjYwMCIgeT0iMzAwIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSIjNjY2IiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMjQiPkxvZ2lzdGljcyBTZXJ2aWNlczwvdGV4dD4KPC9zdmc+Ig=='" />
    </div>
    <div class="service-hero-overlay"></div>
    <div class="service-hero-content">
        <h1 class="service-hero-title"><span class="brand-orange">Logistics</span> Services</h1>
        <p class="service-hero-desc">
            Comprehensive logistics solutions for businesses of all sizes, ensuring efficient supply chain management and timely deliveries.
        </p>
    </div>
</section>

<!-- Service Details Section -->
<section class="service-details-section">
    <div class="container">
        <div class="service-overview">
            <div class="service-overview-content">
                <h2 class="section-title">Our <span class="brand-orange">Logistics</span> Services</h2>
                <p class="section-description">
                    Arihant Transport offers end-to-end logistics solutions designed to optimize your supply chain, reduce costs, and improve efficiency. With our extensive network, modern fleet, and experienced team, we provide reliable logistics services tailored to meet your specific business requirements.
                </p>
                <div class="service-highlights">
                    <div class="highlight-item">
                        <div class="highlight-icon">
                            <i class="fas fa-truck-loading"></i>
                        </div>
                        <div class="highlight-content">
                            <h3>Supply Chain Management</h3>
                            <p>Comprehensive solutions that optimize every aspect of your supply chain from procurement to final delivery.</p>
                        </div>
                    </div>
                    <div class="highlight-item">
                        <div class="highlight-icon">
                            <i class="fas fa-warehouse"></i>
                        </div>
                        <div class="highlight-content">
                            <h3>Warehousing & Distribution</h3>
                            <p>Strategic warehousing facilities and efficient distribution networks to ensure timely deliveries.</p>
                        </div>
                    </div>
                    <div class="highlight-item">
                        <div class="highlight-icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <div class="highlight-content">
                            <h3>Express Delivery</h3>
                            <p>Fast and reliable delivery services for time-sensitive shipments across Gujarat and beyond.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service-overview-image">
                <img src="{{ asset('images/service4.jpg') }}" 
                     alt="Logistics Services" 
                     loading="lazy"
                     onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI2MDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjRjVGNUY1Ii8+CjxwYXRoIGQ9Ik0zMDAgMTUwTDI1MCAyMDBIMzUwTDMwMCAxNTBaIiBmaWxsPSIjRkY3QTAwIi8+Cjx0ZXh0IHg9IjMwMCIgeT0iMjUwIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSIjNjY2IiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTgiPkxvZ2lzdGljcyBTZXJ2aWNlczwvdGV4dD4KPC9zdmc+Cg=='">
            </div>
        </div>

        <!-- Logistics Services -->
        <div class="logistics-services">
            <h2 class="section-title">Our <span class="brand-orange">Logistics</span> Solutions</h2>
            <div class="logistics-services-grid">
                <div class="logistics-service-card" data-aos="fade-up">
                    <div class="logistics-service-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3 class="logistics-service-title">Transportation Management</h3>
                    <p class="logistics-service-description">
                        Efficient transportation solutions including FTL (Full Truckload), LTL (Less than Truckload), and specialized cargo transport services.
                    </p>
                    <ul class="logistics-service-features">
                        <li><i class="fas fa-check"></i> Route optimization for cost efficiency</li>
                        <li><i class="fas fa-check"></i> Real-time shipment tracking</li>
                        <li><i class="fas fa-check"></i> Flexible scheduling options</li>
                        <li><i class="fas fa-check"></i> Multi-modal transport solutions</li>
                    </ul>
                </div>
                
                <div class="logistics-service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="logistics-service-icon">
                        <i class="fas fa-warehouse"></i>
                    </div>
                    <h3 class="logistics-service-title">Warehousing Solutions</h3>
                    <p class="logistics-service-description">
                        Secure and strategically located warehousing facilities with advanced inventory management systems.
                    </p>
                    <ul class="logistics-service-features">
                        <li><i class="fas fa-check"></i> Short and long-term storage options</li>
                        <li><i class="fas fa-check"></i> Climate-controlled facilities</li>
                        <li><i class="fas fa-check"></i> Inventory management and control</li>
                        <li><i class="fas fa-check"></i> Order fulfillment services</li>
                    </ul>
                </div>
                
                <div class="logistics-service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="logistics-service-icon">
                        <i class="fas fa-boxes"></i>
                    </div>
                    <h3 class="logistics-service-title">Distribution Services</h3>
                    <p class="logistics-service-description">
                        Efficient distribution networks ensuring timely delivery of goods to multiple destinations across Gujarat and neighboring states.
                    </p>
                    <ul class="logistics-service-features">
                        <li><i class="fas fa-check"></i> Last-mile delivery solutions</li>
                        <li><i class="fas fa-check"></i> Cross-docking services</li>
                        <li><i class="fas fa-check"></i> Regional distribution centers</li>
                        <li><i class="fas fa-check"></i> Scheduled delivery programs</li>
                    </ul>
                </div>
                
                <div class="logistics-service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="logistics-service-icon">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <h3 class="logistics-service-title">Supply Chain Consulting</h3>
                    <p class="logistics-service-description">
                        Expert consultation services to analyze and optimize your supply chain operations for maximum efficiency and cost savings.
                    </p>
                    <ul class="logistics-service-features">
                        <li><i class="fas fa-check"></i> Supply chain assessment</li>
                        <li><i class="fas fa-check"></i> Process optimization strategies</li>
                        <li><i class="fas fa-check"></i> Technology integration solutions</li>
                        <li><i class="fas fa-check"></i> Performance metrics and reporting</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Industry Solutions -->
        <div class="industry-solutions">
            <h2 class="section-title">Industry-Specific <span class="brand-orange">Logistics</span> Solutions</h2>
            <div class="industry-solutions-grid">
                <div class="industry-solution-card" data-aos="fade-up">
                    <div class="industry-solution-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3 class="industry-solution-title">Manufacturing</h3>
                    <p class="industry-solution-description">
                        Tailored logistics solutions for manufacturing companies, including raw material procurement, just-in-time delivery, and finished goods distribution.
                    </p>
                </div>
                
                <div class="industry-solution-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="industry-solution-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3 class="industry-solution-title">Retail & E-commerce</h3>
                    <p class="industry-solution-description">
                        Comprehensive logistics services for retail and e-commerce businesses, including order fulfillment, inventory management, and last-mile delivery.
                    </p>
                </div>
                
                <div class="industry-solution-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="industry-solution-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3 class="industry-solution-title">Food & Beverage</h3>
                    <p class="industry-solution-description">
                        Specialized logistics solutions for the food and beverage industry, including temperature-controlled transportation and storage facilities.
                    </p>
                </div>
                
                <div class="industry-solution-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="industry-solution-icon">
                        <i class="fas fa-prescription-bottle-alt"></i>
                    </div>
                    <h3 class="industry-solution-title">Pharmaceuticals</h3>
                    <p class="industry-solution-description">
                        Secure and compliant logistics services for pharmaceutical products, ensuring proper handling and temperature control throughout the supply chain.
                    </p>
                </div>
                
                <div class="industry-solution-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="industry-solution-icon">
                        <i class="fas fa-hard-hat"></i>
                    </div>
                    <h3 class="industry-solution-title">Construction</h3>
                    <p class="industry-solution-description">
                        Reliable logistics solutions for construction materials and equipment, including heavy-duty transportation and just-in-time delivery to construction sites.
                    </p>
                </div>
                
                <div class="industry-solution-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="industry-solution-icon">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <h3 class="industry-solution-title">Textiles</h3>
                    <p class="industry-solution-description">
                        Specialized logistics services for the textile industry, including fabric transportation, garment distribution, and retail supply chain management.
                    </p>
                </div>
            </div>
        </div>

        <!-- Technology Section -->
        <div class="technology-section">
            <div class="technology-content">
                <h2 class="section-title">Advanced <span class="brand-orange">Technology</span> Integration</h2>
                <p class="section-description">
                    At Arihant Transport, we leverage cutting-edge technology to enhance our logistics operations and provide superior service to our clients. Our technology-driven approach ensures transparency, efficiency, and reliability throughout the supply chain.
                </p>
                <div class="technology-features">
                    <div class="technology-feature">
                        <div class="feature-icon">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <h3>Real-time Tracking</h3>
                        <p>Monitor your shipments in real-time with our advanced GPS tracking system, providing accurate location updates and estimated arrival times.</p>
                    </div>
                    <div class="technology-feature">
                        <div class="feature-icon">
                            <i class="fas fa-tablet-alt"></i>
                        </div>
                        <h3>Mobile Applications</h3>
                        <p>Access shipment information, place orders, and communicate with our team on-the-go through our user-friendly mobile applications.</p>
                    </div>
                    <div class="technology-feature">
                        <div class="feature-icon">
                            <i class="fas fa-database"></i>
                        </div>
                        <h3>Inventory Management</h3>
                        <p>Efficiently manage your inventory with our advanced warehouse management system, providing real-time stock levels and automated reordering.</p>
                    </div>
                    <div class="technology-feature">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Analytics & Reporting</h3>
                        <p>Gain valuable insights into your supply chain performance with comprehensive analytics and customized reporting tools.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Benefits Section -->
        <div class="service-benefits">
            <div class="service-benefits-content">
                <h2 class="section-title">Why Choose Our <span class="brand-orange">Logistics</span> Services?</h2>
                <ul class="benefits-list">
                    <li>
                        <i class="fas fa-network-wired"></i>
                        <div>
                            <h3>Extensive Network</h3>
                            <p>Our widespread logistics network covers all major cities and industrial hubs across Gujarat and neighboring states.</p>
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-truck-moving"></i>
                        <div>
                            <h3>Modern Fleet</h3>
                            <p>We maintain a diverse and well-maintained fleet of vehicles to handle various types of cargo and delivery requirements.</p>
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-user-tie"></i>
                        <div>
                            <h3>Experienced Team</h3>
                            <p>Our team of logistics professionals brings years of industry experience and expertise to every project.</p>
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-handshake"></i>
                        <div>
                            <h3>Customized Solutions</h3>
                            <p>We understand that every business has unique logistics requirements, and we tailor our services accordingly.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="service-benefits-image">
                <img src="{{ asset('images/service1.jpg') }}" 
                     alt="Logistics Benefits" 
                     loading="lazy"
                     onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI2MDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjRjVGNUY1Ii8+CjxwYXRoIGQ9Ik0zMDAgMTUwTDI1MCAyMDBIMzUwTDMwMCAxNTBaIiBmaWxsPSIjRkY3QTAwIi8+Cjx0ZXh0IHg9IjMwMCIgeT0iMjUwIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSIjNjY2IiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTgiPkxvZ2lzdGljcyBCZW5lZml0czwvdGV4dD4KPC9zdmc+Cg=='">
            </div>
        </div>

        <!-- CTA Section -->
        <div class="service-cta">
            <div class="cta-content">
                <h2 class="cta-title">Ready to Optimize Your Supply Chain?</h2>
                <p class="cta-description">Contact us today to discuss your logistics requirements and discover how our solutions can benefit your business.</p>
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
    
    /* Logistics Services */
    .logistics-services {
        margin-bottom: 80px;
    }
    
    .logistics-services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }
    
    .logistics-service-card {
        background: #fff;
        border-radius: 8px;
        padding: 30px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
    }
    
    .logistics-service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    
    .logistics-service-icon {
        font-size: 2.5rem;
        color: #FF7A00;
        margin-bottom: 20px;
    }
    
    .logistics-service-title {
        font-size: 1.4rem;
        margin-bottom: 15px;
        color: #333;
    }
    
    .logistics-service-description {
        color: #666;
        margin-bottom: 20px;
        line-height: 1.6;
    }
    
    .logistics-service-features {
        list-style: none;
        padding: 0;
        margin: 0;
        margin-top: auto;
    }
    
    .logistics-service-features li {
        display: flex;
        align-items: flex-start;
        margin-bottom: 10px;
        color: #555;
    }
    
    .logistics-service-features li i {
        color: #28a745;
        margin-right: 10px;
        margin-top: 5px;
        flex-shrink: 0;
    }
    
    /* Industry Solutions */
    .industry-solutions {
        margin-bottom: 80px;
    }
    
    .industry-solutions-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }
    
    .industry-solution-card {
        background: #fff;
        border-radius: 8px;
        padding: 30px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        text-align: center;
    }
    
    .industry-solution-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    
    .industry-solution-icon {
        font-size: 2.5rem;
        color: #FF7A00;
        margin-bottom: 20px;
    }
    
    .industry-solution-title {
        font-size: 1.4rem;
        margin-bottom: 15px;
        color: #333;
    }
    
    .industry-solution-description {
        color: #666;
        line-height: 1.6;
    }
    
    /* Technology Section */
    .technology-section {
        background: #f8f9fa;
        padding: 60px;
        border-radius: 10px;
        margin-bottom: 80px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    }
    
    .technology-features {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }
    
    .technology-feature {
        text-align: center;
    }
    
    .feature-icon {
        width: 70px;
        height: 70px;
        background: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        color: #FF7A00;
        font-size: 1.8rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    }
    
    .technology-feature h3 {
        font-size: 1.3rem;
        margin-bottom: 10px;
        color: #333;
    }
    
    .technology-feature p {
        color: #666;
        line-height: 1.6;
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
        
        .technology-section {
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
        
        .cta-buttons {
            flex-direction: column;
            gap: 15px;
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
        
        .technology-section {
            padding: 30px 20px;
        }
    }
</style>

@endsection