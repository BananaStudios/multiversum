<?php

require("header.php");

?>

<!DOCTYPE html>
<html>

  <head>
    <title>Toevoegen</title>
  </head>
  <style>
    input[type=text], select {
    width: 75%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    }

    input[type=submit] {
    width: 15%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  </style>

  <body>

    <form action="./add.php" method="POST">

      <input type="text" name="name" placeholder="name" required>
      <br>
      <input type="text" name="description" placeholder="description" required>
      <br>
      <input type="text" name="price" placeholder="price" required>
      <br>
      <input type="text" name="resolutie" placeholder="resolutie" required>
      <br>
      <input type="text" name="refreshrate" placeholder="refreshrate" required>
      <br>
      <input type="text" name="aansluiting" placeholder="aansluiting" required>
      <br>
      <input type="text" name="EAN" placeholder="EAN" required>
      <br>

      <input type="submit" placeholder="toevoegen">

    </form>

    <br><br>
  </body>

</html>