<?php
/**
 * Created by PhpStorm.
 * User: maulidan
 * Date: 06/12/19
 * Time: 21:12
 */

namespace migrations;

require_once 'Migration.php';

class DisburseMigration extends Migration
{
    public $table = 'disburse';
    protected $attributes = [
        'id' => 'BIGINT(20) UNSIGNED PRIMARY KEY',
        "amount" => "INT(10) UNSIGNED NOT NULL",
        "status" => "VARCHAR(10) NOT NULL",
        "timestamp" => "timestamp NULL",
        "bank_code" => 'varchar(10) NOT NULL',
        "account_number" => 'varchar(30) NOT NULL',
        "beneficiary_name" => "varchar(100) NOT NULL",
        "remark" => 'varchar(255) NOT NULL',
        "receipt" => 'varchar(255) NULL',
        "time_served" => 'timestamp NULL',
        "fee" => 'INT(10) UNSIGNED NOT NULL'
    ];
}