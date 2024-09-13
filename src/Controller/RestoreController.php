<?php
namespace Safebase\Controller;

use Safebase\dao\DaoAppli;
use Safebase\entity\Database;

class RestoreController extends CntrlAppli
{
    public function displayBackup()
    {
        require 'src/view/restore.php';
    }
    
}
