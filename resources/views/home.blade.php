@extends('layouts.app')

@section('title', 'Home - Arihant Transport')

@section('content')
        
<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-bg" id="hero-bg">
        <!-- Background images will be handled by JavaScript -->
    </div>
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <div class="" data-aos="fade-up" data-aos-delay="100">
            {{-- <i class="fas fa-truck"></i> --}}
            <span class="span1">Trusted Transport & Travel</span>
        </div>
        <h1 class="hero-title" data-aos="fade-up" data-aos-delay="200">
            Your Complete <span class="brand-orange">Transport</span> & 
            <span class="brand-blue">Travel</span> Solution
        </h1>
        <p class="hero-desc" data-aos="fade-up" data-aos-delay="300">
            From heavy-duty transport trucks to luxury car rentals with driver, and curated India tour packages - 
            we provide comprehensive transportation and travel services across the nation.
        </p>
        <div class="hero-buttons" data-aos="fade-up" data-aos-delay="400">
            <a href="#services" class="hero-btn primary">Explore Services</a>
            <a href="#contact" class="hero-btn secondary">Get Quote</a>
        </div>
        <div class="hero-stats" data-aos="fade-up" data-aos-delay="500">
            <div class="stat-item">
                <span class="stat-number">22+</span>
                <span class="stat-label-white ">Years Experience</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">100+</span>
                <span class="stat-label-white">Fleet Vehicles</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">50K+</span>
                <span class="stat-label-white">Happy Customers</span>
            </div>
        </div>
    </div>
</section>

<!-- Business Highlights Section -->
<section class="business-highlights">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <div class="section-badge">
                <i class="fas fa-star"></i>
                <span>OUR BUSINESS</span>
        </div>
            <h2 class="section-title">Comprehensive <span class="brand-orange">Transport & Travel</span> Solutions</h2>
            <p class="section-desc">
                From industrial transport to leisure travel, we cover all your transportation needs with professional service and modern fleet.
            </p>
        </div>
        
        <div class="highlights-grid">
            <!-- Transport Trucks -->
            <div class="highlight-card" data-aos="fade-up" data-aos-delay="100">
                <div class="highlight-icon">
                    <i class="fas fa-truck"></i>
    </div>
                <h3 class="highlight-title">Heavy Transport Trucks</h3>
                <p class="highlight-desc">
                    Professional fleet of heavy-duty trucks for cargo, cement, and industrial transportation across India.
                </p>
                <ul class="highlight-features">
                    <li><i class="fas fa-check"></i> Cement & Cargo Transport</li>
                    <li><i class="fas fa-check"></i> Industrial Logistics</li>
                    <li><i class="fas fa-check"></i> Nationwide Coverage</li>
                    <li><i class="fas fa-check"></i> 24/7 Support</li>
                </ul>
                <a href="#contact" class="primary-btn">Get Transport Quote</a>
            </div>
            
            <!-- Car Rentals with Driver -->
            <div class="highlight-card" data-aos="fade-up" data-aos-delay="200">
                <div class="highlight-icon">
                    <i class="fas fa-car"></i>
                </div>
                <h3 class="highlight-title">Car Rentals with Driver</h3>
                <p class="highlight-desc">
                    Premium car rental service with professional drivers for business trips, airport transfers, and city tours.
                </p>
                <ul class="highlight-features">
                    <li><i class="fas fa-check"></i> Professional Drivers</li>
                    <li><i class="fas fa-check"></i> Luxury & Economy Cars</li>
                    <li><i class="fas fa-check"></i> Airport Transfers</li>
                    <li><i class="fas fa-check"></i> City & Intercity Tours</li>
                </ul>
                <a href="#contact" class="primary-btn">Book Car Rental</a>
                </div>
            
            <!-- Travel & Tours -->
            <div class="highlight-card" data-aos="fade-up" data-aos-delay="300">
                <div class="highlight-icon">
                    <i class="fas fa-map-marked-alt"></i>
                </div>
                <h3 class="highlight-title">Travel & Tour Packages</h3>
                <p class="highlight-desc">
                    Curated tour packages across India with comfortable transportation, accommodation, and guided experiences.
                </p>
                <ul class="highlight-features">
                    <li><i class="fas fa-check"></i> All India Tour Packages</li>
                    <li><i class="fas fa-check"></i> Religious & Pilgrimage Tours</li>
                    <li><i class="fas fa-check"></i> Adventure & Leisure Tours</li>
                    <li><i class="fas fa-check"></i> Customized Itineraries</li>
                </ul>
                <a href="#contact" class="primary-btn">Explore Tours</a>
                </div>
            </div>
        </div>
    </section>

<!-- Services Section -->
<section class="services-section" id="services">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <div class="section-badge">
                <i class="fas fa-cogs"></i>
                <span>OUR SERVICES</span>
            </div>
            <h2 class="section-title">Complete <span class="brand-orange">Transportation</span> Services</h2>
            <p class="section-desc">
                From logistics to leisure, we provide end-to-end transportation solutions for all your needs.
        </p>
    </div>
        
        <div class="services-grid">
            <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                <div class="service-image">
                    <x-optimized-image 
                        src="images/service1.jpg" 
                        alt="Export & Import Service"
                        width="400"
                        height="250"
                        priority="true"
                    />
                    <div class="service-overlay">
                        <div class="service-icon">
                            <i class="fas fa-ship"></i>
                        </div>
                    </div>
                </div>
                <div class="service-content">
                    <h3 class="service-title">Export & Import Services</h3>
                    <p class="service-desc">Complete international shipping solutions with customs clearance and documentation.</p>
                    <a href="{{ route('services') }}" class="service-btn">Learn More</a>
                </div>
            </div>
            
            <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                <div class="service-image">
                    <img src="{{ asset('images/service2.jpg') }}" alt="Port Logistics">
                    <div class="service-overlay">
                        <div class="service-icon">
                            <i class="fas fa-anchor"></i>
                        </div>
                    </div>
                </div>
                <div class="service-content">
                    <h3 class="service-title">Port Logistics</h3>
                    <p class="service-desc">Specialized port handling services including container management and cargo handling.</p>
                    <a href="{{ route('services') }}" class="service-btn">Learn More</a>
                </div>
            </div>
            
            <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                <div class="service-image">
                    <img src="{{ asset('images/service3.jpg') }}" alt="Warehousing">
                    <div class="service-overlay">
                        <div class="service-icon">
                            <i class="fas fa-warehouse"></i>
                        </div>
                    </div>
                </div>
                <div class="service-content">
                    <h3 class="service-title">Warehousing & Storage</h3>
                    <p class="service-desc">Secure storage facilities with modern infrastructure and inventory management.</p>
                    <a href="{{ route('services') }}" class="service-btn">Learn More</a>
                </div>
            </div>
            
            <div class="service-card" data-aos="fade-up" data-aos-delay="400">
                <div class="service-image">
                    <img src="{{ asset('images/service4.jpg') }}" alt="Fleet Management">
                    <div class="service-overlay">
                        <div class="service-icon">
                            <i class="fas fa-truck"></i>
                        </div>
                    </div>
                </div>
                <div class="service-content">
                    <h3 class="service-title">Fleet Management</h3>
                    <p class="service-desc">Complete fleet solutions with vehicle tracking, maintenance, and route optimization.</p>
                    <a href="{{ route('services') }}" class="service-btn">Learn More</a>
                </div>
            </div>
            
            <div class="service-card" data-aos="fade-up" data-aos-delay="500">
                <div class="service-image">
                    <img src="{{ asset('images/service5.jpg') }}" alt="Cement Delivery">
                    <div class="service-overlay">
                        <div class="service-icon">
                            <i class="fas fa-industry"></i>
                        </div>
                    </div>
                </div>
                <div class="service-content">
                    <h3 class="service-title">Cement Delivery</h3>
                    <p class="service-desc">Specialized cement transportation with bulk carriers and quality assurance.</p>
                    <a href="{{ route('services') }}" class="service-btn">Learn More</a>
                </div>
            </div>
            
            <div class="service-card" data-aos="fade-up" data-aos-delay="600">
                <div class="service-image">
                    <img src="{{ asset('images/service6.jpg') }}" alt="Goods Transportation">
                    <div class="service-overlay">
                        <div class="service-icon">
                            <i class="fas fa-boxes"></i>
                        </div>
                    </div>
                </div>
                <div class="service-content">
                    <h3 class="service-title">Goods Transportation</h3>
                    <p class="service-desc">Reliable goods transportation across India with various vehicle types.</p>
                    <a href="{{ route('services') }}" class="service-btn">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tour Packages Section -->
<section class="tour-packages-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <div class="section-badge">
                <i class="fas fa-map-marked-alt"></i>
                <span>TOUR PACKAGES</span>
            </div>
            <h2 class="section-title">Explore <span class="brand-orange">India</span> with Us</h2>
            <p class="section-desc">
                Discover the beauty of India with our carefully crafted tour packages, comfortable transportation, and expert guidance.
            </p>
        </div>
        
        <div class="packages-grid">
            <div class="package-card" data-aos="fade-up" data-aos-delay="100">
                <div class="package-image">
                    <img src="{{ asset('images/slide1.jpg') }}" alt="Golden Triangle Tour">
                    <div class="package-badge">Popular</div>
                </div>
                <div class="package-content">
                    <h3 class="package-title">Golden Triangle Tour</h3>
                    <p class="package-desc">Delhi - Agra - Jaipur with comfortable transport and guided sightseeing.</p>
                    <div class="package-features">
                        <span class="feature"><i class="fas fa-clock"></i> 7 Days</span>
                        <span class="feature"><i class="fas fa-users"></i> 2-8 People</span>
                        <span class="feature"><i class="fas fa-star"></i> 4.8 Rating</span>
                    </div>
                    <div class="package-price">
                        <span class="price">₹25,000</span>
                        <span class="per-person">per person</span>
                    </div>
                    <a href="#contact" class="primary-btn">Book Now</a>
                </div>
            </div>
            
            <div class="package-card" data-aos="fade-up" data-aos-delay="200">
                <div class="package-image">
                    <img src="{{ asset('images/slide2.jpg') }}" alt="Gujarat Heritage Tour">
                    <div class="package-badge">Heritage</div>
                </div>
                <div class="package-content">
                    <h3 class="package-title">Gujarat Heritage Tour</h3>
                    <p class="package-desc">Explore the rich heritage of Gujarat with visits to historical sites and temples.</p>
                    <div class="package-features">
                        <span class="feature"><i class="fas fa-clock"></i> 5 Days</span>
                        <span class="feature"><i class="fas fa-users"></i> 2-6 People</span>
                        <span class="feature"><i class="fas fa-star"></i> 4.9 Rating</span>
                    </div>
                    <div class="package-price">
                        <span class="price">₹18,000</span>
                        <span class="per-person">per person</span>
                    </div>
                    <a href="#contact" class="primary-btn">Book Now</a>
                </div>
            </div>
            
            <div class="package-card" data-aos="fade-up" data-aos-delay="300">
                <div class="package-image">
                    <img src="{{ asset('images/slide3.jpg') }}" alt="Rajasthan Royal Tour">
                    <div class="package-badge">Luxury</div>
                </div>
                <div class="package-content">
                    <h3 class="package-title">Rajasthan Royal Tour</h3>
                    <p class="package-desc">Experience the royal heritage of Rajasthan with luxury accommodation and transport.</p>
                    <div class="package-features">
                        <span class="feature"><i class="fas fa-clock"></i> 10 Days</span>
                        <span class="feature"><i class="fas fa-users"></i> 2-4 People</span>
                        <span class="feature"><i class="fas fa-star"></i> 4.7 Rating</span>
                    </div>
                    <div class="package-price">
                        <span class="price">₹45,000</span>
                        <span class="per-person">per person</span>
                    </div>
                    <a href="#contact" class="primary-btn">Book Now</a>
                </div>
            </div>
        </div>
        
        <div class="packages-cta" data-aos="fade-up" data-aos-delay="400">
            <h3>Custom Tour Packages Available</h3>
            <p>We can create personalized tour packages based on your preferences, budget, and travel dates.</p>
            <a href="#contact" class="cta-btn">
                <i class="fas fa-phone"></i>
                Call for Custom Package
            </a>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-choose-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <div class="section-badge">
                <i class="fas fa-heart"></i>
                <span>WHY CHOOSE US</span>
            </div>
            <h2 class="section-title">Why Choose <span class="brand-orange">Arihant Transport</span></h2>
            <p class="section-desc">
                With over two decades of experience, we provide reliable, safe, and comfortable transportation solutions.
            </p>
        </div>
        
        <div class="features-grid">
            <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
            <div class="feature-icon">
                    <i class="fas fa-shield-alt"></i>
            </div>
                <h3 class="feature-title">Safe & Reliable</h3>
                <p class="feature-desc">Your safety is our priority. All vehicles are regularly maintained and drivers are professionally trained.</p>
        </div>
            
            <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-icon">
                    <i class="fas fa-clock"></i>
            </div>
                <h3 class="feature-title">On-Time Service</h3>
                <p class="feature-desc">We understand the importance of punctuality and ensure timely pickups and deliveries.</p>
        </div>
            
            <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
            <div class="feature-icon">
                    <i class="fas fa-headset"></i>
            </div>
                <h3 class="feature-title">24/7 Support</h3>
                <p class="feature-desc">Round-the-clock customer support to address your queries and provide real-time updates.</p>
            </div>
            
            <div class="feature-card" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-icon">
                    <i class="fas fa-rupee-sign"></i>
                </div>
                <h3 class="feature-title">Competitive Pricing</h3>
                <p class="feature-desc">Best-in-class services at competitive rates without compromising on quality and safety.</p>
            </div>
            
            <div class="feature-card" data-aos="fade-up" data-aos-delay="500">
                <div class="feature-icon">
                    <i class="fas fa-map-marked-alt"></i>
                </div>
                <h3 class="feature-title">Nationwide Coverage</h3>
                <p class="feature-desc">Extensive network covering all major cities and tourist destinations across India.</p>
            </div>
            
            <div class="feature-card" data-aos="fade-up" data-aos-delay="600">
            <div class="feature-icon">
                    <i class="fas fa-car"></i>
                </div>
                <h3 class="feature-title">Modern Fleet</h3>
                <p class="feature-desc">Well-maintained fleet of modern vehicles ranging from luxury cars to heavy-duty trucks.</p>
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
            <p class="section-desc">Two decades of excellence and growth in transportation and travel industry</p>
        </div>
        
        <div class="stats-grid">
            <div class="stat-card" data-aos="fade-up" data-aos-delay="100">
                <div class="stat-icon">
                    <i class="fas fa-shipping-fast"></i>
                </div>
                <div class="stat-number" data-count="50000">0</div>
                <div class="stat-label">Deliveries Completed</div>
                <div class="stat-desc">Successfully completed deliveries across India</div>
            </div>
            
            <div class="stat-card" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <div class="stat-number" data-count="22">0</div>
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
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-number" data-count="10000">0</div>
                <div class="stat-label">Happy Customers</div>
                <div class="stat-desc">Satisfied customers across India</div>
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
            <h2 class="section-title">Trusted by <span class="brand-orange">Industry Leaders</span></h2>
            <p class="section-desc">
                We are proud to be associated with leading companies in construction, cement, and infrastructure.
            </p>
        </div>
        
        <div class="partners-marquee" data-aos="fade-up" data-aos-delay="200">
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
</section>

<!-- CTA Section -->
<section class="cta-section" id="contact">
    <div class="container">
        <div class="cta-content" data-aos="fade-up">
            <h2 class="cta-title">Ready to Start Your <span class="brand-orange">Journey</span>?</h2>
            <p class="cta-desc">
                Whether you need transport trucks, car rentals with driver, or tour packages across India, 
                we're here to provide the best service. Get in touch for a personalized quote.
            </p>
            <div class="cta-buttons">
                <a href="tel:+916351505076" class="cta-btn primary">
                    <i class="fas fa-phone"></i>
                    Call Now: +91 63515 05076
                </a>
                <a href="{{ route('contact') }}" class="cta-btn secondary">
                    <i class="fas fa-envelope"></i>
                    Send Message
                </a>
            </div>
        </div>
    </div>
</section>

@endsection

<style>
/* Hero Section */
.hero-section {
    position: relative;
    /* max-height: 1200px; */
    display: flex;
    align-items: center;
    justify-content: center;
    /* overflow: hidden; */
    color: #fff;
}

.color-white{
    color: #f0f0f0; !important
}

.hero-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
    background: #222 center center/cover no-repeat;
    transition: background-image 0.8s cubic-bezier(0.4, 0.05, 0.8, 1);
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.7));
    z-index: 2;
}

.hero-content {
    /* position: relative; */
    z-index: 3;
    text-align: center;
    max-width: 900px;
    margin: 0;
    padding: 0 2rem;
}

.hero-badge {
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

.hero-title {
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    line-height: 1.2;
}

.hero-desc {
    font-size: 1.3rem;
    line-height: 1.6;
    margin-bottom: 2.5rem;
    opacity: 0.95;
}

.hero-buttons {
    display: flex;
    gap: 1rem;
    justify-content: center;
    margin-bottom: 3rem;
    flex-wrap: wrap;
}

.hero-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 1rem 2rem;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    font-size: 1.1rem;
    transition: all 0.3s ease;
}

.hero-btn.primary {
    background: linear-gradient(135deg, #FF7A00 0%, #FF9500 100%);
    color: #fff;
    border: none;
}

.hero-btn.primary:hover {
    background: linear-gradient(135deg, #e66a00 0%, #e68500 100%);
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(255, 122, 0, 0.3);
}

.hero-btn.secondary {
    background: transparent;
    color: #fff;
    border: 2px solid #fff;
}

.hero-btn.secondary:hover {
    background: #fff;
    color: #1976D2;
}

.hero-stats {
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

/* Business Highlights Section */
.business-highlights {
    padding: 4rem 0;
    background: #fff;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
}

.section-header {
    text-align: center;
    margin-bottom: 4rem;
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

.section-desc {
    font-size: 1.2rem;
    color: #666;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}

.highlights-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
}

.highlight-card {
    background: #fff;
    border-radius: 20px;
    padding: 2.5rem;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: 1px solid #f0f0f0;
}

.highlight-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
}

.highlight-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #FF7A00 0%, #FF9500 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
    font-size: 2rem;
    color: #fff;
}

.highlight-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #171e29;
    margin-bottom: 1rem;
}

.highlight-desc {
    color: #666;
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

.highlight-features {
    list-style: none;
    padding: 0;
    margin-bottom: 2rem;
}

.highlight-features li {
    display: flex;
    align-items: center;
    gap: 0.8rem;
    margin-bottom: 0.8rem;
    color: #555;
}

.highlight-features li i {
    color: #FF7A00;
    font-size: 1rem;
}

.highlight-btn {
    display: inline-block;
    background: linear-gradient(135deg, #FF7A00 0%, #FF9500 100%);
    color: #fff;
    padding: 0.8rem 1.5rem;
    border-radius: 20px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    width: 100%;
    text-align: center;
}

.highlight-btn:hover {
    background: linear-gradient(135deg, #e66a00 0%, #e68500 100%);
    transform: translateY(-2px);
}

/* Services Section */
.services-section {
    padding: 4rem 0;
    background: #f8f9fa;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
}

.service-card {
    background: #fff;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
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
    transition: transform 0.3s ease;
}

.service-card:hover .service-image img {
    transform: scale(1.1);
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
}

.service-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #171e29;
    margin-bottom: 1rem;
}

.service-desc {
    color: #666;
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

.service-btn {
    /* background: linear-gradient(135deg, #FF7A00 0%, #FF9500 100%); */
    color: #FF7A00;
    padding: 0.8rem 2rem;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    text-align: center;
    width: 80%;
}

.service-btn:hover {
    color: #fff;
    background: linear-gradient(135deg, #FF7A00 0%, #FF9500 100%);;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(255, 122, 0, 0.3);
}

/* Tour Packages Section */
.tour-packages-section {
    padding: 4rem 0;
    background: #fff;
}

.packages-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.package-card {
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.package-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
}

.package-image {
    position: relative;
    height: 250px;
    overflow: hidden;
}

.package-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.package-card:hover .package-image img {
    transform: scale(1.1);
}

.package-badge {
    position: absolute;
    top: 1rem;
    right: 1rem;
    background: linear-gradient(135deg, #FF7A00 0%, #FF9500 100%);
    color: #fff;
    padding: 0.3rem 0.8rem;
    border-radius: 15px;
    font-size: 0.8rem;
    font-weight: 600;
}

.package-content {
    padding: 2rem;
}

.package-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #171e29;
    margin-bottom: 1rem;
}

.package-desc {
    color: #666;
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

.package-features {
    display: flex;
    gap: 1rem;
    margin-bottom: 1.5rem;
    flex-wrap: wrap;
}

.feature {
    display: flex;
    align-items: center;
    gap: 0.3rem;
    font-size: 0.9rem;
    color: #555;
}

.feature i {
    color: #FF7A00;
}

.package-price {
    display: flex;
    align-items: baseline;
    gap: 0.5rem;
    margin-bottom: 1.5rem;
}

.price {
    font-size: 2rem;
    font-weight: 700;
    color: #FF7A00;
}

.per-person {
    color: #666;
    font-size: 0.9rem;
}

.package-btn {
    display: inline-block;
    background: linear-gradient(135deg, #FF7A00 0%, #FF9500 100%);
    color: #fff;
    padding: 0.8rem 2rem;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    width: 100%;
    text-align: center;
}

.package-btn:hover {
    background: linear-gradient(135deg, #e66a00 0%, #e68500 100%);
    transform: translateY(-2px);
}

.packages-cta {
    text-align: center;
    background: #f8f9fa;
    padding: 3rem 2rem;
    border-radius: 20px;
}

.packages-cta h3 {
    font-size: 1.8rem;
    font-weight: 700;
    color: #171e29;
    margin-bottom: 1rem;
}

.packages-cta p {
    color: #666;
    margin-bottom: 2rem;
    font-size: 1.1rem;
}

.cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: linear-gradient(135deg, #1976D2 0%, #2196F3 100%);
    color: #fff;
    padding: 1rem 2rem;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
}

.cta-btn:hover {
    background: linear-gradient(135deg, #1565C0 0%, #1976D2 100%);
    transform: translateY(-2px);
}

/* Why Choose Us Section */
.why-choose-section {
    padding: 4rem 0;
    background: #f8f9fa;
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}

.feature-card {
    background: #fff;
    border-radius: 15px;
    padding: 2.5rem 2rem;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s ease;
}

.feature-card:hover {
    transform: translateY(-5px);
}

.feature-icon {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, #FF7A00 0%, #FF9500 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    font-size: 1.8rem;
    color: #fff;
}

.feature-title {
    font-size: 1.3rem;
    font-weight: 700;
    color: #171e29;
    margin-bottom: 1rem;
}

.feature-desc {
    color: #666;
    line-height: 1.6;
}

/* Stats Section */
.stats-section {
    padding: 4rem 0;
    background: linear-gradient(135deg, #1976D2 0%, #FF7A00 100%);
    color: #1C4E80;
}
.stat-icon{
    font-size: 1.5rem;
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
    color: #171e29;
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

.stat-desc {
    font-size: 0.9rem;
    opacity: 0.8;
    color: #171e29;
}

/* Partners Section */
.partners-section {
    padding: 4rem 0;
    background: #fff;
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
    animation: marquee-scroll 25s linear infinite;
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
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}

/* CTA Section */
.cta-section {
    padding: 4rem 0;
    background: linear-gradient(135deg, #171e29 0%, #FF7A00 100%);
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
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 1rem 2rem;
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

    /* Responsive Design */
    @media (max-width: 1024px) {
        .container {
            padding: 0 1.5rem;
        }
        
        .hero-title {
            font-size: 3rem;
        }
        
        .section-title {
            font-size: 2.2rem;
        }
        
        .highlights-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }
        
        .services-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }
        
        .packages-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }
        
        .features-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }
    }

    @media (max-width: 768px) {
        .container {
            padding: 0 1rem;
        }
        
        .hero-section {
            height: 500px;
        }
        
        .hero-title {
            font-size: 1.2rem;
            line-height: 1.3;
        }
        
        .hero-desc {
            font-size: .8rem;
            margin-bottom: 2rem;
        }
        
        .hero-buttons {
            flex-direction: column;
            align-items: center;
            gap: 1rem;
        }
        
        .hero-btn {
            width: 100%;
            max-width: 280px;
            padding: 0.9rem 1.5rem;
            font-size: 1rem;
        }
        
        .hero-stats {
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
        
        .highlights-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
        
        .highlight-card {
            padding: 2rem 1.5rem;
        }
        
        .highlight-title {
            font-size: 1.3rem;
        }
        
        .services-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
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
        
        .packages-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
        
        .package-image {
            height: 200px;
        }
        
        .package-content {
            padding: 1.5rem;
        }
        
        .package-title {
            font-size: 1.3rem;
        }
        
        .features-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
        
        .feature-card {
            padding: 2rem 1.5rem;
        }
        
        .feature-title {
            font-size: 1.2rem;
        }
        
        .stats-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }
        
        .stat-card {
            padding: 2rem 1.5rem;
        }
        
        .stat-number {
            font-size: 2.5rem;
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
        
        .cta-title {
            font-size: 2rem;
        }
        
        .cta-desc {
            font-size: 1rem;
        }
    }

    @media (max-width: 768px) {
  .hero-section {
    position: relative;
    height: auto !important; /* Let height fit content */
    min-height: 450px;
    display: block; /* Remove flex if set globally */
    align-items: unset;
    justify-content: unset;
    overflow: hidden;
  }
  .hero-content {
    position: relative !important;  /* Remove absolute to stack naturally */
    z-index: 3;
    text-align: center;
    max-width: 100%;
    margin: 0 auto;
    padding: 2.2rem 1rem 1.8rem 1rem !important;
    box-sizing: border-box;
  }
  .hero-content .span1{
    font-size: .7rem;
  }
  .hero-overlay, .hero-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100vw;
    min-height: 100%;
    z-index: 1;
  }
}

    @media (max-width: 480px) {
        .container {
            padding: 0 0.8rem;
        }
        
        .hero-section {
            height: 450px;
        }
        
        .hero-title {
            font-size: 1.1rem;
            line-height: 1.2;
        }
        
        .hero-desc {
            font-size: 0.97em;
        }
        
        .hero-badge {
            padding: 0.6rem 1.2rem;
            font-size: 0.8rem;
        }
        
        .hero-btn {
            padding: 0.8rem 1.2rem;
            font-size: 0.95rem;
        }
        
        .hero-stats {
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
        
        .highlight-card {
            padding: 1.5rem 1rem;
        }
        
        .highlight-title {
            font-size: 1.2rem;
        }
        
        .highlight-desc {
            font-size: 0.9rem;
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
        
        .service-desc {
            font-size: 0.9rem;
        }
        
        .package-image {
            height: 180px;
        }
        
        .package-content {
            padding: 1.2rem;
        }
        
        .package-title {
            font-size: 1.2rem;
        }
        
        .package-desc {
            font-size: 0.9rem;
        }
        
        .feature-card {
            padding: 1.5rem 1rem;
        }
        
        .feature-title {
            font-size: 1.1rem;
        }
        
        .feature-desc {
            font-size: 0.9rem;
        }
        
        .stats-grid {
            grid-template-columns: 1fr;
            gap: 1rem;
        }
        
        .stat-card {
            padding: 1.5rem 1rem;
        }
        
        .stat-number {
            font-size: 2rem;
        }
        
        .stat-label {
            font-size: 1rem;
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
        
        .hero-title {
            font-size: 1rem;
        }
        
        .hero-desc {
            font-size: 0.7rem;
        }
        
        .section-title {
            font-size: 1.4rem;
        }
        
        .highlight-card,
        .service-content,
        .package-content,
        .feature-card,
        .stat-card {
            padding: 1rem 0.8rem;
        }
        
        .highlight-title,
        .service-title,
        .package-title {
            font-size: 1.1rem;
        }
        
        .feature-title {
            font-size: 1rem;
        }
    }

.brand-orange {
    color: #FF7A00;
}

.brand-blue {
    color: #1976D2;
}

@media (max-width: 650px) {
    .services-grid {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }
    .service-card {
        min-width: 0;
        width: 100%;
        margin: 0 auto;
    }
    .service-image img,
    .service-image x-optimized-image {
        width: 100%;
        height: auto;
        border-radius: 12px;
    }
    .service-content {
        padding: 1rem 0.5rem;
        text-align: left;
    }
    .service-title {
        font-size: 1.05rem;
    }
    .service-desc {
        font-size: 0.9rem;
    }
    .service-btn {
        font-size: 0.95rem;
        padding: 0.5rem 1rem;
    }
}

</style>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Hero Background Slider
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
    const heroBg = document.getElementById("hero-bg");
    if (!heroBg) return;  // Element not found, avoid errors

    function updateSlider() {
        heroBg.style.backgroundImage = `url('${sliderImages[currentImage]}')`;
    }

    function nextSlide() {
        currentImage = (currentImage + 1) % sliderImages.length;
        updateSlider();
    }

    updateSlider();
    setInterval(nextSlide, 4000);

    // Counter Animation for Stats
    const counters = document.querySelectorAll('.stat-number');
    
    const animateCounter = (counter) => {
        const target = parseInt(counter.getAttribute('data-count'));
        const duration = 2000; // 2 seconds
        const increment = target / (duration / 16); // 60fps
        let current = 0;
        
        const updateCounter = () => {
            current += increment;
            if (current < target) {
                counter.textContent = Math.floor(current).toLocaleString();
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target.toLocaleString();
            }
        };
        
        updateCounter();
    };
    
    // Intersection Observer for counter animation
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    counters.forEach(counter => {
        observer.observe(counter);
    });
    
    // Smooth scrolling for anchor links
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

    // Add hover effects to package cards
    const packageCards = document.querySelectorAll('.package-card');
    packageCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });

    // Add hover effects to highlight cards
    const highlightCards = document.querySelectorAll('.highlight-card');
    highlightCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
});
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Select all stat number elements
        const stats = document.querySelectorAll('.stat-number');
    
        stats.forEach(stat => {
            // Get the target number from the element's inner text and sanitize it
            let target = stat.textContent.replace(/[^\d]/g, '');
            let suffix = stat.textContent.replace(/\d+/g, ''); // e.g., 'K+', '+'
            if (!target) return; // Skip if no number
    
            target = parseInt(target);
    
            let count = 0;
            let duration = 1500; // milliseconds
            let increment = Math.ceil(target / (duration / 20));
    
            function updateStat() {
                count += increment;
    
                if (count < target) {
                    stat.textContent = count + suffix;
                    setTimeout(updateStat, 20);
                } else {
                    stat.textContent = target + suffix;
                }
            }
    
            // Reset stat temporarily so animation is visible every time
            stat.textContent = '0' + suffix;
            updateStat();
        });
    });
    </script>
    
@endpush
