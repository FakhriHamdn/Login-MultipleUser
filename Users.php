<?php 
class Users {
    private $employee_id;
    private $fullname_id;
    private $role_id;
    private $password;

    function set_login_data($employee_id, $password) {
        $this->employee_id = $employee_id;
        $this->password = $password;
    }

    function get_employee_id() {
        return $this->employee_id;
    }
    function get_password() {
        return $this->password;
    }
    function set_profile_data() {

    }


}
class myUsers {
    private $hostname ="localhost";
    private $username ="root";
    private $password ="";
    private $db_name ="absensi";

    function tambahpekerja($employee_id, $fullname, $role, $password) {
        $koneksi = mysqli_connect($this->hostname, $this->username, $this->password, $this->db_name);
        $sql = ("INSERT INTO users VALUES('', '$employee_id', '$fullname', '$role', '$password')");
        mysqli_query($koneksi, $sql);
    }
}
?>