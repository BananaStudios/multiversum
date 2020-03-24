<?php

$dbaselink = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or 
die("niet mogelijk om de database te openen".
mysqli_connect_error());

set_time_limit(60);








?>