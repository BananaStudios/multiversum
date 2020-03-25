<?php

require("header.php");

?>

<!DOCTYPE html>
<html>

  <head>
    <title>Toevoegen</title>
  </head>

  <body>

    <form action="./addresult.php" method="POST">

      <input type="text" name="name" placeholder="name">
      <br>
      <input type="text" name="description" placeholder="description">
      <br>
      <input type="text" name="price" placeholder="price">
      <br>
      <input type="text" name="resolutie" placeholder="resolutie">
      <br>
      <input type="text" name="refreshrate" placeholder="refreshrate">
      <br>
      <input type="text" name="aansluiting" placeholder="aansluiting">
      <br>
      <input type="text" name="EAN" placeholder="EAN">
      <br>

      <input type="submit" placeholder="toevoegen">

    </form>

    <br><br>
    <a href="./index.php"><button>Home</button></a>
  </body>

</html>