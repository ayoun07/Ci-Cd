<?php

if (PHP_OS === "WINNT") {
    echo 'Supréssion de la tache cron sous windows via php...';

    $command = "schtasks /delete /tn \"testCronPHP\" /f";

    exec($command, $output, $result);
}

if ($result === 0) {
    echo 'la tache cron a ete supprimer avec succes.';
} else {
    echo 'une erreur est survenu lors de la suppression de la tache cron';
}