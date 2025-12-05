<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Contact Us | Auto Lux</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
      font-weight: 500;
      position: relative;
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
  padding: 120px 40px 80px;
  width: 100%;
  margin: 0;
  line-height: 1.8;
}


    .content h1 {
      font-size: 36px;
      color: #ff9900;
      margin-bottom: 30px;
    }

    .content p {
      font-size: 16px;
      font-weight: 300;
    }

.section-box {
  background-color: #1a1a1a;
  padding: 30px;
  border-radius: 16px;
  margin-bottom: 40px;
  width: 100%;
  margin-bottom: 40px;
}

.glow-box {
  border: 2px solid rgba(255, 153, 0, 0.3);
  box-shadow:
    0 0 10px rgba(255, 153, 0, 0.3),
    0 0 20px rgba(255, 153, 0, 0.2),
    0 0 40px rgba(255, 153, 0, 0.1);
  transition: box-shadow 0.3s ease, border-color 0.3s ease;
  width: 100%;
}

    .glow-box:hover {
      box-shadow:
        0 0 15px rgba(255, 153, 0, 0.5),
        0 0 30px rgba(255, 153, 0, 0.4),
        0 0 60px rgba(255, 153, 0, 0.3);
      border-color: rgba(255, 153, 0, 0.5);
    }
.content-wrapper {
  max-width: 1000px;
  margin: auto;
  padding: 0 20px;
}

    form {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    input, textarea {
  padding: 12px 15px;
  border: none;
  border-radius: 6px;
  font-size: 16px;
  font-family: 'Poppins', sans-serif;
  background-color: #000;   /* Black background */
  color: #fff;              /* White text */
  resize: vertical;         /* Allow only vertical resizing */
  max-width: 100%;          /* Prevent overflow */
  box-sizing: border-box;   /* Ensures padding doesn't increase width */
}


    input:focus, textarea:focus {
      outline: none;
      box-shadow: 0 0 10px #ff9900;
    }

    button {
      background-color: #ff9900;
      color: #000;
      border: none;
      padding: 12px 20px;
      border-radius: 6px;
      font-size: 18px;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    button:hover {
      background-color: #ffaa33;
    }

    .contact-details h2 {
      color: #ff9900;
      font-size: 24px;
    }

    .contact-details p {
      font-size: 16px;
    }

    .content h1, .contact-form, .contact-details {
      opacity: 0;
      transform: translateY(30px);
      transition: opacity 0.6s ease, transform 0.6s ease;
    }

    .content.visible h1,
    .content.visible .contact-form,
    .content.visible .contact-details {
      opacity: 1;
      transform: translateY(0);
    }

    footer {
      background: linear-gradient(135deg, #ff9900, #ff6600);
      color: #000;
      padding: 60px 20px 40px;
      border-radius: 12px 12px 0 0;
      font-size: 22px;
      font-family: 'Poppins', sans-serif;
      text-align: center;
    }

    footer:hover {
      background: linear-gradient(135deg, #ffb84d, #ff3300);
    }

    .social-links a {
      font-size: 24px;
      margin: 0 20px;
      color: #000000;
      transition: color 0.3s ease, text-shadow 0.3s ease;
    }

    .social-links a:hover {
      text-shadow: 0 0 10px #000000;
    }
    

    @media screen and (max-width: 768px) {
      nav a {
        font-size: 14px;
      }
    }
    html, body {
  height: 100%;
}

body {
  display: flex;
  flex-direction: column;
}

main {
  flex: 1;
}

footer {
  margin-top: auto;
}

  </style>
</head>
<body>

<!-- Header -->
<?php include('header.php')?>
<main>
<div class="content" id="content">
  <div class="content-wrapper">
  <h1>Contact Us</h1>
  <p>Have a question, comment, or request? Fill out the form below or reach out using the contact info.</p>

  <!-- Contact Form -->
  <div class="section-box glow-box contact-form">
    <form action="contactform.php" method="POST">
      <input type="text" name="name" placeholder="Your Name" required />
      <input type="email" name="email" placeholder="Your Email" required />
      <input type="tel" name="contact_no" placeholder="Phone number" required>
      <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
      <button type="submit">Submit</button>
    </form>
  </div>

  <!-- Contact Details -->
  <div class="section-box glow-box contact-details">
    <h2>Our Showroom</h2>
    <p><strong>Email:</strong> contact@autolux.com</p>
    <p><strong>Phone:</strong> +91 98765 43210</p>
    <p><strong>Location:</strong> Auto Lux Showroom, MG Road, Mumbai</p>
    <p><strong>Hours:</strong> Mon – Sun: 8:00 AM – 10:00 PM</p>
  </div>

  <!-- Map -->
  <div class="section-box glow-box" style="margin-top: 30px;">
    <h2 style="color: #ff9900;">Find Us on the Map</h2>
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.110424862121!2d72.82583321531441!3d19.135932854876796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b79774b4a1e5%3A0x8725316a1ff51c2f!2sMG%20Road%2C%20Mumbai%2C%20Maharashtra%20400064!5e0!3m2!1sen!2sin!4v1687012345678!5m2!1sen!2sin" 
      width="100%" 
      height="350" 
      style="border:0; border-radius: 10px; box-shadow: 0 0 10px rgba(255, 153, 0, 0.5);" 
      allowfullscreen="" 
      loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</div>
</main>

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
  document.addEventListener('DOMContentLoaded', () => {
    const content = document.getElementById('content');

    function revealOnScroll() {
      const windowHeight = window.innerHeight;
      const contentTop = content.getBoundingClientRect().top;
      if (contentTop < windowHeight - 150) {
        content.classList.add('visible');
        window.removeEventListener('scroll', revealOnScroll);
      }
    }

    window.addEventListener('scroll', revealOnScroll);
    revealOnScroll();
  });
</script>

<!-- Footer -->
<?php include('footer.php')?>
</body>
</html>