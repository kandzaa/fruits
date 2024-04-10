<?php
$config = require "config.php";
require "Database.php";

$db = new Database($config);

$select_query = "SELECT * FROM fruits";
$select_params = [];

if (isset($_GET["id"]) && $_GET["id"] != "") {
  $select_query .= " WHERE id=:id";
  $select_params[":id"] = $_GET["id"];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $delete_query = 'DELETE FROM fruits WHERE id = :id';
  $delete_params = [':id' => $_POST['id']];
  $db->execute($delete_query, $delete_params);
}

$fruits = $db->execute($select_query, $select_params);

$page_title = "Fruits";

require "views/index.view.php";
