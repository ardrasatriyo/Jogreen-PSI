<?php
$username = "root";
$password = "";
$database = "psi_db";

try {
    $pdo = new PDO("mysql:host=localhost;dbname=$database", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<!DOCTYPE html>
          <html lang='en'>
          <head>
              <meta charset='UTF-8'>
              <meta name='viewport' content='width=device-width, initial-scale=1.0'>
              <title>Database Connection Status</title>
              <style>
                  body { font-family: Arial, sans-serif; margin: 40px; }
                  .success { color: green; }
              </style>
          </head>
          <body>
              <h1 class='success'>Connection to the database was successful!</h1>
          </body>
          </html>";

} catch (PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
    echo "<!DOCTYPE html>
          <html lang='en'>
          <head>
              <meta charset='UTF-8'>
              <meta name='viewport' content='width=device-width, initial-scale=1.0'>
              <title>Database Connection Status</title>
              <style>
                  body { font-family: Arial, sans-serif; margin: 40px; }
                  .success { color: green; }
              </style>
          </head>
          <body>
              <h1 class='success'>failed to connect</h1>
          </body>
          </html>";
}
?>

