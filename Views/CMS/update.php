<?php

include_once('Controllers/users.php');
CheckIfAuthenticated();

include_once('Config/database.php');
include_once('Controllers/cms.php');

$isAddition = filter_input(INPUT_POST, "isAddition");
$pageCreator = filter_input(INPUT_POST, "NameTextField"); //$_POST["NameTextField"];
$pageContent = filter_input(INPUT_POST, "CostTextField"); //$_POST["CostTextField"];

if($isAddition == "1") {
 Createpage($pageCreator, $pageContent);
}
else {
 $pageID = filter_input(INPUT_POST, "IDTextField"); // $_POST["IDTextField"];
 UpdatePage($pageID, $pageCreator, $pageContent);
}

// redirect to index page
header('Location: index.php?pageId=CMSlist');
?>
