<?php

$db_name = 'turismo_gramado';
$db_host = 'localhost:3306';
$db_user = 'root';
$db_password = 'G14B03c2002.';

$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_password);