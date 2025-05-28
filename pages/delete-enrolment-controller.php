<?php
include '../config/dbConfig.php';
$enrolmentId = $_GET['eid'];
    

 // Prepare the statement with a placeholder
 $deleteEnrolment = $conn->prepare("DELETE 
 FROM enrolment
 WHERE enrolment_id = ?");
 // Bind the parameter (i = integer, s=string)
 $deleteEnrolment->bind_param("i", $enrolmentId);
 $deleteEnrolment->execute();

 header("Location: delete-enrolment.php");