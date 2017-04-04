<?php

include_once('Controllers/users.php');
CheckIfAuthenticated();

include_once('Config/database.php');
include_once('Controllers/cms.php');

$isAddition = filter_input(INPUT_POST, "isAddition");
$pageCreator = $_SESSION["displayName"];
$pageName = filter_input(INPUT_POST, "NameTextField"); //$_POST["NameTextField"];
$pageContent = filter_input(INPUT_POST, "CostTextField"); //$_POST["CostTextField"];

if($isAddition == "1") {
 Createpage($pageCreator, $pageName, $pageContent);
}
else {
 $pageID = filter_input(INPUT_POST, "IDTextField"); // $_POST["IDTextField"];
 UpdatePage($pageID, $pageCreator, $pageName, $pageContent);
}

// redirect to index page
header('Location: index.php?pageId=CMSlist');
?>
