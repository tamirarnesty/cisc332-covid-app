<?php
include 'connectdb.php';

try {
    $result = $connection->query("SELECT Name FROM Company");
    $companies = $result->fetchAll();
} catch (PDOException $e) {
    echo "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
