<?php

session_start();

$erroronSearch = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include_once "./inc/includes.inc.php";
    // CHECK IF ANY OF THE FILDS ARE EMPTY
    if (!empty($_POST['departure'] && $_POST['destination'] && $_POST['depatrureDate'] && $_POST['email'] && $_POST['passengers'])) {
        $depfrom = htmlspecialchars($_POST['departure']);
        $destination = htmlspecialchars($_POST['destination']);
        $schedule = htmlentities($_POST['depatrureDate']);

        $viewObj = new View();
        $flights = $viewObj->aviliableFlights($depfrom, "2024-06-02");

        //for test only
        //var_dump($flights);
    } else {
        // if any of the filds are empty display this message
        $erroronSearch = "you must insert all the information needed";
    }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/style/index.css">
    <title>Book Your flight</title>
</head>

<body>
    <!-- nav bar -->
    <?php
    include "./nav.php";
    ?>

    <!-- main sectiion of this page-->
    <main>
        <!-- include login page -->
        <?php
        include "./login.php";
        ?>
        <div id="home">
            <section id="sec1">
                <!-- hero section -->
                <div id="hero">
                    Book Your Perfect flight <br>
                    with x
                </div>
                <p>
                    <!-- get your ticket eisly, avoid the hustle of geting tickets
instade be rady for your flight -->
                    are you tierd of hastling to get ticket for a flight? we gate you <br>
                    getting tickets made easy by using X, get your tickets from X <br> and be rady for your flight.
                </p>

                <a href="#">
                    <button>discover places</button>
                </a>
            </section>

            <section id="sec2">
                <div id="book">
                    <!-- navigation for booking card -->
                    <div id="nav">
                        <span>
                            <i class="fa fa-fighter-jet" aria-hidden="true"></i>
                            flight
                        </span>
                        <span>
                            <i class="fa fa-building-o" aria-hidden="true"></i>
                            Hotels
                        </span>
                    </div>

                    <!-- -->
                    <form action="./index.php" method="post">
                        <span><?php echo $erroronSearch; ?></span>
                        <div id="radio">
                            <input type="radio" name="oneWay" id="oneWay">
                            <label for="oneWay">one-way</label>

                            <input type="radio" name="twoWay" id="twoWay">
                            <label for="twoWay"> Two-Way</label>
                        </div>
                        <!-- destination and departure inputs-->
                        <div id="dest">
                            <input type="text" name="departure" id="departure" placeholder="Departure from">
                            <input type="text" name="destination" id="destination" placeholder="Destination">
                        </div>
                        <!-- -->
                        <div id="perinfo">
                            <input type="date" name="depatrureDate" id="depDate" placeholder="Departure Date">
                            <input type="email" name="email" id="email" placeholder="email">
                            <input type="tel" name="tel" id="tel" placeholder="phone number">
                            <input type="text" name="passengers" id="passengers" value="1 adult">
                            <button type="submit">
                                Search Flights
                                <!--<i class="fa fa-fighter-jet" aria-hidden="true"></i>-->
                            </button>
                        </div>
                    </form>
                </div>
            </section>

        </div>

        <!-- explor popular destinations -->
        <section id="sec3">
            <h2>explor popular destinations</h2>
            <div id="container">
                <?php
                $city = ["Rio de Janeiro", "Dubai", "paris", "Florence", "Gondar", "Addis Abeba"];
                for ($i = 0; $i <= 5; $i++) {

                ?>
                    <div id="card">
                        <img src="./asset/images/city<?php echo $i; ?>.jpg" alt="city">
                        <span id="cityName"><?php echo $city[$i] ?></span>
                        <p>Round trip | 5 days</p>
                    </div>
                <?php
                }
                ?>
            </div>
        </section>

        <!-- testimonials section -->
        <section id="sec4">
            <h2>here is what our coustomers says about us</h2>
            <div id="container">
                <?php
                for ($i = 0; $i < 5; $i++) {
                ?>
                    <div id="testimonials">
                        <div>
                            <img src="./asset/images/user<?php echo $i; ?>.jpg" alt="profile">
                            <div id="userinfo">
                                <span id="userName">Abebe Kebede</span>
                                <span>Ethipia</span>
                                <span>⭐⭐⭐⭐⭐</span>
                            </div>
                        </div>
                        <p>
                            Commonly used for various metaphorical senses of star
                            (e.g., for fame, success, excellence, reviews).
                            Also used for emphasis or flair.
                            Occasionally used for astronomical stars.
                        </p>
                    </div>
                <?php
                }
                ?>
            </div>
        </section>

        <footer>
           <?php
           include "./footer.php";
           ?>
        </footer>
    </main>

    <script src="./asset/js/index.js">

    </script>
</body>

</html>