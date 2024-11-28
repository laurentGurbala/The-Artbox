<?php

include "config/conf.php";

function connexion()
{
    global $dbHost;
    global $dbName;
    global $dbUser;
    global $dbPassword;

    return new PDO(
        "mysql:host=$dbHost;port=3307;dbname=$dbName;charset=utf8",
        "$dbUser",
        $dbPassword
    );
}
