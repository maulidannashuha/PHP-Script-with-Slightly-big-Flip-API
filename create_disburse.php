<?php
/**
 * Created by PhpStorm.
 * User: maulidan
 * Date: 07/12/19
 * Time: 10:12
 */

require_once 'controllers/DisburseController.php';

use controllers\DisburseController;

$disburse_controller = new DisburseController();
$disburse_controller->create($argv);