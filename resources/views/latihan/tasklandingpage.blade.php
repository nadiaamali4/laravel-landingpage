<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nadia Amalia Sutarno XPPLG 4</title>
    <link rel="stylesheet" href="{{asset('assets/ceses/style.css') }}">
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">Sendpay</div>
                <ul>
                    <li><a href="#hero">Send Money</a></li>
                    <li><a href="#howitworks">How It Works</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#testimonial">Testimonials</a></li>
                    <li><a href="#kontak">Contact</a></li>
                </ul>
                <div class="auth">
                    <a href="login.html" class="sign-in">Sign in</a>
                    <a href="#" class="register">Register</a>
                </div>
            </nav>
        </div>
    </header>

    <section id="hero" class="hero">
        <div class="container">
            <div class="hero-text">
                <h1>Sending Money is Easier than Ever</h1>
                <p>Experience a seamless and secure way to send money to your loved ones, anywhere, anytime. Join thousands who trust Sendpay for their financial needs.</p>
                <div class="hero-buttons">
                    <a href="#" class="btn-primary">Register</a>
                    <a href="#" class="btn-secondary">Learn More</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="{{ asset('assets/img/illustrasi 1.png')}}" alt="Sending Money Illustration">
            </div>
        </div>
    </section>

    <section id="howitworks" class="how-it-works">
        <div class="container">
            <h2>How It Works</h2>
            <p>Sendpay simplifies the process of transferring money with our user-friendly application. Here's how it works:</p>
            <div class="steps">
                <div class="step">
                    <img src="{{ asset('assets/img/Ellipse 1.png')}}" alt="In-app Transfer">
                    <h3>Easy Setup</h3>
                    <p>Download our app and set up your account in just a few minutes.</p>
                </div>
                <div class="step">
                    <img src="{{ asset('assets/img/Ellipse 2.png')}}" alt="In-app Transfer">
                    <h3>Transfer Funds</h3>
                    <p>Send money to anyone, anywhere with a few taps on your screen.</p>
                </div>
                <div class="step">
                    <img src="{{ asset('assets/img/Ellipse 3.png')}}" alt="In-app Transfer">
                    <h3>Track Transactions</h3>
                    <p>Monitor your transactions in real-time with detailed reports.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="service-grid">
                <div class="service-item">
                    <img src="{{ asset('assets/img/bank.png')}}" alt="Bank Transfer">
                    <h3>Bank Transfer</h3>
                    <p>Securely transfer funds to any bank account globally with our advanced banking features.</p>
                </div>
                <div class="service-item">
                    <img src="{{ asset('assets/img/jam.png')}}" alt="Fast Transfer">
                    <h3>Fast Transfer</h3>
                    <p>Experience instant transfers with our high-speed transaction system.</p>
                </div>
                <div class="service-item">
                    <img src="{{ asset('assets/img/handphone.png')}}" alt="Mobile Recharge">
                    <h3>Mobile Recharge</h3>
                    <p>Top up mobile phones quickly and easily through our platform.</p>
                </div>
                <div class="service-item">
                    <img src="{{ asset('assets/img/truck.png')}}" alt="Easy and Fast">
                    <h3>Easy and Fast</h3>
                    <p>Enjoy a user-friendly interface designed for fast and hassle-free transactions.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonial" class="testimonials">
        <div class="container">
            <h2>What Our Users Say</h2>
            <div class="testimonial-cards">
                <div class="testimonial-card">
                    <p>"Sendpay has revolutionized the way I send money to my family. It’s fast, secure, and incredibly easy to use."</p>
                    <div class="testimonial-author">
                        <img src="{{ asset('assets/img/Ellipse 9.png')}}" alt="Author">
                        <span>Jane Doe - Entrepreneur</span>
                    </div>
                </div>
                <div class="testimonial-card">
                    <p>"The convenience of Sendpay is unmatched. I can send money with just a few clicks and track everything in real-time."</p>
                    <div class="testimonial-author">
                        <img src="{{ asset('assets/img/Ellipse 10.png')}}" alt="Author">
                        <span>John Smith - Freelancer</span>
                    </div>
                </div>
                <div class="testimonial-card">
                    <p>"I love how easy it is to use Sendpay. The app is intuitive, and I feel secure knowing my transactions are protected."</p>
                    <div class="testimonial-author">
                        <img src="{{ asset('assets/img/Ellipse 11.png')}}"alt="Author">
                        <span>Alice Johnson - Small Business Owner</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div id="kontak" class="container">
            <div class="footer-content">
                <div class="footer-logo">Sendpay</div>
                <div class="footer-links">
                    <a href="#">Products</a>
                    <a href="#">About Us</a>
                    <a href="#">Catalog</a>
                </div>
                <div class="social-media">
                    <a href="#">Facebook</a>
                    <a href="#">GitHub</a>
                    <a href="#">Twitter</a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Sendpay. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>