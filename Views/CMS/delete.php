<?php
include_once('Controllers/users.php');
CheckIfAuthenticated();

include_once('Config/database.php');
include_once('Controllers/cms.php');

$pageID = $_GET["CMSID"]; // assigns the gameID from the URL

if($pageID != false) {
    DeletePage($pageID);
}

// redirect to index page
header('Location: index.php?pageId=CMSlist');

?>
