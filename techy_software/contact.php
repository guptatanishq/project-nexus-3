<?php include('includes/header.php'); ?>

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