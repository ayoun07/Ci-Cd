<?php
namespace Safebase\api;

use Safebase\dao\DaoAppli;

class testconnection
{
    public function test($type, $host, $port, $db_name, $username, $password)
    {
        $dao = new DaoAppli;
        if ($port = 'default') {
            if ($type == 'mysql') {
                $port = '3306';
            } else {
                $port = '5432';
            }
        }
        // Teste l'existance du dossier et le cré s'il n'existe pas.

        $date = new \DateTimeImmutable();
        $formattedDateTime = $date->format('Ymd-His');
        $mysqlDump = 'C:\\wamp64\\bin\\mysql\\mysql8.0.31\\bin\\mysqldump.exe ';
        $folder = 'c:\safebase\backup';

        if (!file_exists($folder)) {
            $isCreated = mkdir($folder, 0777, true);
        }
        if ($isCreated) {
            $dao->tryConnection($type, $host, $port, $db_name, $username, $password);
            $commande = $mysqlDump . '-u ' . $username . ' -p' . $password . ' ' . $db_name . '>' . $folder . '\\' . $db_name . $formattedDateTime . '.sql';
            exec($commande, $output, $result);

            $commandePostgres = 'set PGPASSWORD=toto&& pg_dump -U postgres -h localhost -p 5432 Safebasepostgre > backups\\Safebasepostgre' . $formattedDateTime . '.sql';
            shell_exec($commandePostgres);
            exec($commandePostgres, $output, $result);

            echo "Code de résultat : " . $result . PHP_EOL;
            echo "Sortie de la commande (output) : " . PHP_EOL;
            var_dump($output);
            echo ($commande);
        } else {
            echo('impossible de créer le repertoire!');
        }
    
        
    

    }

}
