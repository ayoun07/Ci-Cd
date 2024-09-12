<?php
namespace Safebase\Controller;

use Safebase\dao\DaoAppli;
use Safebase\entity\Cron;
use Safebase\entity\Database;

class CntrlAppli
{

    public function displayConnexion()
    {
        //pas de traitement avant affichage
        require 'src/view/connexion.php';
    }

    public function getIndex()
    {
        require 'src/view/index.php';
    }
  
}
