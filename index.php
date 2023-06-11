<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>Supermarket Item List</h1>
  <table>
    <tr>
      <th>Item Name</th>
      <th>Item Code</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>Expiry</th>
      <th>Action</th>
    </tr>
    <?php
      require 'display.php';
    ?>
  </table>
  <br>
  <form action="" method="post">
    Item Name: <input type="text" name="item_name">
    Item Code: <input type="text" name="item_code">
    Quantity: <input type="text" name="quantity">
    Price: <input type="text" name="price">
    Expiry: <input type="text" name="expiry">
    <input type="submit" value="Submit">
  </form>
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      require 'add.php';
      header("Location: index.php");
      exit;
    }
  ?>
</body>
</html>
