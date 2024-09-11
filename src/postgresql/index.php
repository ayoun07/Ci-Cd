<?php

require_once('Connection.php');

$db = new Connection('basepostgres');
$dates = $db->query('SELECT * FROM players');
var_dump($dates);
