<?php
include_once("Config/database.php");

function _executeAndClose($statement) {
    $statement->execute(); // run on the db server
    $statement->closeCursor(); // close the connection
}


function CreatePage($pageCreator, $pageContent) {
    $db = DBConnection();
    $query = "INSERT INTO pages (creator, content) VALUES (:page_creator, :page_content)";
    $statement = $db->prepare($query); // encapsulate the sql statement
    $statement->bindValue(':page_creator', $pageCreator);
    $statement->bindValue(':page_content', $pageContent);
    _executeAndClose($statement);
}

function ReadPages() {
    $db = DBConnection();
    $query = "SELECT * FROM pages"; // SQL statement
    $statement = $db->prepare($query); // encapsulate the sql statement
    $statement->execute(); // run on the db server
    $pages = $statement->fetchAll(); // returns an array
    $statement->closeCursor(); // close the connection
    return $pages;
}

function UpdatePage($pageID, $pageCreator, $pageContent) {
    $db = DBConnection();
    $query = "UPDATE pages SET creator = :page_creator, content = :page_content WHERE id = :page_id "; // SQL statement
    $statement = $db->prepare($query); // encapsulate the sql statement
    $statement->bindValue(':page_id', $pageID);
    $statement->bindValue(':page_creator', $pageCreator);
    $statement->bindValue(':page_content', $pageContent);
    _executeAndClose($statement);
}

function GetpageById($pageID){
    $db = DBConnection();
    $query = "SELECT * FROM pages WHERE id = :page_id "; // SQL statement
    $statement = $db->prepare($query); // encapsulate the sql statement
    $statement->bindValue(':page_id', $pageID);
    $statement->execute(); // run on the db server
    $page = $statement->fetch(); // returns only one record
    $statement->closeCursor(); // close the connection
    return $page;
}

function DeletePage($pageID) {
    $db = DBConnection();
    $query = "DELETE FROM pages WHERE id = :page_id ";
    $statement = $db->prepare($query);
    $statement->bindValue(":page_id", $pageID);
    _executeAndClose($statement);
}
?>
