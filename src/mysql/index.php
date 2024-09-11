<?php

require_once('Connection.php');

$db = new Connection('task_management');
$dates = $db->query('SELECT * FROM tasks');
var_dump($dates);