<?php

require_once("Database.php");

$countyKey = filter_input(INPUT_POST, "countyKey");
//$countyKey = $_POST["countyKey"];
//$countyKey = "Dublin";

$getTown = "SELECT * FROM towns WHERE countyID = (SELECT id FROM counties WHERE name = '" . $countyKey . "') ORDER BY townName";
$statement3 = $db->prepare($getTown);
$statement3->execute();
$result3 = $statement3->fetchAll(PDO::FETCH_OBJ);


if ((isset($countyKey)) && !empty($countyKey)) {

    foreach ($result3 as $row3) {

        echo "<option> " . $row3->townName . " </option>";
    }
}
    

//if ((isset($countryKey)) && !empty($countryKey)) {
//    
//    foreach ($result as $row) {
//        
//        $countyArr[] = ($row->countyName);
//    }
//    echo json_encode($countyArr);
//}
//    

 