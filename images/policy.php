<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Privacy Policy | Auto Lux</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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
            font-weight: 500;
            position: relative;
            display: inline-block;
            transition: transform 0.3s ease;
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

        nav a:hover {
            transform: translateY(-5px);
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

        .content {
            padding: 80px 20px;
            max-width: 900px;
            margin: auto;
            line-height: 1.8;
        }

        /* Content sections fade up on scroll */
        .content h1,
        .content h2,
        .content p,
        .content ul {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .content.visible h1,
        .content.visible h2,
        .content.visible p,
        .content.visible ul {
            opacity: 1;
            transform: translateY(0);
        }

        .content h1 {
            font-size: 36px;
            color: #ff9900;
            margin-bottom: 30px;
        }

        .content h2 {
            font-size: 24px;
            margin-top: 40px;
            color: #ff9900;
        }

        .content p {
            font-size: 16px;
            font-weight: 300;
        }

        ul {
            padding-left: 20px;
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


            .logo span {
                font-size: 22px;
            }

            nav a {
                font-size: 14px;
            }
        }

        /* Animations */
        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }
        .footer-section {
    background-color: #111;
    color: #fff;
    padding: 30px 20px;
    text-align: center;
    font-family: 'Poppins', sans-serif;
    border-top: 4px solid #ff9900;
}

    </style>
</head>
<body>

<!--header-->
<?php include('header.php')?>

<div class="content" id="content">
    <h1>Terms and Policies</h1>

    <p>At Auto Lux, we value your privacy and are committed to protecting your personal data. This Privacy Policy explains how we collect, use, and safeguard your information.</p>

    <h2>1. Information We Collect</h2>
    <p>We may collect personal information such as your name, email, phone number, and location when you interact with our website or contact us. We also gather non-personal data like browser type, device information, and IP addresses through cookies and analytics tools.</p>

    <h2>2. How We Use Your Information</h2>
    <p>We use your data to:</p>
    <ul>
        <li>Provide and improve our services</li>
        <li>Process transactions and respond to inquiries</li>
        <li>Send updates, promotions, or service information</li>
        <li>Enhance website experience and security</li>
    </ul>

    <h2>3. Cookies</h2>
    <p>Our site uses cookies to enhance user experience. Cookies help us understand user behavior and preferences. You can disable cookies in your browser settings.</p>

    <h2>4. Sharing Your Information</h2>
    <p>We do not sell or rent your personal data. However, we may share it with trusted partners who assist us in providing services, such as hosting, payment processing, or marketing—under confidentiality agreements.</p>

    <h2>5. Data Security</h2>
    <p>We use secure servers, encryption, and regular monitoring to protect your information from unauthorized access, disclosure, or destruction.</p>

    <h2>6. Your Rights</h2>
    <p>You have the right to access, correct, or delete your personal data. To make a request, contact us at <a href="mailto:contact@autolux.com">contact@autolux.com</a>.</p>

    <h2>7. Changes to This Policy</h2>
    <p>We may update this Privacy Policy from time to time. Updates will be posted on this page with a revised date.</p>

    <h2>8. Contact Us</h2>
    <p>If you have any questions about our Privacy Policy, please contact:</p>
    <p><strong>Email:</strong> contact@autolux.com<br />
        <strong>Phone:</strong> +91 98765 43210</p>
</div>

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
    // Scroll-trigger animation for content
    document.addEventListener('DOMContentLoaded', () => {
        const content = document.getElementById('content');

        function revealOnScroll() {
            const windowHeight = window.innerHeight;
            const contentTop = content.getBoundingClientRect().top;
            const revealPoint = 150; // when to reveal

            if (contentTop < windowHeight - revealPoint) {
                content.classList.add('visible');
                window.removeEventListener('scroll', revealOnScroll);
            }
        }

        window.addEventListener('scroll', revealOnScroll);
        revealOnScroll(); // check on load too
    });
</script>

<!--footer-->
<?php include('footer.php')?>
</body>
</html>
