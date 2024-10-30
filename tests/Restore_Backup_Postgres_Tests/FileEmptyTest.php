<?php
require_once dirname(__DIR__).'/FileEmptyTest.php';

use SAFEBASE\Restore_Backup_Postgres\FileEmpty;
use PHPUnit\Framework\TestCase;

class FileEmptyTest extends TestCase{

    public function testIsEmpty(){
        $object = new FileEmpty();
        $objectests = $object->IsEmpty('C:\wamp64\www\safebase\tests\Restore_Backup_Postgres_Tests\backup_postgres.sql');
        $this->assertEquals(0, $objectests, "le fichier est vide alors qu'il ne devrait pas l'etre !");
    }
}
