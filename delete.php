<?php
  $conn = mysqli_connect("localhost", "root", "", "supermarket");
  $id = $_GET['id'];
  $sql = "DELETE FROM items WHERE id=$id";
  mysqli_query($conn, $sql);
  mysqli_close($conn);
  header("Location: index.php");
?>
