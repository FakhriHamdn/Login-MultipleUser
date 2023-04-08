<?php 

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

class Users {
    private $email;
    private $password;

    function set_loginData($email, $password) {
        $this->email = $email;
        $this->password = $password;
    }
    
    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }
}
?>