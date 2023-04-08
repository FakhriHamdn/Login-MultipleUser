<?php 
require '../connection.php';
require '../Users.php';
$absensi = new myUsers();
session_start();

date_default_timezone_set("Asia/Jakarta"); //GMT +7
$employee_id = $_SESSION['employee_id'];
$tgl = date('Y-m-d');
$clock_in = date('H:i:s');

$aksi = $_GET['aksi'];


if (isset($_POST['absent'])) {
    //agar tidak absen 2x dalam sehari
    $check_absensi = "SELECT tgl FROM attendaces WHERE employee_id = $employee_id AND tgl='$tgl'";
    $check = $db->query($check_absensi);

    if($check->num_rows > 0) {
        header("location:index.php?message= anda sudah absen");
    } else { 
        //jika blm absen, maka absenlah dia
        $sql = "INSERT INTO attendaces (id, employee_id, tgl, clock_in, clock_out) 
    VALUES (NULL, $employee_id, '$tgl', '$clock_in', NULL)";
}

$result = $db->query($sql);
if($result === true) {
    header("location:index.php?message= absen berhasil dilakukan");
} else {
    header("location:index.php?message= absensi gagal");

}
}

if($aksi == "tambahpekerja"){
    $absensi->tambahpekerja($_POST['employee_id'], $_POST['fullname'], $_POST['role'], $_POST['password']);
    header("location:tambah-absensi.php");
}


    


?>