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

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$address1 = $_POST["address1"];
$city = $_POST["city"];
$state = $_POST["state"];
$zipCode = $_POST["zipCode"];


$stmt = $db->prepare('INSERT INTO customer_info(customer_first_name, customer_last_name) VALUES (:firstName, :lastName);');
$stmt->bindValue(':firstName', $firstName, PDO::PARAM_STR);
$stmt->bindValue(':lastName', $lastName, PDO::PARAM_STR);
$stmt->execute();

$customer_id = $db->lastInsertId('customer_info_customer_id_seq');


$stmt = $db->prepare('INSERT INTO address2(customer_id, address_street, address_city, address_state, address_zip_code) VALUES (:customer_id, :address1, :city, :state, :zipCode);');
$stmt->bindValue(':customer_id', $customer_id, PDO::PARAM_INT);
$stmt->bindValue(':address1', $address1, PDO::PARAM_STR);
$stmt->bindValue(':city', $city, PDO::PARAM_STR);
$stmt->bindValue(':state', $state, PDO::PARAM_STR);
$stmt->bindValue(':zipCode', $zipCode, PDO::PARAM_INT);
$stmt->execute();

// $address_id = $db->lastInsertId('address2_address_id_seq');

$stmt = $db->prepare('INSERT INTO orders1 (customer_id) VALUES (:customer_id)');
$stmt->bindValue(':customer_id', $customer_id, PDO::PARAM_INT);
$stmt->execute();


// foreach ($topics as $topic) {
//   $stmt = $db->prepare('INSERT INTO scriptures_topic VALUES (DEFAULT, :scripture_id, :topic_id)');
//   $stmt->bindValue(':scripture_id', $scripture_id, PDO::PARAM_INT);
//   $stmt->bindValue(':topic_id', $topic['id'], PDO::PARAM_INT);
//   $stmt->execute();
//
// }

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
      $stmt = $db->prepare("SELECT address2.address_id, address_street, address_city, address_state, address_zip_code, customer_first_name, customer_last_name
        FROM address2 LEFT JOIN orders1
        ON orders1.customer_id = address2.customer_id
        LEFT JOIN customer_info ON customer_info.customer_id = orders1.customer_id
        WHERE orders1.customer_id = :customer_id;");
      $stmt->bindValue(':customer_id', $customer_id, PDO::PARAM_INT);

      $stmt->execute();
      $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

      echo "<h1 class='customer_name'>" . $orders[0]["customer_first_name"] . " " . $orders[0]["customer_last_name"] . "</h1><br>";
      echo "<h1 class='address_name'>" . $orders[0]["address_street"] . "<br>" . $orders[0]["address_city"] . ", " . $orders[0]["address_state"] . " " . $orders[0]["address_zip_code"] . "</h1>";

      // array_to_string(array_agg(topic.name), ',') AS topics

      // foreach ($scriptures as $scripture) {
      //   echo "<li>{$scripture['book']} {$scripture['chapter']}:
      //   {$scripture['verse']} - <br>{$scripture['content']}
      //   <br>{$scripture['topics']}</li>";
      // }

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
