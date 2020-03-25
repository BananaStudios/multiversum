<?php

require("header.php");

  include("./dbase/config.php");
  include("./dbase/opendb.php");

  echo "<a href=\"./index.php\"><button>Terug</button></a>";

  echo "<br>";
  echo "<br>";

  $query = "SELECT * ";
  $query .= "FROM producten ";
  $query .= "WHERE id=? ";

  $preparedquery = $dbaselink->prepare($query);

  $id = $_GET["id"];
  $preparedquery->bind_param("i", $id);
  $preparedquery->execute();

  if($preparedquery->errno) {
    echo "Fout bij het uitvoeren van commando";
  } else {
    $result = $preparedquery->get_result();
    
    if($result->num_rows === 0) {
      echo "Geen rijen gevonden";
    } else {
      while($row = $result->fetch_assoc()) {?>
            <img class="mx-auto" src="<?php echo $row["image"]?>" height="100px">
        <?php echo "<br>" . "<br>" . "Product : " . $row["name"] . "<br>" . "Omschrijving: " . $row["description"] . "<br>" . "Prijs: " . "€" 
        . $row["price"] . "<br>" . "Resolutie: " . $row["resolutie"] . "<br>" . "Refresh Rate: " . $row["refreshrate"] . "<br>" . 
        "Aansluitingen: " . $row["aansluiting"] . "<br>" . "EAN: " . $row["EAN"];
      }
    }
  }


  $preparedquery->close();

  echo "<br><br>";


  include("./dbase/closedb.php");

  require("footer.php");


?>