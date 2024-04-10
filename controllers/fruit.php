<?php
require "Database.php";
$config = require "config.php";

$page_title = "Fruit";

$db = new Database($config);

$select_query = "SELECT * FROM fruits";
$select_params = [];

if (isset($_GET["id"]) && $_GET["id"] != "") {
  $select_query .= " WHERE id=:id";
  $select_params[":id"] = $_GET["id"];
}

$fruit = $db->execute($select_query, $select_params)[0];

$page_title = $fruit['name'];

require "views/fruit.view.php";
?>
