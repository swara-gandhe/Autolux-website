<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Cars | Auto Lux</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet" />
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

        header {
            background-color: #111;
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 10;
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
            transition: color 0.3s, text-shadow 0.3s;
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

        nav a:hover {
            color: #ff9900;
            text-shadow: 0 0 5px #ff9900;
        }

        nav a:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero {
            background: url('hero-bg.jpg') center/cover no-repeat;
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0,0,0,0.6);
            z-index: 1;
        }

        .hero-content {
            z-index: 2;
            max-width: 800px;
            padding: 0 20px;
        }

        .hero h1 {
            font-size: 64px;
            color: #ff9900;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 40px;
        }

        .hero-video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 0;
}

        .cta-button {
            background: linear-gradient(to right, #ff9900, #ff6600);
            padding: 15px 30px;
            border-radius: 30px;
            color: #000;
            font-weight: bold;
            text-decoration: none;
            transition: background 0.4s ease;
            display: inline-block;
        }

        .cta-button:hover {
            background: linear-gradient(to right, #ffcc00, #ff9900);
        }


        /* Features Section */
        .features {
            text-align: center;
            padding: 80px 20px;
            background: #121212;
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
            box-shadow: 0 4px 10px rgba(255,255,255,0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
            cursor: pointer;
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

        /* Hover message on boxes */
        .box::before {
            content: "Tap to view specs";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: rgba(255,153,0,0.8);
            color: #000;
            text-align: center;
            padding: 8px 0;
            transform: translateY(100%);
            transition: transform 0.3s ease;
            font-weight: 600;
            border-radius: 0 0 15px 15px;
            pointer-events: none;
        }

        .box:hover::before {
            transform: translateY(0%);
        }

        /* About Section */
        .about {
            display: flex;
            flex-wrap: wrap;
            padding: 80px 50px;
            background: #181818;
            align-items: center;
            justify-content: center;
        }

        .about-img img {
            width: 500px;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.4);
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
            margin-bottom: 20px;
        }

        /* Footer */
        footer {
            background: #111;
            color: #fff;
            text-align: center;
            padding: 20px;
            font-weight: 300;
        }

        /* Fade-in animation */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        

        /* Responsive */
        @media screen and (max-width: 768px) {
            .about {
                flex-direction: column;
                padding: 50px 20px;
                text-align: center;
            }

            .about-text {
                padding-left: 0;
                margin-top: 30px;
            }

            .box {
                width: 90%;
            }

            .about-img img {
                width: 100%;
                max-width: 400px;
            }

            .hero h1 {
                font-size: 42px;
            }
            .hero p {
                font-size: 16px;
            }
        }
footer {
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

footer:hover {
    background: linear-gradient(135deg, #ffb84d, #ff3300);
    box-shadow: 0 0 30px 6px rgba(255, 102, 0, 0.9);
}

footer h3, footer h4 {
    color: #000000;
    text-shadow: 0 0 8px #ff9900;
}

footer p, footer a {
    color: #000000;
    text-shadow: 0 0 5px #ff9900;
}

footer a:hover {
    color: #000000;
    text-decoration: underline;
}


.social-links a {
    display: inline-block;
    margin: 0 15px;
    color:#000000;
    text-decoration: none;
    font-size: 18px;
    transition: color 0.3s ease;
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

@media screen and (max-width: 768px) {
    .hero {
        margin-top: 120px;
    }
}
.specs {
    max-height: 0;
    overflow: hidden;
    padding: 0 15px;
    margin-top: 0;
    background: rgba(255, 153, 0, 0.1);
    border-radius: 10px;
    font-size: 14px;
    text-align: left;
    transition: max-height 0.4s ease, padding 0.3s ease, margin-top 0.3s ease;
}

.specs.open {
    max-height: 500px; /* adjust if needed */
    padding: 15px;
    margin-top: 15px;
}

.specs ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.specs li {
    margin-bottom: 8px;
}


@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}
.feature-boxes > .box:nth-last-child(2):nth-child(odd),
.feature-boxes > .box:nth-last-child(1):nth-child(odd) {
    grid-column: 2 / span 2; /* Center the last 2 if they’re alone in a row */
    justify-self: center;
}
@media screen and (max-width: 768px) {
    .feature-boxes {
        grid-template-columns: 1fr;
    }
}
@media screen and (max-width: 768px) {
    .feature-boxes {
        grid-template-columns: 1fr;
    }
}

</style>
</head>
<body>
<?php include('header.php')?>

<!-- Hero Section -->
<section class="hero">
    <video autoplay muted loop playsinline class="hero-video">
        <source src="https://v1.pinimg.com/videos/mc/720p/0d/26/c0/0d26c08d0f31b8ae758a35a19dd2848f.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="hero-content">
        <h1>Drive the Dream</h1>
        <p>Explore our curated collection of the world's finest cars.</p>
        <a href="#car-section" class="cta-button">Explore Now</a>
    </div>
</section>


<!-- Features Section -->
 <section id="car-section" class="features fade-in fade-delay-1">
    <h2>Luxury Cars</h2>
<div class="feature-boxes">
    <div class="box fade-in fade-delay-1" onclick="toggleSpecs(this)">
        <img src="https://i.pinimg.com/736x/9f/6f/c1/9f6fc1f2a5568eae24d1a8c12a50a713.jpg" alt="Lamborghini Huracán" />
        <h3>Lamborghini Huracán</h3>
        <p>Experience Italian engineering with V10 power, sleek design, and unmatched performance.</p>
        <div class="specs">
            <ul>
                <li><strong>Engine:</strong> 5.2L V10</li>
                <li><strong>Horsepower:</strong> 610 HP</li>
                <li><strong>0–100 km/h:</strong> 3.2 seconds</li>
                <li><strong>Top Speed:</strong> 325 km/h</li>
                <li><strong>Price:</strong> $210,000</li>
            </ul>
        </div>
    </div>

    <div class="box fade-in fade-delay-2" onclick="toggleSpecs(this)">
        <img src="https://i.pinimg.com/1200x/8e/4e/6e/8e4e6ef2c6cc18231ef9c5abdbeb8ce9.jpg" alt="Ferrari 488 GTB" />
        <h3>Ferrari 488 GTB</h3>
        <p>Precision meets passion. This turbocharged beast is built for adrenaline seekers.</p>
        <div class="specs">
            <ul>
                <li><strong>Engine:</strong> 3.9L Twin-Turbo V8</li>
                <li><strong>Horsepower:</strong> 661 HP</li>
                <li><strong>0–100 km/h:</strong> 3.0 seconds</li>
                <li><strong>Top Speed:</strong> 330 km/h</li>
                <li><strong>Price:</strong> $250,000</li>
            </ul>
        </div>
    </div>

    <div class="box fade-in fade-delay-3" onclick="toggleSpecs(this)">
        <img src="https://i.pinimg.com/736x/fa/08/cb/fa08cb7f082f866e3d4d3c918ca3b52d.jpg" alt="Rolls-Royce Ghost" />
        <h3>Rolls-Royce Ghost</h3>
        <p>The pinnacle of luxury. Travel in silence and elegance with handcrafted comfort.</p>
        <div class="specs">
            <ul>
                <li><strong>Engine:</strong> 6.75L V12 Twin-Turbo</li>
                <li><strong>Horsepower:</strong> 563 HP</li>
                <li><strong>0–100 km/h:</strong> 4.8 seconds</li>
                <li><strong>Top Speed:</strong> 250 km/h (limited)</li>
                <li><strong>Price:</strong> $315,000</li>
            </ul>
        </div>
    </div>

    <div class="box fade-in fade-delay-3" onclick="toggleSpecs(this)">
        <img src="https://i.pinimg.com/736x/07/8f/b6/078fb61e97491766a8e5eac61a1f5b9b.jpg" alt="Porsche 911 Turbo S" />
        <h3>Porsche 911 Turbo S</h3>
        <p>Timeless design with modern power. A true driver’s machine with track-level capability.</p>
        <div class="specs">
            <ul>
                <li><strong>Engine:</strong> 3.8L Twin-Turbo Flat-6</li>
                <li><strong>Horsepower:</strong> 640 HP</li>
                <li><strong>0–100 km/h:</strong> 2.7 seconds</li>
                <li><strong>Top Speed:</strong> 330 km/h</li>
                <li><strong>Price:</strong> $207,000</li>
            </ul>
        </div>
    </div>

    <div class="box fade-in fade-delay-1" onclick="toggleSpecs(this)">
        <img src="https://i.pinimg.com/1200x/b6/c1/ca/b6c1ca948d05999e019c534009b74a4a.jpg" alt="Bentley Continental GT" />
        <h3>Bentley Continental GT</h3>
        <p>Refined British craftsmanship meets muscular performance in this grand tourer.</p>
        <div class="specs">
            <ul>
                <li><strong>Engine:</strong> 6.0L W12 Twin-Turbo</li>
                <li><strong>Horsepower:</strong> 626 HP</li>
                <li><strong>0–100 km/h:</strong> 3.7 seconds</li>
                <li><strong>Top Speed:</strong> 333 km/h</li>
                <li><strong>Price:</strong> $220,000</li>
            </ul>
        </div>
    </div>

    <div class="box fade-in fade-delay-2" onclick="toggleSpecs(this)">
        <img src="https://i.pinimg.com/736x/6c/bc/7f/6cbc7fa750a445534f3877251afa835b.jpg" alt="Mercedes-AMG GT" />
        <h3>Mercedes-AMG GT</h3>
        <p>Sleek and aggressive, the AMG GT combines German precision with raw V8 power.</p>
        <div class="specs">
            <ul>
                <li><strong>Engine:</strong> 4.0L Twin-Turbo V8</li>
                <li><strong>Horsepower:</strong> 577 HP</li>
                <li><strong>0–100 km/h:</strong> 3.6 seconds</li>
                <li><strong>Top Speed:</strong> 319 km/h</li>
                <li><strong>Price:</strong> $165,000</li>
            </ul>
        </div>
    </div>

    <div class="box fade-in fade-delay-3" onclick="toggleSpecs(this)">
        <img src="https://i.pinimg.com/736x/a9/e7/3d/a9e73d32f95f6a46dd307455abee16cb.jpg" alt="McLaren 720S" />
        <h3>McLaren 720S</h3>
        <p>A superlight, high-performance machine born for the track and the road.</p>
        <div class="specs">
            <ul>
                <li><strong>Engine:</strong> 4.0L Twin-Turbo V8</li>
                <li><strong>Horsepower:</strong> 710 HP</li>
                <li><strong>0–100 km/h:</strong> 2.8 seconds</li>
                <li><strong>Top Speed:</strong> 341 km/h</li>
                <li><strong>Price:</strong> $300,000</li>
            </ul>
        </div>
    </div>

    <div class="box fade-in fade-delay-1" onclick="toggleSpecs(this)">
        <img src="https://i.pinimg.com/736x/22/91/29/2291298258834b06f0956d6c2ca898e3.jpg" alt="Aston Martin DB11" />
        <h3>Aston Martin DB11</h3>
        <p>Luxury and legacy blend seamlessly in this British masterpiece of design and speed.</p>
        <div class="specs">
            <ul>
                <li><strong>Engine:</strong> 5.2L V12 Twin-Turbo</li>
                <li><strong>Horsepower:</strong> 630 HP</li>
                <li><strong>0–100 km/h:</strong> 3.9 seconds</li>
                <li><strong>Top Speed:</strong> 322 km/h</li>
                <li><strong>Price:</strong> $205,000</li>
            </ul>
        </div>
    </div>

    <div class="box fade-in fade-delay-2" onclick="toggleSpecs(this)">
        <img src="https://i.pinimg.com/736x/2c/c2/93/2cc29322097794a1a6f98fa6eb7af77b.jpg" alt="Audi R8 V10 Plus" />
        <h3>Audi R8 V10 Plus</h3>
        <p>Unleash raw power with Audi’s flagship supercar, combining quattro control and elegance.</p>
        <div class="specs">
            <ul>
                <li><strong>Engine:</strong> 5.2L V10</li>
                <li><strong>Horsepower:</strong> 610 HP</li>
                <li><strong>0–100 km/h:</strong> 3.2 seconds</li>
                <li><strong>Top Speed:</strong> 330 km/h</li>
                <li><strong>Price:</strong> $195,000</li>
            </ul>
        </div>
    </div>

    <div class="box fade-in fade-delay-3" onclick="toggleSpecs(this)">
        <img src="https://i.pinimg.com/736x/b5/e5/97/b5e59780480f6d2123c464cb8d1c474e.jpg" alt="Chevrolet Corvette Z06" />
        <h3>Chevrolet Corvette Z06</h3>
        <p>American muscle redefined with race-ready engineering and iconic design.</p>
        <div class="specs">
            <ul>
                <li><strong>Engine:</strong> 5.5L Flat-Plane V8</li>
                <li><strong>Horsepower:</strong> 670 HP</li>
                <li><strong>0–100 km/h:</strong> 2.6 seconds</li>
                <li><strong>Top Speed:</strong> 315 km/h</li>
                <li><strong>Price:</strong> $120,000</li>
            </ul>
        </div>
    </div>

    <div class="box fade-in fade-delay-1" onclick="toggleSpecs(this)">
    <img src="https://i.pinimg.com/1200x/c4/67/b9/c467b9044b75bf41b4153502bad9555b.jpg" alt="Bugatti Chiron" />
    <h3>Bugatti Chiron</h3>
    <p>Engineering perfection. The ultimate hypercar that redefines speed and opulence.</p>
    <div class="specs">
        <ul>
            <li><strong>Engine:</strong> 8.0L Quad-Turbo W16</li>
            <li><strong>Horsepower:</strong> 1,479 HP</li>
            <li><strong>0–100 km/h:</strong> 2.4 seconds</li>
            <li><strong>Top Speed:</strong> 420 km/h (electronically limited)</li>
            <li><strong>Price:</strong> $3,000,000</li>
        </ul>
    </div>
</div>

<div class="box fade-in fade-delay-2" onclick="toggleSpecs(this)">
    <img src="https://i.pinimg.com/1200x/7b/c6/66/7bc666902ab2143e669c5f8795bc6b55.jpg" alt="Lexus LC 500" />
    <h3>Lexus LC 500</h3>
    <p>A blend of luxury, technology, and naturally aspirated V8 power wrapped in elegance.</p>
    <div class="specs">
        <ul>
            <li><strong>Engine:</strong> 5.0L V8</li>
            <li><strong>Horsepower:</strong> 471 HP</li>
            <li><strong>0–100 km/h:</strong> 4.4 seconds</li>
            <li><strong>Top Speed:</strong> 270 km/h</li>
            <li><strong>Price:</strong> $95,000</li>
        </ul>
    </div>
</div>
</div>
</section>

<!-- About Section -->
<section class="about fade-in fade-delay-2">
    <div class="about-img">
        <img src="https://i.pinimg.com/736x/cc/f5/be/ccf5be1c45f9ad50e58bdf15925df357.jpg" alt="Auto Lux Experience" />
    </div>
    <div class="about-text">
        <h2>The Auto Lux car Experience</h2>
        <p>At Auto Lux, we don't just sell cars — we craft experiences. Imagine stepping into a world where precision engineering meets personalized luxury. Whether you're chasing the roar of a V10 on an open highway or the quiet elegance of handcrafted interiors, we bring you closer to the extraordinary.</p>
        <p>From private test drives to VIP unveilings of the world’s most exclusive models, every touchpoint with Auto Lux is curated for thrill-seekers, collectors, and connoisseurs alike. Our experts ensure every detail is perfected — because luxury isn't just a look, it's a lifestyle.</p>
    </div>
</section>

<!-- Popup Overlay -->
<div id="popup-overlay" style="display: none;">
    <div id="popup-content">
        <span class="close-btn">&times;</span>
        <div id="popup-body">
            <?php include('popup.php')?>
        </div>
    </div>
</div>

<script>
    const faders = document.querySelectorAll('.fade-in');
    const appearOptions = { threshold: 0.1, rootMargin: "0px 0px -50px 0px" };
    const appearOnScroll = new IntersectionObserver(function(entries, observer) {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            entry.target.style.animationPlayState = "running";
            observer.unobserve(entry.target);
        });
    }, appearOptions);
    faders.forEach(fader => appearOnScroll.observe(fader));
</script>

<script>
    function toggleSpecs(currentBox) {
    const currentSpecs = currentBox.querySelector('.specs');
    currentSpecs.classList.toggle('open');
}

</script>
<script>
    const sections = document.querySelectorAll("section");
    const observerOptions = {
        root: null,
        rootMargin: "0px",
        threshold: 0.6 // triggers when ~60% of a section is visible
    };

    const sectionObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Close all open specs when entering a new section
                document.querySelectorAll('.specs.open').forEach(spec => {
                    spec.classList.remove('open');
                });
            }
        });
    }, observerOptions);

    sections.forEach(section => {
        sectionObserver.observe(section);
    });
</script>
<!--footer-->
<?php include('footer.php')?>
</body>
</html>