<?php
    include '../config/dbConfig.php';
    include '../partials/header.php';

    // querying the tables to return information about the student and the course that they are enrolled on
 $students = $conn->prepare('SELECT 
 s.student_id,
 s.student_name,
 s.dob,
 e.enrolment_date,
 c.course_id,
 c.course_name
FROM enrolment e
INNER JOIN student s ON e.fk_student = s.student_id
INNER JOIN course c ON e.fk_course = c.course_id
ORDER BY e.enrolment_date DESC

');
$students->execute();
$students->store_result();
$students->bind_result($studentId, $studentName, $dob, $enrolDate, $courseId, $course);

?>   
<div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-100 whitespace-nowrap">
            <tr>
                <th class="px-4 py-4 text-left text-xs font-semibold text-slate-900 uppercase tracking-wider" scope="col">ID</th>
                <th class="px-4 py-4 text-left text-xs font-semibold text-slate-900 uppercase tracking-wider" scope="col">Name</th>
                <th class="px-4 py-4 text-left text-xs font-semibold text-slate-900 uppercase tracking-wider" scope="col">DOB</th>
                <th class="px-4 py-4 text-left text-xs font-semibold text-slate-900 uppercase tracking-wider" scope="col">Enrolled On</th>
                <th class="px-4 py-4 text-left text-xs font-semibold text-slate-900 uppercase tracking-wider" scope="col">Course Name</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($students->fetch()): ?>
            <tr>
                <td class="px-4 py-4 text-sm text-slate-900 font-medium"><?= $studentId ?></td>
                <td class="px-4 py-4 text-sm text-slate-900 font-medium"><?= $studentName ?></td>
                <td class="px-4 py-4 text-sm text-slate-900 font-medium"><?= $dob ?></td>
                <td class="px-4 py-4 text-sm text-slate-900 font-medium"><?= $enrolDate ?></td>
                <td class="px-4 py-4 text-sm text-slate-900 font-medium"><?= $course ?></td>
            </tr>
        <?php endwhile ?>
        </tbody>
    </table>
</div>

<?php
    include '../partials/footer.php';
?>   
    