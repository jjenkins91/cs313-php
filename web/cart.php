<?php
session_start();
if ($_POST["button1"]) {
  $_SESSION["button1"] = '';
}
if ($_POST["button2"]) {
  $_SESSION["button2"] = '';
}
if ($_POST["button3"]) {
  $_SESSION["button3"] = '';
}
if ($_POST["button4"]) {
  $_SESSION["button4"] = '';
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="styles03.css">
  </head>
  <body>
<form class="" action="cart.php" method="post">
<div class="navBar">
  <h1 class="title">K Polish</h1>
</div>
<div class="navLinks">
  <a href="index03.php">Home</a>
  <a href="cart.php">Cart</a>
</div>
<div class="bodyContent4">
  <h1 class="cartItems">Items In Your Cart</h1>
</div>
<div class="checkOutBox">
  <h1 class="checkOutMessage">Please review items and proceed to checkout</h1>
</div>
<!-- <div class="nailPolishItems"> -->
<div class="nailPolishItems">
<div class="">
  <h1 class="buttonOne">
<!-- <img class="taurus" src="KLtaurus.jpeg" alt="taurusPolish"> -->
<?php
// $pic = "KLtaurus.jpeg";
// $button1 = $_POST["button1"];
// echo $button1 . " ";
// echo '<img src="Taurus.jpeg" alt="icon" />';
if ($_SESSION["button1"]) {
  echo $_SESSION["button1"];
  echo '<img src="Taurus.jpeg" alt="icon" />';
  echo '<input class="first" type="checkbox" name="button1" value="Taurus">';
}
?>
  </h1>
</div>
<div class="">
  <h1 class="buttonTwo">
<!-- <img class="coconutMilk" src="KLcoconutMilk.jpeg" alt="coconutMilkPolish"> -->
<?php
// $button1 = $_POST["button2"];
// echo $button1 . " ";
if ($_SESSION["button2"]) {
  echo $_SESSION["button2"];
  echo '<img src="coconutMilk.jpeg" alt="icon" />';
  echo '<input class="second" type="checkbox" name="button2" value="coconutMilk">';
}
 ?>
  </h1>
</div>
<div class="">
  <h1 class="buttonThree">
<!-- <img class="gold" src="KLgold.jpeg" alt="GoldPolish"> -->
<?php
// $button1 = $_POST["button3"];
// echo $button1 . " ";

if ($_SESSION["button3"]) {
  echo $_SESSION["button3"];
  echo '<img src="KLgold.jpeg" alt="icon" />';
  echo '<input class="third" type="checkbox" name="button3" value="Gold">';
}
 ?>
  </h1>
</div>
<div class="">
  <h1 class="buttonFouth">
<!-- <img class="miami" src="KLmiami.jpeg" alt="MiamiPolish"> -->
<?php
// $button1 = $_POST["button4"];
// echo $button1 . " ";
if ($_SESSION["button4"]) {
  echo $_SESSION["button4"];
  echo '<img src="KLmiami.jpeg" alt="icon" />';
  echo '<input class="fourth" type="checkbox" name="button4" value="Miami">';
}
 ?>
  </h1>
</div>
</div>
<div class="removeSpace">
  <h1 class="removeTitle">Check The Box And Click The Remove Button To Delete From Cart</h1>
</div>
<div class="buttonSpace">
  <button class="removeButton" type="submit" name="button">Remove</button>
</div>
</form>
<div class="checkoutTitle">
  <h1>Or Procede To Checkout</h1>
</div>
<form class="" action="placeorder.php" method="post">
<div class="checkoutButtonSpace">
 <button class="checkOutButton "type="submit" name="button">Checkout</button>
</div>
<div class="footer">
  <h3 class="copyright">Copyright© October 2020 Jason Jenkins</h3>
</div>
</form>
  </body>
</html>
