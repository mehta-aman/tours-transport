@extends('layouts.app')

@section('title', 'Contact Us - Arihant Transport')

@section('content')

<!-- Contact Hero Section -->
<section class="contact-hero fullwidth-cover themed-bg">
    <div class="contact-hero-bg">
        <img src="{{ asset('images/about-cover.jpg') }}" alt="Contact Arihant Transport" class="contact-hero-img" />
    </div>
    <div class="contact-hero-overlay"></div>
    <div class="contact-hero-content">
        <h1 class="contact-hero-title">Get In <span class="brand-orange">Touch</span></h1>
        <p class="contact-hero-desc">
            Ready to discuss your transportation needs? Contact our team for personalized solutions and competitive quotes.
        </p>
    </div>
</section>

<!-- Contact Form Section -->
<section class="contact-form-section" id="contact">
    <div class="container">
        <div class="contact-form-wrapper">
            <div class="contact-form-header">
                <h2 class="contact-form-title">Send Us a <span class="brand-orange">Message</span></h2>
                <p class="contact-form-desc">
                    Have a question about our services? Need a quote? Fill out the form below and we'll get back to you within 24 hours.
                </p>
            </div>

            <div class="contact-form-container">
                <form class="contact-form" action="#" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name" class="form-label">Full Name *</label>
                            <input type="text" id="name" name="name" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email Address *</label>
                            <input type="email" id="email" name="email" class="form-input" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone" class="form-label">Phone Number *</label>
                            <input type="tel" id="phone" name="phone" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label for="company" class="form-label">Company Name</label>
                            <input type="text" id="company" name="company" class="form-input">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="service" class="form-label">Service Interested In *</label>
                        <select id="service" name="service" class="form-select" required>
                            <option value="">Select a service</option>
                            <option value="export-import">Export & Import Services</option>
                            <option value="port-logistics">Port Logistics</option>
                            <option value="warehousing">Warehousing & Storage</option>
                            <option value="fleet-management">Fleet Management</option>
                            <option value="cement-delivery">Cement Delivery</option>
                            <option value="goods-transportation">Goods Transportation</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message" class="form-label">Message *</label>
                        <textarea id="message" name="message" class="form-textarea" rows="5" placeholder="Please provide details about your transportation needs, cargo type and any special requirements..." required></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-checkbox">
                            <input type="checkbox" name="newsletter" value="1">
                            <span class="checkmark"></span>
                            Subscribe to our newsletter for updates and special offers
                        </label>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="form-submit-btn">
                            <i class="fas fa-paper-plane"></i>
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information Section -->
<section class="contact-info-section">
    <div class="container">
        <div class="contact-info-grid">
            <!-- Contact Card 1: Head Office -->
            <div class="contact-card" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-card-icon">
                    <i class="fas fa-building"></i>
                </div>
                <h3 class="contact-card-title">Head Office</h3>
                <div class="contact-card-content">
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <strong>Address:</strong><br>
                            Sector 8, Gandhinagar<br>
                            Gujarat 382007, India
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <strong>Phone:</strong><br>
                            <a href="tel:+916351505076">+91 63515 05076</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <strong>Email:</strong><br>
                            <a href="mailto:contact@arihanttransport.com">contact@arihanttransport.com</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <strong>Hours:</strong><br>
                            Mon - Sun: 9:00 AM - 8:00 PM
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Card 2: Regional Office -->
            <div class="contact-card" data-aos="fade-up" data-aos-delay="200">
                <div class="contact-card-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3 class="contact-card-title">Regional Office</h3>
                <div class="contact-card-content">
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <strong>Address:</strong><br>
                            A-124, Bijal Business Centre<br>
                            Ahmedabad, Gujarat, India
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <strong>Phone:</strong><br>
                            <a href="tel:+9163514126661">+91 63514 12661</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <strong>Email:</strong><br>
                            <a href="mailto:ahd@arihanttransport.com">ahd@arihanttransport.com</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <strong>Hours:</strong><br>
                            Mon - Sun: 9:00 AM - 8:00 PM
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Card 3: Quick Contact -->
            <div class="contact-card" data-aos="fade-up" data-aos-delay="300">
                <div class="contact-card-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3 class="contact-card-title">Quick Contact</h3>
                <div class="contact-card-content">
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <strong>Emergency:</strong><br>
                            <a href="tel:+916351505076">+91 63515 05076</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fab fa-whatsapp"></i>
                        <div>
                            <strong>WhatsApp:</strong><br>
                            <a href="https://wa.me/916351505076" target="_blank">+91 63515 05076</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <strong>General Inquiry:</strong><br>
                            <a href="mailto:arihantransport4715@gmail.com">arihantransport4715@gmail.com</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-globe"></i>
                        <div>
                            <strong>Website:</strong><br>
                            <a href="#" target="_blank">www.arihanttransport.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Map Section -->
<section class="map-section">
    <div class="container">
        <div class="map-header">
            <h2 class="map-title">Find Us on the <span class="brand-orange">Map</span></h2>
            <p class="map-desc">Visit our offices or get directions to our locations</p>
        </div>
        
        <div class="map-container">
            <div class="map-placeholder">
                <div class="map-content">
                    <i class="fas fa-map-marker-alt map-icon"></i>
                    <h3>Interactive Map</h3>
                    <p>Click to view our office locations</p>
                    <a href="https://maps.app.goo.gl/obXWBkFWWVkAsQ1r6" target="_blank" class="map-btn">
                        <i class="fas fa-external-link-alt link-icon"></i>
                        View on Google Maps
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="faq-header">
            <h2 class="faq-title">Frequently Asked <span class="brand-orange">Questions</span></h2>
            <p class="faq-desc">Quick answers to common questions about our services</p>
        </div>
        
        <div class="faq-grid">
            <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
                <div class="faq-question">
                    <h3>What areas do you serve?</h3>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>We provide transportation and logistics services across Gujarat and throughout India. We also handle international shipping through our export-import services.</p>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                <div class="faq-question">
                    <h3>How do I get a quote?</h3>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>You can get a quote by filling out our contact form, calling us directly, or sending an email with your requirements. We typically respond within 24 hours.</p>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                <div class="faq-question">
                    <h3>Do you provide insurance coverage?</h3>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Yes, we provide comprehensive insurance coverage for all shipments. Our insurance policies protect your cargo during transit and storage.</p>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                <div class="faq-question">
                    <h3>What types of cargo do you handle?</h3>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>We handle various types of cargo including cement, general goods, machinery, textiles, and other commercial shipments. We have specialized vehicles for different cargo types.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Contact Hero Section */
.contact-hero {
    position: relative;
    height: 400px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    color: #fff;
}

.contact-hero-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}

.contact-hero-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(0.7);
}

.contact-hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.7));
    z-index: 2;
}

.contact-hero-content {
    position: relative;
    z-index: 3;
    text-align: center;
    max-width: 800px;
    padding: 0 2rem;
}

.contact-hero-title {
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
    font-family: 'Poppins', sans-serif;
}

.contact-hero-desc {
    font-size: 1.3rem;
    line-height: 1.6;
    opacity: 0.95;
}

/* Contact Info Section */
.contact-info-section {
    padding: 4rem 0;
    background: #f8f9fa;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
}

.contact-info-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
}

/* Mobile responsive breakpoints */
@media (max-width: 600px) {
    .contact-info-grid {
        display: flex;
        flex-direction: column;
    }
}
.contact-card {
    background: #fff;
    border-radius: 15px;
    padding: 2.5rem;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.contact-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
}

.contact-card-icon {
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

.contact-card-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #171e29;
    margin-bottom: 1.5rem;
}

.contact-card-content {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.contact-item {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
}

.contact-item i {
    color: #FF7A00;
    font-size: 1.2rem;
    margin-top: 0.2rem;
    min-width: 20px;
}

.contact-item a {
    color: #1976D2;
    text-decoration: none;
    transition: color 0.3s ease;
}

.contact-item a:hover {
    color: #FF7A00;
    text-decoration: underline;
}

/* Contact Form Section */
.contact-form-section {
    padding: 5rem 0;
    background: #fff;
}

.contact-form-wrapper {
    max-width: 800px;
    margin: 0 auto;
}

.contact-form-header {
    text-align: center;
    margin-bottom: 3rem;
}

.contact-form-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #171e29;
    margin-bottom: 1rem;
}

.contact-form-desc {
    font-size: 1.2rem;
    color: #666;
    line-height: 1.6;
}

.contact-form-container {
    background: #f8f9fa;
    border-radius: 15px;
    padding: 3rem;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.contact-form {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.5rem;
}

.form-group {
    display: flex;
    flex-direction: column;
}

.form-label {
    font-weight: 600;
    color: #171e29;
    margin-bottom: 0.5rem;
    font-size: 1rem;
}

.form-input,
.form-select,
.form-textarea {
    padding: 1rem;
    border: 2px solid #e0e0e0;
    border-radius: 8px;
    font-size: 1rem;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
    background: #fff;
}

.form-input:focus,
.form-select:focus,
.form-textarea:focus {
    outline: none;
    border-color: #FF7A00;
    box-shadow: 0 0 0 3px rgba(255, 122, 0, 0.1);
}

.form-textarea {
    resize: vertical;
    min-height: 120px;
}

.form-checkbox {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    cursor: pointer;
    font-size: 0.95rem;
    color: #666;
}

.form-checkbox input[type="checkbox"] {
    width: 18px;
    height: 18px;
    accent-color: #FF7A00;
}

.form-submit-btn {
    background: linear-gradient(135deg, #FF7A00 0%, #FF9500 100%);
    color: #fff;
    border: none;
    padding: 1rem 2rem;
    border-radius: 8px;
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    margin-top: 1rem;
}

.form-submit-btn:hover {
    background: linear-gradient(135deg, #e66a00 0%, #e68500 100%);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(255, 122, 0, 0.3);
}

/* Map Section */
.map-section {
    padding: 4rem 0;
    background: #f8f9fa;
}

.map-header {
    text-align: center;
    margin-bottom: 3rem;
}

.map-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #171e29;
    margin-bottom: 1rem;
}

.map-desc {
    font-size: 1.2rem;
    color: #666;
}

.map-container {
    max-width: 1000px;
    margin: 0 auto;
}

.map-placeholder {
    height: 400px;
    background: linear-gradient(135deg, #1976D2 0%, #FF7A00 100%);
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    text-align: center;
}

.map-content .map-icon {
    font-size: 4rem;
    margin-bottom: 1rem;
    opacity: 0.8;
}

.map-content h3 {
    font-size: 1.8rem;
    margin-bottom: 0.5rem;
}

.map-content p {
    font-size: 1.1rem;
    margin-bottom: 2rem;
    opacity: 0.9;
}

.map-btn {
    background: rgba(255, 255, 255, 0.2);
    color: #fff;
    padding: 1rem 2rem;
    border-radius: 25px;
    text-decoration: none;
    display: flex;
    font-weight: 600;
    align-items: center;
    gap: 1rem;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
}

.map-btn:hover {
    background: rgba(255, 255, 255, 0.3);
    transform: translateY(-2px);
}

/* FAQ Section */
.faq-section {
    padding: 4rem 0;
    background: #fff;
}

.faq-header {
    text-align: center;
    margin-bottom: 3rem;
}

.faq-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #171e29;
    margin-bottom: 1rem;
}

.faq-desc {
    font-size: 1.2rem;
    color: #666;
}

.faq-grid {
    max-width: 800px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.faq-item {
    background: #f8f9fa;
    border-radius: 10px;
    overflow: hidden;
    transition: all 0.3s ease;
}

.faq-item:hover {
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
}

.faq-question {
    padding: 1.5rem;
    background: #fff;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #e0e0e0;
}

.faq-question h3 {
    font-size: 1.2rem;
    font-weight: 600;
    color: #171e29;
    margin: 0;
}

.faq-question i {
    color: #FF7A00;
    transition: transform 0.3s ease;
}

.faq-item.active .faq-question i {
    transform: rotate(180deg);
}

.faq-answer {
    padding: 0 1.5rem;
    max-height: 0;
    overflow: hidden;
    transition: all 0.3s ease;
}

.faq-item.active .faq-answer {
    padding: 1.5rem;
    max-height: 200px;
}

.faq-answer p {
    color: #666;
    line-height: 1.6;
    margin: 0;
}

/* Responsive Design */
@media (max-width: 1024px) {
    .container {
        padding: 0 1.5rem;
    }
    
    .contact-hero-title {
        font-size: 3rem;
    }
    
    .contact-info-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 2rem;
    }
    
    .contact-form-container {
        padding: 2.5rem;
    }
    
    .faq-title {
        font-size: 2.2rem;
    }
}

@media (max-width: 768px) {
    .container {
        padding: 0 1rem;
    }
    
    .contact-hero {
        height: 400px;
    }
    
    .contact-hero-title {
        font-size: 2.2rem;
        line-height: 1.3;
    }
    
    .contact-hero-desc {
        font-size: 1rem;
    }
    
    .contact-info-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .contact-card {
        padding: 1.5rem;
    }
    
    .contact-card-title {
        font-size: 1.3rem;
    }
    
    .contact-item {
        font-size: 0.95rem;
    }
    
    .contact-form-container {
        padding: 2rem;
    }
    
    .form-title {
        font-size: 1.8rem;
    }
    
    .form-desc {
        font-size: 1rem;
    }
    
    .form-row {
        grid-template-columns: 1fr;
        gap: 1rem;
    }
    
    .form-group input,
    .form-group textarea,
    .form-group select {
        padding: 0.8rem;
        font-size: 0.95rem;
    }
    
    .form-group label {
        font-size: 0.9rem;
    }
    
    .submit-btn {
        padding: 0.8rem 2rem;
        font-size: 1rem;
    }
    
    .faq-title {
        font-size: 2rem;
    }
    
    .faq-desc {
        font-size: 1rem;
    }
    
    .faq-question {
        padding: 1.2rem;
    }
    
    .faq-question h3 {
        font-size: 1.1rem;
    }
    
    .faq-answer {
        padding: 0 1.2rem;
    }
    
    .faq-item.active .faq-answer {
        padding: 1.2rem;
    }
    
    .faq-answer p {
        font-size: 0.9rem;
    }
    
    .map-placeholder {
        height: 300px;
    }
    
    .map-content i {
        font-size: 3rem;
    }
    
    .map-content h3 {
        font-size: 1.5rem;
    }
    
    .map-content p {
        font-size: 0.9rem;
    }
}

@media (max-width: 480px) {
    .container {
        padding: 0 0.8rem;
    }
    
    .contact-hero {
        height: 350px;
    }
    
    .contact-hero-title {
        font-size: 1.8rem;
        line-height: 1.2;
    }
    
    .contact-hero-desc {
        font-size: 0.95rem;
    }
    
    .contact-card {
        padding: 1.2rem;
    }
    
    .contact-card-title {
        font-size: 1.2rem;
    }
    
    .contact-item {
        font-size: 0.9rem;
    }
    
    .contact-item i {
        font-size: 1rem;
    }
    
    .contact-form-container {
        padding: 1.5rem;
    }
    
    .form-title {
        font-size: 1.6rem;
    }
    
    .form-desc {
        font-size: 0.95rem;
    }
    
    .form-group input,
    .form-group textarea,
    .form-group select {
        padding: 0.7rem;
        font-size: 0.9rem;
    }
    
    .form-group label {
        font-size: 0.85rem;
    }
    
    .submit-btn {
        padding: 0.7rem 1.5rem;
        font-size: 0.95rem;
    }
    
    .faq-title {
        font-size: 1.6rem;
    }
    
    .faq-desc {
        font-size: 0.95rem;
    }
    
    .faq-question {
        padding: 1rem;
    }
    
    .faq-question h3 {
        font-size: 1rem;
    }
    
    .faq-answer {
        padding: 0 1rem;
    }
    
    .faq-item.active .faq-answer {
        padding: 1rem;
    }
    
    .faq-answer p {
        font-size: 0.85rem;
    }
    
    .map-placeholder {
        height: 250px;
    }
    
    .map-content i {
        font-size: 2.5rem;
    }
    
    .map-content h3 {
        font-size: 1.3rem;
    }
    
    .map-content p {
        font-size: 0.85rem;
    }
}

@media (max-width: 360px) {
    .container {
        padding: 0 0.5rem;
    }
    
    .contact-hero-title {
        font-size: 1.6rem;
    }
    
    .contact-card,
    .contact-form-container {
        padding: 1rem 0.8rem;
    }
    
    .contact-card-title,
    .form-title {
        font-size: 1.2rem;
    }
    
    .contact-item,
    .form-desc,
    .faq-desc {
        font-size: 0.9rem;
    }
    
    .form-group input,
    .form-group textarea,
    .form-group select {
        padding: 0.6rem;
        font-size: 0.85rem;
    }
    
    .form-group label {
        font-size: 0.8rem;
    }
    
    .submit-btn {
        padding: 0.6rem 1.2rem;
        font-size: 0.9rem;
    }
    
    .faq-title {
        font-size: 1.4rem;
    }
    
    .faq-question {
        padding: 0.8rem;
    }
    
    .faq-question h3 {
        font-size: 0.95rem;
    }
    
    .faq-answer {
        padding: 0 0.8rem;
    }
    
    .faq-item.active .faq-answer {
        padding: 0.8rem;
    }
    
    .faq-answer p {
        font-size: 0.8rem;
    }
    
    .map-placeholder {
        height: 250px;
    }
    
    .map-content i {
        font-size: 2rem;
    }
    
    .map-content h3 {
        font-size: 1.1rem;
    }
    
    .map-content p {
        font-size: 0.8rem;
    }
}

.brand-orange {
    color: #FF7A00;
}
</style>
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    // FAQ Accordion Optimization
    const faqGrid = document.querySelector('.faq-grid');
    if (faqGrid) {
        faqGrid.addEventListener('click', function (e) {
            const question = e.target.closest('.faq-question');
            if (!question) return;

            const item = question.parentElement;
            // Remove 'active' from all .faq-item
            this.querySelectorAll('.faq-item.active').forEach(faq => faq.classList.remove('active'));
            // Toggle 'active' for clicked item
            if (!item.classList.contains('active')) {
                item.classList.add('active');
            }
            
        });
    }

    // Contact Form Validation – only if form exists and visible
    const contactForm = document.querySelector('.contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            let isValid = true;
            contactForm.querySelectorAll('[required]').forEach(field => {
                if (!field.value.trim()) {
                    field.style.borderColor = '#e74c3c';
                    isValid = false;
                } else {
                    field.style.borderColor = '#e0e0e0';
                }
            });

            if (isValid) {
                alert('Thank you for your message! We will get back to you within 24 hours.');
                contactForm.reset();
            } else {
                alert('Please fill in all required fields.');
            }
        });
    }
});
</script>
@endpush


@endsection
