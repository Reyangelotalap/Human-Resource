<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "human_resource 1";
$connection = mysqli_connect("$server", "$username", "$password");
$select_db = mysqli_select_db($connection, $database);

if (!$select_db){

    echo("Connection Terminated");

}

?>