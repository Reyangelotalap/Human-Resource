<?php

session_start();

session_destroy();

header('location: ../../../managementLoginForm/pages/index');

die();


?>

