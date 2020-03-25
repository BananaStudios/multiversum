
<?php 
            
            include("./dbase/config.php");
            include("./dbase/opendb.php");
            
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
                  
                  <div class="card" style="width: 18rem; height: 300px; padding-top: 10px;">
                      <img class="mx-auto" src="<?php echo $row["image"]?>" height="80px">
                      <div class="card-body ">
                          <a class="stretched-link" href="./details.php?id=<?php echo $row["id"] ?> "></a>
                          <div style=" height: 100px;">
                              <h5 class="card-title"><?php echo $row["name"] ?></h5>
                          </div>
                          <div class="info-btn">
                              <p class="card-text"> € <?php echo $row["price"] ?></p>
                              <a class="btn btn-primary px-2" href="./details.php?id=<?php echo $row["id"] ?>">Informatie</a>
                          </div>
                      </div>
                  </div>
              </div>

                 <?php
            };
          }
            }
            
            $preparedquery->close();
            
            
            include("./dbase/closedb.php");
            
?>
