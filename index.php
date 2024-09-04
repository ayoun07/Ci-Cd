<?php
declare (strict_types = 1);
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
    // $word = $_GET['url'];
    // $database = $_GET['database'];
    // $user = $_GET['user'];
    // $password = $_GET['password'];
    // $port = $GET['port'];
    $url       = "localhost";
        $database    = "echangeJeune";
        $port = "3306";
        $user   = "Admin";
        $password   = "Azerty13";
        $type = "mysql";
           
    $api->test($type,$url,$port , $database, $user, $password);
} else {
    $cntrl->getIndex();
}
