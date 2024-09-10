<?php
namespace Safebase\Controller;

use Safebase\dao\DaoAppli;
use Safebase\entity\Database;

class CntrlAppli
{

    public function affFormConnexion()
    {
        //pas de traitement avant affichage
        require 'src/view/connexion.php';
    }

    public function connecterBase($host, $db_name, $username, $password)
    {

    }

    public function createDatabase()
    {
        $database = new Database(name: htmlspecialchars($_POST['name']),
                                password: htmlspecialchars(  $_POST['password']),
                                userName: htmlspecialchars($_POST['user']),
                                port:  htmlspecialchars($_POST['port']),
                                host: htmlspecialchars($_POST['host']),
                                type: 1,
                                usedType: 'prod');
        $dao = new DaoAppli;
        $dao->createNewBase($database);
    }

    public function getIndex()
    {
        require 'src/view/index.php';
    }
    public function AffFormNewBase()
    {
        require 'src/view/nouvelleBase.php';
    }
}
