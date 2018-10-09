<?php

require_once("Database.php");

$countryKey = filter_input(INPUT_POST, "countryKey");

$countryArr = [];

$getCountry = "SELECT * FROM countries WHERE country like '" . $countryKey . "%' ORDER BY country";
$statement = $db->prepare($getCountry);
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_OBJ);


foreach ($result as $row) {
    $countryArr[] = ($row->country);
}
echo json_encode($countryArr);












