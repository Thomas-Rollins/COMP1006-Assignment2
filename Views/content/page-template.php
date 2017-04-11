<!-- FILE: page-template.php
AUTHOR: Thomas Rollins
STUDENT ID: 200344886
SITE: CMS - COMP1006 Assignment 2
FILE DESC: basic template for displaying pages from the CMS page table -->
<?php
include_once('Controllers/cms.php');

//$pages = ReadPages();
$pageID = $_GET["pageID"]; // assigns the pageID from the URL
$page = GetPageById($pageID);
?>

<h1><?php echo($page['pageName']);?></h1>
<article><?php echo($page['content']);?></article>
