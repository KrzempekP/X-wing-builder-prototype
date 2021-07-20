<?php

require("pdo_connect.php");
$query = "CREATE TABLE squadron (squadronid int NOT NULL AUTO_INCREMENT, squadtext varchar(255), points INT, PRIMARY KEY (squadronid))ENGINE=INNODB";

$sth = $pdo->prepare($query);

$sth->execute();
?>