<?php include 'header.php'; ?>

<main>
    <section class="contact">
        <h2>Contact Me</h2>
        <p>Feel free to reach out if you'd like to collaborate or have any inquiries. I'm always excited to hear about new projects!</p>
        <form action="submit_form.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            
            <button type="submit">Submit</button>
        </form>
    </section>
</main>

<?php include 'footer.php'; ?>
