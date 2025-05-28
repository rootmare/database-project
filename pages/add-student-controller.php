<?php
include '../config/dbConfig.php';

// create logic to insert data

$add_student = $conn->prepare("INSERT into
student (student_name, dob, address, tel)
values (?, ?, ?, ?)
");
$add_student->bind_param('ssss', $_POST['StudentName'], $_POST['DOB'], $_POST['Address'],$_POST['Telphone'],);
$add_student->execute();

header("Location: ../pages/add-student.php");