<?php

include "./CONTROLLER/conexion.php";


session_start();
session_destroy();
header("location: http://localhost/support_kip_linux/login.php");

?>