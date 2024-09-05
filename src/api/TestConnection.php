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


        $dateTime = shell_exec('Get-Date');
        $date = new \DateTimeImmutable($dateTime);
        $formattedDateTime = $date->format('Ymd-His');

        $dao->tryConnection($type,$host,$port, $db_name, $username, $password);
        $commande = '"C:\\wamp64\\bin\\mysql\\mysql8.0.31\\bin\\mysqldump.exe" -u root -ptoto echangeJeune > backups\echangeJeune' . $formattedDateTime . '.sql';
    exec($commande,$output,$result);
    echo "Code de résultat : " . $result . PHP_EOL;
    echo "Sortie de la commande (output) : " . PHP_EOL;
    var_dump($output);
        echo($commande);
    }
    
}
    
