<?php

// Chemin complet vers l'exécutable PHP et le script PHP
$phpPath = 'C:\wamp64\bin\php\php8.2.18\php.exe';
$scriptPath = 'C:\wamp64\www\laplateforme\safebase-1\cron\job1.php';

// Vérifie si le système d'exploitation est Windows
if (PHP_OS === "WINNT") {

    echo 'Création de la tâche cron sous Windows via PHP...';

    // Commande pour créer la tâche cron
    // $command = "schtasks /create /tn \"testCronPHP\" /tr \"$phpPath $scriptPath\" /sc daily /st 19:45";
    $command = "schtasks /create /tn \""  . $taskCron .  "\" /tr \"$phpPath $scriptPath\" /sc  /mo 1 /st 12:00";
    // équivalent à 45 19 * * * d'une tâche CRON
    // Exécute la commande
    exec($command, $output, $result);
    
} elseif (PHP_OS === "Linux") {

    echo 'Création de la tâche cron sous Linux via PHP...';

    // Définir la commande cron à ajouter
    $cronJob = '45 19 * * * ' . escapeshellcmd($phpPath) . ' ' . escapeshellarg($scriptPath);

    // Lire la crontab actuelle
    exec('crontab -l 2>/dev/null', $output, $result);

    // Ajouter la nouvelle tâche cron
    $currentCrontab = implode("\n", $output);
    $newCrontab = $currentCrontab . "\n" . $cronJob;

    // Écrire la nouvelle crontab
    $tmpFile = '/tmp/my_crontab';
    file_put_contents($tmpFile, $newCrontab);
    exec('crontab ' . escapeshellarg($tmpFile), $output, $result);

    // Supprimer le fichier temporaire
    unlink($tmpFile);

    // Vérifier si la tâche a été ajoutée avec succès
    if ($result === 0) {
        echo 'La tâche cron a été ajoutée avec succès.';
    } else {
        echo 'Une erreur est survenue lors de l\'ajout de la tâche cron.';
    }
} else {
    echo 'Le script doit être exécuté sous Windows ou Linux.';
}
