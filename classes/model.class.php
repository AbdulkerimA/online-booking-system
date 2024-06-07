<?php

class Model extends Db
{
    // get all usrs 
    public function getAllUsers()
    {
        $sqlstmt =  "SELECT * FROM `passengers`";
        if ($result = $this->conn()->query($sqlstmt)) {
            return $result;
        } else {
            return "query error" . $this->conn()->error;
        }
    }

    // to get a spesfic user from db
    protected function getUser($uname)
    {
        $sqlstmt = "select * from users where userName = '$uname';";
        if ($result = $this->conn()->query($sqlstmt)) {
            return $result;
        } else {
            return "query error" . $this->conn()->error;
        }
    }

    //search for flights 
    protected  function searchFlight($depFrom, $schedule)
    {
        $sqlstmt = "SELECT `flightNumber`, `departureFrom`, `destination`,
         `departureDateTime`, `price` FROM `flight` WHERE 
         departureFrom = '$depFrom' && departureDateTime = '$schedule'";

        if ($result = $this->conn()->query($sqlstmt)) {
            return $result;
        } else {
            return "query Error" . $this->conn()->error;
        }
    }

    // user registration 
    protected function setUser($name, $pass, $isAdmin = 0)
    {
        $sqlstmt = "insert into users(userName,password,isAdmin) 
                    values('$name','$pass','$isAdmin');
        ";

        if ($result = $this->conn()->multi_query($sqlstmt)) {
            return $result;
        } else {
            return "query error";
        }
    }


    // get all aviliable planes
    public function getAllAviliablePlanes()
    {
        $sqlstmt =  "SELECT * FROM `planes` WHERE `avaliable` = '1' ";
        if ($result = $this->conn()->query($sqlstmt)) {
            return $result;
        } else {
            return "query error" . $this->conn()->error;
        }
    }

    // get all aviliable flights
    public function getAllFlights()
    {
        $sqlstmt =  "SELECT * FROM `flight` ";
        if ($result = $this->conn()->query($sqlstmt)) {
            return $result;
        } else {
            return "query error" . $this->conn()->error;
        }
    }

    // get all Reservations
    public function getAllReservations()
    {
        $sqlstmt =  "SELECT * FROM `reservation`";
        if ($result = $this->conn()->query($sqlstmt)) {
            return $result;
        } else {
            return "query error" . $this->conn()->error;
        }
    }
}
