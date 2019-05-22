<?php
require_once "constants.php";

$db_connect = new mysqli($db_hostT, $db_user, $db_password, $db_name) or die ($db_connect->connect_error);
$db_connect->set_charset('utf8');
echo "Connected to database";
?>