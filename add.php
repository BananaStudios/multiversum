<?php

include("./dbase/config.php");
include("./dbase/opendb.php");

$name = $_POST["name"];
$description = $_POST["description"];
$price = $_POST["price"];
$resolutie = $_POST["resolutie"];
$refreshrate = $_POST["refreshrate"];
$aansluiting = $_POST["aansluiting"];
$ean = $_POST["EAN"];


$query = "INSERT INTO producten";
$query .= "(name, description, price, resolutie, refreshrate, aansluiting, ean)";
$query .= "VALUES (?,?,?,?,?,?,?)";


$preparedquery=$dbaselink->prepare($query);
$preparedquery->bind_param("sssssss",$name, $description, $price, $resolutie, $refreshrate, $aansluiting, $ean);
$result=$preparedquery->execute();

if (($result===false) || ($preparedquery->errno)) {
  echo "Er is een fout opgetreden";
} else {
  echo "Product toegevoegd.<br>";
  echo "<button><a href=\"./addform.php\">Product toevoegen</a></button>";
}

$preparedquery->close();

include("./dbase/closedb.php");
?>