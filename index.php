<?php

declare(strict_types=1);

namespace Safebase;

use Safebase\api\testconnection;
use Safebase\controller\CntrlAppli;

require_once __DIR__ . '/vendor/autoload.php';

/* router de l'application */

//ex: localhost:3000/ressource?niveau=2
$uri = $_SERVER['REQUEST_URI'];
$route = explode('?', $uri)[0];
$method = strtolower($_SERVER['REQUEST_METHOD']);
// echo $route . ' - ' . $method;

$cntrl = new CntrlAppli;
$api = new testconnection;
//-----------------------------------------------------------------------------------------------
if ($method == 'get' and $route == '/') {
    $cntrl->getIndex();
} elseif ($method == 'post' and $route == '/inscription') {
    $cntrl->getIndex();
} elseif ($method == 'get' && $route == '/api/testconnection') {
    //valeurs en dur pour une DB mysql
    // $type = 'mysql';
    // $host = 'localhost';
    // $db_name = 'super-reminder';
    // $port = 'default';
    // $username = 'root';
    // $password = 'toto';

    //valeurs en dur pour une DB pgsql
    $type = 'pgsql';
    $host = 'localhost';
    $db_name = 'testpostgressql';
    $port = '5432';
    $username = 'postgres';
    $password = 'toto';

    $api->test($type, $host, $port, $db_name, $username, $password);
} else {
    $cntrl->getIndex();
}
