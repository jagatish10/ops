<?php


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli('remotemysql.com', 'WUAvaC7rMr', 'n1L4r7BCMk', 'WUAvaC7rMr', 3306);
$mysqli->set_charset('utf8mb4'); // always set the charset

?>
