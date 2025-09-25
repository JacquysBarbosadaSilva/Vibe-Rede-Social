<?php
session_start();
// Impede cache para evitar retorno após logout
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');
header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
session_unset();
session_destroy();
header('Location: ../index.php');
exit();
