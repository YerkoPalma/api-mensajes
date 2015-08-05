<?php
// A simple web site in Cloud9 that runs through Apache
// Press the 'Run' button on the top to start the web server,
// then click the URL that is emitted to the Output tab of the console
require_once "mensajes.php";
?>


<?php

$dbname = "api_mensajes";
$host = "localhost";
$user = "postgres";
$pass = "postgres";
$port = 5432;
$dbh;

try{
    $db = new PDO('pgsql:dbname=api_mensajes;host=127.0.0.1',
        $user,
        $pass);
} catch (PDOException $e) {
    echo  $e->getMessage(); 
}
$msg = new mensajes($db);

echo $msg->processAPI();

?>
