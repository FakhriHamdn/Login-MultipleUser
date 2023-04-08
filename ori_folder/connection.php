<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "absensi";

$db = new mysqli($hostname, $username, $password, $db_name);

if (!$db) {
    echo 'connection failed<br> ';
} 


// if($aksi == "tambahpekerja"){
//     $absensi->tambahpekerja($_POST['employee_id'], $_POST['fullname'], $_POST['role'], $_POST['password']);
//     header("location:tambah-absensi.php");
// }


// function tampildatabase(){
//     $sql = "SELECT id.attendaces, employee_id.attendaces, fullname.users, role.users, tgl.attendaces, clock_in.attendaces, clock_out.attendaces, ";
//     $koneksi = mysqli_connect($this->hostname, $this->username, $this->password, $this->db_name);
//     $data = mysqli_query($koneksi, $sql);
//     while($d = mysqli_fetch_array($data)) {
//         $hasil[] = $d;
//     }
//     return $hasil;
//     }
?>
