 //<?php
$server="127.0.0.1";
        $user="root";
        $pass="";
        $database="onlinefood";
        $conn=new mysqli($server,$user,$pass,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?> 