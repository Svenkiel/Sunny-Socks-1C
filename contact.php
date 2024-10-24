<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>CONTACT</title>
</head>
<body>

    <?php include 'nav/navbar.php'; ?>
    <main> 

        <div class="contact-container">
            <h1 class="contact-title">CONTACT</h1>
        </div>

        <div class="SES-container">
        <h3>Get in <span class="highlight">Touch</span></h3>
            <p class="page-p">
                Have questions or need assistance? Get in touch with our team-we are
                here to help with fast, fiendly support!
            </p>
        </div:>
        
        <div class="form-group">
    <div><h3 for="contact-name">Contact Name</h3></div>
    <input type="text" id="contact-name" name="contact-name" placeholder="">
</div>

        
        <div class="form-group">
    <div><h3 for="contact-name">Street</h3></div>
    <input type="text" id="contact-name" name="contact-name" placeholder="">
</div>

        <div class="form-group">
    <div><h3 for="contact-name">City</h3></div>
    <input type="text" id="contact-name" name="contact-name" placeholder="">
</div>

<div class="form-group">
    <div><h3 for="contact-name">Zip</h3></div>
    <input type="text" id="contact-name" name="contact-name" placeholder="">
</div>

<div class="form-group">
    <div><h3 for="contact-name">Contact phone</h3></div>
    <input type="text" id="contact-name" name="contact-name" placeholder="">
</div>

<div class="form-group">
    <div><h3 for="contact-name">E-mail</h3></div>
    <input type="text" id="contact-name" name="contact-name" placeholder="">
</div>

<div class="form-group">
    <div><h3 for="contact-name">Message</h3></div>
    <input type="text" id="contact-name" name="contact-name" placeholder="">
</div>
<div class="form-group file-upload">
    <label for="file-upload" class="upload-label">
        <input type="file" id="file-upload">
        <span class="upload-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 0 0 4 4h10a4 4 0 0 0 4-4V9a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v6z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v4m0 0l-2-2m2 2l2-2"/>
            </svg>
            Upload Additional file
        </span>
    </label>
    <p class="file-info">Attach file. File size of your documents should not exceed 10MB.</p>
</div>

<div class="form-group">
    <input type="checkbox" id="nda">
    <label for="nda">I want to protect my data by signing an NDA</label>
</div>

<button type="submit" class="submit-btn">SUBMIT</button>


<?php
// Controleer of het formulier is ingediend
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Controleer of er een bestand is geüpload
    if (isset($_FILES['file-upload']) && $_FILES['file-upload']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['file-upload']['tmp_name'];
        $fileName = $_FILES['file-upload']['name'];
        $fileSize = $_FILES['file-upload']['size'];
        $fileType = $_FILES['file-upload']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        // Bestandsextensies die toegestaan zijn
        $allowedfileExtensions = array('jpg', 'png', 'pdf', 'doc', 'docx');

        if (in_array($fileExtension, $allowedfileExtensions)) {
            // Controleer of de bestandsgrootte kleiner is dan 10MB (10*1024*1024 = 10485760 bytes)
            if ($fileSize < 10485760) {
                // Bepaal de uploadmap
                $uploadFileDir = './uploaded_files/';
                $dest_path = $uploadFileDir . $fileName;

                // Verplaats het bestand naar de uiteindelijke locatie
                if(move_uploaded_file($fileTmpPath, $dest_path)) {
                    $message = 'File is successfully uploaded.';
                } else {
                    $message = 'There was an error moving the uploaded file.';
                }
            } else {
                $message = 'Error: File size exceeds the 10MB limit.';
            }
        } else {
            $message = 'Error: Only ' . implode(", ", $allowedfileExtensions) . ' files are allowed.';
        }
    } else {
        $message = 'Error: No file uploaded or there was an upload error.';
    }

    // Verwerk andere formuliergegevens
    $contactName = isset($_POST['contact-name']) ? $_POST['contact-name'] : '';
    $ndaSigned = isset($_POST['nda']) ? 'Yes' : 'No';

    // Opslaan van formuliergegevens kan hier (bijv. in een database)

    // Laat de boodschap zien
    echo $message;
    echo "<br>Contact Name: " . htmlspecialchars($contactName);
    echo "<br>NDA Signed: " . $ndaSigned;
}
?>

    </main>

    <?php include 'nav/footer.php'; ?>

</body>
</html>