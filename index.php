
<?php
    include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-------------MENU BAR-------------->
        <nav class="menuBar">

            <div class="navCenter">
                <a class="hideonDesktop" href="#" onclick=hidesideBar()><img src="images/close.png" alt="close button" ></a>
                <a class="hideonDesktop" href="#">Blog</a>
                <a class="hideonDesktop" href="#">Projects</a>
                <a class="hideonDesktop" href="#">About us</a>
                <a class="hideonDesktop" href="#">Contact us</a>
            </div>

            <div class="navRight">
                <button id="profileBtn" class="hideonDesktop" >Subscribe</button>
            </div>
        </nav>

    <!------------------------------------>
         <nav  class="sidebar">
            <div class="logo">
                <a href="#" >My Website</a>
            </div>

            <div class="navCenter">
                <a class="hideonMobile" href="#">Blog</a>
                <a class="hideonMobile" href="#">Projects</a>
                <a class="hideonMobile" href="#">About us</a>
                <a class="hideonMobile" href="#">Contact us</a>
            </div>

            <div class="navRight">
                <button id="profileBtn" class="hideonMobile">Subscribe</button>
            </div>
            <a href="#" onclick=showSidebar() class="menu"><img src="images/menu.png" alt="menu button" ></a>
        </nav>


        <!------FORM INPUT---->

        <form action="login.php" method="post">
            <h2>Login Page</h2>

            <div class="inputs">
                <label for="">Username:</label><br><br>
                <input type="text" name="username" id="username"><br><br>

                <label for="">Email:</label><br><br>
                <input type="email" name="email" id="email"><br><br>

                <label for="">Password:</label><br><br>
                <input type="text" name="password" id="password"><br><br>

                <input type="submit" value="Login" id="loginBtn" name="submit">
            </div>

        </form>




        <script>
            function hidesideBar(){
                sidebarHide = document.querySelector(".menuBar");
                sidebarHide.style.display = "none";
            }
            function showSidebar(){
                sidebarShow = document.querySelector(".menuBar");
                sidebarShow.style.display = "flex";

            }

            var user = document.form.username.value;
            var pass = document.form.password.value;
            var email = document.form.email.value;

            if(user.length == ""&& pass.length == "" && email.length == ""){
                alert("Username and password empty !!!");
            }
            else if(user.length == ""){
                alert("Username  empty");
            }
            else if(pass.length == ""){
                alert("Password  empty");
            }
            else if(email.length == ""){
                alert("Email  empty");
            }
            

        </script>
</body>
</html>