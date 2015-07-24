<?php
$db = new mysqli("localhost", "root", "root", "blog"); //name of database is last
if ($db->connect_errno) {
    echo "Failed to connect to MySQL :(<br>";
    echo $db->connect_error;
    exit();
}

?>