<?php
// connection string

if(session_status() == PHP_SESSION_NONE) {
    session_start();
}

//Localhost for testing
// $dsn = 'mysql:host=localhost:3307;dbname=comp1006_assignment2';
// $Username = 'thomas';
// $Password = '12345';

function DBConnection() {
    // exception handling - use a try / catch
    try {
      $dsn = 'mysql:host=us-cdbr-azure-northcentral-b.cloudapp.net;dbname=comp1006_assignment1';
      $Username = 'b9e8f2c430a4ad';
      $Password = 'b54eca3a';
        // instantiates a new pdo - an db object
        return new PDO($dsn, $Username, $Password);
    }
    catch(PDOException $e) {
        $message = $e->getMessage();
        echo "An error occurred: " . $message;
        return null;
    }
}
?>
