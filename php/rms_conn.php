<?php
// GETS SERVERTIME
date_default_timezone_set('Asia/Manila');
$server_date_time = date("Y-m-d H:i:s");
$servername = 'localhost';
$username = 'root';
$password = '';
try{
    $conn = new PDO ("mysql:host=$servername;dbname=rms_db",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "NO CONNECTION" .$e->getMessage();
}
?>