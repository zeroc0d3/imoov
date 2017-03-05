<?php

$hostname='database';
$username='zeroc0d3_user';
$password='zeroc0d3_password';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=dbname",$username,$password);

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connected to Database<br/>';

    $dbh = null;
} catch(\PDOException $e) {
    echo $e->getMessage();
}
