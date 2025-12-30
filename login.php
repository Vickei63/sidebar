
<?php 

    include("connection.php");
?>
<?php
    
    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "SELECT  * FROM users WHERE username = '$username' and email ='$email' and password = '$password' ";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count == 1){
            header("location:welcome.php");
        }
        else{
            echo "<script>
                    window.location.href = 'index.php';
                    alert('Login failed.Invalid username, email or password');
                </script>";
                exit;
        }

        



    }
?>