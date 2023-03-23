<?php

session_start();

session_destroy();

header('location: ../../Job Portal/Pages/loginEmployee.php');

die();


?>