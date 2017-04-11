<!-- FILE: User.php
AUTHOR: Thomas Rollins
STUDENT ID: 200344886
SITE: CMS - COMP1006 Assignment 2
FILE DESC: Contains the User class constructor -->
<?php

class User
{
    function __construct($username, $password, $displayName)
    {
        $this->username = $username;
        $this->password = $password;
        $this->displayName  = $displayName;
    }
}
