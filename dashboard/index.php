<?php 
session_start();

//supaya ngk bisa langsung ke dashboard/index.php di urlnya
if(!isset($_SESSION['status']) || $_SESSION['status'] != "login") {
    header("location:../index.php?message=jgn bgtu ya");
}

//membuat untuk logout
if(isset($_POST['logout'])) {
    session_destroy();
    header("location:../index.php?message= anda sudah logout dari kami...");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
</head>
<body>
    <div>
        <section>
            <h2>Hallo <?php echo $_SESSION['fullname']; ?></h2>
            <h2>status <?php echo $_SESSION['role']; ?></h2>
            <br>

            <?php 
                if(isset($_GET['message'])) {
                    echo $_GET['message'];
                }

            ?>
            <!-- TABEL ABSEN -->
            <?php require'absensi.php' ?>
            
            <form action="" method="POST">
            <button name="logout" type="submit">Logout</button>
        </form>
        </section>
    </div>
</body>
</html>