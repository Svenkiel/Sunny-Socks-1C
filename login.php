<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css" type="text/css">
    <title>Login</title>
</head>
<body>

    <?php include 'nav/navbar.php'; ?>

    <?php
    $loginSuccess = false;
    $errorMessage = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $validCredentials = [
            "user@user.com" => "user",
            "admin@admin.com" => "admin"
        ];

        if (isset($validCredentials[$email]) && $validCredentials[$email] === $password) {
            $username = strstr($email, '@', true);
            $loginSuccess = true;
        } else {
            $errorMessage = 'Invalid email or password.';
        }
    }
    ?>

<main>
    <div>
        <h1 class="title"><b>LOGIN</b></h1>
    </div>
    
    <?php if ($loginSuccess): ?>
        <div class="login-success">
            <h1>Login successful! Welcome, <?php echo htmlspecialchars($username); ?>.</h1>
            <a href="index.php" class="home-btn">Home</a>
        </div>
    <?php else: ?>
        <div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="form-field">
                    <div class="login-form">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" required>
                    </div>
                    <div class="login-form">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <div class="login-register">
                        <input type="submit" value="Login" class="submit">
                    </div>
                    <?php if (!empty($errorMessage)): ?>
                        <p style="color: red;"><?php echo $errorMessage; ?></p>
                    <?php endif; ?>
                </div>
            </form>
            
        </div>
    <?php endif; ?>
</main>

</body>
</html>
