<?php

include_once "./inc/includes.inc.php";

$error = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['uname']) && !empty($_POST['pass'])) {
        $luname = htmlspecialchars($_POST['uname']);
        $lpass = htmlspecialchars($_POST['pass']);

        $viewobj = new view();
        $viewobj->login($luname, $lpass);
    } else {
        $error = "user name or password is empty";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/style/login.css">
    <title>login</title>
</head>

<body>
    <div id="logincontainer">
        <div id="cover" onclick="deactivateLogin()"><!-- i am just a cover --></div>
        <div id="loginArea">
            <h2>login</h2>
            <form action="./index.php" method="post">
                <input type="text" name="uname" id="uname" placeholder="user name">
                <input type="password" name="pass" id="pss" placeholder="password">
                <span id="error">
                    <?php echo $error != null ?  $error  : ""; ?>
                </span>
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
                    <span>dont have an account? <a href="./signup.php">signup</a></span>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="./asset/js/login.js"></script>
<script src="./asset/js/login.js"></script>

</html>