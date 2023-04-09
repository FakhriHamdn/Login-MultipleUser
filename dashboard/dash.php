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
    <title>Document</title>
</head>
<body>

    <!-- INI KLO MAU PAKE YANG LANGSUNG SATU FILE, BUKA AJA COMMENT AN INI, TAPI YANG BAWAH TUH DI BIKIN COMMENT JUGA -->
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
    <!-- SAMPE SINI -->


    <!-- <h2>Selamat Datang <?php echo $_SESSION['fullname'];?></h2>
    <p>status : <?php echo $_SESSION['role'];?> </p>
    <h3>Ini table admin ceritanya</h3>
    <p>males buat bikin sendiri aja</p>
    <table>
        <tr>
            <th>Id</th>
        </tr>
    </table> -->
    
    
    <form action="" method="POST">
    <button name="logout" type="submit">logout</button>
    </form>
</body>
</html>