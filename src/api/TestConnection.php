<?php
    namespace Safebase\api;

use Safebase\dao\DaoAppli;

class testconnection{
    public function test($type,$host,$port , $db_name, $username, $password){
        $dao =new DaoAppli;
        if ($port='default'){
            if ($type == 'mysql'){
                $port = '3306';
            } else {
                $port = '5432';
            }
        }
        $dao->tryConnection($type,$host,$port, $db_name, $username, $password);
        $commande = '"C:\\wamp64\\bin\\mysql\\mysql8.0.31\\bin\\mysqldump.exe" -u root -ptoto echangeJeune > echangeJeune.sql';
    exec($commande,$output,$result);
    echo "Code de résultat : " . $result . PHP_EOL;
    echo "Sortie de la commande (output) : " . PHP_EOL;
    var_dump($output);
        //shell_exec('mysqldump -u root -ptoto echangeJeune 2>&1 echangeJeune.sql');
        echo($commande);
        // echo('output');
        // var_dump($output);
    }
    
}
    
