
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
$_SESSION["button1"] = $_POST["button1"];
$_SESSION["button2"] = $_POST["button2"];
$_SESSION["button3"] = $_POST["button3"];
$_SESSION["button4"] = $_POST["button4"];
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="styles03.css">
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
<div class="bodyContent">
 <img class="nailPic" src="nail.jpg" alt="nailImage">
</div>
<div class="clickToAdd">
  <h1 class="title2">Click "Add" To Place In Cart</h1>
</div>
<div class="bodyContent2">
   <img class="taurus" name="KLtaurus" src="Taurus.jpeg" alt="taurusPolish">
   <img class="coconutMilk" src="coconutMilk.jpeg" alt="coconutMilkPolish">
   <img class="gold" src="KLgold.jpeg" alt="GoldPolish">
   <img class="miami" src="KLmiami.jpeg" alt="MiamiPolish">
</div>
<div class="bodyContent3">
  <input class="first" type="checkbox" name="button1" value="Taurus"></button>
  <input class="second" type="checkbox" name="button2" value="Coconut Milk"></button>
  <input class="third" type="checkbox" name="button3" value="Gold"></button>
  <input class="fourth" type="checkbox" name="button4" value="Miami"></button>
</div>
<div class="bodyContent3">
  <?php
  foreach ($db->query('SELECT product_name FROM product') as $row)
  {
    echo $row['username'];
    // echo '<br/>';
  }
   ?>

  <!-- <h2>Taurus</h2>
  <h2>Coconut Milk</h2>
  <h2>Gold</h2>
  <h2>Miami</h2> -->
</div>
<div class="submitButtonDiv">
  <button class="submitButton" type="submit" name="button">Add</button>
</div>
</form>
<div class="footer">
 <h3 class="copyright">Copyright© October 2020 Jason Jenkins</h3>
</div>
  </body>
</html>
