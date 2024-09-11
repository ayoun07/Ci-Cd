<?php

namespace SAFEBASE\Restore_Backup_Postgres;
use \Exception;

class Restore
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

    public function restore($inputFile)
    {
        $output = [];
        $retval = null;

        try {
            $command = sprintf(
                'set PGPASSWORD=%s&& C:\\wamp64\\bin\\PostgreSQL\\16\\bin\\psql.exe -h %s -p %d -U %s -d %s -f %s 2>&1',
                $this->db_pass,
                $this->db_host,
                $this->db_port,
                $this->db_user,
                $this->db_name,
                $inputFile
            );

            var_dump($command);

            exec($command, $output, $retval);
        } catch (Exception $e) {
            var_dump($e);
        }

        if ($retval === 0) {
            echo 'La restauration a été effectuée avec succès.';
        } else {
            echo "Erreur lors de la restauration de la base de données. Code de retour : $retval";
        }

        foreach ($output as $line) {
            echo $line . PHP_EOL;
        }
    }
}



