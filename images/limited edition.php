<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Limited Editions | Auto Lux</title>
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
        }

        nav a:hover {
            color: #ff9900;
        }

        .section {
            padding: 80px 20px;
            background: #121212;
            text-align: center;
        }

        .section h2 {
            color: #ff9900;
            font-size: 36px;
            margin-bottom: 50px;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }

        .card {
            background: #1e1e1e;
            border-radius: 15px;
            width: 300px;
            overflow: hidden;
            transition: transform 0.3s ease;
            box-shadow: 0 4px 10px rgba(255,255,255,0.05);
            position: relative;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(255, 153, 0, 0.3);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card h3 {
            color: #ff9900;
            font-size: 22px;
            margin: 15px 0 10px;
        }

        .card p {
            padding: 0 15px 20px;
            font-size: 14px;
            font-weight: 300;
        }

        /* --- Overlay Button --- */
        .overlay-specs {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: rgba(255, 153, 0, 0.85);
            color: #000;
            font-weight: 600;
            text-align: center;
            padding: 10px 0;
            font-size: 14px;
            transition: transform 0.3s ease;
            transform: translateY(100%);
            border-radius: 0 0 15px 15px;
            pointer-events: none;
        }

        .card:hover .overlay-specs {
            transform: translateY(0);
        }

        @media screen and (max-width: 768px) {
            .card {
                width: 90%;
            }

            .overlay-specs {
                transform: translateY(0);
            }
        }

        footer {
            background: #111;
            color: #fff;
            text-align: center;
            padding: 20px;
            font-weight: 300;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
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


        .cta-button {
            background: linear-gradient(to right, #ff9900, #ff6600);
            padding: 15px 30px;
            border-radius: 30px;
            color: #000;
            font-weight: bold;
            text-decoration: none;
            transition: background 0.4s ease, transform 0.2s ease;
        }

        .cta-button:hover {
            background: linear-gradient(to right, #ff6600, #ff3300);
            transform: scale(1.05);
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
<!-- Header -->
<?php include('header.php')?>

<!--Hero Section -->
<section class="hero-section" style="background: url('limited-hero.jpg') center/cover no-repeat; height: 90vh; display: flex; align-items: center; justify-content: center; position: relative; text-align: center; color: #fff; overflow: hidden;">
    <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.6); z-index: 1;"></div>
    <div style="z-index: 2; padding: 0 20px; max-width: 800px;">
        <h1 style="font-size: 60px; color: #ff9900; margin-bottom: 20px;">Limited Editions</h1>
        <p style="font-size: 20px; margin-bottom: 40px; font-weight: 300;">Discover the most exclusive cars and bikes — crafted for the few, not the many.</p>
        <a href="#limited-editions" class="cta-button">Explore Now</a>
    </div>
</section>

<!-- Limited Edition Cars -->
<section class="section fade-in fade-delay-1" id="limited-editions">
    <h2>Limited Edition Cars</h2>
    <div class="card-container">
        <div class="card" onclick="toggleSpecs(this)">
            <img src="https://i.pinimg.com/1200x/01/74/54/01745452b0fd7d1a9ceae5872786a6f0.jpg" alt="Lykan Hypersport" />
            <div class="overlay-specs">Tap to view specs</div>
            <h3>Lykan Hypersport</h3>
            <p>Diamond headlights and a roaring twin-turbo engine—luxury meets extreme speed.</p>
            <div class="specs">
                <ul>
                    <li>Engine: 3.7L Twin-Turbo Flat-6</li>
                    <li>Power: 780 HP</li>
                    <li>Price: $3.4 million</li>
                    <li>Top Speed: 245 mph</li>
                    <li>Fuel Capacity: 21.1 gallons</li>
                    <li>Transmission: 6-speed dual-clutch</li>
                </ul>
            </div>
        </div>
        <div class="card" onclick="toggleSpecs(this)">
            <img src="https://i.pinimg.com/1200x/b1/97/0d/b1970d55a9b7b2915066a0e32322d029.jpg" alt="McLaren Sabre" />
            <div class="overlay-specs">Tap to view specs</div>
            <h3>McLaren Sabre</h3>
            <p>Designed for the U.S. elite—radical aerodynamics and hybrid power unleashed.</p>
            <div class="specs">
                <ul>
                    <li>Engine: 4.0L Twin-Turbo V8</li>
                    <li>Power: 824 HP</li>
                    <li>Price: $3.5 million</li>
                    <li>Top Speed: 218 mph</li>
                    <li>Fuel Capacity: 19.5 gallons</li>
                    <li>Transmission: 7-speed dual-clutch</li>
                </ul>
            </div>
        </div>
        <div class="card" onclick="toggleSpecs(this)">
            <img src="https://i.pinimg.com/1200x/82/f0/0c/82f00c05987106b2246235d91fc8ce0c.jpg" alt="Bugatti La Voiture Noire" />
            <div class="overlay-specs">Tap to view specs</div>
            <h3>Bugatti La Voiture Noire</h3>
            <p>A tribute to exclusivity—only one built, cloaked in carbon and mystery.</p>
            <div class="specs">
                <ul>
                    <li>Engine: 8.0L Quad-Turbo W16</li>
                    <li>Power: 1500 HP</li>
                    <li>Price: $18.7 million</li>
                    <li>Top Speed: 261 mph</li>
                    <li>Fuel Capacity: 26.4 gallons</li>
                    <li>Transmission: 7-speed dual-clutch</li>
                </ul>
            </div>
        </div>
        <div class="card" onclick="toggleSpecs(this)">
            <img src="https://i.pinimg.com/736x/4a/dc/68/4adc6814547ed92043d5c7d181c1d226.jpg" alt="Koenigsegg Jesko Absolut" />
            <div class="overlay-specs">Tap to view specs</div>
            <h3>Koenigsegg Jesko Absolut</h3>
            <p>The fastest Koenigsegg ever—engineered for pure top-speed performance.</p>
            <div class="specs">
                <ul>
                    <li>Engine: 5.0L Twin-Turbo V8</li>
                    <li>Power: 1600 HP</li>
                    <li>Price: $3 million</li>
                    <li>Top Speed: 330+ mph (estimated)</li>
                    <li>Fuel Capacity: 23.7 gallons</li>
                    <li>Transmission: 9-speed multi-clutch</li>
                </ul>
            </div>
        </div>
        <div class="card" onclick="toggleSpecs(this)">
            <img src="https://i.pinimg.com/736x/22/91/29/2291298258834b06f0956d6c2ca898e3.jpg" alt="Aston Martin V12 Speedster" />
            <div class="overlay-specs">Tap to view specs</div>
            <h3>Aston Martin V12 Speedster</h3>
            <p>An open-cockpit thrill machine—classic design meets modern muscle.</p>
            <div class="specs">
                <ul>
                    <li>Engine: 5.2L Twin-Turbo V12</li>
                    <li>Power: 700 HP</li>
                    <li>Price: $950,000</li>
                    <li>Top Speed: 186 mph</li>
                    <li>Fuel Capacity: 18.5 gallons</li>
                    <li>Transmission: 8-speed automatic</li>
                </ul>
            </div>
        </div>
        <div class="card" onclick="toggleSpecs(this)">
    <img src="https://i.pinimg.com/1200x/63/b0/43/63b04376a9d4dc7568dde5a926ed3564.jpg" alt="Pagani Huayra Roadster BC" />
    <div class="overlay-specs">Tap to view specs</div>
    <h3>Pagani Huayra Roadster BC</h3>
    <p>Lightweight, artistic, and brutally powerful—crafted for those who demand perfection.</p>
    <div class="specs">
        <ul>
            <li>Engine: 6.0L Twin-Turbo V12</li>
            <li>Power: 791 HP</li>
            <li>Price: $3.5 million</li>
            <li>Top Speed: 236 mph</li>
            <li>Fuel Capacity: 19 gallons</li>
            <li>Transmission: 7-speed sequential gearbox</li>
        </ul>
    </div>
</div>
<div class="card" onclick="toggleSpecs(this)">
    <img src="https://i.pinimg.com/736x/2d/bb/21/2dbb21c25442c721d9d418abdb276d1b.jpg" alt="Lamborghini Veneno Roadster" />
    <div class="overlay-specs">Tap to view specs</div>
    <h3>Lamborghini Veneno Roadster</h3>
    <p>One of the rarest Lamborghinis ever—designed for aerodynamic perfection and speed.</p>
    <div class="specs">
        <ul>
            <li>Engine: 6.5L V12</li>
            <li>Power: 750 HP</li>
            <li>Price: $4.5 million</li>
            <li>Top Speed: 221 mph</li>
            <li>Fuel Capacity: 22.5 gallons</li>
            <li>Transmission: 7-speed ISR automated manual</li>
        </ul>
    </div>
</div>
    </div>
</section>

<!-- Limited Edition Bikes -->
<section class="section fade-in fade-delay-1">
    <h2>Limited Edition Bikes</h2>
    <div class="card-container">
        <div class="card" onclick="toggleSpecs(this)">
            <img src="https://i.pinimg.com/1200x/7e/f1/9b/7ef19b21284a18e89d6d19779dcba2bc.jpg" alt="Arch Method 143" />
            <div class="overlay-specs">Tap to view specs</div>
            <h3>Arch Method 143</h3>
            <p>Carbon fiber body, futuristic styling—built in limited numbers for custom riders.</p>
            <div class="specs">
                <ul>
                    <li>Engine: 2343cc V-Twin</li>
                    <li>Power: ~170 HP</li>
                    <li>Price: $90,000+</li>
                    <li>Top Speed: 135 mph</li>
                    <li>Fuel Capacity: 17 liters</li>
                    <li>Transmission: 6-speed</li>
                </ul>
            </div>
        </div>
        <div class="card" onclick="toggleSpecs(this)">
            <img src="https://i.pinimg.com/1200x/cf/df/30/cfdf30cd884bc9f9993c3160d0be48c8.jpg" alt="Norton V4 SS" />
            <div class="overlay-specs">Tap to view specs</div>
            <h3>Norton V4 SS</h3>
            <p>British superbike legend—race-derived power with a hand-polished finish.</p>
            <div class="specs">
                <ul>
                    <li>Engine: 1200cc V4</li>
                    <li>Power: 200 HP</li>
                    <li>Price: $56,000</li>
                    <li>Top Speed: 175 mph</li>
                    <li>Fuel Capacity: 16 liters</li>
                    <li>Transmission: 6-speed</li>
                </ul>
            </div>
        </div>
        <div class="card" onclick="toggleSpecs(this)">
            <img src="https://i.pinimg.com/736x/30/b9/b8/30b9b85636755dfe905962947faf90c5.jpg" alt="Confederate Wraith" />
            <div class="overlay-specs">Tap to view specs</div>
            <h3>Confederate Wraith</h3>
            <p>Industrial art on wheels—raw aluminum frame and unmatched torque.</p>
            <div class="specs">
                <ul>
                    <li>Engine: 1966cc V-Twin</li>
                    <li>Power: 125 HP</li>
                    <li>Price: $155,000</li>
                    <li>Top Speed: 140 mph</li>
                    <li>Fuel Capacity: 18 liters</li>
                    <li>Transmission: 5-speed</li>
                </ul>
            </div>
        </div>
        <div class="card" onclick="toggleSpecs(this)">
            <img src="https://i.pinimg.com/1200x/d1/ca/e3/d1cae37824048af9aca7aa1934f19ecf.jpg" alt="Ducati Diavel Lamborghini" />
            <div class="overlay-specs">Tap to view specs</div>
            <h3>Ducati Diavel Lamborghini</h3>
            <p>Inspired by the Sián FKP 37, this fusion of supercar and superbike is breathtaking.</p>
            <div class="specs">
                <ul>
                    <li>Engine: 1262cc V-Twin</li>
                    <li>Power: 162 HP</li>
                    <li>Price: $31,995</li>
                    <li>Top Speed: 169 mph</li>
                    <li>Fuel Capacity: 17 liters</li>
                    <li>Transmission: 6-speed</li>
                </ul>
            </div>
        </div>
        <div class="card" onclick="toggleSpecs(this)">
            <img src="https://i.pinimg.com/1200x/63/78/cb/6378cb2305a14028df9cd0e020627f45.jpg" alt="BMW R18 The Crown" />
            <div class="overlay-specs">Tap to view specs</div>
            <h3>BMW R18 The Crown</h3>
            <p>Custom crown-inspired design, built to celebrate BMW Motorrad’s heritage.</p>
            <div class="specs">
                <ul>
                    <li>Engine: 1802cc Boxer Twin</li>
                    <li>Power: 91 HP</li>
                    <li>Price: $25,000 (est.)</li>
                    <li>Top Speed: 110 mph</li>
                    <li>Fuel Capacity: 20 liters</li>
                    <li>Transmission: 6-speed</li>
                </ul>
            </div>
        </div>
        <div class="card" onclick="toggleSpecs(this)">
    <img src="https://i.pinimg.com/736x/bb/37/c4/bb37c4009f374cc4b1966a0c50f25046.jpg" alt="Lazareth LM 847" />
    <div class="overlay-specs">Tap to view specs</div>
    <h3>Lazareth LM 847</h3>
    <p>A wild fusion of bike and car—4 wheels, Maserati V8 power, and stunning aggression.</p>
    <div class="specs">
        <ul>
            <li>Engine: 4.7L Maserati V8</li>
            <li>Power: 470 HP</li>
            <li>Price: $100,000+</li>
            <li>Top Speed: 185 mph</li>
            <li>Fuel Capacity: 22 liters</li>
            <li>Transmission: Single-speed hydraulic</li>
        </ul>
    </div>
</div>
<div class="card" onclick="toggleSpecs(this)">
    <img src="https://i.pinimg.com/736x/d7/6e/19/d76e19428f5bfff050c9cf60372c4b5b.jpg" alt="MV Agusta F4 LH44" />
    <div class="overlay-specs">Tap to view specs</div>
    <h3>MV Agusta F4 LH44</h3>
    <p>A collaboration with Lewis Hamilton—limited to 44 units, blending art and performance.</p>
    <div class="specs">
        <ul>
            <li>Engine: 998cc Inline-4</li>
            <li>Power: 212 HP</li>
            <li>Price: $70,000</li>
            <li>Top Speed: 186+ mph</li>
            <li>Fuel Capacity: 17 liters</li>
            <li>Transmission: 6-speed cassette-style</li>
        </ul>
    </div>
</div>

    </div>
</section>

<!-- About Section -->
<section class="section fade-in fade-delay-2" style="background:#101010;">
    <h2>About Auto Lux</h2>
    <div style="max-width: 900px; margin: 0 auto; font-size: 16px; font-weight: 300; line-height: 1.8;">
        <p><strong>Auto Lux</strong> is dedicated to curating the finest selection of <strong>limited edition cars and bikes</strong> for discerning enthusiasts. Each vehicle in our collection is a rare masterpiece — often produced in extremely low numbers and crafted with the highest attention to detail.</p>
        <p>We don’t just offer transportation — we offer rolling art and engineering brilliance. From bespoke supercars to exclusive superbikes, our lineup is tailored for collectors, thrill-seekers, and connoisseurs of rarity.</p>
        <p>At Auto Lux, every limited edition is more than a machine — it’s a statement of individuality, legacy, and performance that stands apart from the crowd.</p>
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

<!-- Footer -->
<?php include('footer.php')?>

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


</body>
</html>
