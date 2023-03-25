<?php

session_start();

include_once("connection.php");

$query = "SELECT * FROM echart";

$stmt = $conn->prepare($query);

$stmt->execute();

$echart = $stmt->fetchAll();