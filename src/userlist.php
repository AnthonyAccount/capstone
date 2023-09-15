<?php
require_once("config.php");
require_once("AuthController.php");

session_start();
$userRole = $_SESSION['RoleName'];
$username = $_SESSION['username'];
// 'Admin' => ['create', 'doctoredit', 'distributoredit', 'admin', 'users', 'prescription'],
// Check specific permissions
$canCreatedoctor = checkPermission('createdoctor');
$canEditdoctor = checkPermission('doctoredit');
$canViewdistributor = checkPermission('distributoredit');

if (isset($_GET["logout"])) {
    if ($_GET["logout"] === "true") {
        // Clear all session variables
        $_SESSION = array();

        // Destroy the session
        session_destroy();
    }
   }

// Redirect to login page if user is not logged in
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}

// Pagination settings
$rows = 5;
$page = 1; // Default page number if not set

if(isset($_GET['page-nr'])){
    $page = (int)$_GET['page-nr'];
}


// Calculate the starting row for the query
$start = ($page - 1) * $rows;

// Query to fetch limited users for the current page
$query = "SELECT * FROM doctor inner join user1 on doctor.user_id = user1.user_id where status = 'active' LIMIT $start, $rows";
$result = $conn->query($query);

// ... (rest of the code)

$users = [];

$query1 = "SELECT * FROM doctor where status = 'active' ";
$records  = $conn->query($query1);
$nr_rows = $records->num_rows;
$pages = ceil($nr_rows / $rows);

if(isset($_GET['page-nr'])){
    $page = $_GET['page-nr'] - 1;
    $start = $page * $rows; 
}
// Fetch users and store in the $users array
while ($row = $result->fetch_assoc()) {
    $users[] = $row;
}
$conn->close();
include './var/navsidebar.php'
?>

<!DOCTYPE html>
<html>
<head>
    
    <title>user list</title>
    <link href="../src/input.css" rel="stylesheet">
    <link href="../dist/output.css" rel="stylesheet">
</head>
<body>

<br><br>
<div class="mt-8 p-4 sm:ml-64 bg-white shadow rounded-lg">

                <h2 class="text-gray-500 text-lg font-semibold pb-4"><a href="distributorlist.php"> Doctors ></a></h2>
                <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div> <!-- Línea con gradiente -->
                <?php if ($canCreatedoctor): ?>
                <div class="text-right mt-4">
                <button class=" bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded showmodal">
                        Add Doctor
                    </button>
                </div>
                    <?php endif; ?>
                <table class="w-full table-auto text-sm">
                <thead class=" bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr class="text-sm text-center">
                             <th class="py-2 px-4 bg-grey-lightest font-bold text-sm text-grey-light border-b border-grey-light">Name</th>
                            <th class="py-2 px-4 bg-grey-lightest font-bold text-sm text-grey-light border-b border-grey-light">contact</th>
                            <th class="py-2 px-4 bg-grey-lightest font-bold text-sm text-grey-light border-b border-grey-light">Status</th>
                            <th class="py-2 px-4 bg-grey-lightest font-bold text-sm text-grey-light border-b border-grey-light">Date created</th>
                            <th class="py-2 px-4 bg-grey-lightest font-bold text-sm text-grey-light border-b border-grey-light">Prescription</th>
                            <th class="py-2 px-4 bg-grey-lightest font-bold text-sm text-grey-light border-b border-grey-light">Edit</th>                        
                        </tr>
                    </thead>
                    <tbody>
            <?php foreach ($users as $user): ?>
                <tr class="hover:bg-grey-lighter text-center">
                <td class="py-2 px-4 border-b border-grey-light flex justify-center items-center">
              <img src="https://via.placeholder.com/40" alt="Foto Perfil" class="rounded-full h-10 w-10">
                </td>

                   <td class="py-2 px-4 bg-grey-lightest text-sm text-grey-light border-b border-grey-light"><a class="font-bold"><?php echo $user["first_name"]; ?> <?php echo $user["last_name"]; ?></a><br><a><?php echo $user["email"]; ?></a></td>
          
                   <td class="py-2 px-4 bg-grey-lightest text-sm text-grey-light border-b border-grey-light"><?php echo $user["status"]; ?></td>
                    <td class="py-2 px-4 bg-grey-lightest text-sm text-grey-light border-b border-grey-light"><?php echo $user["date_created"]; ?></td>
                    <td class="py-2 px-4 bg-grey-lightest text-sm text-grey-light border-b border-grey-light">
                    <button class=" bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded showmodal">
                       Prescriptions
                    </button>
                    </td>
                    
              <?php if ($canEditdoctor): ?>
                <td class="py-2 px-4 bg-grey-lightest text-sm text-grey-light border-b border-grey-light">
        <button href="updatedoctor.php?id=<?php echo $user["doctor_id"]; ?>" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded">Edit</button>
        <a href="edit_doctor.php?id=<?php echo $user["doctor_id"]; ?>" class="bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded type="button">
  view
              </a> </td>
                    <?php endif; ?>
                   
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>      
    <div>Showing 1 of <?php echo $pages?>  
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
</div>
</div>
<div class="modal h-screen w-full fixed  py-12 left-0 top-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">

<form method="POST" action="" class="mt-10 space-y-4 md:space-y-6 bg-white rounded p-6">
<div class="text-right">
          <button class="text-right p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('modal-id')">
            <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
              ×
            </span>
          </button>
</div>
        <div class="grid grid-cols-2 gap-4 w-auto">
                                        <div>
                                            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                                            <input type="text" name="first_name" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                                        </div>                                 
                                        <div>
                                            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                                            <input type="text" name="last_name" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required="">
                                        </div>
                                        <div>
                                            <label for="specialty" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Specialist</label>
                                            <input type="text" name="specialty" id="specialty" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required="">
                                        </div>
                                        <div>
                                            <label for="contact_info" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contact</label>
                                            <input type="text" name="contact_info" id="contact_info" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required="">
                                        </div>
                                        <div>
                                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                            <input type="email" name="email" id="email"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                                        </div>
                                        <div>
                                            <label for="region" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Region</label>
                                            <input type="text" name="region" id="region"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                                        </div>
                                        <div>
                                            <select name="status" class="mt-1 p-2 w-full border rounded">
                                                <option value="inactive">Inactive</option>
                                                <option value="active">Active</option> <!-- Changed to lowercase "active" -->
                                            </select>  </div>
                                        <div>
                                            <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                                            <input type="text" name="username" id="username" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                                        </div>
                                        <div>
                                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                                        </div>
                                        <div>
                                            <label for="picture" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Picture</label>
                                            <input type="file" name="image" id="image" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                                        </div>
</div>
                                        <div >
                                            <button type="submit" class="w-full text-center inline-flex items-center justify-center px-4 py-2 bg-white border border-transparent rounded-md font-semibold capitalize text-green-900 hover:bg-green-800 active:bg-green-800 focus:outline-none focus:border-green-800 focus:ring focus:ring-green-700 disabled:opacity-25 transition">Register Account</button>
                                        </div>
                                        
                                    </div> 

</form>
<script src="script.js">
 
 </script>
</div> 
</div>

<div id="authentication-modal" tabindex="-1" aria-hidden="true"  class=" h-screen w-full fixed  py-12 left-0 top-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">

<form method="POST" action="updatedoctor.php" class="mt-10 space-y-4 md:space-y-6 bg-white rounded p-6">
<div class="text-right">
           <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
</div>
        <div class="grid grid-cols-2 gap-4 w-auto">
                                        <div>
                                            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                                            <input type="text" name="first_name" id="first_name"   value="<?php echo $doctorData["first_name"]; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                                        </div>                                 
                                        <div>
                                            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                                            <input type="text" name="last_name" id="last_name" value="<?php echo $doctorData["last_name"]; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required="">
                                        </div>
                                        <div>
                                            <label for="specialty" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Specialist</label>
                                            <input type="text" name="specialty" id="specialty"  value="<?php echo $doctorData["specialty"]; ?>"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required="">
                                        </div>
                                        <div>
                                            <label for="contact_info" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contact</label>
                                            <input type="text" name="contact_info" id="contact_info"  value="<?php echo $doctorData["contact_info"]; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required="">
                                        </div>
                                        <div>
                                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                            <input type="email" name="email" id="email"  value="<?php echo $doctorData["email"]; ?>"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                                        </div>
                                        <div>
                                            <label for="region" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Region</label>
                                            <input type="text" name="region" id="region"  value="<?php echo $doctorData["region"]; ?>"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                                        </div>
                                        <div>
                                            <select name="status"   class="mt-1 p-2 w-full border rounded">
                                            <option value="active">Active</option>    
                                            <option value="inactive">Inactive</option>
                                                 <!-- Changed to lowercase "active" -->
                                            </select>  </div>
                                        <div>
                                            <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                                            <input type="text" name="username" id="username"  value="<?php echo $doctorData["username"]; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                                        </div>
                                        <div>
                                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                            <input type="password" name="password" id="password" placeholder="••••••••" value="<?php echo $doctorData[""]; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                                        </div>
                                        <div>
                                            <label for="picture" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Picture</label>
                                            <input type="file" name="image" id="image" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                                        </div>
        </div>
                                        <div >
                                            <button type="submit" class="w-full text-center inline-flex items-center justify-center px-4 py-2 bg-white border border-transparent rounded-md font-semibold capitalize text-green-900 hover:bg-green-800 active:bg-green-800 focus:outline-none focus:border-green-800 focus:ring focus:ring-green-700 disabled:opacity-25 transition">Update</button>
                                        </div>
                                        
</form>
</div>



</body>
</html>
<script src="modal.js">
   
</script>