<?php 
session_start();

if(isset($_POST['logout'])) {
    session_destroy();
    header("location: /learnphp/dup_login/index.php?message=logout");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <?php 
   if($_SESSION['role'] == 'admin'){
    echo "<h2>Selamat datang</h2>" . $_SESSION['fullname'];
    echo "<h4>Status :</h4>" . $_SESSION['role'];
    echo "<a href='database.php'>Database</a>";
} else {
    echo "<h2>Selamat datang</h2>" . $_SESSION['fullname'];
    echo "<h4>Status :</h4>" . $_SESSION['role'];
}

    
    
    ?>
    <!-- <h2>Selamat Datang <?php echo $_SESSION['fullname'];?></h2>
    <p>status : <?php echo $_SESSION['role'];?> </p> -->
    <form action="" method="POST">
    <button name="logout" type="submit">logout</button>
    </form>
</body>
</html>