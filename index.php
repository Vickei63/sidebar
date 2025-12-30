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
                <a href="#" onclick=hidesideBar()><img src="images/close.png" alt="close button" ></a>
                <a href="#">Blog</a>
                <a href="#">Projects</a>
                <a href="#">About us</a>
                <a href="#">Contact us</a>
            </div>

            <div class="navRight">
                <button id="profileBtn" class="hideonMobile">Subscribe</button>
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
                <button id="profileBtn">Subscribe</button>
            </div>
            <a href="#" onclick=showSidebar() class="menu"><img src="images/menu.png" alt="menu button" ></a>
        </nav>

        <form action="" method="post">
            <h2>Login Page</h2>

            <div class="inputs">
                <label for="">Username:</label><br><br>
                <input type="text"><br><br>
                <label for="">Email:</label><br><br>
                <input type="email"><br><br>
                <label for="">Password:</label><br><br>
                <input type="text"><br><br>

                <input type="submit" value="Login" id="loginBtn">
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
            

        </script>
</body>
</html>