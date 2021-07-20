<?php

require("pdo_connect.php");

$query = "CREATE TABLE users (id int NOT NULL AUTO_INCREMENT, username varchar(255), password varchar(255), PRIMARY KEY (id))";

$sth = $pdo->prepare($query);

$sth->execute();
?>