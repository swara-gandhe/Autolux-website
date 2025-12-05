<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Auto Lux</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #000;
            color: #f0f0f0;
            overflow-x: hidden;
        }

        /* Hero Section */
        .hero {
            position: relative;
            width: 100%;
            height: 90vh;
            overflow: hidden;
            margin-top: 100px;
        }

        .hero img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7));
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
        }

        .hero-overlay h1 {
            font-size: 48px;
            margin-bottom: 20px;
            animation: fadeInUp 1.2s ease-out forwards;
        }

        .hero-overlay a {
            display: inline-block;
            padding: 12px 28px;
            background: #ff9900;
            color: #000;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
            border-radius: 30px;
            transition: background 0.3s;
            animation: fadeInUp 1.5s ease-out forwards;
        }

        .hero-overlay a:hover {
            background: #e68100;
        }

        header {
            background-color: #111;
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 95%;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.6);
        }

        .logo {
            display: flex;
            align-items: center;
            font-size: 30px;
            font-weight: bold;
        }

        .logo img {
            height: 50px;
            margin-right: 15px;
            border-radius: 8px;
        }

        nav a {
            margin: 0 15px;
            color: #fff;
            text-decoration: none;
            position: relative;
            font-weight: 500;
            transition: color 0.3s;
        }

        nav a::after {
            content: "";
            position: absolute;
            width: 0%;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: #ff9900;
            transition: width 0.3s;
        }

        nav a:hover::after {
            width: 100%;
        }

        .test-drive-btn {
            background-color: #ff9900;
            color: #000;
            padding: 8px 18px;
            border-radius: 20px;
            font-weight: 600;
            margin-left: 20px;
            transition: background 0.3s ease, color 0.3s ease;
        }

        .test-drive-btn:hover {
            background-color: #e68100;
            color: #fff;
        }

        .slider {
            width: 100%;
            overflow: hidden;
            margin-top: 20px;
        }

        .slides {
            display: flex;
            animation: slide 18s infinite;
        }

        .slides img {
            width: 100%;
            height: 500px;
            object-fit: cover;
        }

        @keyframes slide {
            0% {
                transform: translateX(0);
            }

            16% {
                transform: translateX(-100%);
            }

            33% {
                transform: translateX(-200%);
            }

            50% {
                transform: translateX(-300%);
            }

            66% {
                transform: translateX(-400%);
            }

            83% {
                transform: translateX(-500%);
            }

            100% {
                transform: translateX(0);
            }
        }

        /* Alternate backgrounds for sections */
        section:nth-of-type(odd) {
            background-color: #121212;
        }

        section:nth-of-type(even) {
            background-color: #1a1a1a;
        }

        /* Add subtle top border between sections */
        section {
            border-top: 2px solid #2e2e2e;
            padding-top: 60px;
            padding-bottom: 60px;
        }

        .features {
            text-align: center;
        }

        .features h2 {
            color: #ff9900;
            font-size: 36px;
            margin-bottom: 50px;
        }

        .feature-boxes {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .box {
            width: 300px;
            background: #1e1e1e;
            margin: 20px;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(255, 255, 255, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .box:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(255, 153, 0, 0.3);
        }

        .box img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 12px;
        }

        .box h3 {
            color: #ff9900;
            margin: 20px 0 10px;
            font-size: 22px;
        }

        .box p {
            font-weight: 300;
            font-size: 15px;
        }

        .about {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            padding-left: 50px;
        }

        .about-img img {
            width: 500px;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
        }

        .about-text {
            padding-left: 50px;
            max-width: 600px;
        }

        .about-text h2 {
            color: #ff9900;
            font-size: 36px;
            margin-bottom: 20px;
        }

        .about-text p {
            font-weight: 300;
            line-height: 1.8;
            font-size: 16px;
        }

        /* Alternate about section layout for even instances */
        .about:nth-of-type(even) {
            flex-direction: row-reverse;
        }

        .about:nth-of-type(even) .about-text {
            padding-left: 0;
            padding-right: 50px;
            text-align: right;
        }

        /* Responsive adjustments */
        @media screen and (max-width: 768px) {
            .about {
                flex-direction: column !important;
                padding-left: 0 !important;
                text-align: center !important;
            }

            .about-text {
                padding-left: 0 !important;
                padding-right: 0 !important;
                margin-top: 30px;
                text-align: center !important;
            }

            .box {
                width: 90%;
            }

            .slides img {
                height: 300px;
            }

            .about-img img {
                width: 100%;
                max-width: 400px;
            }

            .hero-overlay h1 {
                font-size: 32px;
            }

            .hero-overlay a {
                font-size: 14px;
                padding: 10px 22px;
            }
        }

        /* Footer Styles */
        .main-footer {
            background: linear-gradient(135deg, #ff9900, #ff6600);
            color: #000000;
            padding: 60px 20px 40px;
            box-shadow: 0 0 15px 3px rgba(255, 153, 0, 0.7);
            border-radius: 12px 12px 0 0;
            font-weight: 400;
            font-family: 'Poppins', sans-serif;
            text-align: center;
            transition: background 0.5s ease;
            font-size: 22px;
        }

        .main-footer:hover {
            background: linear-gradient(135deg, #ffb84d, #ff3300);
            box-shadow: 0 0 30px 6px rgba(255, 102, 0, 0.9);
        }

        .footer-content {
            max-width: 1200px;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 40px;
        }

        .footer-section {
            flex: 1;
            min-width: 250px;
            text-align: left;
        }

        .footer-section h3,
        .footer-section h4 {
            color: #000000;
            text-shadow: 0 0 8px #ff9900;
            font-size: 28px;
            margin: 0 0 15px;
        }

        .footer-section p,
        .footer-section a {
            color: #000000;
            text-shadow: 0 0 5px #ff9900;
            font-weight: 300;
        }

        .footer-section a:hover {
            color: #000000;
            text-decoration: underline;
        }

        .footer-section .logo-img {
            height: 60px;
            width: auto;
            margin-bottom: 10px;
            display: inline-block;
        }

        .footer-section .hours {
            font-size: 22px;
        }

        .footer-links ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links ul li {
            margin-bottom: 8px;
        }

        .footer-links ul li a {
            font-size: 16px;
        }

        .social-links {
            margin-top: 15px;
        }

        .social-links a {
            font-size: 24px;
            margin: 0 20px;
            color: #000000;
            transition: color 0.3s ease, text-shadow 0.3s ease;
        }

        .social-links a:hover {
            color: #000000;
            text-shadow: 0 0 10px #000000;
        }

        .footer-bottom {
            margin-top: 40px;
            border-top: 1px solid #2e2e2e;
            padding-top: 20px;
            text-align: center;
            font-size: 25px;
        }

        .footer-bottom b {
            color: #000000;
        }

        @media screen and (max-width: 768px) {
            .hero {
                margin-top: 120px;
            }

            .footer-content {
                flex-direction: column;
                align-items: center;
            }

            .footer-section {
                text-align: center;
                min-width: unset;
                width: 100%;
            }

            .footer-section h3,
            .footer-section h4 {
                font-size: 24px;
            }

            .footer-section p,
            .footer-section a {
                font-size: 14px;
            }

            .footer-section .hours {
                font-size: 18px;
            }

            .social-links a {
                font-size: 20px;
                margin: 0 10px;
            }

            .footer-bottom {
                font-size: 18px;
            }
        }
    </style>
</head>

<body>
    <!-- header-->

    <header class="fade-in fade-delay-1">
        <div class="logo">
            <img src="logo.jpg" alt="Auto Lux">
            <span>Auto Lux</span>
        </div>

        <nav>
            <a href="index.php">Home</a>
            <a href="car.php">Cars</a>
            <a href="bike.php">Bikes</a>
            <a href="limited edition.php">Limited editions</a>
            <a href="about us.php">About us</a>
            <a href="contact.php">Contact Us</a>
            <a href="popup.php" class="test-drive-btn" onclick="openPopup(event)">Book a Test Drive</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <img src="banner.jpg" alt="Auto Lux Banner">
        <div class="hero-overlay">
            <h1>Welcome to Auto Lux</h1>
            <a href="#contact" class="cta-button" onclick="scrollToContact(event)">Contact Us</a>
        </div>
    </section>

    <!-- Slider -->
    <section class="slider fade-in fade-delay-2">
        <div class="slides">
            <img src="s1.jpg" alt="Imported Car 1">
            <img src="s2.jpg" alt="Superbike 1">
            <img src="s3.jpg" alt="Luxury Ride">
            <img src="s4.jpg" alt="Imported Car 2">
            <img src="s5.jpg" alt="Superbike 2">
            <img src="s6.jpg" alt="Imported Car 3">
            <img src="s7.jpg" alt="Superbike 3">

            <img src="s1.jpg" alt="Imported Car 1">
            <img src="s2.jpg" alt="Superbike 1">
            <img src="s3.jpg" alt="Luxury Ride">
            <img src="s4.jpg" alt="Imported Car 2">
            <img src="s5.jpg" alt="Superbike 2">
            <img src="s6.jpg" alt="Imported Car 3">
            <img src="s7.jpg" alt="Superbike 3">

            <img src="s1.jpg" alt="Imported Car 1">
            <img src="s2.jpg" alt="Superbike 1">
            <img src="s3.jpg" alt="Luxury Ride">
            <img src="s4.jpg" alt="Imported Car 2">
            <img src="s5.jpg" alt="Superbike 2">
            <img src="s6.jpg" alt="Imported Car 3">
            <img src="s7.jpg" alt="Superbike 3">
        </div>
    </section>

    <!-- About section -->
    <section class="about fade-in fade-delay-1">
        <div class="about-img">
            <img src="about.jpg" alt="Showroom">
        </div>
        <div class="about-text">
            <h2>About Auto Lux</h2>
            <p>Auto Lux — a luxurious garage with imported cars and bikes, featuring collections from Big Boy Toyz,
                Fusion Cars, and 9th Gear. We offer custom design elements, luxurious finishes, and stunning displays
                like rotating platforms. Whether you're a car enthusiast or a bike lover, your perfect import awaits.
                Our vehicles are sourced from trusted brands and inspected for excellence. Explore speed, style, and
                status all in one place.</p>
        </div>
    </section>

    <!-- Features -->
    <section id="features" class="features fade-in fade-delay-1">
        <h2>Why Choose Us</h2>
        <div class="feature-boxes">
            <div class="box fade-in fade-delay-1">
                <img src="image1.jpg" alt="Sports Car">
                <h3>High Performance</h3>
                <p>Premium sports cars with top-tier specs.</p>
            </div>
            <div class="box fade-in fade-delay-2">
                <img src="image2.jpg" alt="Superbike">
                <h3>Superbikes</h3>
                <p>Imported superbikes that thrill on the road.</p>
            </div>
            <div class="box fade-in fade-delay-3">
                <img src="image3.jpg" alt="Luxury">
                <h3>Luxury & Comfort</h3>
                <p>Drive in elegance with luxury imports.</p>
            </div>
        </div>
    </section>

    <!-- More Features Section -->
    <section class="features fade-in fade-delay-3" style="background:#121212; padding:80px 20px; text-align:center;">
        <h2 style="color:#ff9900; font-size:36px; margin-bottom:50px;">Features</h2>
        <div class="feature-boxes">
            <div class="box">
                <h3>Flexible Financing</h3>
                <p>Affordable EMIs and finance plans tailored for your dream ride.</p>
            </div>
            <div class="box">
                <h3>Customization</h3>
                <p>Get your vehicle tailored with exclusive wraps and accessories.</p>
            </div>
            <div class="box">
                <h3>After-Sales Support</h3>
                <p>Enjoy top-tier maintenance and support post-purchase.</p>
            </div>
        </div>
    </section>

    <!-- New Customer Reviews Section -->
    <section class="reviews fade-in fade-delay-2" style="background:#101010; padding: 80px 20px; text-align:center;">
        <h2 style="color:#ff9900; font-size:36px; margin-bottom:50px;">What Our Clients Say</h2>
        <div style="display:flex; justify-content:center; flex-wrap:wrap; gap:30px;">
            <div
                style="background:#1e1e1e; border-radius:15px; padding:25px; max-width:300px; color:#f0f0f0; box-shadow:0 4px 10px rgba(255,255,255,0.05);">
                <p style="font-style:italic;">“Auto Lux gave me the best deal on my dream car. Incredible service!”</p>
                <h4 style="color:#ff9900; margin-top:15px;">— Rohan M.</h4>
            </div>
            <div
                style="background:#1e1e1e; border-radius:15px; padding:25px; max-width:300px; color:#f0f0f0; box-shadow:0 4px 10px rgba(255,255,255,0.05);">
                <p style="font-style:italic;">“The quality of the bikes is unmatched. I’m in love with my superbike!”
                </p>
                <h4 style="color:#ff9900; margin-top:15px;">— Neha S.</h4>
            </div>
            <div
                style="background:#1e1e1e; border-radius:15px; padding:25px; max-width:300px; color:#f0f0f0; box-shadow:0 4px 10px rgba(255,255,255,0.05);">
                <p style="font-style:italic;">“Luxury, speed, and style—Auto Lux has it all. Highly recommend!”</p>
                <h4 style="color:#ff9900; margin-top:15px;">— Arjun P.</h4>
            </div>
            <div
                style="background:#1e1e1e; border-radius:15px; padding:25px; max-width:300px; color:#f0f0f0; box-shadow:0 4px 10px rgba(255,255,255,0.05);">
                <p style="font-style:italic;">"Amazing experience! Loved the test drive event and the attention to
                    detail. Truly luxurious."</p>
                <h4 style="color:#ff9900; margin-top:15px;">— Priya Mehta</h4>
            </div>
            <div
                style="background:#1e1e1e; border-radius:15px; padding:25px; max-width:300px; color:#f0f0f0; box-shadow:0 4px 10px rgba(255,255,255,0.05);">
                <p style="font-style:italic;">"I got my Aprilia RSV4 from Auto Lux and the process was effortless.
                    Smooth ride and unmatched service!"</p>
                <h4 style="color:#ff9900; margin-top:15px;">— Shivaay Singh Oberoi</h4>
            </div>
        </div>
    </section>

    <!-- Popup Overlay -->
    <div id="popup-overlay" style="display: none;">
        <div id="popup-content">
            <span class="close-btn">&times;</span>
            <div id="popup-body">
                <?php include('popup.php') ?>
            </div>
        </div>
    </div>

    <script>
        const faders = document.querySelectorAll('.fade-in');
        const appearOptions = { threshold: 0.1, rootMargin: "0px 0px -50px 0px" };
        const appearOnScroll = new IntersectionObserver(function (entries, appearOnScroll) {
            entries.forEach(entry => {
                if (!entry.isIntersecting) return;
                entry.target.style.animationPlayState = "running";
                appearOnScroll.unobserve(entry.target);
            });
        }, appearOptions);
        faders.forEach(fader => { appearOnScroll.observe(fader); });
    </script>

    <script>
        function scrollToContact(e) {
            e.preventDefault();
            const contactSection = document.getElementById("contact");
            const headerOffset = 100;
            const elementPosition = contactSection.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
            window.scrollTo({
                top: offsetPosition,
                behavior: "smooth"
            });
        }
    </script>

    <!-- footer -->
    <footer class="main-footer">
        <div class="footer-content">
            <!-- Auto Lux Description -->
            <div class="footer-section">
                <img src="logo.jpg" alt="Auto Lux Logo" class="logo-img">
                <h3>Auto Lux</h3>
                <p>
                    Where luxury meets performance — your ultimate destination for elite cars and bikes.
                </p>
                <p class="hours">
                    <strong>Hours:</strong><br>Mon – Sun: 8:00 AM – 10:00 PM
                </p>
            </div>
            <!-- Quick Links -->
            <div class="footer-section footer-links">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="car.php">Cars</a></li>
                    <li><a href="bike.php">Bikes</a></li>
                    <li><a href="limited edition.php">Limited editions</a></li>
                    <li><a href="about us.php">About us</a></li>
                    <li><a href="policy.php">Terms & Policies</a></li>
                    <li><a href="contact.php">Contact us</a></li>
                </ul>
            </div>
            <!-- Contact -->
            <div class="footer-section">
                <h4>Contact Us</h4>
                <p>Email: <a href="mailto:autolux@gmail.com">autolux@gmail.com</a></p>
                <p>Phone: +91 98765 43210</p>
                <p>Location: Auto Lux Showroom, MG Road, Mumbai</p>
                <div class="social-links">
                    <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" title="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <b>&copy; 2025 Auto Lux. All rights reserved.</b>
        </div>
    </footer>

</body>

</html>