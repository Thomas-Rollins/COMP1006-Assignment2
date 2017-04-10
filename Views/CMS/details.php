<?php
include_once('Controllers/users.php');
CheckIfAuthenticated();

include_once('Controllers/cms.php');

$pageID = $_GET["CMSID"]; // assigns the pageID from the URL

if($pageID == 0) {
    $page = null;
    $isAddition = 1;
} else {
    $isAddition = 0;
    $page = GetPageById($pageID);
}

?>

<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
          <h1>Page Details</h1>
          <form action="index.php?pageId=PageUpdate" id="pageForm" method="post">
            <div class="form-group">
              <label for="IDTextField" hidden>Page ID</label>
              <input type="hidden" class="form-control" id="IDTextField" name="IDTextField"
                           placeholder="Page ID" value="<?php echo $page['id']; ?>">
            </div>
            <div class="form-group">
              <label for="NameTextField">Page Title</label>
              <input type="text" class="form-control" id="NameTextField"  name="NameTextField"
                           placeholder="page Name" required  value="<?php echo $page['pageName']; ?>">
            </div>
            <div class="form-group">
              <label for="contentTextArea">Page Content</label>
              <textarea class="form-control input-lg" id="contentTextArea" name="contentTextArea" form="pageForm"><?php echo $page['content']; ?></textarea>
            </div>
            <input type="hidden" name="isAddition" value="<?php echo $isAddition; ?>">
            <button type="submit" id="SubmitButton" class="btn btn-primary">Submit</button>
            <a href="index.php?pageId=CMSList">
              <input type="button" class="btn btn-warning" value="Cancel"/>
            </a>
          </form>

        </div>
      </div>
    </div>
