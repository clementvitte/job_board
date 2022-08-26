<?php 

try {
    $conn = new pdo("mysql:host=localhost;dbname=subskill;charset=utf-8", "root", "NEWPASS");

    $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch(Exception $e) {
    $e->getMessage();
}

?>