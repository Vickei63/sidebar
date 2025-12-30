
<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "logged";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
        die("Db not connected: ".$conn->connect_error);
    }
    else{
        echo"";
    }




?>