<?php
/**
 * Created by PhpStorm.
 * User: maulidan
 * Date: 06/12/19
 * Time: 20:05
 */

require_once 'connection/DB.php';
require_once 'migrations/DisburseMigration.php';

use connection\DB;
use migrations\DisburseMigration;

$disburse_migration = new DisburseMigration();

$conection = new DB();
$status = $conection->query($disburse_migration->getQuery());
$conection->close();

if ($status)
    echo "Table $disburse_migration->table created.\n";