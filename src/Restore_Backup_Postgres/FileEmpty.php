<?php

namespace SAFEBASE\Restore_Backup_Postgres;
use Exception;

class FileEmpty{

    public function __construct()
    {
        
    }

    public function IsEmpty($filename){
        if (filesize($filename)===0){
            return 0;
        }else{
            return;
        }  
    }
}

//$object = new FileEmpty();
//$object->IsEmpty('C:\wamp64\www\safebase\tests\Restore_Backup_Postgres_Tests\backup_postgres.sql');
