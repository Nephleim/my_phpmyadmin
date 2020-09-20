<?php

require_once('../Manager.php');

$dbname = $_POST["dbname"];
$tableName = $_POST["tableName"];
$columnName = $_POST["columnName"];
$value = $_POST["value"];

$manager = new Manager();

try{
    $sql = "USE $dbname;";
    $manager->conn->exec($sql);
    $sql = "INSERT INTO `$tableName`($columnName) VALUES ($value);";
    $manager->conn->exec($sql);
    echo "Row added successfully";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}


?>