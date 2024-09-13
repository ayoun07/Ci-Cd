<?php

namespace SAFEBASE\Restore_Backup_Postgres;
use \Exception;

class Backup
{
    private $db_name;
    private $db_host;
    private $db_pass;
    private $db_user;
    private $db_port;

    public function __construct($db_name, $db_host, $db_pass, $db_user, $db_port)
    {
        $this->db_name = $db_name;
        $this->db_host = $db_host;
        $this->db_pass = $db_pass;
        $this->db_user = $db_user;
        $this->db_port = $db_port;
    }

    public function backup($outputFile):bool
    {
        $output = [];
        $retval = null;

        try {
        
            $command = sprintf(
                'set PGPASSWORD=%s&& C:\\wamp64\\bin\\PostgreSQL\\16\\bin\\pg_dump.exe -h %s -U %s -p %d -d %s > %s 2>&1',
                $this->db_pass,
                $this->db_host,
                $this->db_user,
                $this->db_port,
                $this->db_name,
                $outputFile
            );

       
            var_dump($command);

            exec($command, $output, $retval);
        } catch (Exception $e) {
            var_dump($e);
        }

        if ($retval === 0) {
            echo 'Le backup a été créé avec succès.'; 
            return true;
        } else {
            echo "Erreur lors de la création du backup. Code de retour : $retval"; 
            return false;
        }

        foreach ($output as $line) {
            echo $line . PHP_EOL;
        }
    }
}



