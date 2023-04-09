<?php 
//kita akan panggil class objek dari class user
require 'Connect.php';
session_start(); //setiap codingan session harus ada session_start

$user = new myUsers(); //new berarti user akan terbentuk sebagai objek, dan termasuk instansiasi

if(isset($_POST['submit'])) { //submit dpt dari name button, jadi ketik submit diclick maka lakukan..

    //validasi password yang diinputkan user
    if(strlen($_POST['password']) <= 5) {
        header("location: index.php?message=invalid data");
    } else {
    //manggil data dari user, kita meng set data loginnya dari inputan form ke bagian belakang, bagian belakangnya itu class myUsers objeknya
    $user->set_loginData($_POST['email'], $_POST['password']);

    $emailId = $user->getEmail();
    $pass = $user->getPassword();
    $sql = "SELECT * FROM users WHERE email = '$emailId' AND password = '$pass'"; //pake kutip karena bukan int
    
    $conn = new myConnect();
    $connection = $conn->getConnect();
    $result = $connection->query($sql);

    //validasi untuk ngecek datanya ada atau ngk, jika ada maka lakukan..
    if($result->num_rows > 0) {
        //data yang akan masuk didashboard
        foreach($result as $row) {
            //session digunakan untuk menampung data sementara dibrowser, dan data ini akan dimenghasilkan output pada dash.php
            $_SESSION['status'] = "login"; 
            $_SESSION['email'] = $row['email']; 
            $_SESSION['fullname'] = $row['fullname']; 
            $_SESSION['role'] = $row['role']; 
        }
        header("location: ../dashboard/dash.php?message= Data Valid");

        //INI KALO MAU FILE ADMIN/USER DIPISAH TAPI HEADER YANG DIATAS NIH, DI COMMENT DLU. 
        // //KLO MAU PAKE YANG DISATUIN JADI SATU FILE, DICOMMENT AJA BAGIAN INI
        // if($_SESSION['role'] == 'admin') {
        //     header("location: ../dashboard/dash.php");
        // } else {
        //     header("location: ../dashboard/index_user.php");
        // }
        // //SAMPE SINI YEE...
        
    } else {
        header("location: index.php?message=Incorrect Email or Password");
    }

}
}



?>