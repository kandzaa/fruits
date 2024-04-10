<?php
require "Database.php";
$config = require "config.php";

require "views/create.view.php";

$page_title = "Create a fruit";
$db = new Database($config);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $name = trim($_POST['name']);

    if (strlen($name) < 2 || strlen($name) > 50) {
        $error['name'] = 'Name must be between 2 and 50 characters.';
    }



    if (empty($error)) {
        $query = "INSERT INTO fruits (name, calories) VALUES (:name, :calories)";
        $params = [
            ":name" => $_POST["name"],
            ":calories" => $_POST["calories"],
        ];
        $db->execute($query, $params);
        header("Location: /");
        die();
    }
}


?>
