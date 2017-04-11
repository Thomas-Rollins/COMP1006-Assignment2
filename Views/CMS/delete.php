<!-- FILE: delete.php
AUTHOR: Thomas Rollins
STUDENT ID: 200344886
SITE: CMS - COMP1006 Assignment 2
FILE DESC: removes an entry from the CMS table -->
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
