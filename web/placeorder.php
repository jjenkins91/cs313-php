<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="styles03.css">
  </head>
  <body>
<div class="navBar">
  <h1 class="title">K Polish</h1>
</div>
<div class="navLinks">
  <a href="index03.php">Home</a>
  <a href="cart.php">Cart</a>
</div>
<div class="bodyContent5">
  <div class="informationTitle">
    <h1>Please Fill Out The Information below</h1>
  </div>
</div>
<form class="" action="confirmation.php" method="post">
<div class="addressLine">
<div class="">
  <h4>Address 1</h4>
  <input type="text" name="address1" value="">
</div>
<div class="">
  <h4>Address 2</h4>
  <input type="text" name="address2" value="">
</div>
<div class="">
  <h4>City</h4>
  <input type="text" name="city" value="">
</div>
<div class="">
  <h4>State</h4>
  <input type="text" name="state" value="">
</div>
<div class="">
  <h4>Zip Code</h4>
  <input type="text" name="zipCode" value="">
</div>
</div>
<div class="placeOrderSpace">
  <button class="placeOrderButton" type="submit" name="placeOrder">Place Order</button>
</div>
<div class="footer">
  <h3 class="copyright">Copyright© October 2020 Jason Jenkins</h3>
</div>
</form>
  </body>
</html>
