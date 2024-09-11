<?php
$title = 'Create new task';
$myDescription = 'Ajout une nouvelle tache';
require "header.php";
?>
<body>
    <H1>Création d'une tache planifiée</H1>
    <form action="/task/create" method="post">
        <div class="input-group mb-3">
            <label class="form-label" for="nom">Nom de la tache: </label><input class="form-control" type="text" id="nom" name="nom" required>
        </div>
        <div>     
            <label class="form-label" for="iddatabase">Type de base de données :</label>
            <select class="form-select" name="iddatabase" id="iddatabase">
                <?php foreach ($databases as $database) {?>
                    <option value=" <?=$database['id']?>"><?=$database['nom']?></option>
                <?php }?>
            </select>  
        </div>
        <div>
            <label for="datestart">Date de démarrage </label><input type="date" id="datestart" name="datestart" required>
        </div>
        <div>
            <label for="heure">Heure: </label><input type="hour" id="heure" name="heure" required>
        </div>
        <div>
            <label for="recurrence">Récurrence </label><input type="text" id="recurrence" name="recurrence" required>
        </div>
        <div>
            <button class="btn btn-primary" type="submit" id="Valider">Valider</button>
        </div>
    </form>
</body>
</html>
