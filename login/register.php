<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../image/login.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Page Login MultipleUser</title>
</head>

<body>
    <div class="container">
        <section class="wrapper">
            <div class="title">
                <h2 class="page-title">Register Page</h2>
                <h3 class="welcome-message">Welcome to Register Page</h3>
                <span class="login-text">Register</span>
                <!-- buat munculin notif -->
                <?php
                if (isset($_GET['message'])) {
                    $msg = $_GET['message'];
                    echo "<div class= 'notif-login'>$msg</div>";
                }
                ?>
            </div>
            <div>
                <form action="Action.php" method="POST" class="form-login">
                    <div class="input-kolom">
                        <div class="input-email">
                            <label for="email">Input Email</label>
                            <input type="email" placeholder="Email" name="email" class="input-login" required>
                        </div>
                        <div class="input-pass">
                            <label for="password">Input Password</label>
                            <input type="password" placeholder="******" name="password" class="input-login" autocomplete="off" required>
                        </div>
                            <button type="submit" class="btn" name="submit">Submit</button>
                        <div class="register-container">
                        <p class="acc-text">Already have an account?
                        <span class="register-text"><a href="index.php">Login</a></span>
                        </p>
                        </div>
                    </div>
                    <br>
                </form>
            </div>
        </section>
    </div>

</body>
</html>