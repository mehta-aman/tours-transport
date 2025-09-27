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

<style>
/* Footer */
.main-footer {
    background: #171e29 url('/images/footer-bg.jpg') center center/cover no-repeat;
    color: #fff;
    padding: 0;
}
.footer-bg {
    background: rgba(23,30,41,0.9);
    padding: 2rem 2.4rem 0;
}
.footer-content {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 3rem;
    max-width: 81.25rem;
    margin: 0 auto;
    flex-wrap: wrap;
}
.footer-col {
    flex: 1 1 14.375rem;
    min-width: 13.125rem;
    margin-bottom: 1.375rem;
}
.footer-logo {
    display: flex;
    align-items: center;
    margin-bottom: 1.125rem;
}
.footer-logo img {
    height: 2.4rem;
    margin-right: 0.625rem;
}
.footer-brand-title {
    font-size: 1.2rem;
    font-weight: 700;
}
.footer-about {
    color: #ccd6e1;
    margin-bottom: 1.375rem;
    font-size: 0.98rem;
    line-height: 1.5;
}
.footer-contact {
    list-style: none;
    padding: 0;
    color: #fff;
    font-size: 0.98rem;
    margin: 0;
}
.footer-contact li i {
    color: #ff7a00;
    margin-right: 0.3rem;
}
.footer-title {
    color: #fff;
    font-weight: 700;
    font-size: 1.09rem;
    margin-bottom: 0.75rem;
    letter-spacing: 0.7px;
}
.footer-accent {
    color: #ff7a00;
    margin-left: 0.375rem;
}
.footer-links {
    list-style: none;
    padding: 0;
    margin-bottom: 1rem;
}
.footer-links li {
    margin-bottom: 0.5rem;
}
.footer-links a {
    color: #fff;
    text-decoration: none;
    font-size: 1.01rem;
    transition: color 0.2s;
}
.footer-links a:hover {
    color: #ff7a00;
    text-decoration: underline;
}
.footer-news-desc {
    color: #ccd6e1;
    font-size: 0.98rem;
    margin-bottom: 0.75rem;
}
.footer-newsletter {
    display: flex;
    align-items: center;
    background: #171e29;
    border: 1.5px solid #fff;
    border-radius: 1.56rem;
    margin-bottom: 0.93rem;
    overflow: hidden;
}
.footer-newsletter input {
    background: transparent;
    border: none;
    outline: none;
    color: #fff;
    padding: 0.625rem 1rem;
    font-size: 1rem;
    flex: 1;
}
.footer-newsletter button {
    background: none;
    border: none;
    color: #ff7a00;
    font-size: 1.13rem;
    padding: 0 1rem;
    cursor: pointer;
    transition: color 0.2s;
}
.footer-newsletter button:hover {
    color: #fff;
    background: #ff7a00;
    border-radius: 0 1.56rem 1.56rem 0;
}
.footer-buy-btn {
    display: inline-block;
    background: #ff7a00;
    color: #fff;
    border-radius: 0.31rem;
    padding: 0.625rem 1.625rem;
    font-weight: 600;
    font-size: 1.05rem;
    margin-top: 0.44rem;
    transition: background 0.2s;
    text-align: center;
    text-decoration: none;
}
.footer-buy-btn:hover {
    background: #232323;
    color: #ff7a00;
}
.footer-bottom {
    border-top: 1px solid #29344a;
    color: #fff;
    font-size: 0.97rem;
    padding: 0.88rem 2.3rem;
    margin-top: 1.125rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.footer-social a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 2rem;
    height: 2rem;
    margin-left: 0.625rem;
    color: #fff;
    border: 2px dashed #FF7A00;
    border-radius: 50%;
    font-size: 1.13rem;
    transition: background 0.2s, color 0.2s;
}
.footer-social a:hover {
    background: #ff7a00;
    color: #fff;
}
</style>