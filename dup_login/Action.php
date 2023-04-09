<?php 
//kita akan panggil class objek dari class user
require 'connection.php';
require 'Connect.php';

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

    //untuk ngecek datanya ada atau ngk
    if($result->num_rows > 0) {
        echo "Data Cocok";
    } else {
        echo "data tidak cocok";
    }

}
}




// $user->set_loginData($_POST['email'], $_POST['password']);
// $email = $user->getEmail();
// $password = $user->getPassword();


?>