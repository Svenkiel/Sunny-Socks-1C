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

        <section class="SES-container">
            <h2 class="contact-title2">Get in Touch</h2>
            <p class="AIE-container">Have questions or need assistance? Get in touch with our team—we’re here to help with fast, friendly support!</p>
            <form method="post" enctype="multipart/form-data">
                <?php 
                $fields = ['Contact Name', 'Street', 'City', 'Zip', 'Contact phone', 'E-mail', 'Message'];
                foreach ($fields as $field): ?>
                    <div class="form-group">
                        <label for="<?= strtolower(str_replace(' ', '-', $field)) ?>"><h3><?= $field ?></h3></label>
                        <input type="text" id="<?= strtolower(str_replace(' ', '-', $field)) ?>" name="<?= strtolower(str_replace(' ', '-', $field)) ?>">
                    </div>
                <?php endforeach; ?>

                <div class="form-group file-upload">
                    <label for="file-upload" class="upload-label">
                        <input type="file" id="file-upload" name="file-upload">
                        <span class="upload-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 0 0 4 4h10a4 4 0 0 0 4-4V9a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v6z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v4m0 0l-2-2m2 2l2-2"/>
                            </svg>
                            Upload Additional File
                        </span>
                    </label>
                    <p class="file-info">Attach file. File size should not exceed 10MB.</p>
                </div>

                <div class="form-group">
                    <input type="checkbox" id="nda" name="nda">
                    <label for="nda">I want to protect my data by signing an NDA</label>
                </div>

                <button type="submit" class="submit-btn">SUBMIT</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_FILES['file-upload']) && $_FILES['file-upload']['error'] === UPLOAD_ERR_OK) {
                    $fileTmpPath = $_FILES['file-upload']['tmp_name'];
                    $fileName = $_FILES['file-upload']['name'];
                    $fileSize = $_FILES['file-upload']['size'];
                    $allowedExtensions = ['jpg', 'png', 'pdf', 'doc', 'docx'];
                    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

                    if (in_array($fileExtension, $allowedExtensions) && $fileSize < 10485760) {
                        $uploadDir = './uploaded_files/';
                        $destPath = $uploadDir . $fileName;
                        $message = move_uploaded_file($fileTmpPath, $destPath) ? 'File successfully uploaded.' : 'Error moving the uploaded file.';
                    } else {
                        $message = 'Error: Invalid file type or file size exceeds 10MB.';
                    }
                } else {
                    $message = 'Error: No file uploaded or upload error.';
                }

                $contactName = htmlspecialchars($_POST['contact-name'] ?? '');
                $ndaSigned = isset($_POST['nda']) ? 'Yes' : 'No';

                echo $message;
                echo "<br>Contact Name: " . $contactName;
                echo "<br>NDA Signed: " . $ndaSigned;
            }
            ?>
        </section>
    </main>
    <?php include 'nav/footer.php'; ?>
</body>
</html>
