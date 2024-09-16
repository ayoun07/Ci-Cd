<?php
namespace Safebase\Controller;

use Safebase\dao\DaoAppli;
use Safebase\entity\Database;

class DatabaseController extends CntrlAppli
{
    public function displayDatabase()
    {
        require 'src/view/index.php';
    }
    
}
