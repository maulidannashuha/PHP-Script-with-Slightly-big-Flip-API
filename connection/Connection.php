<?php
/**
 * Created by PhpStorm.
 * User: maulidan
 * Date: 06/12/19
 * Time: 20:06
 */

namespace connection;

class Connection
{
    private $host = "localhost";
    private $username = "root";
    private $password = "nashuha";
    private $database = "flip";
    private $connection;

    public function __construct()
    {
        $this->connection = new \mysqli($this->host, $this->username, $this->password, $this->database);
        if ($this->connection->connect_errno) {
            exit();
        }
    }

    public function insert($table, $data){
        return $this->connection->query("");
    }

    public function query($query){
        if (!$this->connection->query($query)) {
            echo("Error description: " . $this->connection->error . "\n");

            return false;
        }

        return true;
    }

    public function close(){
        if ($this->connection){
            $this->connection->close();
            $this->connection = null;
        }
    }

}