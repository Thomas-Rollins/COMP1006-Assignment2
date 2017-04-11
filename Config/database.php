<!-- FILE: database.php
AUTHOR: Thomas Rollins
STUDENT ID: 200344886
SITE: CMS - COMP1006 Assignment 2
FILE DESC: Databse connection file -->

<?php
// connection string
if(session_status() == PHP_SESSION_NONE) {
    session_start();
}

function DBConnection() {
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
