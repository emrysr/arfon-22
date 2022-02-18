<?php
    $servername=getenv('MYSQL_HOST');
    $username=getenv('MYSQL_USER');
    $password=getenv('MYSQL_PASSWORD');
    $dbname=getenv('MYSQL_DATABASE');
    $mysqli = new mysqli($servername,$username,$password,$dbname);
    if ($mysqli->connect_error) {
      die ( "Not connected, error: " . $mysqli->connect_error );
    }
?>