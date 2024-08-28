<?php include('includes/header.php'); ?>

<!-- Home Section -->
<section id="home">
    <div class="hero">
        <h1>Welcome to Techy Software</h1>
        <p>Innovative Software Solutions for Your Business</p>
        <a href="#about" class="btn">Learn More</a>
    </div>
</section>

<!-- About Us Section -->
<section id="about">
    <div class="container">
        <h2>About Us</h2>
        <p>Techy Software specializes in creating cutting-edge software solutions to help businesses achieve their goals.</p>
    </div>
</section>

<!-- Services Section -->
<section id="services">
    <div class="container">
        <h2>Our Services</h2>
        <div class="service-grid">
            <div class="service">
                <h3>Custom Software Development</h3>
                <p>We build tailored software solutions to meet your specific needs.</p>
            </div>
            <div class="service">
                <h3>AI Integration</h3>
                <p>Enhance your business with our advanced AI technologies.</p>
            </div>
            <div class="service">
                <h3>Cloud Solutions</h3>
                <p>Leverage the power of the cloud to scale your operations.</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Us Section -->
<section id="contact">
    <div class="container">
        <h2>Contact Us</h2>
        <form action="feedback.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <input type="submit" value="Submit">
        </form>
    </div>
</section>

<?php include('includes/footer.php'); ?>
