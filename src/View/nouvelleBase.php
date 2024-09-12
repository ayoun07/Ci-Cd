<?php
$title = 'Create database';
$myDescription = 'Ajout une base de donnée ratachée à mon programme';
require "header.php";
require "navbar.php";
?>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SafeBase</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Databases</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Backups</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Restorations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Alerts</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <H1>Ajout d'une base de données</H1>
    <form action="/database/create" method="post">
        <div class="input-group mb-3">
            <label class="form-label" for="name">Nom database: </label><input type="text" id="name" name="name" required>
        </div>
        <div class="input-group mb-3">
            <label class="form-label" for="user">Nom d'utilisateur: </label><input type="text" id="user" name="user" required>
        </div>
        <div class="input-group mb-3">
            <label class="form-label" for="password">Mot de passe: </label><input type="password" id="password" name="password" required>
        </div>
        <div class="input-group mb-3">
            <label class="form-label" for="type">Type de base de données :</label>
            <select name="type" id="type">
                <option value="1">mysql</option>
                <option value="2">pgsql</option>
            </select>
        </div>
        <div class="input-group mb-3">
            <label class="form-label" for="port">Port: </label><input type="text" id="port" placeholder="default or port number" name="port" required>
        </div>
        <div class="input-group mb-3">
            <label class="form-label" for="host">URL </label><input type="text" id="host" name="host" required>
        </div>
        <div>
            <button class="btn btn-primary" type="submit" id="Valider">Valider</button>
        </div>
    </form>
</body>

</html>