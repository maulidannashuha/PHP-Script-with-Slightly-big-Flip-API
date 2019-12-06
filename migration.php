<?php
/**
 * Created by PhpStorm.
 * User: maulidan
 * Date: 06/12/19
 * Time: 20:05
 */

require_once 'connection/Connection.php';
require_once 'migrations/DisburseMigration.php';

use connection\Connection;
use migrations\DisburseMigration;

$disburse_migration = new DisburseMigration();

$conection = new Connection();
$status = $conection->query($disburse_migration->getQuery());
$conection->close();

if ($status)
    echo "Table $disburse_migration->table created.\n";