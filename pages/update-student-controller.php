<?php
include '../config/dbConfig.php';

$student_Id = $_GET['studentNo'];

// Prepare the statement with a placeholder
$updateStudent = $conn->prepare("UPDATE 
student
SET student_name = ?, dob=?, address = ?, tel = ? 
WHERE student_id = ?");

$updateStudent->bind_param("ssssi", $_POST['student_name'], $_POST['dob'], $_POST['address'],  $_POST['tel'], $student_Id);
$updateStudent->execute();

header("Location: update-student.php");
?>
