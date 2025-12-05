<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Bikes | Auto Lux</title>
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
            background: url('hero-bg-bikes.jpg') center/cover no-repeat;
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
</style>
</head>
<body>

<!--header-->
<?php include('header.php')?>

<!-- Hero Section -->
<section class="hero">
  <video autoplay muted loop playsinline class="hero-video">
        <source src="https://v1.pinimg.com/videos/mc/720p/58/d4/2d/58d42d2058f2257d98877d67696b7888.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="hero-content">
        <h1>Ride the Future</h1>
        <p>Discover the ultimate collection of luxury and performance bikes.</p>
        <a href="#bikes-section" class="cta-button">Explore Now</a>
    </div>
</section>

<!-- Features Section -->
<section id="bikes-section" class="features fade-in fade-delay-1">
  <h2>Luxury Bikes</h2>
  <div class="feature-boxes">
    <div class="box fade-in fade-delay-1" onclick="toggleSpecs(this)">
      <img src="https://i.pinimg.com/736x/8b/c5/76/8bc576f6dc065adc3024be19a484b356.jpg" alt="Ducati Panigale V4" />
      <h3>Ducati Panigale V4</h3>
      <p>Italian superbike engineering with razor-sharp handling and aggressive design.</p>
      <div class="specs">
        <ul>
          <li>Engine: 1103cc V4</li>
          <li>Power: 214 HP</li>
          <li>Price: $28,000</li>
          <li>Top Speed: 186 mph</li>
          <li>Fuel Capacity: 17 liters</li>
          <li>Transmission: 6-speed</li>
        </ul>
      </div>
    </div>

    <div class="box fade-in fade-delay-2" onclick="toggleSpecs(this)">
      <img src="https://i.pinimg.com/1200x/06/28/06/0628069b396cea1ed9dc7b0e4268f163.jpg" alt="Harley-Davidson Street Glide" />
      <h3>Harley-Davidson Street Glide</h3>
      <p>Classic American cruiser with a powerful V-twin engine and iconic style.</p>
      <div class="specs">
        <ul>
          <li>Engine: Milwaukee-Eight 107 V-twin</li>
          <li>Power: 90 HP</li>
          <li>Price: $23,000</li>
          <li>Top Speed: 110 mph</li>
          <li>Fuel Capacity: 22 liters</li>
          <li>Transmission: 6-speed</li>
        </ul>
      </div>
    </div>

    <div class="box fade-in fade-delay-3" onclick="toggleSpecs(this)">
      <img src="https://i.pinimg.com/1200x/9a/32/02/9a320274c5c3e162c4fa7a9341d781ef.jpg" alt="BMW S1000RR" />
      <h3>BMW S1000RR</h3>
      <p>Track-ready performance combined with cutting-edge technology and comfort.</p>
      <div class="specs">
        <ul>
          <li>Engine: 999cc Inline-4</li>
          <li>Power: 205 HP</li>
          <li>Price: $17,000</li>
          <li>Top Speed: 188 mph</li>
          <li>Fuel Capacity: 16.5 liters</li>
          <li>Transmission: 6-speed</li>
        </ul>
      </div>
    </div>

    <div class="box fade-in fade-delay-1" onclick="toggleSpecs(this)">
      <img src="https://i.pinimg.com/1200x/bd/31/ff/bd31ff57ee469d93f3f3ec29b2ef8864.jpg" alt="Kawasaki Ninja H2" />
      <h3>Kawasaki Ninja H2</h3>
      <p>Supercharged speed demon with aerodynamic perfection and aggressive stance.</p>
      <div class="specs">
        <ul>
          <li>Engine: 998cc Supercharged Inline-4</li>
          <li>Power: 228 HP</li>
          <li>Price: $29,000</li>
          <li>Top Speed: 209 mph</li>
          <li>Fuel Capacity: 17 liters</li>
          <li>Transmission: 6-speed</li>
        </ul>
      </div>
    </div>

    <div class="box fade-in fade-delay-2" onclick="toggleSpecs(this)">
      <img src="https://i.pinimg.com/736x/01/e7/2e/01e72e035c406095cc4f3e513b56b195.jpg" alt="Yamaha YZF-R1" />
      <h3>Yamaha YZF-R1</h3>
      <p>Inspired by MotoGP, this bike delivers razor-sharp precision and thrilling acceleration.</p>
      <div class="specs">
        <ul>
          <li>Engine: 998cc Inline-4</li>
          <li>Power: 200 HP</li>
          <li>Price: $18,000</li>
          <li>Top Speed: 186 mph</li>
          <li>Fuel Capacity: 17 liters</li>
          <li>Transmission: 6-speed</li>
        </ul>
      </div>
    </div>

    <div class="box fade-in fade-delay-3" onclick="toggleSpecs(this)">
      <img src="https://i.pinimg.com/1200x/5b/16/79/5b1679af9d1e0bba57fb160c15a5edc9.jpg" alt="Triumph Bonneville T120" />
      <h3>Triumph Bonneville T120</h3>
      <p>Retro classic with modern refinement, perfect for stylish city rides and weekend tours.</p>
      <div class="specs">
        <ul>
          <li>Engine: 1200cc Parallel Twin</li>
          <li>Power: 79 HP</li>
          <li>Price: $12,000</li>
          <li>Top Speed: 119 mph</li>
          <li>Fuel Capacity: 14.5 liters</li>
          <li>Transmission: 6-speed</li>
        </ul>
      </div>
    </div>

    <div class="box fade-in fade-delay-1" onclick="toggleSpecs(this)">
      <img src="https://i.pinimg.com/736x/9b/da/06/9bda06c233d3a1cc35ccd0ff93dbf1a5.jpg" alt="Indian Chief Dark Horse" />
      <h3>Indian Chief Dark Horse</h3>
      <p>Powerful cruiser with bold styling and a muscular V-twin engine for the open road.</p>
      <div class="specs">
        <ul>
          <li>Engine: 1811cc V-twin</li>
          <li>Power: 75 HP</li>
          <li>Price: $19,000</li>
          <li>Top Speed: 110 mph</li>
          <li>Fuel Capacity: 18.9 liters</li>
          <li>Transmission: 6-speed</li>
        </ul>
      </div>
    </div>

    <div class="box fade-in fade-delay-2" onclick="toggleSpecs(this)">
      <img src="https://i.pinimg.com/736x/cc/13/39/cc13394a27259c3c4da397cc314d88fd.jpg" alt="Aprilia RSV4" />
      <h3>Aprilia RSV4</h3>
      <p>Superbike excellence with cutting-edge electronics and race-bred performance.</p>
      <div class="specs">
        <ul>
          <li>Engine: 999cc V4</li>
          <li>Power: 201 HP</li>
          <li>Price: $22,000</li>
          <li>Top Speed: 186 mph</li>
          <li>Fuel Capacity: 17 liters</li>
          <li>Transmission: 6-speed</li>
        </ul>
      </div>
    </div>

    <div class="box fade-in fade-delay-3" onclick="toggleSpecs(this)">
      <img src="https://i.pinimg.com/736x/70/01/35/7001352d9d59d57aa83cd66ae7c130be.jpg" alt="Suzuki Hayabusa" />
      <h3>Suzuki Hayabusa</h3>
      <p>Legendary speed and aerodynamic design, built for top-end thrills and long hauls.</p>
      <div class="specs">
        <ul>
          <li>Engine: 1340cc Inline-4</li>
          <li>Power: 197 HP</li>
          <li>Price: $17,000</li>
          <li>Top Speed: 186 mph</li>
          <li>Fuel Capacity: 20 liters</li>
          <li>Transmission: 6-speed</li>
        </ul>
      </div>
    </div>

    <div class="box fade-in fade-delay-1" onclick="toggleSpecs(this)">
      <img src="https://i.pinimg.com/1200x/69/21/1f/69211fbf8e230cf9db8a86cea1d7ab76.jpg" alt="KTM Duke 1290" />
      <h3>KTM Duke 1290</h3>
      <p>Aggressive naked bike with sharp handling and a punchy V-twin engine.</p>
      <div class="specs">
        <ul>
          <li>Engine: 1301cc V-twin</li>
          <li>Power: 177 HP</li>
          <li>Price: $16,000</li>
          <li>Top Speed: 163 mph</li>
          <li>Fuel Capacity: 13.4 liters</li>
          <li>Transmission: 6-speed</li>
        </ul>
      </div>
    </div>
    <div class="box fade-in fade-delay-2" onclick="toggleSpecs(this)">
      <img src="https://i.pinimg.com/1200x/4b/66/d3/4b66d376c1f3c55d3c5b4c0d879e293b.jpg" alt="Suzuki GSX-R1000" />
      <h3>Suzuki GSX-R1000</h3>
      <p>High-performance sportbike with sharp handling and advanced electronics for the track.</p>
      <div class="specs">
        <ul>
          <li>Engine: 999cc Inline-4</li>
          <li>Power: 199 HP</li>
          <li>Price: $15,000</li>
          <li>Top Speed: 186 mph</li>
          <li>Fuel Capacity: 17 liters</li>
          <li>Transmission: 6-speed</li>
        </ul>
      </div>
    </div>
    <div class="box fade-in fade-delay-3" onclick="toggleSpecs(this)">
      <img src="https://i.pinimg.com/736x/c0/85/61/c08561b5f4df4cbb9fa27f493bef830b.jpg" alt="Honda Gold Wing" />
      <h3>Honda Gold Wing</h3>
      <p>Luxury touring bike designed for comfort on long rides with a smooth flat-six engine.</p>
      <div class="specs">
        <ul>
          <li>Engine: 1833cc Flat-Six</li>
          <li>Power: 125 HP</li>
          <li>Price: $28,000</li>
          <li>Top Speed: 124 mph</li>
          <li>Fuel Capacity: 21 liters</li>
          <li>Transmission: 7-speed DCT</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="about fade-in fade-delay-2">
    <div class="about-img">
        <img src="https://i.pinimg.com/1200x/a4/e9/58/a4e958fe7a36bd1292c1f2070e35a35c.jpg" alt="Auto Lux Bikes Experience" />
    </div>
    <div class="about-text">
        <h2>The Auto Lux Bikes Experience</h2>
        <p>At Auto Lux, our passion for bikes matches our dedication to quality. Whether it's the adrenaline rush of a superbike or the soulful ride of a cruiser, our collection offers something special for every rider.</p>
        <p>Experience personalized service, exclusive events, and expert guidance that make every journey unforgettable. Join us and elevate your ride to new heights.</p>
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
