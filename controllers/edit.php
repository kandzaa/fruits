<?php
require "Database.php";
$config = require "config.php";

$db = new Database($config);

if (isset($_GET['id'])) {
    $select_query = "SELECT * FROM fruits WHERE id=:id";
    $select_params = [':id' => $_GET['id']];
    $fruit = $db->execute($select_query, $select_params);
}

require "views/edit.view.php";
?>
