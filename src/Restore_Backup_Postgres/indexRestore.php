<?php

use SAFEBASE\Restore_Backup_Postgres\Restore;

$backup = new Restore('basepostgres', 'localhost', 'Postmalone0751@', 'postgres', 5432);

$backup->restore('backup_postgres.sql');