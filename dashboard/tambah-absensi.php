<?php 
require '../connection.php';
require '../Users.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Tambah Pekerja</title>

    <h2>Form Tambah Pekerja</h2>
    <form action="action.php?aksi=tambahpekerja" method="post">
        <ul>
            <li><label for="employee_id">Input employee_id</label></li>
            <li><input type="number" name="employee_id" placeholder="employed id"></li>
        </ul>
        <ul>
            <li><label for="fullname">input fullname</label></li>
            <li><input type="text" name="fullname" placeholder="fullname"></li>
        </ul>
        <ul>
            <li><label for="role">Input role</label></li>
            <li><input type="text" name="role" placeholder="role"></li>
        </ul>
        <ul>
            <li><label for="password">Input password</label></li>
            <li><input type="password" name="password" placeholder="password"></li>
        </ul>
        <ul>
            <li><button type="submit" name="submit">Submit</button></li>
        </ul>
    </form>
</head>
<body>
    
</body>
</html>