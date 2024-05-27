<?php

class Db
{
    private $host = "192.168.0.7";
    private $user = "root";
    private $dbName = "frs";

    protected function conn()
    {
        $connection = new mysqli($this->host, $this->user, "", $this->dbName);

        if ($connection->errno) {
            return "connection error";
        } else {
            return $connection;
        }
    }
}
