<?php
/**
 * Created by PhpStorm.
 * User: maulidan
 * Date: 06/12/19
 * Time: 20:06
 */

namespace connection;

class DB
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
        $sql_attributes = "(";
        $sql_data = "(";

        $first = true;
        foreach ($data as $key=>$value){
            if (!$first){
                $sql_attributes .= ", ";
                $sql_data .= ", ";
            }

            $sql_attributes .= $key;
            $sql_data .= $value ? "'$value'" : "null";

            $first = false;
        }

        $sql_attributes .= ")";
        $sql_data .= ")";

        if (!$this->connection->query("insert into $table $sql_attributes values $sql_data")) {
            echo("Error description: " . $this->connection->error . "\n");

            return false;
        }

        return true;
    }

    public function updateByID($table, $data, $id){
        $sql_data = "";

        $first = true;
        foreach ($data as $key=>$value){
            if (!$first){
                $sql_data .= ", ";
            }

            $sql_data .= $value ? "$key='$value'" : "$key=null";

            $first = false;
        }

        if (!$this->connection->query("update $table set $sql_data where id = $id")) {
            echo("Error description: " . $this->connection->error . "\n");

            return false;
        }

        return true;
    }

    public function query($query){
        $result = $this->connection->query($query);

        if (!$result) {
            echo("Error description: " . $this->connection->error . "\n");

            return false;
        }

        return $result;
    }

    public function close(){
        if ($this->connection){
            $this->connection->close();
            $this->connection = null;
        }
    }

}