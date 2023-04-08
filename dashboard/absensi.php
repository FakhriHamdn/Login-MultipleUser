
<table border="1">
    <tr>
        <th>Tanggal</th>
        <th>Jam Masuk</th>
        <th>Jam Keluar</th>
        <th>Performa</th>
    </tr>

<?php
require '../connection.php';
//mengatur date dilokasi tujuan
date_default_timezone_set("Asia/Jakarta"); //GMT +7

$tgl = date('Y-m-d');
$time = date('H:i:s');
$employee_id = $_SESSION['employee_id'];


// loopingan dari selecting database

$sql = "SELECT * FROM attendaces WHERE employee_id = $employee_id";
$result = $db->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['tgl'] . "</td>";
    echo "<td>" . $row['clock_in'] . "</td>";

//validasi area clock_out
    if(empty($row['clock_out']) && !empty($row['clock_in'] && $tgl == $row['tgl'])) { //biar bisa keluar dihari ini saja, dihari sebelumnya udah ngk bisa
        
        echo "<td>
        <form action='' method='POST' onsubmit='return alert(terimakasih sudah bekerja hari ini)'>
        <button type= 'submit' name='keluar'>KELUAR</button>
        </form>
        </td>";
    } else {
        echo "<td>" . $row['clock_out'] . "</td>";
    }

    echo "<td>:D</td>";
    echo "</tr>";
}

//masukkan echo kedalam while supaya omottis dinamis rowny ngikut ke berapa banyak data didatabase kita

?>

</table>
    <form action="action.php" method="POST">
        <button type="submit" name="absent">Absent Now</button>
    </form>

<!-- untuk update data saat keluar setelah absent -->
<?php 
if(isset($_POST['keluar'])) {
    //kenapa pake tgl, karena jika kita pencet tanggal sebelumnya maka akan memasukkan ke tanggal yang bolong
    $update = "UPDATE attendaces SET clock_out= '$time' WHERE employee_id = $employee_id AND tgl='$tgl'";

    $clock_out = $db->query($update);
    if($clock_out === TRUE){
        session_start();
        session_destroy();
        header("location=../index.php");
    }
}

?>
