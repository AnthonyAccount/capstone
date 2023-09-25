
<?php
include './php/admin.php'
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="../dist/output.css" rel="stylesheet">
    <link href="../src/input.css" rel="stylesheet">
</head>
<body>



<main>
    <!-- your content goes here -->
</main>
<br><br>
<div class="mt-8 p-4 sm:ml-64 bg-white shadow rounded-lg">
    <h2 class="text-gray-500 text-lg font-semibold pb-4">Admin</h2>
    <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div> <!-- Gradient line -->
    <div class="text-right mt-4">
        <a href="rolesandpermission.php">
            <button class="bg-pink-500 text-black active:bg-pink-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-2 mb-2 ease-linear transition-all duration-150" type="button">
                Roles and Permissions
            </button>
        </a>
        <?php if ($canCreateadmin): ?>
            <button class="bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded showmodal">
                Add Admin
            </button>
        <?php endif; ?>
    </div>
    <table class="w-full table-auto text-sm">
        <thead class=" bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr class="text-sm leading-normal">
                <th class="py-2 px-4 bg-grey-lightest font-bold text-sm text-grey-light border-b border-grey-light">Photo</th>
                <th class="py-2 px-4 bg-grey-lightest font-bold text-sm text-grey-light border-b border-grey-light">Name</th>
                <th class="py-2 px-4 bg-grey-lightest font-bold text-sm text-grey-light border-b border-grey-light">Position</th>
                <th class="py-2 px-4 bg-grey-lightest font-bold text-sm text-grey-light border-b border-grey-light">Role</th>
                <th class="py-2 px-4 bg-grey-lightest font-bold text-sm text-grey-light border-b border-grey-light">Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr class="hover:bg-grey-lighter text-center">
                <td class="py-2 px-4 border-b border-grey-light flex justify-center items-center">
              <img src="https://via.placeholder.com/40" alt="Foto Perfil" class="rounded-full h-10 w-10">
                </td>

                    <td class="py-2 px-4 bg-grey-lightest text-sm font-bold text-grey-light border-b border-grey-light"><?php echo $user["name"]; ?></td>
                    <td class="py-2 px-4 bg-grey-lightest text-sm text-grey-light border-b border-grey-light"><?php echo $user["position"]; ?></td>
                    <td class="py-2 px-4 bg-grey-lightest text-sm text-grey-light border-b border-grey-light"><?php echo $user["RoleName"]; ?></td>
                    <?php if ($canEditadmin): ?>
                        <td class="border px-4 py-2">
                            <a href="edit_user.php?id=<?php echo $user["dohstaffid"]; ?>" class="text-blue-500 hover:underline">Edit</a>
                        </td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div>Showing 1 of <?php echo $pages?></div>
</div>


   
    <!-- Pagination links -->
  
<div class="mt-4 flex items-center justify-center space-x-2">
    <a href="?page-nr=1" class="px-4 py-2 border rounded-lg text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring">
        First
    </a>
    <?php if ($page > 1): ?>
        <a href="?page-nr=<?php echo $page - 1 ?>" class="px-4 py-2 border rounded-lg text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring">
            Previous
        </a>
    <?php else: ?>
        <a class="px-4 py-2 border rounded-lg text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring" >
            Previous
        </a>
    <?php endif; ?>

    <?php if ($page < $pages): ?>
        <a href="?page-nr=<?php echo $page + 1 ?>" class="px-4 py-2 border rounded-lg text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring">
            Next
        </a>
    <?php else: ?>
        <a class="px-4 py-2 border rounded-lg text-gray-300 cursor-not-allowed" aria-disabled="true">
            Next
        </a>
    <?php endif; ?>

    <a href="?page-nr=<?php echo $pages ?>" class="px-4 py-2 border rounded-lg text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring">
        Last
    </a>
</div>

</div>


<div class="modal h-screen w-full fixed  py-12 left-0 top-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
<?php if (!empty($registration_status)): ?>
        <p class="mb-4 <?php echo (strpos($registration_status, "successful") !== false) ? 'text-green-500' : 'text-red-500'; ?>">
            <?php echo $registration_status; ?>
        </p>
    <?php endif; ?>

    <form method="POST" action="" class="mt-10 space-y-4 md:space-y-6 bg-white rounded p-6">
   
   
    <div class="grid grid-cols-2 gap-4 w-auto">
                <div class="">
                            <label for="first_name" class="block text-gray-700 font-bold text-sm mb-2">Name</label>
                            <input type="text" name="name" id="first_name" class="mt-1 p-2 w-full border rounded">
                        </div>
                        <div class="">
                            <label for="last_name" class="block text-gray-700 font-bold text-sm mb-2">position</label>
                            <input type="text" name="position" id="last_name" class="mt-1 p-2 w-full border rounded">
                        </div>
                        <div class="block text-gray-700 font-bold text-sm mb-2">
                         
                        <label for="role" class="block text-gray-700 font-bold text-sm mb-2">Role:</label>
                            <select id="role" name="role" class="mt-1 p-2 w-full border rounded">
                            <option value="2">SuperAdmin</option>
                            <option value="3">Maineditor</option>
                            <option value="6">editor2</option>
                            <option value="5">editor1</option>
                            <option value="4">Adminviewer</option>
                            <option value="7">Viewer</option>
                            <option value="9">Validator</option>
                            </select>
                        </div>
                        <div class="">
                            <label for="username" class="block text-gray-700 font-bold text-sm mb-2">Username</label>
                            <input type="text" name="username" id="username" class="mt-1 p-2 w-full border rounded">
                        </div>
                        <div class="">
                            <label for="password" class="block text-gray-700 font-bold text-sm mb-2">Password</label>
                            <input type="password" name="password" id="password" class="mt-1 p-2 w-full border rounded">
                        </div>
    </div>
                          <div class="flex items-center justify-center">
                         <button type="submit" class="w-full px-4 py-2 bg-white border border-transparent rounded-md font-semibold capitalize text-green-900 hover:bg-green-800 active:bg-green-800 focus:outline-none focus:border-green-800 focus:ring focus:ring-green-700 disabled:opacity-25 transition">
                       Register Account
                        </button>
</div>
                               
                        </form>
                    </div>

              </div>
              
         
<script src="script.js">
 
 </script>
 
</body>
</html>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", () => {
        sidebar.style.top = parseInt(navbar.clientHeight) - 1 + "px";
    });
</script>