<?php

class Controller extends Model
{
    public function register($uname, $pass, $conf, $email, $tel)
    {
        // before storing a phone num we have to check the length
        if (strlen($tel) < 10) {
            $error = "phnone number must be atleast 10 digits";
            header("Location:./signup.php?error=$error");
        } elseif (strlen($tel) > 12) {
            $error = "phone number must be lessthan 13 digits";
            header("Location:./signup.php?error=$error");
        } elseif ($pass != $conf) {
            $error = "password doesn't match";
            header("Location:./signup.php?error=$error");
        } else {
            if ($this->getUser($uname)->num_rows == 0) {
                $queryResult = $this->setUser($uname, $pass);

                if ($queryResult == "success") {
                    $_SESSION['user'] = $uname;
                    $_SESSION['islogedin'] = true;
                    header("Location:./index.php");
                    exit;
                } else {
                    header("Loction:./signup.php?error=$queryResult");
                }
            }
        }
    }
}
