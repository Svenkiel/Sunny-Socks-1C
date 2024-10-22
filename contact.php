<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
<body>

    <?php include 'nav/navbar.php'; ?>
    <div class="contact-title">
        <h1>CONTACT</h1>
    
    <link rel="stylesheet" href="style.css">

    <section class="contact-section">
        <!-- Contact form -->
        <div class="contact-form">
            <h1>CONTACT</h1>
            <h2>Get in <span class="highlight">Touch</span></h2>
            <p>Have questions or need assistance? Get in touch with our team—we are here to help with fast, friendly support!</p>
           
            <form action="#" method="POST">
                <label for="contact-name">Contact name</label>
                <input type="text" id="contact-name" name="contact-name" required>
 
                <label for="street">Street</label>
                <input type="text" id="street" name="street" required>
  
                <label for="city">City</label>
                <input type="text" id="city" name="city" required>

                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" required>
                    
                <label for="phone">Contact Phone</label>
                <input type="tel" id="phone" name="phone" required>
 
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message</label>
                <textarea id="message" name="message" rows="4" required></textarea>
 
                <div class="file-upload">
                    <label for="file-upload" class="custom-file-upload">
                        <span>Upload Additional file</span>
                        <input type="file" id="file-upload" name="file-upload">
                    </label>
                    <p class="file-note">Attach file. File size of your documents should not exceed 10MB</p>
                </div>
 
                <div class="checkbox">
                    <input type="checkbox" id="nda" name="nda">
                    <label for="nda">I want to protect my data by signing an NDA</label>
                </div>
</body>
</html>
