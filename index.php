<?php

if(!isset($_GET["pageId"])) {
    $title = "Home";
    $templateString = 'Views/dashboard.php';
}
else {
    switch($_GET["pageId"]) {
        case "About":
            $title = "About";
            $templateString = 'Views/content/about.php';
            break;
        case "Contact":
            $title = "Contact";
            $templateString = 'Views/content/contact.php';
            break;
        case "Login":
            $title = "Login";
            $templateString = 'Views/users/login.php';
            break;
        case "Logout":
            include_once("Controllers/users.php");
            Logout();
            $title = "Home";
            $templateString = 'Views/dashboard.php';
            break;
        case "Register":
            $title = "Register";
            $templateString = 'Views/users/register.php';
            break;
        case "CMSlist":
            $title = "Page List";
            $templateString = 'Views/CMS/list.php';
            break;
        case "CMSDetails":
            if($_GET['CMSID']==0){
              $title = "Add Page";
            }
            else {
              $title = "Edit Page";
            }
            $templateString = "Views/CMS/details.php";
            break;
        case "PageUpdate":
            $title = "Update page";
            $templateString = 'Views/CMS/update.php';
            break;
        case "PageDelete":
            $title = "Delete page";
            $templateString = 'Views/CMS/delete.php';
            break;
        default:
            $title = "404";
            $templateString = "Views/errors/404.php";
            break;
    }
}
?>

<?php include_once('Views/partials/header.php'); ?>

<?php include_once ('Views/partials/navbar.php'); ?>

<?php require($templateString); ?> <!-- Content -->

<?php include_once ('Views/partials/footer.php');
