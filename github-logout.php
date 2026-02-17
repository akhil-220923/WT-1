<?php
session_start();
unset($_SESSION['github_user']);
header("Location: index.php");
exit();
