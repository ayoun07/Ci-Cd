<?php
require_once('C:\wamp64\www\SafeBase\src\Restore_Backup_Postgres\FindFile.php');
use SAFEBASE\Restore_Backup_Postgres\FindFile;

class FindFileTest extends \PHPUnit\Framework\TestCase{
    public function testfindfileexist(){
        $object=new FindFile();
        $fileexist = $object->findFile('C:\wamp64\www\safebase\tests\Restore_Backup_Postgres_Tests\backup_postgres.sql');
        $this->assertTrue($fileexist);
    }
    public function testfindfileexistFailures()
    {
        $object = new FindFile();
        $fileexist = $object->findFile('C:\wamp64\www\safebasejyyjyrjyr\tests\Restore_Backup_Postgres_Tests\backup_postgress.sql');
        $this->assertFalse($fileexist);
    }
}