<html>
<link rel="stylesheet" type="text/css" href="./style/content.css">
</html>
        
        <?php 
            
            include("../dbase/config.php");
            include("../dbase/dbopen.php");
            
            $query = "SELECT * ";
            $query .= "FROM producten ";
            
            $preparedquery = $dbaselink->prepare($query);
            $preparedquery->execute();
            
            if($preparedquery->errno) {
              echo "Fout bij het uitvoeren van commando";
            } else {
              $result = $preparedquery->get_result();
              
              if($result->num_rows === 0) {
                echo "Geen rijen gevonden";
              } else {
                
                while($row = $result->fetch_assoc()) {?>
            
                  <img src="<?php echo $row["image"]?>" alt="" width="200px">
                  <br> <br>
                <?php
                  echo $row["name"] . "<br>" . "" . $row["description"] . "<br>" . "<br>";
                  echo "€" . $row["price"] . "<br>";
                };
            
              }
            }
            
            $preparedquery->close();
            
            
            include("../dbase/dbclose.php");
            
                     ?>