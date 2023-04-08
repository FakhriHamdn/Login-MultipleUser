<?php 
require 'Connect.php';
$user = new Users();
session_start();

if(isset($_POST['submit'])) {
    header("Location: /learnphp/dup_dashboard/dash.php?message=Anda-berada-di-dashboard");

        $user->set_loginData($_POST['email'], $_POST['password']); //set login data untuk memasukkan data ke class user
        
        //function untuk mengeluarkan data dari set login, untuk megelola di query
        $id = $user->getEmail();
        $password = $user->getPassword();
        $sql = "SELECT * FROM users WHERE email= '$email' AND password = '$password'";
        //untuk memasukkan employee dan passwordnya, kita panggil $id, dan $password
        $myConnect = new myConnect();
        $dbase = $myConnect->getConnect();
        $result = $dbase->query($sql);

        if ($result->num_rows > 0) {
            //data yang akan masuk ke bagian dashboard
            while($row = $result->fetch_assoc()){
            //row adalah data yang kita punya di database
                $_SESSION['status'] = "submit";
                //session adalah penampungan sementara dibrowser
                $_SESSION['email'] = $row['email'];
                $_SESSION['role'] = $row['role'];
            }
}  
}







?>