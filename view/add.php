<?php

include("../dbase/config.php");
include("../dbase/dbopen.php");

$name = $_POST["name"];
$description = $_POST["description"];

$query = "INSERT INTO producten";
$query = "VALUES (?,?)";

$preparedquery=$dbaselink->prepare($query);
$preparedquery->bind_param("ss", $name, $description);
$result=$preparedquery->execute();

if (($result===false) || ($preparedquery->errno)) {
  echo "Er is een fout opgetreden";
} else {
  echo "product toegevoegd.<br>";
  echo "<button><a href=\"addform.php\">toevoegen</a></button>";
}

$preparedquery->close();

include("../dbase/dbclose.php");




?>