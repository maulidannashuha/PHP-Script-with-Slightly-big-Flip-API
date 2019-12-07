<?php
/**
 * Created by PhpStorm.
 * User: maulidan
 * Date: 06/12/19
 * Time: 22:11
 */

namespace controllers;

use api\API;
use models\DisburseModel;

class DisburseController
{
    public function create($argv){
        if (count($argv) < 5){
            echo "How to run : \n";
            echo "create_disburse.php bank_code account_number amount remark\n";
            echo "Example : create_disburse.php bni 1234567890 10000 'sample remark'\n";
            return;
        }

        $result = API::post('https://nextar.flip.id/disburse', [
            'bank_code' => $argv[1],
            'account_number' => $argv[2],
            'amount' => $argv[3],
            'remark' => $argv[4],
        ]);

        DisburseModel::insertDisburse($result);

        echo json_encode($result);
        echo "\n";
    }

    public function get($argv){
        if (count($argv) < 2){
            echo "How to run : \n";
            echo "create_disburse.php disburse_id\n";
            echo "Example : create_disburse.php 4030480246\n";
            return;
        }

        $result = API::get('https://nextar.flip.id/disburse/' . $argv[1]);

        DisburseModel::updateDisburse($argv[1], $result);

        echo json_encode($result);
        echo "\n";
    }
}