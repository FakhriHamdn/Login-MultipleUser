<?php
require '../connection.php';

// untuk mengambil data dari database
$sql = "SELECT users.id_user, users.fullname, users.role, attendaces.tgl, attendaces.clock_in, attendaces.clock_out, (TIME_TO_SEC(attendaces.clock_out) - TIME_TO_SEC(attendaces.clock_in)) FROM users JOIN attendaces ON users.employee_id = attendaces.employee_id";

$result = mysqli_query ($db, $sql); 

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Power</title>
</head>

<body>
    <center>
    <div class="container">
        <h2>Table Data Absensi Pekerja</h2>
        <p><a href="tambah-absensi.php">Tambah Pekerja</a></p>
        <table border="1">
            <tr>
                <th>Employed id</th>
                <th>Nama Pekerja</th>
                <th>Role</th>
                <th>Tanggal</th>
                <th>Jam Masuk</th>
                <th>Jam Keluar</th>
            </tr>
            <?php while ($row=mysqli_fetch_assoc($result)):?> 
                <tr>
                    <td><?=$row['id_user']?></td>
                    <td><?=$row['fullname']?></td>
                    <td><?=$row['role']?></td>
                    <td><?=$row['tgl']?></td>
                    <td><?=$row['clock_in']?></td>
                    <td><?=$row['clock_out']?></td>
                </tr>
                <?php endwhile ?>
        </table>
    </div>
    </center>


</body>

</html>