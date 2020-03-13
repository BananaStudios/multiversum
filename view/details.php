<?php

include("../dbase/config.php");
include("../dbase/dbopen.php");


$query = "SELECT id ";
$query .= "FROM producten ";
$query .= "Where id = ? ";

$preparedquery = $dbaselink->prepare($query);
$preparedquery->bind_param("i", $id);
$preparedquery->execute(); 

if ($preparedquery->errno) {
	echo "Fout bij uitvoeren commando";

}else{
	$result = $preparedquery->get_result();

if ($result-> num_rows === 0) {
	echo "Geen rijen gevonden";

}else{
	while($row = $result->fetch_assoc()) {
		echo "<br>";
		echo $row['id'] . " ";
		echo $row['name'] . " ";
		echo $row['price'] . "";
		echo $row['description'] . "<br>";
		}

	}

}

$preparedquery->close();
            
include("../dbase/dbclose.php");


?>	