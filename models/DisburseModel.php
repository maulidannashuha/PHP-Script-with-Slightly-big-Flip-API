<?php
/**
 * Created by PhpStorm.
 * User: maulidan
 * Date: 06/12/19
 * Time: 22:14
 */

namespace models;

use connection\DB;

class DisburseModel
{
    public static function insertDisburse($data){
        if ($data['time_served'] == '0000-00-00 00:00:00')
            $data['time_served'] = null;

        $connection = new DB();
        $status = $connection->insert("disburse", $data);
        $connection->close();

        return $status;
    }

    public static function updateDisburse($id, $data)
    {
        if ($data['time_served'] == '0000-00-00 00:00:00')
            $data['time_served'] = null;

        $connection = new DB();
        $status = $connection->updateByID("disburse", $data, $id);
        $connection->close();

        return $status;
    }
}