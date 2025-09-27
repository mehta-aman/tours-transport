@extends('layouts.app')

@section('title', 'Tour Packages - Arihant Transport')

@section('content')

<!-- Service Hero Section -->
<section class="service-hero fullwidth-cover themed-bg">
    <div class="service-hero-bg">
        <img src="{{ asset('images/service3.jpg') }}" 
             alt="Tour Packages" 
             class="service-hero-img"
             loading="eager"
             onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTIwMCIgaGVpZ2h0PSI0MDAiIHZpZXdCb3g9IjAgMCAxMjAwIDQwMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjEyMDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjRjVGNUY1Ii8+CjxwYXRoIGQ9Ik02MDAgMTUwTDUwMCAyNTBINzAwTDYwMCAxNTBaIiBmaWxsPSIjRkY3QTAwIi8+Cjx0ZXh0IHg9IjYwMCIgeT0iMzAwIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSIjNjY2IiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMjQiPlRvdXIgUGFja2FnZXM8L3RleHQ+Cjwvc3ZnPg=='" />
    </div>
    <div class="service-hero-overlay"></div>
    <div class="service-hero-content">
        <h1 class="service-hero-title">Tour <span class="brand-orange">Packages</span></h1>
        <p class="service-hero-desc">
            Discover the beauty and culture of Gujarat with our carefully curated tour packages designed for every type of traveler.
        </p>
    </div>
</section>

<!-- Service Details Section -->
<section class="service-details-section">
    <div class="container">
        <div class="service-overview">
            <div class="service-overview-content">
                <h2 class="section-title">Explore Gujarat with Our <span class="brand-orange">Tour Packages</span></h2>
                <p class="section-description">
                    Arihant Transport offers comprehensive tour packages that showcase the rich heritage, vibrant culture, and natural beauty of Gujarat. From historical monuments to pristine beaches, our expertly designed itineraries ensure you experience the best of what this diverse state has to offer.
                </p>
                <div class="service-highlights">
                    <div class="highlight-item">
                        <div class="highlight-icon">
                            <i class="fas fa-route"></i>
                        </div>
                        <div class="highlight-content">
                            <h3>Curated Itineraries</h3>
                            <p>Our tour packages feature carefully planned itineraries that balance must-see attractions with hidden gems for an authentic experience.</p>
                        </div>
                    </div>
                    <div class="highlight-item">
                        <div class="highlight-icon">
                            <i class="fas fa-hotel"></i>
                        </div>
                        <div class="highlight-content">
                            <h3>Quality Accommodations</h3>
                            <p>Stay in comfortable, well-located hotels that provide the perfect base for your explorations.</p>
                        </div>
                    </div>
                    <div class="highlight-item">
                        <div class="highlight-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="highlight-content">
                            <h3>Expert Guides</h3>
                            <p>Our knowledgeable local guides bring each destination to life with fascinating insights and stories.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service-overview-image">
                <img src="{{ asset('images/service3.jpg') }}" 
                     alt="Gujarat Tour" 
                     loading="lazy"
                     onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDYwMCA0MDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI2MDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjRjVGNUY1Ii8+CjxwYXRoIGQ9Ik0zMDAgMTUwTDI1MCAyMDBIMzUwTDMwMCAxNTBaIiBmaWxsPSIjRkY3QTAwIi8+Cjx0ZXh0IHg9IjMwMCIgeT0iMjUwIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSIjNjY2IiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTgiPkd1amFyYXQgVG91cjwvdGV4dD4KPC9zdmc+Cg=='">
            </div>
        </div>

        <!-- Popular Tour Packages -->
        <div class="tour-packages">
            <h2 class="section-title">Our Popular <span class="brand-orange">Tour Packages</span></h2>
            <div class="tour-packages-grid">
                <div class="tour-package-card" data-aos="fade-up">
                    <div class="tour-package-image">
                        <img src="{{ asset('images/service1.jpg') }}" 
                             alt="Heritage Tour" 
                             loading="lazy"
                             onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDQwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI0MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjRjVGNUY1Ii8+CjxwYXRoIGQ9Ik0yMDAgMTAwTDE1MCAxNTBIMjUwTDIwMCAxMDBaIiBmaWxsPSIjRkY3QTAwIi8+Cjx0ZXh0IHg9IjIwMCIgeT0iMjAwIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSIjNjY2IiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTYiPkhlcml0YWdlIFRvdXI8L3RleHQ+Cjwvc3ZnPgo='">
                        <div class="tour-package-duration"><i class="far fa-clock"></i> 5 Days / 4 Nights</div>
                    </div>
                    <div class="tour-package-content">
                        <h3 class="tour-package-title">Heritage Tour of Gujarat</h3>
                        <p class="tour-package-description">
                            Explore the rich cultural heritage of Gujarat with visits to historical sites, ancient temples, and architectural marvels.
                        </p>
                        <div class="tour-package-highlights">
                            <h4>Highlights:</h4>
                            <ul>
                                <li><i class="fas fa-check-circle"></i> Explore the UNESCO World Heritage Site of Champaner-Pavagadh</li>
                                <li><i class="fas fa-check-circle"></i> Visit the magnificent Somnath Temple</li>
                                <li><i class="fas fa-check-circle"></i> Discover the step wells of Adalaj and Patan</li>
                                <li><i class="fas fa-check-circle"></i> Experience the living heritage of Ahmedabad's old city</li>
                            </ul>
                        </div>
                        <div class="tour-package-price">
                            <span>Starting from</span>
                            <strong>₹25,000</strong>
                            <span>per person</span>
                        </div>
                        <a href="{{ route('contact') }}" class="tour-package-btn">Book This Tour</a>
                    </div>
                </div>
                
                <div class="tour-package-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="tour-package-image">
                        <img src="{{ asset('images/service2.jpg') }}" 
                             alt="Wildlife Tour" 
                             loading="lazy"
                             onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDQwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI0MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjRjVGNUY1Ii8+CjxwYXRoIGQ9Ik0yMDAgMTAwTDE1MCAxNTBIMjUwTDIwMCAxMDBaIiBmaWxsPSIjRkY3QTAwIi8+Cjx0ZXh0IHg9IjIwMCIgeT0iMjAwIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSIjNjY2IiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTYiPldpbGRsaWZlIFRvdXI8L3RleHQ+Cjwvc3ZnPgo='">
                        <div class="tour-package-duration"><i class="far fa-clock"></i> 4 Days / 3 Nights</div>
                    </div>
                    <div class="tour-package-content">
                        <h3 class="tour-package-title">Wildlife Safari Tour</h3>
                        <p class="tour-package-description">
                            Experience the diverse wildlife of Gujarat with safari tours in national parks and wildlife sanctuaries.
                        </p>
                        <div class="tour-package-highlights">
                            <h4>Highlights:</h4>
                            <ul>
                                <li><i class="fas fa-check-circle"></i> Spot Asiatic lions at Gir National Park</li>
                                <li><i class="fas fa-check-circle"></i> Bird watching at Nal Sarovar Bird Sanctuary</li>
                                <li><i class="fas fa-check-circle"></i> Visit the Wild Ass Sanctuary in Little Rann of Kutch</li>
                                <li><i class="fas fa-check-circle"></i> Explore the biodiversity of Blackbuck National Park</li>
                            </ul>
                        </div>
                        <div class="tour-package-price">
                            <span>Starting from</span>
                            <strong>₹22,000</strong>
                            <span>per person</span>
                        </div>
                        <a href="{{ route('contact') }}" class="tour-package-btn">Book This Tour</a>
                    </div>
                </div>
                
                <div class="tour-package-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="tour-package-image">
                        <img src="{{ asset('images/service4.jpg') }}" 
                             alt="Rann of Kutch Tour" 
                             loading="lazy"
                             onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDQwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI0MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjRjVGNUY1Ii8+CjxwYXRoIGQ9Ik0yMDAgMTAwTDE1MCAxNTBIMjUwTDIwMCAxMDBaIiBmaWxsPSIjRkY3QTAwIi8+Cjx0ZXh0IHg9IjIwMCIgeT0iMjAwIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSIjNjY2IiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTYiPlJhbm4gb2YgS3V0Y2ggVG91cjwvdGV4dD4KPC9zdmc+Cg=='">
                        <div class="tour-package-duration"><i class="far fa-clock"></i> 6 Days / 5 Nights</div>
                    </div>
                    <div class="tour-package-content">
                        <h3 class="tour-package-title">Rann of Kutch Festival Tour</h3>
                        <p class="tour-package-description">
                            Experience the magical white desert and vibrant cultural festival of Rann Utsav in the Kutch region.
                        </p>
                        <div class="tour-package-highlights">
                            <h4>Highlights:</h4>
                            <ul>
                                <li><i class="fas fa-check-circle"></i> Witness the stunning white salt desert under moonlight</li>
                                <li><i class="fas fa-check-circle"></i> Experience the colorful Rann Utsav festival</li>
                                <li><i class="fas fa-check-circle"></i> Visit traditional craft villages and artisan communities</li>
                                <li><i class="fas fa-check-circle"></i> Explore the historic Bhuj city and its palaces</li>
                            </ul>
                        </div>
                        <div class="tour-package-price">
                            <span>Starting from</span>
                            <strong>₹30,000</strong>
                            <span>per person</span>
                        </div>
                        <a href="{{ route('contact') }}" class="tour-package-btn">Book This Tour</a>
                    </div>
                </div>
                
                <div class="tour-package-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="tour-package-image">
                        <img src="{{ asset('images/service1.jpg') }}" 
                             alt="Spiritual Tour" 
                             loading="lazy"
                             onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDQwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI0MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjRjVGNUY1Ii8+CjxwYXRoIGQ9Ik0yMDAgMTAwTDE1MCAxNTBIMjUwTDIwMCAxMDBaIiBmaWxsPSIjRkY3QTAwIi8+Cjx0ZXh0IHg9IjIwMCIgeT0iMjAwIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSIjNjY2IiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTYiPlNwaXJpdHVhbCBUb3VyPC90ZXh0Pgo8L3N2Zz4K='">
                        <div class="tour-package-duration"><i class="far fa-clock"></i> 7 Days / 6 Nights</div>
                    </div>
                    <div class="tour-package-content">
                        <h3 class="tour-package-title">Spiritual Gujarat Tour</h3>
                        <p class="tour-package-description">
                            Embark on a spiritual journey through Gujarat's most sacred temples, shrines, and religious sites.
                        </p>
                        <div class="tour-package-highlights">
                            <h4>Highlights:</h4>
                            <ul>
                                <li><i class="fas fa-check-circle"></i> Visit the revered Dwarkadheesh Temple in Dwarka</li>
                                <li><i class="fas fa-check-circle"></i> Experience the spiritual aura of Somnath Temple</li>
                                <li><i class="fas fa-check-circle"></i> Explore the Jain temples at Palitana and Girnar</li>
                                <li><i class="fas fa-check-circle"></i> Visit the Akshardham Temple in Gandhinagar</li>
                            </ul>
                        </div>
                        <div class="tour-package-price">
                            <span>Starting from</span>
                            <strong>₹35,000</strong>
                            <span>per person</span>
                        </div>
                        <a href="{{ route('contact') }}" class="tour-package-btn">Book This Tour</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Custom Tour Section -->
        <div class="custom-tour-section">
            <div class="custom-tour-content">
                <h2 class="section-title">Create Your <span class="brand-orange">Custom Tour</span></h2>
                <p class="section-description">
                    Don't see what you're looking for? We specialize in creating personalized tour packages tailored to your specific interests, timeframe, and budget. Whether you're planning a family vacation, a romantic getaway, or a group tour, our team can design the perfect itinerary for you.
                </p>
                <div class="custom-tour-features">
                    <div class="custom-tour-feature">
                        <div class="feature-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <h3>Flexible Duration</h3>
                        <p>Choose the length of your tour based on your availability and preferences.</p>
                    </div>
                    <div class="custom-tour-feature">
                        <div class="feature-icon">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <h3>Personalized Itinerary</h3>
                        <p>Select the destinations and attractions you want to visit.</p>
                    </div>
                    <div class="custom-tour-feature">
                        <div class="feature-icon">
                            <i class="fas fa-hotel"></i>
                        </div>
                        <h3>Accommodation Options</h3>
                        <p>Choose from a range of accommodation options to suit your budget and preferences.</p>
                    </div>
                    <div class="custom-tour-feature">
                        <div class="feature-icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <h3>Dining Preferences</h3>
                        <p>Customize your meal plans and dining experiences throughout your tour.</p>
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="custom-tour-btn">Request Custom Tour</a>
            </div>
        </div>

        <!-- Tour Services Section -->
        <div class="tour-services">
            <h2 class="section-title">What's <span class="brand-orange">Included</span> in Our Tour Packages</h2>
            <div class="tour-services-grid">
                <div class="tour-service-item" data-aos="fade-up">
                    <div class="tour-service-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <h3>Transportation</h3>
                    <p>Comfortable air-conditioned vehicles for all transfers and sightseeing as per the itinerary.</p>
                </div>
                
                <div class="tour-service-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="tour-service-icon">
                        <i class="fas fa-bed"></i>
                    </div>
                    <h3>Accommodation</h3>
                    <p>Stay in carefully selected hotels that offer comfort, cleanliness, and convenient locations.</p>
                </div>
                
                <div class="tour-service-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="tour-service-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3>Meals</h3>
                    <p>Daily breakfast and select meals as mentioned in the specific tour itinerary.</p>
                </div>
                
                <div class="tour-service-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="tour-service-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3>Tour Guide</h3>
                    <p>Professional, knowledgeable guides who provide insights into local history and culture.</p>
                </div>
                
                <div class="tour-service-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="tour-service-icon">
                        <i class="fas fa-ticket-alt"></i>
                    </div>
                    <h3>Entrance Fees</h3>
                    <p>Entry tickets to monuments, parks, and attractions as per the tour itinerary.</p>
                </div>
                
                <div class="tour-service-item" data-aos="fade-up" data-aos-delay="500">
                    <div class="tour-service-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>24/7 Support</h3>
                    <p>Round-the-clock assistance throughout your journey for a worry-free experience.</p>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="service-cta">
            <div class="cta-content">
                <h2 class="cta-title">Ready to Explore Gujarat?</h2>
                <p class="cta-description">Contact us today to book your tour package or request a custom itinerary tailored to your preferences.</p>
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
    
    /* Tour Packages */
    .tour-packages {
        margin-bottom: 80px;
    }
    
    .tour-packages-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(500px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }
    
    .tour-package-card {
        background: #fff;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .tour-package-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    
    .tour-package-image {
        position: relative;
        height: 250px;
        overflow: hidden;
    }
    
    .tour-package-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .tour-package-card:hover .tour-package-image img {
        transform: scale(1.05);
    }
    
    .tour-package-duration {
        position: absolute;
        bottom: 15px;
        left: 15px;
        background: rgba(255, 122, 0, 0.9);
        color: #fff;
        padding: 8px 15px;
        border-radius: 4px;
        font-size: 0.9rem;
        font-weight: 500;
    }
    
    .tour-package-content {
        padding: 25px;
    }
    
    .tour-package-title {
        font-size: 1.5rem;
        margin-bottom: 15px;
        color: #333;
    }
    
    .tour-package-description {
        color: #666;
        margin-bottom: 20px;
        line-height: 1.6;
    }
    
    .tour-package-highlights {
        margin-bottom: 25px;
    }
    
    .tour-package-highlights h4 {
        font-size: 1.1rem;
        margin-bottom: 15px;
        color: #444;
    }
    
    .tour-package-highlights ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .tour-package-highlights li {
        display: flex;
        align-items: flex-start;
        margin-bottom: 10px;
        color: #555;
        line-height: 1.5;
    }
    
    .tour-package-highlights li i {
        color: #28a745;
        margin-right: 10px;
        margin-top: 3px;
        flex-shrink: 0;
    }
    
    .tour-package-price {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 20px;
    }
    
    .tour-package-price span {
        color: #666;
        font-size: 0.9rem;
    }
    
    .tour-package-price strong {
        font-size: 1.8rem;
        color: #FF7A00;
        margin: 5px 0;
    }
    
    .tour-package-btn {
        display: block;
        width: 100%;
        padding: 12px 0;
        background: #FF7A00;
        color: #fff;
        text-align: center;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .tour-package-btn:hover {
        background: #e56e00;
        transform: translateY(-2px);
    }
    
    /* Custom Tour Section */
    .custom-tour-section {
        background: #f8f9fa;
        padding: 60px;
        border-radius: 10px;
        margin-bottom: 80px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    }
    
    .custom-tour-features {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 30px;
        margin: 40px 0;
    }
    
    .custom-tour-feature {
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
    
    .custom-tour-feature h3 {
        font-size: 1.3rem;
        margin-bottom: 10px;
        color: #333;
    }
    
    .custom-tour-feature p {
        color: #666;
        line-height: 1.6;
    }
    
    .custom-tour-btn {
        display: inline-block;
        padding: 15px 30px;
        background: #FF7A00;
        color: #fff;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        margin-top: 20px;
    }
    
    .custom-tour-btn:hover {
        background: #e56e00;
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    /* Tour Services */
    .tour-services {
        margin-bottom: 80px;
        text-align: center;
    }
    
    .tour-services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }
    
    .tour-service-item {
        background: #fff;
        border-radius: 8px;
        padding: 30px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .tour-service-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    
    .tour-service-icon {
        font-size: 2.5rem;
        color: #FF7A00;
        margin-bottom: 20px;
    }
    
    .tour-service-item h3 {
        font-size: 1.4rem;
        margin-bottom: 15px;
        color: #333;
    }
    
    .tour-service-item p {
        color: #666;
        line-height: 1.6;
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
        .service-overview {
            grid-template-columns: 1fr;
            gap: 40px;
        }
        
        .service-overview-image {
            order: -1;
        }
        
        .tour-packages-grid {
            grid-template-columns: 1fr;
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
        
        .custom-tour-section {
            padding: 40px 30px;
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
        
        .custom-tour-section {
            padding: 30px 20px;
        }
    }
</style>

@endsection