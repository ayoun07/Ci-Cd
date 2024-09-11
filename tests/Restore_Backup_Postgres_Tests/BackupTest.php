<?php

use SAFEBASE\Restore_Backup_Postgres\Backup;

class BackupTest extends PHPUnit_Framework_TestCase{


    public function testbackup():void{
        $backup = new Backup('basepostgres', 'localhost', 'Postmalone0751@', 'postgres', 5432);
        $this->assertTrue( $backup->backup('backup_postgres.sql'));
    }
}   