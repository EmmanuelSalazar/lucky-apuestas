<?php 

$mysqli = new mysqli("193.203.175.126", "u252950203_admin", "=Z|=kbLC[n3", "u252950203_luckydb");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>