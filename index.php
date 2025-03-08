<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galactic Voyages - Travel Beyond Earth</title>
    <link rel="stylesheet" href="style.css">
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelector(".btn").addEventListener("click", function(event) {
                event.preventDefault();
                document.querySelector("#booking").scrollIntoView({ behavior: "smooth" });
            });
        });
    </script>
</head>
<body>
    <header>
        <h1>Galactic Voyages</h1>
        <p>Your Gateway to the Stars</p>
    </header>
    
    <section class="hero">
        <h2>Explore the Universe</h2>
        <p>Book a vacation to Mars, Jupiter, or beyond!</p>
        <a href="#booking" class="btn">Book Now</a>
    </section>
    
    <section class="destinations">
        <h2>Popular Destinations</h2>
        <div class="planet">
            <h3>Mars</h3>
            <p>Red deserts and breathtaking landscapes.</p>
        </div>
        <div class="planet">
            <h3>Europa</h3>
            <p>Experience the icy beauty of Jupiter's moon.</p>
        </div>
        <div class="planet">
            <h3>Titan</h3>
            <p>Explore Saturn's largest and mysterious moon.</p>
        </div>
    </section>
    
    <section id="booking">
        <h2>Book Your Space Adventure</h2>
        <form action="book.php" method="POST">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="form-group">
                <label for="destination">Choose Destination:</label>
                <select id="destination" name="destination">
                    <option value="mars">Mars - Red Planet Adventure</option>
                    <option value="europa">Europa - Ice Moon Excursion</option>
                    <option value="titan">Titan - Saturn's Largest Mystery</option>
                </select>
            </div>

            <div class="form-group">
                <label for="date">Travel Date:</label>
                <input type="date" id="date" name="date" required>
            </div>

            <div class="form-group">
                <label for="passengers">Number of Passengers:</label>
                <input type="number" id="passengers" name="passengers" min="1" max="10" placeholder="Enter number of travelers" required>
            </div>

            <button type="submit">Reserve My Seat</button>
        </form>
    </section>
    
    <footer>
        <p>Contact us at <a href="mailto:contact@galacticvoyages.com">contact@galacticvoyages.com</a></p>
    </footer>
</body>
</html>
<?php