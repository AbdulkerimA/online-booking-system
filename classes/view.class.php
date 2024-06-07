<?php

class View extends Model
{

    // login logic
    public function login($uname, $pass)
    {
        $dbResult = $this->getUser($uname);

        while ($row = $dbResult->fetch_assoc()) {
            if ($uname == $row['userName'] && $pass == $row['password']) {
                session_start();
                $_SESSION['user'] = $uname;
                $_SESSION['islogedin'] = true;
                $_SESSION['user_type'] = $row['user_type'];
                $user_type = $row['isAdmin'];

                if ($user_type == 1) {
                    header("Location:./admin");
                } else {
                    header("Location:./index.php");
                }
                exit;
            }
        }
        $error = "username or password is incorrect";
        header("Location:./index.php?error=$error");
    }

    // display all aviliable flights 
    public function aviliableFlights($depFrom, $schedule)
    {
        $dbResult = $this->searchFlight($depFrom, $schedule);
        $resultArray = array();

        while ($row = $dbResult->fetch_assoc()) {
            array_push(
                $resultArray,
                array(
                    "flightNumber" => $row['flightNumber'],
                    "departureFrom" => $row['departureFrom'],
                    "destination" => $row['destination'],
                    "departureDateTime" => $row['departureDateTime'],
                    "price" => $row['price']
                )
            );
        }
        return $resultArray;
    }

    // for admin page only
    public function allUsers()
    {
        $dbResult = $this->getAllUsers();
        $allUsersArray = array();

        while ($row = $dbResult->fetch_assoc()) {
            array_push(
                $allUsersArray,
                array(
                    "firstName" => $row['firstName'],
                    "lastName" => $row['lastName'],
                    "email" => $row['email'],
                    "tel" => $row['tel'],
                    "city" => $row['city'],
                    "reservationNumber" => $row['reservationNumber']
                )
            );
        }
        return $allUsersArray;
    }

    // get all aviliable planes
    public function allPlanes()
    {
        $dbResult = $this->getAllAviliablePlanes();
        $data = array();

        while ($row = $dbResult->fetch_assoc()) {
            array_push(
                $data,
                array(
                    "id" => $row['id'],
                    "seats" => $row['seats'],
                )
            );
        }
        return $data;
    }

    // get all aviliable flights
    public function allFlights()
    {
        $dbResult = $this->getAllFlights();
        $data = array();

        while ($row = $dbResult->fetch_assoc()) {
            array_push(
                $data,
                array(
                    "fnum" => $row['flightNumber'],
                    "arivalDate" => $row['arivalDateTime'],
                    "depDate" => $row['departureDateTime'],
                    "depFrom" => $row['departureFrom'],
                    "dest" => $row['destination'],
                    "tickets" => $row['tickets'],
                    "price" => $row['price']
                )
            );
        }
        return $data;
    }

    // get all Reservations
    public function allReservations()
    {
        $dbResult = $this->getAllReservations();
        $data = array();

        while ($row = $dbResult->fetch_assoc()) {
            array_push(
                $data,
                array(
                    "Rnum" => $row['reservationNumber'],
                    "rDate" => $row['reservationDate'],
                    "payment" => $row['paymentMethod'],
                    "fnum" => $row['flightNumber'],
                )
            );
        }
        return $data;
    }
}
