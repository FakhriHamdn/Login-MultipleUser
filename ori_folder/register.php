<?php 



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylee.css">
    <title>Login Page</title>
</head>

<body>
    <div class="container">
        <section class="wrapper">
            <div class="title">
                <h2 class="page-title">Register Page</h2>
                <h3 class="welcome-message">Welcome to website attendance</h3>
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
                <form action="login.php" method="POST" class="form-login">
                    <div class="input-kolom">

                        <div class="input-deployed">
                            <label for="nip">Input Deployed Id</label>
                            <input type="number" placeholder="Deployed id" name="nip" class="input-login" required>
                        </div>
                        <div class="input-pass">
                            <label for="password">Input Password</label>
                            <input type="password" placeholder="******" name="password" class="input-login" required>
                        </div>
                        <button type="submit" class="btn" name="login">Submit</button>
                        <div class="register-container">
                        <p class="acc-text">Already have account?
                            <span class="register-text"><a href="login.php">Login</a></span>
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
