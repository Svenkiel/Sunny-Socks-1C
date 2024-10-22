<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>

    <?php include 'nav/navbar.php'; ?>
    <div class="contact-title">
        <h1>CONTACT</h1>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get in Touch</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section class="contact-form">
        <h1>Get in Touch</h1>
        <p>Have questions or need assistance? Get in touch with our team—we are here to help with fast, friendly support!</p>

        <form id="contactForm">
            <label for="name">Contact Name</label>
            <input type="text" id="name" name="name" placeholder="Your name" required>

            <label for="street">Street</label>
            <input type="text" id="street" name="street" placeholder="Street address" required>

            <label for="city">City</label>
            <input type="text" id="city" name="city" placeholder="City" required>

            <label for="zip">Zip</label>
            <input type="text" id="zip" name="zip" placeholder="Zipcode" required>

            <label for="phone">Contact Phone</label>
            <input type="tel" id="phone" name="phone" placeholder="+31 6 12 12 12 12" required>

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="Your email" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Write your message here..." required></textarea>

            <label for="file">Upload Additional File (Max 10MB)</label>
            <input type="file" id="file" name="file" accept=".doc,.pdf,.jpg,.png" required>

            <label>
                <input type="checkbox" id="nda" name="nda">
                I want to protect my data by signing an NDA
            </label>

            <button type="submit">Submit</button>
        </form>

        <section class="contact-info">
            <h2>Our Team</h2>
            <div class="team-member">
                <h3>Suzan Jong</h3>
                <p>Sales</p>
                <p>Phone: +31 6 12 12 12 12</p>
                <p>Email: <a href="mailto:Suzan@sunny.com">Suzan@sunny.com</a></p>
            </div>

            <div class="team-member">
                <h3>John Smit</h3>
                <p>Marketing</p>
                <p>Phone: +31 6 12 34 56 78</p>
                <p>Email: <a href="mailto:John@sunny.com">John@sunny.com</a></p>
            </div>

            <div class="website">
                <p>Visit us at: <a href="https://sunny.com">sunny.com</a></p>
            </div>
        </section>
    </section>

    <script src="script.js"></script>
</body>
</html>
