<div class="container-fluid text-center mb-5 mt-3">
    <div class="card-deck justify-content-center">
      <?php require("overview.php"); ?>
    </div>
</div>
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
                  // echo "<a href='details.php?id=" . $row['name'] . " '>" .$row['name']. "</a>"."<br>";
                  // echo $row["description"] . "<br>" . "<br>";
                  echo "€" . $row["price"] . "<br>" . "<br>";
                };
            
              }
            }
            
            $preparedquery->close();
            
            
            include("../dbase/dbclose.php");
            
                     ?>

<button><a href="addform.php">toevoegen</a></button>
