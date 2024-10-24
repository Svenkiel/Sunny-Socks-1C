<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/footer.css" type="text/css">
    <link rel="stylesheet" href="css/login.css" type="text/css">
    <title>Login</title>
</head>
<body>
    <!-- Header -->
    <?php include 'nav/navbar.php'; ?>

    <?php
    /* Login status */
    $loginSuccess = false;

    /* Error for wrong input */
    $errorMessage = '';
    
    /* Checks if login is pressed */
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        /* Stores the input in a variable */
        $email = $_POST['email'];
        $password = $_POST['password'];

        /* Valid email and password combinations */
        $validCredentials = [
            "user@user.com" => "user",
            "admin@admin.com" => "admin"
        ];
        /* Checks if email and password are valid */
        if (isset($validCredentials[$email]) && $validCredentials[$email] === $password) {

            /* Stores everything in front of @ in a variable */
            $username = strstr($email, '@', true);

            /* Login status set to true */
            $loginSuccess = true;

        } else {
            /* error message gets a value */
            $errorMessage = 'Invalid email or password.';
        }
    }
    ?>

<main>
    <div>
        <h1 class="title"><b>LOGIN</b></h1>
    </div>
    
    <!-- Displayed after valid credentials -->
    <?php if ($loginSuccess): ?>
        <div class="login-success">
            <h1>Login successful! Welcome, <?php echo htmlspecialchars($username); ?>.</h1>
            <a href="index.php" class="home-btn">Home</a>
        </div>
    
    <!-- Displayed after invalid or no credentials -->
    <?php else: ?>
        <div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="form-grid">
                <div class="form-field">
                    <div class="login-form">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="input-field" required>
                    </div>
                    <div class="login-form">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="input-field" required>
                    </div>
                    <div class="submit-field">
                        <input type="submit" value="Login" class="submit">
                    </div>
                    
                    <?php if (!empty($errorMessage)): ?>
                        <!-- error message for invalid credentials -->
                        <p class="error-message"><?php echo $errorMessage; ?></p>
                    <?php endif; ?>
                </div>
            </form>
            
        </div>
    <?php endif; ?>
</main>

<!-- Footer -->
<?php include 'nav/footer.php'; ?>

</body>
</html>
