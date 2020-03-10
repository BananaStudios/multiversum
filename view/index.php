<?php

        <?php 
include("./header.php");
include("../dbase/config.php");
include("../dbase/dbopen.php");
require("header.php");

require("content.php");


if($preparedquery->errno) {
  echo "Fout bij het uitvoeren van commando";
} else {
  $result = $preparedquery->get_result();
  
  if($result->num_rows === 0) {
    echo "Geen rijen gevonden";
  } else {
    
    while($row = $result->fetch_assoc()) {
      echo $row["name"] . " " . $row["description"] . "<br>" . "<br>";
    };

  }
}

$preparedquery->close();


include("../dbase/dbclose.php");
include("./footer.php");

         ?>
    </body>
</html>
?>
