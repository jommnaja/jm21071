<?php
    $server = "localhost";
    $user = "root";
    $pass = "root";
    $dbname = 'timeconsulting';
    
    $conn;
        
    function conndb() {
        global $conn;
        global $server;
        global $user;
        global $pass;
        global $dbname;
        
        $conn = mysqli_connect($server,$user,$pass,$dbname);
        mysqli_set_charset($conn, "utf8");
    }
    
    function closedb() {
        global $conn;
        mysqli_close($conn);
    }