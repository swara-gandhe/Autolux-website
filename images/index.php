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
            top: 0; left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0,0,0,0.5), rgba(0,0,0,0.7));
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
            box-shadow: 0 4px 10px rgba(255,255,255,0.05);
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

@keyframes zoomIn {
    0% {
        opacity: 0;
        transform: scale(0.8);
    }
    100% {
        opacity: 1;
        transform: scale(1);
    }
}

.zoom-in {
    opacity: 0;
    transform: scale(0.8);
    animation: zoomIn 1s ease forwards;
    animation-play-state: paused;
}
.lux-slider {
  position: relative;
  width: 100%;
  height: 80vh;
  background: #000; /* No background image/video */
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
   position: relative;
}

.slider {
  display: flex;
  transition:none;
  width: 100%;
  height: 100%;
}

.slide {
  flex: 0 0 100%;
  text-align: center;
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  position: relative;
}

.overlay-car {
  max-height: 60vh;
  margin-bottom: 20px;
  transition: transform 0.3s ease;
}

.slide:hover .overlay-car {
  transform: scale(1.03);
}

.caption h2 {
  color: #ff9900;
  font-size: 32px;
  margin: 10px 0 5px;
  margin-bottom: 5px;
}

.caption p {
  color: #fff;
  font-size: 18px;
  margin: 0;
}

.caption .subtitle {
  font-size: 18px;
  color: #cccccc;
  margin-bottom: 8px;
  animation: fadeInUp 1.2s ease forwards;
}

/* Navigation Arrows */
.nav {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  font-size: 40px;
  background: rgba(0,0,0,0.5);
  color: white;
  border: none;
  padding: 10px 20px;
  z-index: 3;
  cursor: pointer;
}
.nav:hover {
  background: rgba(255,153,0,0.8);
}
.prev { left: 20px; }
.next { right: 20px; }

.caption h2 {
  animation: fadeInUp 1s ease forwards;
}
.caption p {
  animation: fadeInUp 1.5s ease forwards;
}
.caption .subtitle {
    animation: fadeInUp 1.5s ease forwards;
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
.pagination-dots {
  position: absolute;
  bottom: 10px;
  display: flex;
  justify-content: center;
  width: 100%;
  gap: 10px;
}
.pagination-dots span {
  width: 12px;
  height: 12px;
  background: #fff;
  border-radius: 50%;
  opacity: 0.4;
  cursor: pointer;
  transition: 0.3s ease;
}
.pagination-dots span.active {
  background: #ff9900;
  opacity: 1;
  transform: scale(1.2);
}
.badge {
  position: absolute;
  top: 30px;
  left: 30px;
  background-color: #ff9900;
  color: #000;
  padding: 6px 14px;
  font-weight: bold;
  border-radius: 20px;
  font-size: 14px;
  z-index: 2;
  box-shadow: 0 0 10px rgba(255, 153, 0, 0.6);
}
.rating {
  font-size: 16px;
  font-style: italic;
  color: #ddd;
  margin-top: 5px;
}
.spec-icons {
  display: flex;
  justify-content: center;
  gap: 20px;
  flex-wrap: wrap;
  margin-top: 12px;
}
.spec-icons span {
  background: rgba(255, 255, 255, 0.1);
  padding: 6px 12px;
  border-radius: 12px;
  font-size: 15px;
  color: #f0f0f0;
}

.review-img {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  object-fit: cover;
  margin: 10px auto;
  display: block;
  border: 2px solid #ccc;
}

</style>
</head>
<body>
<!-- header-->
<?php include('header.php')?>

<!-- Hero Section -->
<section class="hero">
    <img src="banner.jpg" alt="Auto Lux Banner">
    <div class="hero-overlay">
        <h1>Welcome to Auto Lux</h1>
        <a href="contact.php" class="cta-button">Contact Us</a>
    </div>
</section>

<!-- Slider -->
<section class="lux-slider">
  <div class="slider" id="slider">
    <div class="slide">
        <div class="badge">⚡ Hyper-EV</div>
      <img src="https://i.pinimg.com/736x/31/73/81/317381ca73d04ee7d937e315b5d123be.jpg" class="overlay-car" alt="Rimac Nevera">
      <div class="caption">
        <h2>Rimac Nevera</h2>
        <p class="subtitle">Electric Hypercar</p>
        <p class="rating">⭐ 5.0 | Top EV of the Year</p>
        <div class="spec-icons">
          <span>⚡ 1,914 hp</span>
          <span>🚀 0–100 km/h in 1.85s</span>
          <span>🔋 412 km Range</span>
        </div>
      </div>
    </div>
    <div class="slide">
        <div class="badge">🏆 Luxury Award</div>
      <img src="https://i.pinimg.com/1200x/fa/42/35/fa4235316e82a61c1e5f1b040f637135.jpg" class="overlay-car" alt="Lucid Air">
      <div class="caption">
        <h2>Lucid Air Dream</h2>
        <p class="subtitle">Luxury Electric Sedan Redefined</p>
        <p class="rating">⭐ 4.9 | Car of the Year 2024</p>
        <div class="spec-icons">
          <span>⚡ 1,111 hp</span>
          <span>🔋 837 km Range</span>
          <span>🚀 0–100 km/h in 2.5s</span>
        </div>
      </div>
    </div>
    <div class="slide">
         <div class="badge">🔥 Limited Edition</div>
      <img src="https://i.pinimg.com/736x/45/78/8f/45788f27346c1cd033b6466649e4aaca.jpg" class="overlay-car" alt="Toyota Supra">
      <div class="caption">
        <h2>GR Supra A91-CF</h2>
        <p class="subtitle">Japanese Performance Icon</p>
        <p class="rating">⭐ 4.7 | Best Sports Coupe</p>
        <div class="spec-icons">
          <span>🏎️ 382 hp</span>
          <span>🧱 Carbon Aero</span>
          <span>🚀 0–100 km/h in 4.1s</span>
        </div>
      </div>
    </div>
    <div class="slide">
        <div class="badge">🏍️ Naked Beast</div>
      <img src="https://i.pinimg.com/736x/b1/02/00/b10200975d96bd97dbec860fa15841ce.jpg" class="overlay-car" alt="MV Agusta">
      <div class="caption">
        <h2>Brutale 1000 RR</h2>
        <p class="subtitle">Naked Superbike With Racing DNA</p>
        <p class="rating">⭐ 4.8 | Track Ready Superbike</p>
        <div class="spec-icons">
          <span>💥 208 hp</span>
          <span>🏁 998cc</span>
          <span>🚀 Top Speed: 300+ km/h</span>
        </div>
      </div>
    </div>
    <div class="slide">
        <div class="badge">🌿 Eco Ride</div>
      <img src="https://i.pinimg.com/736x/12/b7/8c/12b78ca6e23f9bcd5a5878b79407d6f8.jpg" class="overlay-car" alt="Zero SR/F">
      <div class="caption">
        <h2>Zero SR/F</h2>
        <p class="subtitle">The Future of Electric Motorcycling</p>
        <p class="rating">⭐ 4.6 | Green Bike Award</p>
        <div class="spec-icons">
          <span>⚡ 110 hp</span>
          <span>🌀 190 Nm</span>
          <span>🔋 259 km Range</span>
        </div>
      </div>
    </div>
    <div class="slide">
        <div class="badge">💨 Supercharged</div>
      <img src="https://i.pinimg.com/736x/93/55/91/9355918a470756e21fb6dfe2c276b3d1.jpg" class="overlay-car" alt="Bimota Tesi H2">
      <div class="caption">
        <h2>Bimota Tesi H2</h2>
        <p class="subtitle">Supercharged Precision Engineering</p>
        <p class="rating">⭐ 4.9 | Innovation Award</p>
        <div class="spec-icons">
          <span>🌀 231 hp</span>
          <span>💎 Hub Center</span>
          <span>⚙ Supercharged</span>
        </div>
      </div>
    </div>
  </div>
  <div class="pagination-dots" id="dots"></div>
  <button class="nav prev">&#10094;</button>
  <button class="nav next">&#10095;</button>
</section>

<!-- About section -->
<section class="about">
    <div class="about-img">
        <img src="https://i.pinimg.com/736x/c4/bc/d5/c4bcd537659f70128d102d09b36b98e8.jpg" alt="Showroom">
    </div>
    <div class="about-text">
        <h2>About Auto Lux</h2>
        <p>Auto Lux — a luxurious garage with imported cars and bikes, featuring collections from Big Boy Toyz, Fusion Cars, and 9th Gear. We offer custom design elements, luxurious finishes, and stunning displays like rotating platforms. Whether you're a car enthusiast or a bike lover, your perfect import awaits. Our vehicles are sourced from trusted brands and inspected for excellence. Explore speed, style, and status all in one place.</p>
    </div>
</section>

<!-- Features -->
<section id="features" class="features fade-in fade-delay-1">
    <h2>Why Choose Us</h2>
    <div class="feature-boxes">
        <div class="box fade-in fade-delay-1">
            <img src="https://i.pinimg.com/1200x/90/e7/31/90e7313d58d084fe867060ec77338470.jpg" alt="Sports Car">
            <h3>High Performance</h3>
            <p>Premium sports cars with top-tier specs.</p>
        </div>
        <div class="box fade-in fade-delay-2">
            <img src="https://i.pinimg.com/736x/aa/bd/48/aabd48f7d796cbbfe598ad5ae41371dd.jpg" alt="Superbike">
            <h3>Superbikes</h3>
            <p>Imported superbikes that thrill on the road.</p>
        </div>
        <div class="box fade-in fade-delay-3">
            <img src="https://i.pinimg.com/736x/9f/33/e2/9f33e2ac7968b89befd72565f16c2db7.jpg" alt="Luxury">
            <h3>Luxury & Comfort</h3>
            <p>Drive in elegance with luxury imports.</p>
        </div>
    </div>
</section>

<!-- More Features Section -->
<section class="features" style="background:#121212; padding:80px 20px; text-align:center;">
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
<section class="reviews" style="background:#101010; padding: 80px 20px; text-align:center;">
    <h2 style="color:#ff9900; font-size:36px; margin-bottom:50px;">What Our Clients Say</h2>
    <div style="display:flex; justify-content:center; flex-wrap:wrap; gap:30px;">
        <div style="background:#1e1e1e; border-radius:15px; padding:25px; max-width:300px; color:#f0f0f0; box-shadow:0 4px 10px rgba(255,255,255,0.05);">
             <img src="https://i.pinimg.com/736x/6b/b6/d0/6bb6d094147301f3ccce198b6d6179bc.jpg" alt="Rohan M." style="width:60px; height:60px; border-radius:50%; object-fit:cover; margin:15px auto; display:block; border:2px solid #ccc;">
            <span style="color:#ff9900; margin-top:5px;">— Rohan M.</span>
            <p style="font-style:italic;">“Auto Lux gave me the best deal on my dream car. Incredible service!”</p>           
        </div>

        <div style="background:#1e1e1e; border-radius:15px; padding:25px; max-width:300px; color:#f0f0f0; box-shadow:0 4px 10px rgba(255,255,255,0.05);">
         <img src="https://i.pinimg.com/1200x/20/d0/bc/20d0bcc4ae255200d73e3e4de353e1ad.jpg" alt="Neha S." style="width:60px; height:60px; border-radius:50%; object-fit:cover; margin:15px auto; display:block; border:2px solid #ccc;">
            <span style="color:#ff9900; margin-top:5px;">— Neha S.</span>
            <p style="font-style:italic;">“The quality of the bikes is unmatched. I’m in love with my superbike!”</p>
        </div>

        <div style="background:#1e1e1e; border-radius:15px; padding:25px; max-width:300px; color:#f0f0f0; box-shadow:0 4px 10px rgba(255,255,255,0.05);">
        <img src="https://i.pinimg.com/736x/85/af/a2/85afa2fd5e26cd49822418fb9ad3f093.jpg" alt="Arjun P." style="width:60px; height:60px; border-radius:50%; object-fit:cover; margin:15px auto; display:block; border:2px solid #ccc;">
            <span style="color:#ff9900; margin-top:5px;">— Arjun P.</span>
            <p style="font-style:italic;">“Luxury, speed, and style—Auto Lux has it all. Highly recommend!”</p>
        </div>

        <div style="background:#1e1e1e; border-radius:15px; padding:25px; max-width:300px; color:#f0f0f0; box-shadow:0 4px 10px rgba(255,255,255,0.05);">
            <img src="https://i.pinimg.com/736x/24/e3/3b/24e33b4275d083e3bb849e91af7dc960.jpg" alt="Priya Mehta" style="width:60px; height:60px; border-radius:50%; object-fit:cover; margin:15px auto; display:block; border:2px solid #ccc;">
            <span style="color:#ff9900; margin-top:5px;">— Priya Mehta</span>
            <p style="font-style:italic;">"Amazing experience! Loved the test drive event and the attention to detail. Truly luxurious."</p>
        </div>

        <div style="background:#1e1e1e; border-radius:15px; padding:25px; max-width:300px; color:#f0f0f0; box-shadow:0 4px 10px rgba(255,255,255,0.05);">
            <img src="https://i.pinimg.com/736x/37/87/30/378730a63ff942c73d708e8c1f535f8e.jpg" alt="Shivaay Singh Oberoi" style="width:60px; height:60px; border-radius:50%; object-fit:cover; margin:15px auto; display:block; border:2px solid #ccc;">
            <span style="color:#ff9900; margin-top:5px;">— Shivaay Singh Oberoi</span>
            <p style="font-style:italic;">"I got my Aprilia RSV4 from Auto Lux and the process was effortless. Smooth ride and unmatched service!"</p>
        </div>
         <div style="background:#1e1e1e; border-radius:15px; padding:25px; max-width:300px; color:#f0f0f0; box-shadow:0 4px 10px rgba(255,255,255,0.05);">
            <img src="https://i.pinimg.com/736x/5e/90/84/5e9084916fbd5d630742899a3a5d11c3.jpg" alt="Aanya R." style="width:60px; height:60px; border-radius:50%; object-fit:cover; margin:15px auto; display:block; border:2px solid #ccc;">
            <span style="color:#ff9900; margin-top:5px;">— Aanya R.</span>
            <p style="font-style:italic;">"Auto Lux made me feel like royalty. Their team is professional, courteous, and passionate about luxury vehicles."</p>
        </div>

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
    function scrollToContact(e) {
        e.preventDefault(); // Prevent default anchor behavior
        const contactSection = document.getElementById("contact");
        const headerOffset = 100; // Adjust if your header height is different
        const elementPosition = contactSection.getBoundingClientRect().top;
        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

        window.scrollTo({
            top: offsetPosition,
            behavior: "smooth"
        });
    }
</script>

<script>
  let currentSlide = 0;
  const slides = document.querySelectorAll(".slide");
  const slider = document.getElementById("slider");

  document.querySelector(".next").onclick = () => {
      currentSlide = (currentSlide + 1) % slides.length;
      slider.style.transform = `translateX(-${currentSlide * 100}%)`;
  };

  document.querySelector(".prev").onclick = () => {
      currentSlide = (currentSlide - 1 + slides.length) % slides.length;
      slider.style.transform = `translateX(-${currentSlide * 100}%)`;
  };
  const dotContainer = document.getElementById("dots");
slides.forEach((_, idx) => {
    const dot = document.createElement("span");
    dot.addEventListener("click", () => {
        currentSlide = idx;
        updateSlider();
    });
    dotContainer.appendChild(dot);
});

function updateSlider() {
    slider.style.transform = `translateX(-${currentSlide * 100}%)`;
    document.querySelectorAll('.pagination-dots span').forEach((dot, i) => {
        dot.classList.toggle('active', i === currentSlide);
    });
}

updateSlider(); // Initial dot activation

document.querySelector(".next").onclick = () => {
    currentSlide = (currentSlide + 1) % slides.length;
    updateSlider();
};

document.querySelector(".prev").onclick = () => {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    updateSlider();
};
</script>



<!--footer-->
<?php include('footer.php')?>
</body>
</html>