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
<div class="confirmationTitleSpace">
  <h1 class="confirmationTitle">Database Information Confirmation</h1>
</div>
<div class="bodyContentConfirmation">
  <?php
  foreach ($db->query('SELECT customer_username, customer_password From customer_information Where customer_id = 1') as $row)
  {
    echo '<h1><b>' . 'user: ' . $row['customer_username'] . '</b></h1>';
    echo '<h1><b>' . ' password: ' . $row['customer_password'] . '</b></h1>';
    // echo '<br/>';
  }
   ?>
   </div>
<div class="bodyContent3">
  <?php
  foreach ($db->query('SELECT address_street, address_city, address_state, address_zipCode From address') as $row)
  {
    echo '<h2><b>' . 'user: ' . $row['address_street'] . ' ' . $row['address_city'] . ' ' . $row['address_state'] . ' ' . $row['address_zipCode'] . '</b></h2>';
    // echo '<h2><b>' . ' password: ' . $row['customer_password'] . '</b></h2>';
    // echo '<br/>';
  }
   ?>

</div>
<div class="footer">
  <h3 class="copyright">Copyright© October 2020 Jason Jenkins</h3>
</div>
  </body>
</html>
<?php
session_destroy()
 ?>
