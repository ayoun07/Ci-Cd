<?php
require_once dirname(__DIR__) . '/Restore_Backup_Postgres_Tests/FindFileTest.php';
use SAFEBASE\Restore_Backup_Postgres\FindFile;
use PHPUnit\Framework\TestCase;

class FindFileTest extends TestCase{
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