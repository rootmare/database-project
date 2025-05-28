<?php
    include '../config/dbConfig.php';
    include '../partials/header.php';

?>
<div class="bg-gray-100 px-4 py-2.5 gap-4">
  <div class="flex items-center justify-center flex-wrap gap-y-2 gap-x-6 pr-7 text-center relative">
    <p class="text-[15px] text-slate-900 font-medium leading-relaxed">ADD A NEW STUDENT</p>
  </div>

  <div class="container px-4 mx-auto">

    <div class="max-w-lg mx-auto">
      <div class="text-center mb-6">
        <h2 class="text-3xl md:text-4xl font-extrabold">ADD A NEW STUDENT</h2>
      </div>

      <form action="add-student-controller.php" method="post">
        <div class="mb-6">
          <label class="block mb-2 font-extrabold" for="">Student Name</label>
          <input name="StudentName" class="inline-block w-full p-4 leading-6 text-lg font-extrabold placeholder-indigo-900 bg-white shadow border-2 border-indigo-900 rounded"  type="text" placeholder="Enter Student Name">
        </div>
        <div class="mb-6">
          <label class="block mb-2 font-extrabold" for="">Date of birth</label>
          <input name="DOB" class="inline-block w-full p-4 leading-6 text-lg font-extrabold placeholder-indigo-900 bg-white shadow border-2 border-indigo-900 rounded" type="date" placeholder="Add Date of birth">
        </div>
        <div class="mb-6">
          <label class="block mb-2 font-extrabold" for="">Address</label>
          <input name="Address" class="inline-block w-full p-4 leading-6 text-lg font-extrabold placeholder-indigo-900 bg-white shadow border-2 border-indigo-900 rounded" type="text" placeholder="Add Address">
        </div>
        <div class="mb-6">
          <label class="block mb-2 font-extrabold" for="">Telphone</label>
          <input name="Telphone" class="inline-block w-full p-4 leading-6 text-lg font-extrabold placeholder-indigo-900 bg-white shadow border-2 border-indigo-900 rounded" type="text" placeholder="Add Telphone Number">
        </div>
        
        <div class="flex flex-wrap -mx-4 mb-6 items-center justify-between">
          <button type="submit" class="inline-block w-full py-4 px-6 mb-6 text-center text-lg leading-6 text-white font-extrabold bg-indigo-800 hover:bg-indigo-900 border-3 border-indigo-900 shadow rounded transition duration-200">ADD A NEW STUDENT</button>
        </div>
      </form>
    </div>

    <div class="flex justify-center mt-10">
      <a href="../pages/index.php" class="px-4 py-2 font-medium text-white bg-green-900 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out">Cancel</a>
    </div>
  
  </div>

</div>

<!-- 
Create a form that adds a new student record to the database, 
you will also create the backend logic to handle the creation of the record. -->



<?php
    include '../partials/footer.php';
?>