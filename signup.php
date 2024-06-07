<?php
include "./inc/includes.inc.php";
$error = null;
if (isset($_GET['error'])) {
    $error = $_GET['error'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // CHECK IF ANY OF THE FILDS ARE EMPTY
    if (!empty($_POST['uname'] && $_POST['email'] && $_POST['tel'] && $_POST['pass'] && $_POST['confpass'])) {
        $user = htmlspecialchars($_POST['uname']);
        $email = htmlspecialchars($_POST['email']);
        $tel = htmlentities($_POST['tel']);
        $pass = htmlspecialchars($_POST['pass']);
        $confpass = htmlspecialchars($_POST['confpass']);

        $controllObj = new Controller();
        $controllObj->register($user, $pass, $confpass, $email, $tel);
    } else {
        // if any of the filds are empty display this message
        $error = "you must insert all the information needed";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="./asset/style/signup.css">
</head>

<body>
    <div id="signupcontainer">
        <div id="loginArea">
            <h2>signup</h2>
            <form action="" method="post">
                <span><?php echo $error; ?></span>
                <input type="text" name="uname" id="uname" placeholder="user name">
                <input type="email" name="email" id="email" placeholder="email">
                <input type="tel" name="tel" id="tel" placeholder="09--------">
                <input type="password" name="pass" id="pss" placeholder="password">
                <input type="password" name="confpass" id="conf" placeholder="confirm password">
                <button type="submit">sign up</button>
                <div id="option">
                    <div>
                        <input type="checkbox" name="save" id="savepass">
                        <label for="savepass">agree to terms and conditions?</label>
                    </div>
                </div>
                <div id="socialmedia">
                    <span> signup with </span>
                    <div>
                        <img src="./asset/images/search.png" alt="google">
                        <img src="./asset/images/meta.png" alt="meta">
                    </div>
                </div>

                <div id="login">
                    <span>do you have an account? <a href="./index.php">login</a></span>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="./asset/js/index.js"></script>

</html>