<?php

namespace Safebase\api;

use Safebase\dao\DaoAppli;

class TestConnection
{
    public function test($database): bool
    {
        $dao = new DaoAppli;

        // Déterminer le port
        if ($database->getPort() == 'default') {
            if ($database->getType()->getName() == 'mysql') {
                $database->setPort('3306');
            } else {
                $database->setPort('5432');
            }
        }

        $dao->tryConnection($database);

        // Récupération des infos DB
        $db_name  = $database->getName();
        $port     = $database->getPort();
        $host     = $database->getHost();
        $username = $database->getUserName();
        $password = $database->getPassword();

        // 🔥 Correction : Gestion du bon hôte en fonction de l'environnement
        if (php_sapi_name() !== 'cli' && $host === 'mysql') {
            $host = 'mysql';
            $port = '3306'; // Port exposé en dehors de Docker
        }

        // Création du répertoire pour les dumps
        $root_path = $_SERVER['DOCUMENT_ROOT'];
        $directory = $root_path . DIRECTORY_SEPARATOR . 'dumps' . DIRECTORY_SEPARATOR . $db_name;

        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
            echo "Le dossier $directory a été créé.<br>";
        } else {
            echo "Le dossier $directory existe déjà.<br>";
        }

        // Nom du fichier de dump
        $date = date("Y-m-d_H-i-s");
        $dump_name = $db_name . '_' . $date . '.sql';
        $ExportPath = $directory . DIRECTORY_SEPARATOR . $dump_name;

        // Construction de la commande mysqldump
        if ($database->getType()->getName() == 'mysql') {
            $commande = "mysqldump --opt --port=$port -h $host -u $username";
            if (!empty($password)) {
                $commande .= " -p$password";
            }
            $commande .= " $db_name > \"$ExportPath\" 2>&1"; // 🔥 Ajout de `2>&1` pour capturer les erreurs
        } else {
            $commande = "set PGPASSWORD=$password && pg_dump -U $username -h $host -p$port $db_name > \"$ExportPath\" 2>&1";
        }

        echo "Commande exécutée : $commande <br>";

        // Exécution de la commande
        exec($commande, $output, $result);

        echo '<pre>';
        echo "Code de résultat : " . $result . PHP_EOL;
        echo "Sortie de la commande : " . implode("\n", $output) . PHP_EOL;
        echo '</pre>';

        // Gestion des erreurs
        if ($result === 0) {
            echo "La base de données <b>$db_name</b> a été sauvegardée avec succès dans : <b>$ExportPath</b>";
            $dao->createBackup($database->getId(), $dump_name);
            return true;
        } else {
            echo "❌ Erreur lors de l'exportation de <b>$db_name</b>.";
            return false;
        }
    }
}
