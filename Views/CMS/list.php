<!-- FILE: list.php
AUTHOR: Thomas Rollins
STUDENT ID: 200344886
SITE: CMS - COMP1006 Assignment 2
FILE DESC: displays all CMS page entries -->
<?php

include_once('Controllers/users.php');
CheckIfAuthenticated();

require_once('Controllers/cms.php');

$pages = ReadPages();
?>

<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <h1>Page List</h1>
            <!--
            <a class="btn btn-primary" href="../../Game/game_details.php?gameID=0">
            -->
            <a class="btn btn-primary" href="index.php?pageId=CMSDetails&CMSID=0">
                <i class="fa fa-plus"></i> Add New Page</a>
            <br>
            <table class="table table-striped table-hover table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Creator</th>
                    <th>Page Name</th>
                    <th>Content</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                    <?php foreach($pages as $pages) : ?>
                        <tr>
                            <td><?php echo $pages['id'] ?></td>
                            <td><?php echo $pages['creator'] ?></td>
                            <td><?php echo $pages['pageName'] ?></td>
                            <td><?php echo $pages['content'] ?></td>

                            <td><a class="btn btn-info" href="index.php?pageId=CMSView&pageID=<?php echo $pages['id'] ?>">
                              <i class="fa fa-eye"></i>View</a></td>

                            <td><a class="btn btn-primary" href="index.php?pageId=CMSDetails&CMSID=<?php echo $pages['id'] ?>">
                                    <i class="fa fa-pencil-square-o"></i> Edit</a></td>

                            <td><a class="btn btn-danger" href="index.php?pageId=PageDelete&CMSID=<?php echo $pages['id'] ?>">
                                    <i class="fa fa-trash-o"></i> Delete</a></td>
                        </tr>
                    <?php endforeach; ?>

            </table>

        </div>
    </div>
</div>
