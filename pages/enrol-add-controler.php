<?php
include '../config/dbConfig.php';

// create logic to insert data

$enrol_student = $conn->prepare("INSERT into
enrolment (fk_student, fk_course , enrolment_date, active)
values (?, ?, ?, ?)
");
$enrol_student->bind_param('sssi', $_POST['fk_student'], $_POST['fk_course'], $_POST['date'], $_POST['active']);
$enrol_student->execute();

header("Location: ../pages/enrol-student.php");