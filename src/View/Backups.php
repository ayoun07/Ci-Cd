<?php
$title = 'Create new task';
$myDescription = 'Ajout une nouvelle tache';
require "header.php";
?>
<html>


<body>
    <div class="container-fluid d-flex">
        <?php require_once("NavBar.php") ?>
        <h1 class="titre">Backups</h1>
        <div class="col-auto ms-auto">
            <button type="button" id="btnajout" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary d-flex flex-row align-items-end">Create backup +</button>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">



                            <H1>Create backup</H1>



                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/task/create" method="post">
                                <div class="input-group mb-3">
                                    <label class="form-label" for="nom">Nom de la tache: </label><input class="form-control" type="text" id="nom" name="nom"
                                        required>
                                </div>
                                <div class="d-flex align-items-center">
                                    <label class="form-label" for="iddatabase">Base de données :</label>
                                    <select class="form-select" name="iddatabase" id="iddatabase">
                                        <?php foreach ($databases as $database) { ?>
                                            <option value=" <?= $database['id'] ?>"><?= $database['nom'] ?></option>
                                        <?php } ?>
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
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" type="submit" id="Valider">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</body>

</html>