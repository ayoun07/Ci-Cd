<?php
require_once('C:\wamp64\www\SafeBase\src\Restore_Backup_Postgres\FileEmpty.php');

use SAFEBASE\Restore_Backup_Postgres\FileEmpty;

class FileEmptyTest extends \PHPUnit\Framework\TestCase{

    public function testIsEmpty(){
        $object = new FileEmpty();
        $objectests = $object->IsEmpty('C:\wamp64\www\safebase\tests\Restore_Backup_Postgres_Tests\backup_postgres.sql');
        $this->assertEquals(0, $objectests, "le fichier est vide alors qu'il ne devrait pas l'etre !");
    }
}
