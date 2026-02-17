<?php

session_start();

session_destroy();
header('Location:/php-crash/sesssions.php');

?>