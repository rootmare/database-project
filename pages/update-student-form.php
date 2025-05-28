<?php
include '../config/dbConfig.php';
include '../partials/header.php';




$studentNo = $_GET['studentid'];

$products = $conn->prepare("SELECT
student_name,
dob,
address,
tel
FROM student
WHERE student_id = ?
");
$products->bind_param('i', $studentNo);
$products->execute();
$products->store_result();
$products->bind_result($name, $dob, $address, $tel);
// as we are just returning one product - we fetch the details here
$products->fetch();

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
      <div class="bg-green-200 min-h-screen flex items-center">
    
    <div class="bg-white p-10 md:w-2/3 lg:w-1/2 mx-auto rounded">
    <h1 class="text-2xl md:text-3xl pl-2 my-2 border-l-4  font-sans font-bold border-teal-400  dark:text-gray-200">Edit student: <?= $name ?></h1>
        <form action="update-student-controller.php?studentNo=<?= $studentNo ?>" method="post">
            <div class="flex items-center mb-5">
                <label for="name" class="w-20 inline-block text-right mr-4 text-gray-500 text-gray-500">Name</label>
                <input name="student_name" id="name" type="text" value="<?= $name ?>" class="border-b-2 border-gray-400 flex-1 py-2 placeholder-gray-300 outline-none focus:border-green-400">
            </div>
            <div class="flex items-center mb-5">
            <label for="dob" class="w-20 inline-block text-right mr-4 text-gray-500 text-gray-500">Date of birth</label>
                <textarea name="dob" id="dob" class="w-full outline inline-block text-gray-500 text-gray-500">
                    <?= $dob ?>
                </textarea>
            </div>
            <div class="flex items-center mb-5">
            <label for="address" class="w-20 inline-block text-right mr-4 text-gray-500 text-gray-500">Address</label>
                <textarea name="address" id="address" class="w-full outline inline-block text-gray-500 text-gray-500">
                    <?= $address ?>
                </textarea>
            </div>
            <div class="flex items-center mb-10">
                <label for="tel" class="w-20 inline-block text-right mr-4 text-gray-500 text-gray-500"> Telephone</label>
                <input type="text" name="tel" id="tel" value="<?= $tel ?>"  class="border-b-2 border-gray-400 flex-1 py-2 placeholder-gray-300 outline-none focus:border-green-400">
            </div>
            <div class="text-right">
                <button class="py-3 px-8 bg-green-500 text-green-100 font-bold rounded" type="submit">Submit</button>
            </div>
        </form>
    </div>
    </div>
      </div>           
    </div>      
  </div>              
</div>



<?php
  include '../partials/footer.php';
?>