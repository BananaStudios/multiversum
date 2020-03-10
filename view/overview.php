<html>
<link rel="stylesheet" type="text/css" href="./style/content.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
                
                while($row = $result->fetch_assoc()) { ?>
                  <div class="item pt-4">
                      <div class="card" style="width: 18em; height: 300px; padding-top: 10px;">
                        <img class="mx-auto" src="<?php echo $row["image"]?>" height="80px">
                        <div class="card-body">
                          <a class="stretched-link" href="#"></a>
                        <div class="height: 100px;">
                            <h5 class="card title"><?php echo $row["name"] ?></h5>
                        </div>
                        <div class="info-btn">
                            <p class="card-text"> € <?php echo $row["price"] ?></p>
                    </div>
                  </div>
                </div>

                 <?php
            };
          }
            }
            
            $preparedquery->close();
            
            
            include("../dbase/dbclose.php");
            
?>