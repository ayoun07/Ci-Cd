<?php

namespace SAFEBASE\Restore_Backup_Postgres;

use Exception;

class FindFile{

    public function __construct(){

    }

    public function findFile($filename){
        echo $filename;
        try {
            if (file_exists($filename)) {
                return true;
            }else{
            return false;
            }
        } catch (Exception $e) {
            return false;
        }
    }

    public static function Salut(){
        echo 'hi';
    }
}
$object = new FindFile();
$res = $object->findFile('C:\wamp64\www\safebasejvuez\tests\Restore_Backup_Postgres_Tests\backup_postgres.sql');
var_dump($res);