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
    
    public function createCron(){
         $cron = new Cron();
         $cron->Create();
    }
    public function updateCron($id){
        //todo
    }
    
}
