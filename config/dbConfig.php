<!-- copy the contents of your previous dbCongig file -->

<?php

$hn = "localhost";
$un = "Robert_Orr";
$pw = "lx6l!-KT7xlG*-it";
$db = "student_app";

// Create database connection
$conn = new mysqli($hn, $un, $pw, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


?>