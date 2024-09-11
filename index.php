<?php

declare (strict_types = 1);

namespace Safebase;

use Safebase\api\tachesCron;
use Safebase\api\testconnection;
use Safebase\controller\CntrlAppli;
use Safebase\dao\DaoAppli;

require_once __DIR__ . '/vendor/autoload.php';

/* router de l'application */

//ex: localhost:3000/ressource?niveau=2
$uri = $_SERVER['REQUEST_URI'];
$route = explode('?', $uri)[0];
$method = strtolower($_SERVER['REQUEST_METHOD']);
echo $route;

//separe les segments de l'adresse
$segments = explode('/', trim($route, '/'));
$cntrl = new CntrlAppli;
$api = new testconnection;
$cron = new TachesCron;
$dao = new DaoAppli;

//-----------------------------------------------------------------------------------------------
if ($method == 'get') {
    if ($route == '/') {
        $cntrl->getIndex();
    } elseif ($segments[0] == 'api') {
        // Routes vers CRON
        if (isset($segments[2]) and $segments[1] == 'task') {
            if (isset($segments[2]) and $segments[2] == 'create') {
                
                $cntrl->affFormCron();
            } else if (isset($segments[2]) and $segments[2] == 'delete') {
                $cron->deleteTaskCron();
            }

        } elseif ($segments[1] == 'testconnection') {
            $api->test($type, $url, $port, $database, $user, $password);
        }
    } 
    if ($segments[0] == 'database') {
        if (isset($segments[1]) and $segments[1] == 'create') {
            $cntrl->AffFormNewBase();
        }
    }

    // Routes avec methodes post

} 
if ($method == 'post') {
    // route vers databases
    //echo ($route . ' - ' . $method);
    if ($segments[0] == 'database') {
        if (isset($segments[1]) and $segments[1] == 'create') {
            $cntrl->createDatabase();
        } elseif (isset($segments[1]) and $segments[1] == 'update') {
            echo('OK to update');
        } elseif (isset($segments[1]) and $segments[1] == 'delete') {

        } elseif (isset($segments[1]) and $segments[1] == 'read') {

        } elseif (isset($segments[1]) and $segments[1] == 'connection') {
            echo ('Tentative de connection');
             $api->test($_POST['type-database'], $_POST['host'], $_POST['port'], $_POST['db-name'], $_POST['user'], $_POST['password']);
                // create database
             }
        }

    // route les taches plannifiées
    elseif ($segments[0] == 'task') {
        switch ($segments[1] ?? '') {
            case 'create':
                $cntrl->CreateTask();
                break;
            case 'update':
                // Implement update functionality
                break;
            case 'delete':
                // Implement delete functionality
                break;
            case 'read':
                // Implement read functionality
                break;
        }

    } elseif ($segments[0] == 'alert') {
        if (isset($segments[1]) and $segments[1] == 'create') {

        } elseif (isset($segments[1]) and $segments[1] == 'read') {

        }
    } elseif ($segments[0] == 'backup') {
        if (isset($segments[1]) and $segments[1] == 'create') {

        } elseif (isset($segments[1]) and $segments[1] == 'read') {

        }
    }
// route vers index
} else {
    $cntrl->getIndex();
}
