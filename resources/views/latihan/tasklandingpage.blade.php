<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nadia Amalia Sutarno XPPLG 4</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans">
    <!-- Header -->
    <header class="bg-white shadow-md fixed w-full z-50">
        <div class="container mx-auto px-4">
            <nav class="flex justify-between items-center py-4">
                <div class="text-2xl font-bold text-blue-600">Sendpay</div>
                <ul class="hidden md:flex space-x-8">
                    <li><a href="#hero" class="hover:text-blue-600">Send Money</a></li>
                    <li><a href="#howitworks" class="hover:text-blue-600">How It Works</a></li>
                    <li><a href="#services" class="hover:text-blue-600">Services</a></li>
                    <li><a href="#testimonial" class="hover:text-blue-600">Testimonials</a></li>
                    <li><a href="#kontak" class="hover:text-blue-600">Contact</a></li>
                </ul>
                <div class="hidden md:flex space-x-4">
                    <a href="login.html" class="text-blue-600 hover:text-blue-800">Sign in</a>
                    <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-full hover:bg-blue-700">Register</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero" class="pt-24 pb-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">Sending Money is Easier than Ever</h1>
                    <p class="text-gray-600 mb-8">Experience a seamless and secure way to send money to your loved ones, anywhere, anytime. Join thousands who trust Sendpay for their financial needs.</p>
                    <div class="space-x-4">
                        <a href="#" class="bg-blue-600 text-white px-6 py-3 rounded-full hover:bg-blue-700">Register</a>
                        <a href="#" class="border border-blue-600 text-blue-600 px-6 py-3 rounded-full hover:bg-blue-50">Learn More</a>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <img src="{{ asset('assets/img/illustrasi 1.png')}}" alt="Sending Money Illustration" class="w-full">
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="howitworks" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4">How It Works</h2>
            <p class="text-center text-gray-600 mb-12">Sendpay simplifies the process of transferring money with our user-friendly application. Here's how it works:</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <img src="{{ asset('assets/img/Ellipse 1.png')}}" alt="Easy Setup" class="mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Easy Setup</h3>
                    <p class="text-gray-600">Download our app and set up your account in just a few minutes.</p>
                </div>
                <div class="text-center">
                    <img src="{{ asset('assets/img/Ellipse 2.png')}}" alt="Transfer Funds" class="mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Transfer Funds</h3>
                    <p class="text-gray-600">Send money to anyone, anywhere with a few taps on your screen.</p>
                </div>
                <div class="text-center">
                    <img src="{{ asset('assets/img/Ellipse 3.png')}}" alt="Track Transactions" class="mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Track Transactions</h3>
                    <p class="text-gray-600">Monitor your transactions in real-time with detailed reports.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
   <!-- Services Section -->
<section id="services" class="py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Our Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Service Item 1 -->
            <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <img src="assets/img/bank.png" alt="Bank Transfer" class="w-16 h-16 mb-4">
                <h3 class="text-xl font-semibold mb-2">Bank Transfer</h3>
                <p class="text-gray-600">Securely transfer funds to any bank account globally with our advanced banking features.</p>
            </div>

            <!-- Service Item 2 -->
            <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <img src="assets/img/jam.png" alt="Fast Transfer" class="w-16 h-16 mb-4">
                <h3 class="text-xl font-semibold mb-2">Fast Transfer</h3>
                <p class="text-gray-600">Experience instant transfers with our high-speed transaction system.</p>
            </div>

            <!-- Service Item 3 -->
            <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <img src="assets/img/handphone.png" alt="Mobile Recharge" class="w-16 h-16 mb-4">
                <h3 class="text-xl font-semibold mb-2">Mobile Recharge</h3>
                <p class="text-gray-600">Top up mobile phones quickly and easily through our platform.</p>
            </div>

            <!-- Service Item 4 -->
            <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <img src="assets/img/truck.png" alt="Easy and Fast" class="w-16 h-16 mb-4">
                <h3 class="text-xl font-semibold mb-2">Easy and Fast</h3>
                <p class="text-gray-600">Enjoy a user-friendly interface designed for fast and hassle-free transactions.</p>
            </div>
        </div>
    </div>
</section>

    <!-- Testimonials Section -->
    <!-- Testimonials Section -->
<section class="bg-gray-100 py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">What Our Clients Say</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                    <img src="assets/img/Ellipse 9.png" alt="Author" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="font-semibold">Sarah Johnson</h4>
                        <p class="text-gray-600">Business Owner</p>
                    </div>
                </div>
                <p class="text-gray-700">"SendPay has revolutionized how I handle international payments. The service is fast, reliable, and incredibly user-friendly."</p>
                <div class="flex text-yellow-400 mt-4">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                    <img src="assets/img/Ellipse 10.png" alt="Author" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="font-semibold">Michael Chen</h4>
                        <p class="text-gray-600">Freelancer</p>
                    </div>
                </div>
                <p class="text-gray-700">"The best payment platform I've ever used. Their customer service is exceptional, and the fees are very reasonable."</p>
                <div class="flex text-yellow-400 mt-4">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex items-center mb-4">
                    <img src="assets/img/Ellipse 11.png" alt="Author" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="font-semibold">Emily Rodriguez</h4>
                        <p class="text-gray-600">Online Seller</p>
                    </div>
                </div>
                <p class="text-gray-700">"SendPay makes it so easy to receive payments from my international customers. I couldn't be happier with their service."</p>
                <div class="flex text-yellow-400 mt-4">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Footer -->
        <!-- Footer (lanjutan) -->
        <footer class="bg-gray-800 text-white py-12">
        <div id="kontak" class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center mb-8">
                <div class="text-2xl font-bold mb-4 md:mb-0">Sendpay</div>
                <div class="flex space-x-8">
                    <a href="#" class="hover:text-blue-400">Products</a>
                    <a href="#" class="hover:text-blue-400">About Us</a>
                    <a href="#" class="hover:text-blue-400">Catalog</a>
                </div>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="hover:text-blue-400">Facebook</a>
                    <a href="#" class="hover:text-blue-400">GitHub</a>
                    <a href="#" class="hover:text-blue-400">Twitter</a>
                </div>
            </div>
            <div class="border-t border-gray-700 pt-8">
                <p class="text-center text-gray-400">&copy; 2024 Sendpay. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>