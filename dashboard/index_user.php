<?php 
session_start();

if(isset($_POST['logout'])) {
    session_destroy();
    header("location: ../login/index.php?message=logout");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>INDEX USER</title>
</head>
<body>
    <h2>Selamat Datang <?php echo $_SESSION['fullname'];?></h2>
    <p>status : <?php echo $_SESSION['role'];?> </p>
    <form action="" method="POST">
    <button name="logout" type="submit">logout</button>
    </form>
</body>
</html>