
<?php 

    include("connection.php");
?>
<?php
    
    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "select * from users where username = '$username' email ='$email' password = '$password'";
        $results = mysqli_query($conn,$sql);
        $row = mysqli_num_rows($results);

        



    }
?>