<?php
$host='mysql:3306' ;
$dbname= 'testdb';
$pass= 'docb_psw';
$user= 'docb_user';

try {
    $dbh = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $pass);
    echo true;
} catch (PDOException $e) {
    echo false;
}
?>