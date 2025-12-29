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
                <a href="#">Blog</a>
                <a href="#">Projects</a>
                <a href="#">About us</a>
                <a href="#">Contact us</a>
            </div>

            <div class="navRight">
                <button id="profileBtn" class="showHide">Subscribe</button>
            </div>
        </nav>

    <!------------------------------------>
         <nav  >
            <div class="logo">
                <a href="#" >My Website</a>
            </div>

            <div class="navCenter">
                <a href="#">Blog</a>
                <a href="#">Projects</a>
                <a href="#">About us</a>
                <a href="#">Contact us</a>
            </div>

            <div class="navRight">
                <button id="profileBtn" onclick=showLogin()>Subscribe</button>
            </div>
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

            function showLogin(){
                sidebar =  form.querySelector(".showHide");
                sidebar.style.display = "flex";
            }

        </script>
</body>
</html>