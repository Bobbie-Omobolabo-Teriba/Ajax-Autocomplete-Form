<?php
require_once("Database.php");

$countyKey = filter_input(INPUT_POST, "countyKey");
$countryKey = filter_input(INPUT_POST, "countryKey");


$getCounty = "SELECT * FROM counties WHERE name like '" . $countyKey . "%'"
        . "AND country_id = (SELECT id FROM countries WHERE country = '" . $countryKey . "') ORDER BY name";
$statement = $db->prepare($getCounty);
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_OBJ);

if ((isset($countryKey)) && !empty($countryKey)) {
    
    foreach ($result as $row) {
        
        $countyArr[] = ($row->name);
    }
    echo json_encode($countyArr);
}
    

 