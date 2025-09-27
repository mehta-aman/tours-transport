@extends('layouts.app')

@section('title', 'About Us - Arihant Transport')

@section('content')

    <!-- About Hero Section -->
    <section class="about-hero">
        <div class="about-hero-bg">
            <img src="{{ asset('images/about-cover.jpg') }}" alt="About Arihant Transport" class="about-hero-img" />
            <div class="about-hero-overlay"></div>
        </div>
        <div class="about-hero-content">
            {{-- <div class="about-hero-badge" data-aos="fade-up" data-aos-delay="100">
                <i class="fas fa-building"></i>
                <span>Our Story</span>
            </div> --}}
            <h1 class="about-hero-title" data-aos="fade-up" data-aos-delay="200">
                About <span class="brand-orange">Arihant Transport</span>
            </h1>
            <p class="about-hero-desc" data-aos="fade-up" data-aos-delay="300">
                Built on trust, service, and partnerships—delivering excellence in logistics and transportation across
                Gujarat and beyond.
            </p>
            <div class="about-hero-stats" data-aos="fade-up" data-aos-delay="400">
                <div class="stat-item">
                    <span class="stat-number"  data-count="65" data-type="plus">0</span>
                    <span class="stat-label-white">Years Experience</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number"  data-count="50000" data-type="k">0</span>
                    <span class="stat-label-white">Deliveries</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number"  data-count="100" data-type="plus">0</span>
                    <span class="stat-label-white">Fleet Vehicles</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="our-story-section">
        <div class="container">
            <div class="story-wrapper">
                <div class="story-image" data-aos="fade-right" data-aos-delay="200">
                    <div class="image-container">
                        <img src="{{ asset('images/brand-story.jpg') }}" alt="Arihant Transport Story" />
                        <div class="image-overlay">
                            <div class="play-button">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="story-content" data-aos="fade-left" data-aos-delay="300">
                    <div class="section-badge">
                        <i class="fas fa-history"></i>
                        <span>OUR JOURNEY</span>
                    </div>
                    <h2 class="section-title">Our Brand Story</h2>
                    <p class="story-text">
                        Founded on the principles of trust, integrity, and excellence, Arihant Transport has grown into
                        Gujarat's premier logistics and transportation service provider. Our journey began with a simple
                        mission: to
                        deliver more than just goods – we deliver peace of mind.
                    </p>
                    <p class="story-text">
                        Over the years, through unwavering commitment and strong partnerships with leading industries, we
                        have
                        expanded our services across transport, cement trading, travel, and petrochemicals. Our dedicated
                        team,
                        state-of-the-art fleet, and customer-first mindset continue to drive our success story.
                    </p>
                    <div class="story-features">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Trusted by 500+ Companies</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>24/7 Customer Support</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Nationwide Coverage</span>
                        </div>
                    </div>
                    <a href="#contact" class="primary-btn">
                        <span>Get In Touch</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership Section -->
    <section class="leadership-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <div class="section-badge">
                    <i class="fas fa-users"></i>
                    <span>LEADERSHIP TEAM</span>
                </div>
                <h2 class="section-title">Meet Our <span class="brand-orange">Leadership</span></h2>
                <p class="section-desc">
                    Our leadership combines decades of experience with innovation, driving excellence in everything we do.
                </p>
            </div>

            <div class="leadership-grid">
                <div class="leader-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="leader-image">
                        <img src="{{ asset('images/owner1.jpg') }}" alt="Mr. Bhavesh Patel" />
                        <div class="leader-overlay">
                            <div class="social-links">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="leader-info">
                        <h3 class="leader-name">Mr. Bhavesh Patel</h3>
                        <p class="leader-position">Founder & CEO</p>
                        <p class="leader-desc">
                            With over 20 years of experience in logistics and transportation, Bhavesh has built Arihant
                            Transport into a trusted name in Gujarat's transport industry.
                        </p>
                        <div class="leader-achievements">
                            <span class="achievement">20+ Years Experience</span>
                            <span class="achievement">Industry Expert</span>
                        </div>
                    </div>
                </div>

                <div class="leader-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="leader-image">
                        <img src="{{ asset('images/owner2.jpg') }}" alt="Ms. Meena Shah" />
                        <div class="leader-overlay">
                            <div class="social-links">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="leader-info">
                        <h3 class="leader-name">Ms. Meena Shah</h3>
                        <p class="leader-position">Operations Head</p>
                        <p class="leader-desc">
                            Meena brings exceptional operational expertise and customer service excellence to ensure smooth
                            operations and client satisfaction.
                        </p>
                        <div class="leader-achievements">
                            <span class="achievement">Operations Expert</span>
                            <span class="achievement">Customer Focus</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Group Companies Section -->
    <section class="group-companies-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <div class="section-badge">
                    <i class="fas fa-sitemap"></i>
                    <span>OUR GROUP</span>
                </div>
                <h2 class="section-title">Our <span class="brand-orange">Group Companies</span></h2>
                <p class="section-desc">
                    Arihant Transport is part of a strong network of family-owned and partner firms, extending our reach and
                    capabilities throughout Gujarat.
                </p>
            </div>

            <div class="companies-grid">
                <div class="company-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="company-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3 class="company-name">Arihant Transport Co.</h3>
                    <p class="company-desc">Core transportation and logistics services</p>
                    <div class="company-features">
                        <span class="feature-tag">Transportation</span>
                        <span class="feature-tag">Logistics</span>
                    </div>
                </div>

                <div class="company-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="company-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h3 class="company-name">Kamla Logistic</h3>
                    <p class="company-desc">Specialized logistics and warehousing solutions</p>
                    <div class="company-features">
                        <span class="feature-tag">Warehousing</span>
                        <span class="feature-tag">Distribution</span>
                    </div>
                </div>

                <div class="company-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="company-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3 class="company-name">Arihant Petrochem</h3>
                    <p class="company-desc">Petrochemical and industrial solutions</p>
                    <div class="company-features">
                        <span class="feature-tag">Petrochemicals</span>
                        <span class="feature-tag">Industrial</span>
                    </div>
                </div>

                <div class="company-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="company-icon">
                        <i class="fas fa-route"></i>
                    </div>
                    <h3 class="company-name">Arihant Travels</h3>
                    <p class="company-desc">Travel and tourism services</p>
                    <div class="company-features">
                        <span class="feature-tag">Travel</span>
                        <span class="feature-tag">Tourism</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-header" data-aos="fade-up">
                <div class="section-badge">
                    <i class="fas fa-line-chart"></i>
                    <span>Numbers</span>
                </div>
                <h2 class="section-title">Our Journey in <span class="brand-orange">Numbers</span></h2>
                <p class="stats-desc">Two decades of excellence and growth in the transportation industry</p>
            </div>

            <div class="stats-grid">
                <div class="stat-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <div class="stat-number" data-count="50000">0</div>
                    <div class="stat-label">Shipments Delivered</div>
                    <div class="stat-desc">Successfully completed deliveries across India</div>
                </div>

                <div class="stat-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <div class="stat-number" data-count="65">0</div>
                    <div class="stat-label">Years of Experience</div>
                    <div class="stat-desc">Decades of trusted service excellence</div>
                </div>

                <div class="stat-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <div class="stat-number" data-count="100">0</div>
                    <div class="stat-label">Fleet Vehicles</div>
                    <div class="stat-desc">Modern and well-maintained vehicles</div>
                </div>

                <div class="stat-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="stat-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <div class="stat-number" data-count="300">0</div>
                    <div class="stat-label">Partnered Plants</div>
                    <div class="stat-desc">Strong partnerships with cement plants</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Office Locations Section -->
    <section class="office-locations-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <div class="section-badge">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>OUR OFFICES</span>
                </div>
                <h2 class="section-title">Our <span class="brand-orange">Office Locations</span></h2>
                <p class="section-desc">
                    Strategically located offices to serve you better across Gujarat and beyond.
                </p>
            </div>

            <div class="office-grid">
                <div class="office-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="office-header">
                        <div class="office-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="office-info">
                            <h3 class="office-name">Head Office</h3>
                            <p class="office-location">Gandhinagar, Gujarat</p>
                        </div>
                    </div>
                    <div class="office-details">
                        <div class="detail-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Sector 8, Gandhinagar, Gujarat 382007</span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-phone"></i>
                            <a href="tel:+916351505076">+91 63515 05076</a>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:contact@arihanttransport.com">contact@arihanttransport.com</a>
                        </div>
                    </div>
                    <a href="https://maps.app.goo.gl/obXWBkFWWVkAsQ1r6" target="_blank" class="primary-btn">
                        <i class="fas fa-directions"></i>
                        Get Directions
                    </a>
                </div>

                <div class="office-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="office-header">
                        <div class="office-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="office-info">
                            <h3 class="office-name">Regional Office</h3>
                            <p class="office-location">Ahmedabad, Gujarat</p>
                        </div>
                    </div>
                    <div class="office-details">
                        <div class="detail-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>A-124, Bijal Business Centre, Ahmedabad</span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-phone"></i>
                            <a href="tel:+9163514126661">+91 63514 12661</a>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:ahd@arihanttransport.com">ahd@arihanttransport.com</a>
                        </div>
                    </div>
                    <a href="https://maps.app.goo.gl/obXWBkFWWVkAsQ1r6" target="_blank" class="primary-btn">
                        <i class="fas fa-directions"></i>
                        Get Directions
                    </a>
                </div>
                <div class="office-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="office-header">
                        <div class="office-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="office-info">
                            <h3 class="office-name">Head Office</h3>
                            <p class="office-location">Gandhinagar, Gujarat</p>
                        </div>
                    </div>
                    <div class="office-details">
                        <div class="detail-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Sector 8, Gandhinagar, Gujarat 382007</span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-phone"></i>
                            <a href="tel:+916351505076">+91 63515 05076</a>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:contact@arihanttransport.com">contact@arihanttransport.com</a>
                        </div>
                    </div>
                    <a href="https://maps.app.goo.gl/obXWBkFWWVkAsQ1r6" target="_blank" class="primary-btn">
                        <i class="fas fa-directions"></i>
                        Get Directions
                    </a>
                </div>

                <div class="office-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="office-header">
                        <div class="office-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="office-info">
                            <h3 class="office-name">Regional Office</h3>
                            <p class="office-location">Ahmedabad, Gujarat</p>
                        </div>
                    </div>
                    <div class="office-details">
                        <div class="detail-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>A-124, Bijal Business Centre, Ahmedabad</span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-phone"></i>
                            <a href="tel:+9163514126661">+91 63514 12661</a>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:ahd@arihanttransport.com">ahd@arihanttransport.com</a>
                        </div>
                    </div>
                    <a href="https://maps.app.goo.gl/obXWBkFWWVkAsQ1r6" target="_blank" class="primary-btn">
                        <i class="fas fa-directions"></i>
                        Get Directions
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section class="partners-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <div class="section-badge">
                    <i class="fas fa-handshake"></i>
                    <span>OUR PARTNERS</span>
                </div>
                <h2 class="section-title">Trusted <span class="brand-orange">Partnerships</span></h2>
                <p class="section-desc">
                    Proud to be associated with industry leaders in construction, cement, and infrastructure.
                </p>
            </div>

            <div class="partners-content">
                <div class="partners-text" data-aos="fade-right" data-aos-delay="200">
                    <h3>Leading Industry Partners</h3>
                    <p>
                        We work with some of the biggest names in construction, cement, and infrastructure including
                        ADANI Ambuja, Hibond, Wonder Cement, Thakkar Infrastructure, and many more.
                    </p>
                    <h3>Transport & Logistics Network</h3>
                    <p>
                        Our extensive network includes Olympic Transport, Siddhi Vinayak Transport, Balkrishna Transport,
                        and other trusted logistics partners across Gujarat.
                    </p>
                </div>

                <div class="partners-marquee">
                    <div class="marquee-track">
                        <img src="{{ asset('images/ambuja-logo.png') }}" alt="Ambuja" />
                        <img src="{{ asset('images/adani-logo.png') }}" alt="Adani" />
                        <img src="{{ asset('images/hibond-logo.png') }}" alt="Hibond" />
                        <img src="{{ asset('images/wonder-cement-logo.png') }}" alt="Wonder Cement" />
                        <img src="{{ asset('images/thakkar-infra-logo.png') }}" alt="Thakkar Infrastructure" />
                        <img src="{{ asset('images/safal-goyal-logo.png') }}" alt="Safal Goyal Infrastructure" />
                        <img src="{{ asset('images/fci-gujarat-logo.png') }}" alt="FCI Gujarat" />
                        <!-- Repeat for smooth looping -->
                        <img src="{{ asset('images/ambuja-logo.png') }}" alt="Ambuja" />
                        <img src="{{ asset('images/adani-logo.png') }}" alt="Adani" />
                        <img src="{{ asset('images/hibond-logo.png') }}" alt="Hibond" />
                        <img src="{{ asset('images/wonder-cement-logo.png') }}" alt="Wonder Cement" />
                        <img src="{{ asset('images/thakkar-infra-logo.png') }}" alt="Thakkar Infrastructure" />
                        <img src="{{ asset('images/safal-goyal-logo.png') }}" alt="Safal Goyal Infrastructure" />
                        <img src="{{ asset('images/fci-gujarat-logo.png') }}" alt="FCI Gujarat" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* About Hero Section */
        .about-hero {
            position: relative;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            color: #fff;
        }

        .about-hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .about-hero-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.7);
            transition: transform 0.8s ease;
        }

        .about-hero:hover .about-hero-img {
            transform: scale(1.05);
        }

        .about-hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.7));
            z-index: 2;
        }

        .about-hero-content {
            position: relative;
            z-index: 3;
            text-align: center;
            max-width: 900px;
            padding: 0 2rem;
        }

        .about-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 0.8rem 1.5rem;
            border-radius: 25px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .about-hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .about-hero-desc {
            font-size: 1.3rem;
            line-height: 1.6;
            margin-bottom: 2.5rem;
            opacity: 0.95;
        }

        .about-hero-stats {
            display: flex;
            justify-content: center;
            gap: 3rem;
            flex-wrap: wrap;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            display: block;
            font-size: 2.5rem;
            font-weight: 700;
            color: #FF7A00;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 1rem;
            opacity: 0.9;
            font-weight: 500;
        }

        /* Our Story Section */
        .our-story-section {
            padding: 4rem 0;
            background: #fff;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .story-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .story-image {
            position: relative;
        }

        .image-container {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .image-container img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .image-overlay {
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
        }

        /* .image-container:hover .image-overlay {
            opacity: 1;
        } */

        .play-button {
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: #fff;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            transition: transform 0.3s ease;
        }

        .play-button:hover {
            transform: scale(1.1);
        }

        .story-content {
            padding-left: 2rem;
        }

        .section-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: linear-gradient(135deg, #FF7A00 0%, #FF9500 100%);
            color: #fff;
            padding: 0.6rem 1.2rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            letter-spacing: 1px;
            margin-bottom: 1.5rem;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #171e29;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .story-text {
            font-size: 1.1rem;
            line-height: 1.7;
            color: #666;
            margin-bottom: 1.5rem;
        }

        .story-features {
            margin: 2rem 0;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            margin-bottom: 1rem;
            font-size: 1rem;
            color: #555;
        }

        .feature-item i {
            color: #FF7A00;
            font-size: 1.2rem;
        }

        .story-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.8rem;
            background: linear-gradient(135deg, #FF7A00 0%, #FF9500 100%);
            color: #fff;
            padding: 1rem 2rem;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            margin-top: 1rem;
        }

        .story-btn:hover {
            background: linear-gradient(135deg, #e66a00 0%, #e68500 100%);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(255, 122, 0, 0.3);
        }

        /* Leadership Section */
        .leadership-section {
            padding: 4rem 0;
            background: #f8f9fa;
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-desc {
            font-size: 1.2rem;
            color: #666;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .leadership-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 3rem;
        }

        .leader-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .leader-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }

        .leader-image {
            position: relative;
            height: 300px;
            overflow: hidden;
        }

        .leader-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .leader-overlay {
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
        }

        .leader-card:hover .leader-overlay {
            opacity: 1;
        }

        .social-links {
            display: flex;
            gap: 1rem;
        }

        .social-links a {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 1.2rem;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .social-links a:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: scale(1.1);
        }

        .leader-info {
            padding: 2rem;
        }

        .leader-name {
            font-size: 1.5rem;
            font-weight: 700;
            color: #171e29;
            margin-bottom: 0.5rem;
        }

        .leader-position {
            color: #FF7A00;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .leader-desc {
            color: #666;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .leader-achievements {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
        }

        .achievement {
            background: #f0f8ff;
            color: #1976D2;
            padding: 0.3rem 0.8rem;
            border-radius: 15px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        /* Group Companies Section */
        .group-companies-section {
            padding: 4rem 0;
            background: #fff;
        }

        .companies-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .company-card {
            background: #fff;
            border-radius: 15px;
            padding: 2.5rem 2rem;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 1px solid #f0f0f0;
        }

        .company-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
            border-color: #FF7A00;
        }

        .company-icon {
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

        .company-name {
            font-size: 1.3rem;
            font-weight: 700;
            color: #171e29;
            margin-bottom: 1rem;
        }

        .company-desc {
            color: #666;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .company-features {
            display: flex;
            gap: 0.5rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .feature-tag {
            background: #f0f8ff;
            color: #1976D2;
            padding: 0.3rem 0.8rem;
            border-radius: 12px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        /* Stats Section */
        .stats-section {
            padding: 4rem 0;
            background: linear-gradient(135deg, #1976D2 0%, #FF7A00 100%);
            color: #fff;
        }

        .stats-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .stats-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .stats-desc {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 2.5rem 2rem;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: transform 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-icon {
            width: 70px;
            height: 70px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 1.8rem;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: #fff;
        }

        .stat-label {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .stat-desc {
            font-size: 0.9rem;
            opacity: 0.8;
        }

        /* Office Locations Section */
        .office-locations-section {
            padding: 4rem 0;
            background: #f8f9fa;
        }

        .office-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .office-card {
            background: #fff;
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .office-card:hover {
            transform: translateY(-5px);
        }

        .office-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .office-icon {
            width: 150px;
            height: 60px;
            background: linear-gradient(135deg, #FF7A00 0%, #FF9500 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: #fff;
        }

        .office-name {
            font-size: 1.3rem;
            font-weight: 700;
            color: #171e29;
            margin-bottom: 0.3rem;
        }

        .office-location {
            color: #666;
            font-size: 1rem;
        }

        .office-details {
            margin-bottom: 2rem;
        }

        .detail-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
            color: #555;
        }

        .detail-item i {
            color: #FF7A00;
            width: 20px;
        }

        .detail-item a {
            color: #1976D2;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .detail-item a:hover {
            color: #FF7A00;
        }

        .office-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: linear-gradient(135deg, #FF7A00 0%, #FF9500 100%);
            color: #fff;
            padding: 0.8rem 1.5rem;
            border-radius: 20px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            width: 100%;
            justify-content: center;
        }

        .office-btn:hover {
            background: linear-gradient(135deg, #e66a00 0%, #e68500 100%);
            transform: translateY(-2px);
        }

        /* Partners Section */
        .partners-section {
            padding: 4rem 0;
            background: #fff;
        }

        .partners-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .partners-text h3 {
            color: #FF7A00;
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .partners-text p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 2rem;
        }

        .partners-marquee {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 2rem 0;
            overflow: hidden;
        }

        .marquee-track {
            display: flex;
            gap: 3rem;
            animation: marquee-scroll 10s linear infinite;
        }

        .marquee-track img {
            height: 60px;
            filter: grayscale(20%);
            opacity: 0.7;
            transition: all 0.3s ease;
            flex-shrink: 0;
        }

        .marquee-track img:hover {
            filter: grayscale(0%);
            opacity: 1;
            transform: scale(1.1);
        }

        @keyframes marquee-scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .container {
                padding: 0 1.5rem;
            }

            .about-hero-title {
                font-size: 3rem;
            }

            .section-title {
                font-size: 2.2rem;
            }

            .story-wrapper {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .leadership-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 2rem;
            }

            .companies-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 2rem;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 2rem;
            }

            .office-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
        }

        @media (max-width: 768px) {
            .our-story-section {
                padding: 2rem 0;
            }

            .container {
                padding: 0 1rem;
            }

            .about-hero {
                height: 400px;
            }

            .about-hero-title {
                font-size: 2.2rem;
                line-height: 1.3;
            }

            .about-hero-desc {
                font-size: 1rem;
            }

            .about-hero-badge {
                padding: 0.6rem 1.2rem;
                font-size: 0.8rem;
            }

            .about-hero-stats {
                gap: 1.5rem;
                flex-wrap: wrap;
            }

            .stat-number {
                font-size: 2rem;
            }

            .stat-label {
                font-size: 0.9rem;
            }

            .section-title {
                font-size: 2rem;
                line-height: 1.3;
            }

            .section-desc {
                font-size: 1rem;
            }

            .story-wrapper {
                grid-template-columns: 1fr;
                gap: 2rem;
            }


            .story-content {
                padding-left: 0;
            }

            .story-title {
                font-size: 1.8rem;
            }

            .story-text {
                font-size: 0.95rem;
            }

            .leadership-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .leader-card {
                padding: 1.5rem;
            }

            .leader-name {
                font-size: 1.3rem;
            }

            .leader-position {
                font-size: 1rem;
            }

            .leader-desc {
                font-size: 0.9rem;
            }

            .companies-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .company-card {
                padding: 1.5rem;
            }

            .company-name {
                font-size: 1.2rem;
            }

            .company-desc {
                font-size: 0.9rem;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 1.5rem;
            }

            .stat-card {
                padding: 1.5rem;
            }

            .stat-number {
                font-size: 2.5rem;
            }

            .stat-label {
                font-size: 1rem;
            }

            .stat-desc {
                font-size: 0.9rem;
            }

            .office-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .office-card {
                padding: 1.5rem;
            }

            .office-name {
                font-size: 1.2rem;
            }

            .partners-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .partners-text h3 {
                font-size: 1.3rem;
            }

            .partners-text p {
                font-size: 0.95rem;
            }

            .marquee-track {
                gap: 2rem;
            }

            .marquee-track img {
                height: 40px;
            }
        }

        @media (max-width: 768px) {
            .about-hero {
                position: relative !important;
                height: auto !important;
                min-height: 450px;
                display: block;
                align-items: unset !important;
                justify-content: unset !important;
                overflow: hidden;
            }

            .about-hero-content {
                position: relative !important;
                z-index: 3;
                text-align: center;
                max-width: 100%;
                margin: 0 auto;
                padding: 2rem 1rem 1.5rem 1rem !important;
                box-sizing: border-box;
            }

            .about-hero-content span,
            /* Adjust specific span if needed */
            .about-hero-content p,
            .about-hero-content h1 {
                font-size: 1rem;
            }

            .about-hero-bg,
            .about-hero-img,
            .about-hero-overlay {
                position: absolute !important;
                top: 0;
                left: 0;
                width: 100vw;
                height: 100% !important;
                z-index: 1;
            }

            /* Optional: Prevent horizontal overflow on mobile */
            html,
            body {
                overflow-x: hidden !important;
                max-width: 100vw !important;
            }
        }


        @media (max-width: 480px) {
            .container {
                padding: 0 0.8rem;
            }

            .about-hero {
                height: 350px;
            }

            .about-hero-title {
                font-size: 1.8rem;
                line-height: 1.2;
            }

            .about-hero-desc {
                font-size: 0.95rem;
            }

            .about-hero-badge {
                padding: 0.5rem 1rem;
                font-size: 0.75rem;
            }

            .about-hero-stats {
                flex-direction: column;
                gap: 1rem;
            }

            .stat-number {
                font-size: 1.8rem;
            }

            .stat-label {
                font-size: 0.8rem;
            }

            .section-title {
                font-size: 1.6rem;
            }

            .section-desc {
                font-size: 0.95rem;
            }


            .story-title {
                font-size: 1.5rem;
            }

            .story-text {
                font-size: 0.9rem;
            }

            .story-features {
                gap: 0.8rem;
            }

            .feature-item {
                font-size: 0.9rem;
            }

            .leader-card {
                padding: 1.2rem;
            }

            .leader-name {
                font-size: 1.2rem;
            }

            .leader-position {
                font-size: 0.95rem;
            }

            .leader-desc {
                font-size: 0.85rem;
            }

            .company-card {
                padding: 1.2rem;
            }

            .company-name {
                font-size: 1.1rem;
            }

            .company-desc {
                font-size: 0.85rem;
            }

            .stats-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .stat-card {
                padding: 1.2rem;
            }

            .stat-number {
                font-size: 2rem;
            }

            .stat-label {
                font-size: 0.95rem;
            }

            .stat-desc {
                font-size: 0.85rem;
            }

            .office-card {
                padding: 1.2rem;
            }

            .office-name {
                font-size: 1.1rem;
            }

            .detail-item {
                font-size: 0.9rem;
            }

            .partners-text h3 {
                font-size: 1.2rem;
            }

            .partners-text p {
                font-size: 0.9rem;
            }

            .marquee-track img {
                height: 35px;
            }
        }

        @media (max-width: 360px) {
            .container {
                padding: 0 0.5rem;
            }

            .about-hero-title {
                font-size: 1.6rem;
            }

            .section-title {
                font-size: 1.4rem;
            }

            .story-title {
                font-size: 1.3rem;
            }

            .leader-card,
            .company-card,
            .stat-card,
            .office-card {
                padding: 1rem 0.8rem;
            }

            .leader-name,
            .company-name,
            .office-name {
                font-size: 1rem;
            }

            .stat-number {
                font-size: 1.8rem;
            }
        }

        .brand-orange {
            color: #FF7A00;
        }

        .brand-blue {
            color: #1976D2;
        }
    </style>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Counter Animation for Stats Section
    const counters = document.querySelectorAll('.stat-number');

    function animateCounter(counter) {
        const target = Number(counter.getAttribute('data-count'));
        const duration = 2000;
        const steps = Math.floor(duration / 16);
        const increment = target / steps;
        let current = 0;

        function updateCounter() {
            current += increment;
            if (current < target) {
                counter.textContent = Math.floor(current).toLocaleString();
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target.toLocaleString();
            }
        }
        updateCounter();
    }

    // Animate when visible using IntersectionObserver, fallback on load
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        counters.forEach(counter => observer.observe(counter));
    } else {
        counters.forEach(counter => animateCounter(counter));
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });
});

</script>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    function formatCount(count, type) {
        if (type === 'k') {
            // Show K suffix, rounding as needed
            return (Math.round((count / 100) ) / 10).toFixed(1).replace('.0','') + 'K';
        }
        if (type === 'plus') {
            return count.toLocaleString() + '+';
        }
        return count.toLocaleString();
    }

    function animateCounter(counter) {
        const target = Number(counter.getAttribute('data-count'));
        const type = counter.getAttribute('data-type') || '';
        if(isNaN(target) || target <= 0) {
            counter.textContent = type === 'k' ? '0K' : (type === 'plus' ? '0+' : '0');
            return;
        }
        const duration = 2000;
        const steps = Math.floor(duration / 16);
        const increment = target / steps;
        let current = 0;

        function updateCounter() {
            current += increment;
            if (current < target) {
                counter.textContent = formatCount(Math.floor(current), type);
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = formatCount(target, type);
            }
        }
        updateCounter();
    }

    const counters = document.querySelectorAll('.stat-number');
    if ('IntersectionObserver' in window && counters.length) {
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        counters.forEach(counter => observer.observe(counter));
    } else {
        counters.forEach(counter => animateCounter(counter));
    }

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });
});
</script>
@endpush


@endsection