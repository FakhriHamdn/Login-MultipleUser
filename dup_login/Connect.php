<?php 

//myUsers ini merepresentasikan adanya data, ada email fullname, password yang ada didatabase.
//nanti kita bisa isi data ini lewat depan, dengan function yang namanya set_logindata
//nanti kita ambil lagi datanya dengan metode get
class myUsers {
    private $email;
    private $password;

    //user bisa set login data, setter getter
    function set_loginData($email, $password) {
        $this->email = $email; // variable penampung diprivate class, akan diisi oleh $this $email. $this email akan memanggil yang ada diclass user, menaggil yang ada diclass lalu isi debgab email diparameter, klo parameter pasti ada yang ngirim, yang ngirimnua dari index.php
        $this->password = $password;
    }

    //BAGIAN GET NYA, untuk mengambil data dari class email dan password, karena diclassya sudah berisi daro set_loginData
    //untuk connect ke database
    function getEmail() {
        return $this->email;
    }
    function getPassword() {
        return $this->password;
    }
    //END GET

    function set_profilData() {

    }


}



// MEMBUAT KONEKSI DATABASE
class myConnect {
    private $hostname = 'localhost';
    private $username = 'root';
    private $password = '';
    private $db = "log_multiuser";

    public function __construct() {
        $this->db = new mysqli($this->hostname, $this->username, $this->password, $this->db);

        //check koneksi
        if ($this->db->connect_error) {
            die("Koneksi gagal: " . $this->db->connect_error);
        }  
    }

    public function getConnect() {
        return $this->db;
    }
}
//END KONEKSI DATABASE



?>