<?php
namespace Safebase\Controller;

use Safebase\dao\DaoAppli;
use Safebase\entity\Cron;
use Safebase\entity\Database;

class CronController
{
    public function displayCron()
    {
        $dao = new DaoAppli;
        $databases = $dao->getListDatabase();
        require 'src/view/nouvelleTache.php';
    }
 
}
