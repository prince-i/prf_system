<?php
Class Database{
    public $conn;
    public function __construct()
    {
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $db = 'prf_db';
        $this->conn=new mysqli($host,$username,$password,$db);
    }
}
?>