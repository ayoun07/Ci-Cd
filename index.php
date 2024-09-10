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
//separe les segments de l'adresse
$segments = explode('/', trim($route, '/'));
// echo $route . ' - ' . $method;
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
        if (isset($segments[2]) and $segments[1] == 'cron') {
            echo ('cron');
            if (isset($segments[2]) and $segments[2] == 'create') {
                echo ('create');
                $cron->createCron();
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

} elseif ($method == 'post') {
    echo ('post');
    // route vers databases
    if ($segments[0] == 'database') {
        echo ('folder database');
        if (isset($segments[1]) and $segments[1] == 'create') {
            $cntrl->createDatabase();
        } elseif (isset($segments[1]) and $segments[1] == 'update') {

        } elseif (isset($segments[1]) and $segments[1] == 'delete') {

        } elseif (isset($segments[1]) and $segments[1] == 'read') {

        } elseif (isset($segments[1]) and $segments[1] == 'connection') {
            echo ('Tentative de connection');
            if ($api->test($_POST['type-database'], $_POST['host'], $_POST['port'], $_POST['db-name'], $_POST['user'], $_POST['password'])) {
                // create database
            }
            ;
        } else {
            echo ('Route non trouvée');
        }

    }
    // route les taches plannifiées
    if ($segments[0] == 'cron') {
        if (isset($segment[1]) and $segments[1] == 'create') {

        } elseif (isset($segment[1]) and $segments[1] == 'update') {

        } elseif (isset($segment[1]) and $segments[1] == 'delete') {

        } elseif (isset($segment[1]) and $segments[1] == 'read') {

        }
    }

    if ($segments[0] == 'alert') {
        if (isset($segment[1]) and $segments[1] == 'create') {

        } elseif (isset($segment[1]) and $segments[1] == 'read') {

        }
    }
    if ($segments[0] == 'backup') {
        if (isset($segment[1]) and $segments[1] == 'create') {

        } elseif (isset($segment[1]) and $segments[1] == 'read') {

        }
    }
// route vers index
} else {
    $cntrl->getIndex();
}
