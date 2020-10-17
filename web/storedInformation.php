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
  foreach ($db->query('SELECT customer_username, customer_username address_street FROM customer_information c
    Inner Join address a on customer_id = customer_id
    WHERE customer_id = 1') as $row)
  {
    echo '<p><b>' . 'user: ' . $row['customer_username'] . '</b></p>';
    echo ' street: ' . $row['address_street'];
    echo '<br/>';
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
