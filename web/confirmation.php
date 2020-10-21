<?php
try
{
  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
 ?>

<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="styles033.css">
  </head>
<form class="" action="index03.php" method="post">
  <body>
<div class="navBar">
  <h1 class="title">K Polish</h1>
</div>
<div class="navLinks">
  <a href="index03.php">Home</a>
  <a href="cart.php">Cart</a>
</div>
<div class="confirmationTitleSpace">
  <h1 class="confirmationTitle">Address Confirmation</h1>
</div>
<div class="bodyContentConfirmation">
  <h1>
 <?php
$address1 = $_POST["address1"];
echo $address1 . ' ';
$address2 = $_POST["address2"];
echo $address2 . ' ';
$city = $_POST["city"];
echo $city . ', ';
$state = $_POST["state"];
echo $state . ' ';
$zipCode = $_POST["zipCode"];
echo $zipCode;
  ?>
  </h1>
</div>
<div class="orderConfirmationTitleSpace">
  <h1 class="orderConfirmationTitle">Order Summary</h1>
</div>

<div class="orderConfirmationSpace">
  <h1 class="buttonOne">
<!-- <img class="taurus" src="KLtaurus.jpeg" alt="taurusPolish"> -->
<?php
if ($_SESSION["button1"]) {
  echo $_SESSION["button1"];
  echo '<img src="Taurus.jpeg" alt="icon" />';
}

if ($_SESSION["button2"]) {
  echo $_SESSION["button2"];
  echo '<img src="coconutMilk.jpeg" alt="icon" />';
}

if ($_SESSION["button3"]) {
  echo $_SESSION["button3"];
  echo '<img src="KLgold.jpeg" alt="icon" />';
}

if ($_SESSION["button4"]) {
  echo $_SESSION["button4"];
  echo '<img src="KLmiami.jpeg" alt="icon" />';
}
?>
  </h1>
</div>
<div class="footer">
  <h3 class="copyright">Copyright© October 2020 Jason Jenkins</h3>
</div>
  </body>
</html>
<?php
session_destroy()
 ?>
