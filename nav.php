<?php
?>

<nav>
    <div id="part1">
        <img src="./asset/images/plane.png" alt="logo">
        <a href="">home</a>
        <a href="">about us</a>
        <a href="">help</a>
    </div>

    <div id="part2">
        <div id="flag">
            <img src="./asset/images/ethiopia.png" alt="flg">
        </div>

        <div class="signin" onclick="handleLogin()">
            <i class="fa fa-user-o" aria-hidden="true"></i>
            <!-- display login and sign up if not logedin -->
            <?php
            if (isset($_SESSION['isLogedIn'])) {
                echo "<span>" . $_SESSION['user'] . " | <a href='logout.php'> Logout</a></span>";
            } else {
                echo "<span>login | signup</span>";
            }
            ?>
        </div>
    </div>
</nav>