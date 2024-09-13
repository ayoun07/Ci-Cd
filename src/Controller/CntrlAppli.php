<?php
namespace Safebase\Controller;

use Safebase\dao\DaoAppli;
use Safebase\entity\Cron;
use Safebase\entity\Database;

class CntrlAppli
{

    public function affFormConnexion()
    {
        //pas de traitement avant affichage
        require 'src/view/connexion.php';
    }

    public function affFormCron()
    {
        $dao = new DaoAppli;
        $databases = $dao->getListDatabase();
        require 'src/view/nouvelleTache.php';
    }

    public function CreateTask()
    {
        $dao = new DaoAppli;
        // format la date de demarrage
        $dateTime = \DateTime::createFromFormat('Y-m-d', $_POST['datestart']);
        if ($dateTime) {
            echo $dateTime->format('Y-m-d'); // Vérifier le format après la conversion
        } else {
            echo "La conversion a échoué.";
        }
        $time = \DateTime::createFromFormat('H:i',$_POST['heure']);
        $database = new Database($_POST['iddatabase']);
        $cron = new Cron(1,$_POST['nom'],$dateTime,$time,$_POST['recurrence'], $database);
        if ($dao->createNewTask($cron)){
            echo("Tache cron ajoutée avec succès");
        } else {
            echo('echec de l enregistrement');
        }
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
        $dao = new DaoAppli;
        $databases = $dao->getListDatabase();
        require 'src/view/index.php';
    }
    public function AffFormNewBase()
    {
        require 'src/view/nouvelleBase.php';
    }
}
