<?php
// check if user loged in in another tab
//if yes redirect him to the home page
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/style/login.css">
    <title>Document</title>
</head>

<body>
    <div id="logincontainer">
        <div id="cover" onclick="deactivateLogin()"><!-- i am just a cover --></div>
        <div id="loginArea">
            <h2>login</h2>
            <form action="" method="post">
                <input type="text" name="uname" id="uname" placeholder="user name">
                <input type="password" name="pass" id="pss" placeholder="password">
                <button type="submit">login</button>
                <div id="option">
                    <div>
                        <input type="checkbox" name="save" id="savepass">
                        <label for="savepass">Save password</label>
                    </div>
                    <span id="forget">
                        <a href="#" target="_blank">forgate password?</a>
                    </span>
                </div>
                <div id="socialmedia">
                    <span> login with </span>
                    <div>
                        <img src="./asset/images/search.png" alt="google">
                        <img src="./asset/images/meta.png" alt="meta">
                    </div>
                </div>

                <div id="signup">
                    <span>dont have an account? <a href="#">signup</a></span>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="./asset/js/login.js"></script>
<script src="./asset/js/login.js"></script>

</html>