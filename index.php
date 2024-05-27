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

            <div class="signin">
                <i class="fa fa-user-o" aria-hidden="true"></i>
                <span>login | signup</span>
            </div>
        </div>
    </nav>

    <!-- main sectiion of this page-->
    <main>
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
                    <form action="" method="post">
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
            <div id="bottom">
                copy right reserved
                &copy;
                <?php
                echo date("Y,M d");
                ?>

            </div>
        </footer>
    </main>

    <script src="./asset/js/index.js">

    </script>
</body>

</html>