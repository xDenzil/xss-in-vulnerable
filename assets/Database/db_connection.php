<?php
$dbServername = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbDataBaseName = 'cs_persistence';
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbDataBaseName) or die("<h1>Could not connect to database.</h1>");
