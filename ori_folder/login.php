<?php 
require 'connection.php';
require 'Users.php';
session_start();

$user = new Users();

//isset sebagai validasi bahwa tombol sudah di klik atau blm
if(isset($_POST['login'])) { //'login' dpt dari name di button
    
    //validasi data-data
    if(strlen($_POST['nip']) <= 2 || strlen($_POST['password']) <= 2){
        header("location:index.php?message=Invalid Data");
    } else {
        $user->set_login_data($_POST['nip'], $_POST['password']); //set login data untuk memasukkan data ke class user
        
        //function untuk mengeluarkan data dari set login, untuk megelola di query
        $id = $user->get_employee_id();
        $password = $user->get_password();
        $sql = "SELECT * FROM users WHERE employee_id= '$id' AND password = '$password'";
        //untuk memasukkan employee dan passwordnya, kita panggil $id, dan $password
        $result = $db->query($sql);
        
        //validasi untuk mengecek datanya ada atau tidak
        if ($result->num_rows > 0) {
            //data yang akan masuk ke bagian dashboard
            while($row = $result->fetch_assoc()){
            //row adalah data yang kita punya di database
                $_SESSION['status'] = "login";
                //session adalah penampungan sementara dibrowser
                $_SESSION['employee_id'] = $row['employee_id'];
                $_SESSION['fullname'] = $row['fullname'];
                $_SESSION['role'] = $row['role'];
            }
            // tugas by deaafrizal
            if($_SESSION['role'] == 'Admin') {
                header("location:dashboard/index-admin.php");
            } else {
                header("location:dashboard/index.php");
            }
        } else {
            header("location:index.php?message=Incorrect Id or Password");
            //kata bang dea kalo nulis messsage buat login harus dibuat ambigu
        }


    }
}   



?>



