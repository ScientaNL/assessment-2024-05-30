<?php

declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('xdebug.var_display_max_depth', '15');

require_once 'TreeAssessment.php';

//Start here :-)
$data = include('data.php');

var_dump($data);
die();
