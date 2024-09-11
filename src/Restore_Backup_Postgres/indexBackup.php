<?php

use SAFEBASE\Restore_Backup_Postgres\Backup;

$backup = new Backup('basepostgres', 'localhost', 'Postmalone0751@', 'postgres', 5432);

$backup->backup('backup_postgres.sql');