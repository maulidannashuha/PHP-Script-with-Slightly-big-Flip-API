<?php
/**
 * Created by PhpStorm.
 * User: maulidan
 * Date: 06/12/19
 * Time: 21:25
 */

namespace migrations;

class Migration
{
    public $table;
    protected $attributes = [];

    public function getQuery(){
        $sql = "CREATE TABLE $this->table (";

        $first = true;
        foreach ($this->attributes as $key=>$value){
            if (!$first)
                $sql .= ",";

            $sql .= "$key $value";

            $first = false;
        }

        $sql .= ")";

        return $sql;
    }
}