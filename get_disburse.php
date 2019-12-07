<?php
/**
 * Created by PhpStorm.
 * User: maulidan
 * Date: 07/12/19
 * Time: 13:44
 */

require_once 'controllers/DisburseController.php';

use controllers\DisburseController;

$disburse_controller = new DisburseController();
$disburse_controller->get($argv);