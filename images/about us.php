<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us | Auto Lux</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background: #000;
        color: #f0f0f0;
        overflow-x: hidden;
    }

    @keyframes fadeSlideIn {
        0% {
            opacity: 0;
            transform: translateY(40px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Apply animation to all major elements */
    header, section, footer {
        opacity: 0;
        animation: fadeSlideIn 2s ease forwards;
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
    width: 100%;
    z-index: 1000;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.6); /* optional for visibility */
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

    section:nth-of-type(1) { animation-delay: 0.2s; }
    section:nth-of-type(2) { animation-delay: 0.4s; }
    section:nth-of-type(3) { animation-delay: 0.6s; }
    section:nth-of-type(4) { animation-delay: 0.8s; }
    section:nth-of-type(5) { animation-delay: 1s; }
    section:nth-of-type(6) { animation-delay: 1.2s; }
    section:nth-of-type(7) { animation-delay: 1.4s; }
    section:nth-of-type(8) { animation-delay: 1.6s; }
    section:nth-of-type(9) { animation-delay: 1.8s; }

    .about-section,
    .container {
        padding: 80px 50px;
        background: #181818;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }

    .container.reverse {
        flex-direction: row-reverse;
    }

    .about-image img,
    .container .image img {
        width: 100%;
        max-width: 500px;
        height: auto;
        border-radius: 12px;
        box-shadow: 0 0 15px rgba(0,0,0,0.4);
    }

    .about-content,
    .container .text {
        max-width: 600px;
        padding: 20px;
    }

    .about-content h1,
    .container .text h2 {
        color: #ff9900;
        font-size: 30px;
        margin-bottom: 20px;
    }

    .about-content p,
    .container .text p {
        font-size: 16px;
        line-height: 1.8;
        font-weight: 300;
    }

    @media screen and (max-width: 768px) {
        .about-section,
        .container,
        .container.reverse {
            flex-direction: column;
            padding: 50px 20px;
            text-align: center;
        }

        .about-content,
        .container .text,
        .container .image {
            margin: 0 auto;
            padding: 10px;
        }

        .about-image img,
        .container .image img {
            max-width: 90%;
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


</style>
<style>

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
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.6); /* optional for visibility */
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
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.6); /* optional for visibility */
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

        .about-section {
            padding: 80px 50px;
            background: #181818;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .about-image img {
            width: 500px;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.4);
        }

        .about-content {
            max-width: 600px;
            margin-left: 50px;
        }

        .about-content h1 {
            color: #ff9900;
            font-size: 36px;
            margin-bottom: 20px;
        }

        .about-content p {
            font-size: 16px;
            line-height: 1.8;
            font-weight: 300;
        }


        @media screen and (max-width: 768px) {
            .about-section {
                flex-direction: column;
                padding: 50px 20px;
                text-align:left;
            }

            .about-content {
                margin-left: 0;
                margin-top: 30px;
            }

            .about-image img {
                width: 100%;
                max-width: 400px;
            }
        }

        .container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 80px 50px;
    background: #1a1a1a;
    flex-wrap: wrap;
}

.container.reverse {
    flex-direction: row-reverse;
}

.container .text {
    flex: 1;
    max-width: 600px;
    padding: 20px;
}

.container .text h2 {
    color: #ff9900;
    font-size: 30px;
    margin-bottom: 20px;
}

.container .text p {
    font-size: 16px;
    line-height: 1.8;
    font-weight: 300;
}

.container .image {
    flex: 1;
    text-align: center;
    padding: 20px;
}

.container .image img {
    max-width: 100%;
    height: auto;
    border-radius: 12px;
    box-shadow: 0 0 15px rgba(0,0,0,0.4);
}

@media screen and (max-width: 768px) {
    .container, .container.reverse {
        flex-direction: column;
        text-align: center;
        padding: 50px 20px;
    }

    .container .text, .container .image {
        margin: 0 auto;
        padding: 10px;
    }

    .container .image img {
        max-width: 90%;
    }
}


    </style>
</head>
<body>

<!--header-->
<?php include('header.php')?>

<section class="about-section">
    <div class="about-image">
        <img src="https://i.pinimg.com/736x/ce/a5/55/cea5551cb615ac7be8fd8d51e16f1df6.jpg" alt="About Auto Lux">
    </div>
    <div class="about-content">
        <h1>About Auto Lux</h1>
        <p>At Auto Lux, we redefine luxury with a curated collection of imported cars and superbikes sourced from world-class brands. Our showroom is an experience — blending cutting-edge design, advanced performance, and timeless style.</p>
        <p>With partnerships spanning Big Boy Toyz, Fusion Cars, and 9th Gear, we deliver only the finest vehicles to our clients. Whether you're seeking a thrilling ride or an elegant cruiser, our team ensures every detail reflects excellence.</p>
        <p>We don't just sell — we personalize. From custom wraps and luxury interiors to rotating platforms and smart tech upgrades, Auto Lux is your gateway to automotive artistry.</p>
    </div>
</section>

<section class="face-section">
    <div class="container reverse">
        <div class="text">
            <h2>The Face of Auto Lux</h2>
            <p>Meet Olivia Davis — the visionary CEO behind Auto Lux. With 15+ years in luxury automotive, he leads with passion, knowledge, and a belief that luxury isn't just owned, it's experienced.</p>
        </div>
        <div class="image">
            <img src="https://i.pinimg.com/736x/b7/53/61/b75361b63841533707edb5a7cb7b9c50.jpg" alt="CEO of Auto Lux">
        </div>
    </div>
</section>

<section class="brand-story-section">
    <div class="container">
        <div class="text">
            <h2>Our Brand Story</h2>
            <p>Auto Lux was founded by a team of automotive visionaries who shared a dream — to bring the world's most elite automobiles to India. From humble beginnings as car curators, we evolved into a luxury auto destination, blending legacy with innovation.</p>
        </div>
        <div class="image">
            <img src="brandstory.jpg" alt="Brand Story">
        </div>
    </div>
</section>

<section class="who-we-serve-section">
    <div class="container reverse">
        <div class="text">
            <h2>Who We Serve</h2>
            <p>From CEOs and celebrities to car collectors and first-time luxury buyers — we serve those who crave the extraordinary. Our clients expect class, and we deliver experiences that match their lifestyle and legacy.</p>
        </div>
        <div class="image">
            <img src="whoweserve.jpg" alt="Who We Serve">
        </div>
    </div>
</section>

<section class="operation-section">
    <div class="container">
        <div class="text">
            <h2>How We Operate</h2>
            <p>With a focus on transparency and care, our operations include detailed sourcing, quality control, personalized upgrades, and seamless logistics. Every car is treated like a masterpiece before it reaches your garage.</p>
        </div>
        <div class="image">
            <img src="howweoperate.jpg" alt="Operations">
        </div>
    </div>
</section>

<section class="persuasive-section">
    <div class="container">
        <div class="text">
            <h2>What Makes Us Different</h2>
            <p>We turn ordinary showrooms into immersive galleries. From cinematic reveals to custom configuration lounges, our brand isn’t just about selling vehicles — it’s about storytelling, design, and emotion.</p>
        </div>
        <div class="image">
            <img src="whatmakesusdifferent.jpg" alt="Auto Lux Experience">
        </div>
    </div>
</section>

<section class="business-model-section">
    <div class="container reverse">
        <div class="text">
            <h2>Our Business Model</h2>
            <p>We specialize in curated sourcing, pre-owned luxury authentication, and customized imports. Our flexible financing, concierge delivery, and post-sale support redefine ownership for the modern buyer.</p>
        </div>
        <div class="image">
            <img src="our business model.jpg" alt="Business Model">
        </div>
    </div>
</section>

<section class="press-section">
    <div class="container">
        <div class="text">
            <h2>Press & Recognition</h2>
            <p>As seen in TopGear, GQ, and The Economic Times, Auto Lux has been hailed as a trendsetter in India’s luxury auto scene. Our 500+ glowing client reviews speak volumes about trust and satisfaction.</p>
        </div>
        <div class="image">
            <img src="Press & Recognition.jpg" alt="Press and Recognition">
        </div>
    </div>
</section>

<section class="numbers-section">
    <div class="container reverse">
        <div class="text">
            <h2>Our Numbers Speak</h2>
            <p>800+ vehicles delivered. 50+ elite brand tie-ups. 98% client satisfaction. 10+ awards. And we're just getting started.</p>
        </div>
        <div class="image">
            <img src="our business model.jpg" alt="Company Statistics">
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

<!--footer-->
<?php include('footer.php')?>

</body>
</html>
