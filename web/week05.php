<?php

echo getenv('DATABASE_URL');
// try
// {
//   $dbUrl = getenv('DATABASE_URL');
//
//   $dbOpts = parse_url($dbUrl);
//
//   $dbHost = $dbOpts["host"];
//   $dbPort = $dbOpts["port"];
//   $dbUser = $dbOpts["user"];
//   $dbPassword = $dbOpts["pass"];
//   $dbName = ltrim($dbOpts["path"],'/');
//
//   $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
//
//   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }
// catch (PDOException $ex)
// {
//   echo 'Error!: ' . $ex->getMessage();
//   die();
// }

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Scripture Resources</h1>
<?php
// foreach ($db->query('SELECT * FROM scriptures') as $row)
// {
//   echo 'book' . $row['book'];
// }

 ?>
  </body>
</html>
