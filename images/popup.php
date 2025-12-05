<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Auto Lux</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        

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


.booking {
    background: #121212;
    padding: 80px 20px;
    text-align: center;
}

.booking h2 {
    color: #ff9900;
    font-size: 36px;
    margin-bottom: 40px;
}

.booking-form {
    max-width: 800px;
    margin: auto;
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.form-group {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.booking-form input,
.booking-form select,
.booking-form textarea {
    flex: 1 1 45%;
    padding: 15px;
    border: none;
    border-radius: 10px;
    font-size: 16px;
    background: #1e1e1e;
    color: #fff;
}

.booking-form textarea {
    resize: none;
    min-width: 94%;
}

.booking-form input::placeholder,
.booking-form textarea::placeholder {
    color: #bbb;
}
.booking-box {
    background: #1a1a1a;
    padding: 40px 30px;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(255, 153, 0, 0.2);
    max-width: 900px;
    margin: auto;
    border: 1px solid rgba(255, 153, 0, 0.3);
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

#popup-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 2000;
}

#popup-content {
    background: #1e1e1e;
    padding: 30px;
    border-radius: 12px;
    width: 90%;
    max-width: 600px;
    position: relative;
    box-shadow: 0 0 20px rgba(255, 153, 0, 0.5);
    animation: popupFade 0.4s ease;
    color: #fff;
}

@keyframes popupFade {
    from { transform: scale(0.8); opacity: 0; }
    to { transform: scale(1); opacity: 1; }
}

.close-btn {
    position: absolute;
    top: 15px;
    right: 20px;
    font-size: 28px;
    color: #ff9900;
    cursor: pointer;
}

</style>
</head>
<body>

<!-- Booking Section -->
<section id="booking" class="booking fade-in fade-delay-3">
    <h2>Book a Test Drive</h2>
    <div class="booking-box">
        <form class="booking-form" action="popupform.php" method="POST" id="test_drive_form">
            <div class="form-group">
                <input type="text" name="name" placeholder="Full Name" required>
                <input type="tel" name="contact_no" placeholder="Phone number" required>
                <select name="vehicle_type" required>
                    <option value="" disabled selected>Select Vehicle Type</option>
                    <option value="Car">Car</option>
                    <option value="Bike">Bike</option>
                </select>

                <input type="text" name="model" placeholder="Model Name" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email Address" required>
            </div>
            <div class="form-group">
                <input type="date" name="date" required>
                <textarea name="message" rows="4" placeholder="Any specific request?"></textarea>
            </div>
            <button type="submit" class="cta-button">Submit Booking</button>
        </form>
    </div>
</section>

<script>
    document.querySelector('.test-drive-btn').addEventListener('click', function (e) {
        e.preventDefault();

        // Show popup
        document.getElementById('popup-overlay').style.display = 'flex';

        // Load popup content via AJAX
        fetch('popup.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('popup-body').innerHTML = data;
            })
            .catch(error => {
                document.getElementById('popup-body').innerHTML = "<p style='color: red;'>Failed to load form. Please try again later.</p>";
            });
    });

    // Close popup
    document.querySelector('#popup-overlay .close-btn').addEventListener('click', function () {
        document.getElementById('popup-overlay').style.display = 'none';
        document.getElementById('popup-body').innerHTML = ''; // Clear content
    });

    // Optional: Close on outside click
    document.getElementById('popup-overlay').addEventListener('click', function (e) {
        if (e.target === this) {
            this.style.display = 'none';
            document.getElementById('popup-body').innerHTML = '';
        }
    });
</script>

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


</body>
</html>