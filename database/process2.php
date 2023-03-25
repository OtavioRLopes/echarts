<?php

include_once("connection2.php");

$query = "SELECT * FROM brazil";

$stmt = $conn->prepare($query);

$stmt->execute();

$brazil = $stmt->fetchAll();