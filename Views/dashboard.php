<!-- FILE: dashboard.php
AUTHOR: Thomas Rollins
STUDENT ID: 200344886
SITE: CMS - COMP1006 Assignment 2
FILE DESC: basic landing page Tempalte -->
<div class="container">
    <div class="row">
      <figure>
        <img src="Content/images/Custom-CMS-Development.jpg" alt="CMS" />
      </figure>
      <div class="col-md-offset-3 col-md-6">
        <h1>Dashboard</h1>
        <ul>
          <li><a href="index.php">Dashboard</a></li>
          <li><a href="index.php?pageId=Contact">Contact Us</a></li>
          <?php if(isset($_SESSION["is_logged_in"])) : ?>
            <li><a href="index.php?pageId=CMSlist">Page List</a></li>
          <?php endif ?>
        </ul>
      </div>
    </div>
  </div>
