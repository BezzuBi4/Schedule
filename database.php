<?php
$host        = "host = localhost";
$port        = "port = 5432";
$dbname      = "dbname = table1";
$credentials = "user = postgres password=12345";
$db = pg_connect("$host $port $dbname $credentials");
// if ($db){
//     echo "Success!";
// }else {
//     echo "Nope";
// }
?>