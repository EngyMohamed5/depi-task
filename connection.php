<?php
$dsn = "mysql:host=localhost;dbname=depi";
$username = "root";
$pass = "";

try {
    $con = new PDO($dsn, $username, $pass);
   

} catch (PDOException $e) {
    echo 'error' . $e->getMessage();
}
?>