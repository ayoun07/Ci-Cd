<?php
$title = 'Accueil';
$myDescription= 'Accueil';
require "header.php";
require "navbar.php";
?>
<html>

<body>
    <div class="container-fluid d-flex">
        <?php require_once("NavBar.php") ?>
        <h1 class="titre">Databases</h1>
        <div class="col-auto ms-auto">
            <button type="button" id="btnajout" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary d-flex flex-row align-items-end">Create database +</button>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">



                            <H1>Ajout d'une base de données</H1>



                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/database/create" method="post">
                                <div class="input-group mb-3">
                                    <label class="form-label" for="name">Nom database: </label><input type="text" id="name" name="name"
                                        required>
                                </div>
                                <div class="input-group mb-3">
                                    <label class="form-label" for="user">Nom d'utilisateur: </label><input type="text" id="user" name="user"
                                        required>
                                </div>
                                <div class="input-group mb-3">
                                    <label class="form-label" for="password">Mot de passe: </label><input type="password" id="password"
                                        name="password" required>
                                </div>
                                <div class="input-group mb-3">
                                    <label class="form-label" for="type">Type de base de données :</label>
                                    <select name="type" id="type">
                                        <option value="1">mysql</option>
                                        <option value="2">pgsql</option>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <label class="form-label" for="port">Port: </label><input type="text" id="port" placeholder="default or 
port number" name="port"
                                        required>
                                </div>
                                <div class="input-group mb-3">
                                    <label class="form-label" for="host">URL </label><input type="text" id="host" name="host" required>
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
