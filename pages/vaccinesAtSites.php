<?php
include 'connectdb.php';

try {
    $result = $connection->query("SELECT * FROM ShipsTo");
    $vaccinesAtSites = $result->fetchAll();
} catch (PDOException $e) {
    echo "Error!: " . $e->getMessage() . "<br/>";
    die();
}

function getVaccinesAtSites($connection, $SiteName)
{
    $query = "select LotNumber FROM ShipsTo WHERE SiteName = :SiteName";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(':SiteName', $SiteName);
    $result = $stmt->execute();
    return $stmt->fetchAll();
}