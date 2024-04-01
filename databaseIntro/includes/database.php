<?php
$db_host = "localhost";
$db_name = "my_cms_db";
$db_user = "cms_www";
$db_password = "hz5EaqAZbzHPeEkT";

// Attempt to establish connection
$connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

// Check connection
if (mysqli_connect_errno()) {
    echo "Error: Could not connect to database. " . mysqli_connect_error();
    exit();
}
