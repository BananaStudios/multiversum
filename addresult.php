<?php

include("./dbase/config.php");
include("./dbase/opendb.php");

if ((!isset($_POST["name"])) || (!isset($_POST["description"])) || (!isset($_POST["price"])) || (!isset($_POST["resolutie"])) || (!isset($_POST["refreshrate"])) || (!isset($_POST["aansluiting"])) || (!isset($_POST["EAN"]))) {
  echo "Vul alle waardes in";
  echo "<a href=\"./addform.php\">Voeg het nieuwe product opnieuw toe</a>";
  exit;
}

if ((empty($_POST["name"])) || (empty($_POST["description"])) || (empty($_POST["price"])) || (empty($_POST["resolutie"])) || (empty($_POST["refreshrate"])) || (empty($_POST["aansluiting"])) || (empty($_POST["EAN"]))) {
  echo "Vul alle waardes in";
  echo "<a href=\"./addform.php\">Voeg het nieuwe product opnieuw toe</a>";
  exit;
}


$query = "SELECT max(id) AS maxid ";
$query .= "FROM producten ";

$preparedquery = $dbaselink->prepare($query);
$preparedquery->execute();

if ($preparedquery->errno) {
  echo "Er is een fout opgetreden";
} else {
  $result = $preparedquery->get_result();
  if ($result->num_rows === 0 ) {
    $id = 0;
  } else {
      $row = $result->fetch_assoc();
      $id = $row["maxid"];
  }
}

$preparedquery->close();
$id++;

$name = $_POST["name"];
$descripton = $_POST["description"];
$price = $_POST["price"];
$resolutie = $_POST["resolutie"];
$refreshrate = $_POST["refreshrate"];
$aansluiting = $_POST["aansluiting"];
$ean = $_POST["EAN"];

$query = "INSERT INTO producten ";
$query .= "VALUES (?,?,?,?,?,?,?,?) ";

$preparedquery = $dbaselink->prepare($query);
$preparedquery->bind_param("issssss", $id, $name, $descripton, $price, $resolutie, $refreshrate, $aansluiting, $ean);
$result = $preparedquery->execute();

if (($result===false) || ($preparedquery->errno)) {
  echo "Er is een fout opgetreden";
} else {
  echo "Product toegevoegd.<br>";
  echo "<a href=\"./index.php\"><button>Home</button></a>";
}

$preparedquery->close();

include("./dbase/closedb.php");
?>