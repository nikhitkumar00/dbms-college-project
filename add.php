<?php
  $conn = mysqli_connect("localhost", "root", "", "supermarket");
  $item_name = $_POST["item_name"];
  $item_code = $_POST["item_code"];
  $quantity = $_POST["quantity"];
  $price = $_POST["price"];
  $expiry = $_POST["expiry"];
  $sql = "INSERT INTO items (item_name,item_code, quantity, price, expiry)
  VALUES ('$item_name','$item_code', '$quantity','$price', '$expiry')";
  mysqli_query($conn, $sql);
  mysqli_close($conn);
?>
