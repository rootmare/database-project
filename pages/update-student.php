<?php
  include '../config/dbConfig.php';
  include '../partials/header.php';

  $students = $conn->prepare("SELECT
  student_id,
  student_name,
  dob,
  address,
  tel
  FROM student
  ");
  $students->execute();
  $students->store_result();
  $students->bind_result($studentId, $studentName, $studentDob, $studentAddress, $tel)

?>
<div class="bg-gray-100 px-4 py-2.5 gap-4">
  <div class="flex items-center justify-center flex-wrap gap-y-2 gap-x-6 pr-7 text-center relative">
    <p class="text-[15px] text-slate-900 font-medium leading-relaxed">UPDATE STUDENT</p>
  </div>
</div>

<!-- 
Create a form that updates the student table
-->

<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full">
          <thead class="border-b">
            <tr>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">#</th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Name</th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Date Of Birth</th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Address</th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">tel</th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Edit</th>
              

            </tr>
          </thead>

          <tbody>
            <?php while($students->fetch()) : ?>
            <tr class="border-b">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900" ><?= $studentId ?></td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap" name = "name"><?= $studentName ?></td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap" name = "dob"><?= $studentDob ?></td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap" name = "address"><?= $studentAddress ?></td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap" name = "tel"><?= $tel ?></td>
              <td class="px-6 py-4 whitespace-nowrap">
                <a href="update-student-form.php?studentid=<?= $studentId ?>" class="px-4 py-2 font-medium text-white bg-blue-500 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out">Edit</a>
              </td>
            </tr> 
            <?php endwhile ?>                   
          </tbody>
        </table>
      </div>           
    </div>      
  </div>              
</div>



<?php
  include '../partials/footer.php';
?>