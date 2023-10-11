<?php
require_once("../config.php");
require_once("../AuthController.php");
session_start();
$userRole = $_SESSION['RoleName'];
$username = $_SESSION['username'];

// Check specific permissions
$canCreatePost = checkPermission('createdistributor');
$canEditdistributor = checkPermission('distributoredit');

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
    header("Location: ../index.php");
    exit();
}
// Pagination settings
$rows = 5;
$page = 1; // Default page number if not set

if (isset($_GET['page-nr'])) {
    $page = (int)$_GET['page-nr'];
}

// Calculate the starting row for the query
$start = ($page - 1) * $rows;

// Query to fetch limited users for the current page
$query = "SELECT * FROM tbldistributor LIMIT $start, $rows";
$result = $conn->query($query);

// ... (rest of the code)

$users = [];

$query1 = "SELECT * FROM tbldistributor";
$records  = $conn->query($query1);
$nr_rows = $records->num_rows;
$pages = ceil($nr_rows / $rows);

if (isset($_GET['page-nr'])) {
    $page = $_GET['page-nr'] - 1;
    $start = $page * $rows;
}
// Fetch users and store in the $users array
while ($row = $result->fetch_assoc()) {
    $users[] = $row;
}
$conn->close();
include '../var/sidebar.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>user list</title>
    <link href="../../src/input.css" rel="stylesheet">
    <link href="../../dist/output.css" rel="stylesheet">
</head>

<body>
    <main>
        <!-- your content goes here -->
    </main>
    <br><br>
    <div class="p-4 mt-8 bg-white rounded-lg shadow sm:ml-64">

        <h2 class="pb-4 text-lg font-semibold text-gray-500"><a href="userlist.php">
                < Distributor</a>
        </h2>
        <div class="h-px mb-6 bg-gradient-to-r from-cyan-300 to-cyan-500"></div> <!-- Línea con gradiente -->
        <?php if ($canCreatePost) : ?>
            <div class="mt-4 text-right">
                <button class="px-4 py-2 font-semibold text-white rounded bg-cyan-500 hover:bg-cyan-600 showmodal">
                    Add Distributor
                </button>
            </div>
        <?php endif; ?>
        <table class="w-full text-sm table-auto">
            <thead class=" bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr class="text-sm text-center">
                    <th class="px-4 py-2 text-sm font-bold border-b bg-grey-lightest text-grey-light border-grey-light">Distributor Name</th>
                    <th class="px-4 py-2 text-sm font-bold border-b bg-grey-lightest text-grey-light border-grey-light">Address</th>
                    <th class="px-4 py-2 text-sm font-bold border-b bg-grey-lightest text-grey-light border-grey-light">Contact number</th>
                    <th class="px-4 py-2 text-sm font-bold border-b bg-grey-lightest text-grey-light border-grey-light">Medicine</th>
                    <th class="px-4 py-2 text-sm font-bold border-b bg-grey-lightest text-grey-light border-grey-light">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr class="text-center hover:bg-grey-lighter">
                        <td class="px-4 py-2 text-sm border-b bg-grey-lightest text-grey-light border-grey-light"><a class="font-bold"><?php echo $user["distributor_name"]; ?></a><br><a><?php echo $user["contact_number"]; ?></a></td>

                        <td class="px-4 py-2 text-sm border-b bg-grey-lightest text-grey-light border-grey-light"><?php echo $user["address"]; ?></td>
                        <td class="px-4 py-2 text-sm border-b bg-grey-lightest text-grey-light border-grey-light"><?php echo $user["status"]; ?></td>
                        <td class="px-4 py-2 text-sm border-b bg-grey-lightest text-grey-light border-grey-light">
                            <button class="px-4 py-2 font-semibold text-white rounded bg-cyan-500 hover:bg-cyan-600 showmodal">
                                Medicine
                            </button>
                        </td>

                        <?php if ($canEditdistributor) : ?>
                            <td class="px-4 py-2 text-sm border-b bg-grey-lightest text-grey-light border-grey-light">
                                <a href="edit_user.php?id=<?php echo $user["doctor_id"]; ?>" class="text-blue-500 hover:underline">Edit</a>

                            </td>
                        <?php endif; ?>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div>Showing 1 of <?php echo $pages ?>
        <!-- Pagination links -->
        <div class="flex items-center justify-center mt-4 space-x-2">
            <a href="?page-nr=1" class="px-4 py-2 text-gray-500 border rounded-lg hover:bg-gray-100 focus:outline-none focus:ring">
                First
            </a>
            <?php if ($page > 1) : ?>
                <a href="?page-nr=<?php echo $page - 1 ?>" class="px-4 py-2 text-gray-500 border rounded-lg hover:bg-gray-100 focus:outline-none focus:ring">
                    Previous
                </a>
            <?php else : ?>
                <a class="px-4 py-2 text-gray-500 border rounded-lg hover:bg-gray-100 focus:outline-none focus:ring">
                    Previous
                </a>
            <?php endif; ?>

            <?php if ($page < $pages) : ?>
                <a href="?page-nr=<?php echo $page + 1 ?>" class="px-4 py-2 text-gray-500 border rounded-lg hover:bg-gray-100 focus:outline-none focus:ring">
                    Next
                </a>
            <?php else : ?>
                <a class="px-4 py-2 text-gray-300 border rounded-lg cursor-not-allowed" aria-disabled="true">
                    Next
                </a>
            <?php endif; ?>

            <a href="?page-nr=<?php echo $pages ?>" class="px-4 py-2 text-gray-500 border rounded-lg hover:bg-gray-100 focus:outline-none focus:ring">
                Last
            </a>
        </div>
    </div>
    </div>
    </div>
    <div class="fixed top-0 left-0 z-50 flex items-center justify-center hidden w-full h-screen py-12 bg-black bg-opacity-50 modal">

        <form method="POST" action="./php/distributor.php" class="p-6 mt-10 space-y-4 bg-white rounded md:space-y-6">
            <div class="text-right">

            </div>
            <div class="grid w-auto grid-cols-2 gap-4">
                <div>
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                    <input type="text" name="first_name" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                </div>
                <div>
                    <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="text" name="last_name" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                </div>
                <div>
                    <label for="specialty" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Distributor Name</label>
                    <input type="text" name="specialty" id="specialty" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                </div>
                <div>
                    <label for="contact_info" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contact Number</label>
                    <input type="text" name="contact_info" id="contact_info" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                </div>
                <div>
                    <select name="status" class="w-full p-2 mt-1 border rounded">
                        <option value="inactive">Inactive</option>
                        <option value="active">Active</option> <!-- Changed to lowercase "active" -->
                    </select>

                </div>

                <h2 class="my-4 text-2xl font-semibold">ADD MEDICINE</h2>

                <div id="medicineFields">
                    <div class="flex space-x-4">
                        <div class="flex items-center">
                            <label for="medicine_name" class="block font-semibold">Medicine Name:</label>
                            <input type="text" name="medicine_name[]" required class="w-full px-3 py-2 border rounded-lg">
                        </div>
                        <div class="flex items-center">
                            <label for="manufacturer" class="block font-semibold">Manufacturer:</label>
                            <input type="text" name="manufacturer[]" required class="w-full px-3 py-2 border rounded-lg">
                        </div>
                        <div class="flex items-center">
                            <label for="medicine_type" class="block font-semibold">Medicine Type:</label>
                            <input type="text" name="medicine_type[]" required class="w-full px-3 py-2 border rounded-lg">
                        </div>
                        <div class="flex items-center">
                            <label for="dosage" class="block font-semibold">Dosage:</label>
                            <input type="text" name="dosage[]" required class="w-full px-3 py-2 border rounded-lg">
                        </div>
                        <div class="flex items-center">
                            <label for="regulatory_status" class="block font-semibold">Regulatory Status:</label>
                            <input type="text" name="regulatory_status[]" required class="w-full px-3 py-2 border rounded-lg">
                        </div>
                    </div>
                </div>

                <button type="button" onclick="addMedicineFields()" class="px-4 py-2 mt-4 font-semibold text-white bg-blue-500 rounded-lg hover:bg-blue-600">Add Medicine</button>

                <input type="submit" name="distributor_register" value="Register" class="px-4 py-2 mt-4 font-semibold text-white bg-blue-500 rounded-lg hover:bg-blue-600">


        </form>
        <script src="script.js">

        </script>
    </div>
    </div>
</body>

</html>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", () => {
        const navbar = document.getElementById("navbar");
        const sidebar = document.getElementById("sidebar");
        const btnSidebarToggler = document.getElementById("btnSidebarToggler");
        const navClosed = document.getElementById("navClosed");
        const navOpen = document.getElementById("navOpen");

        btnSidebarToggler.addEventListener("click", (e) => {
            e.preventDefault();
            sidebar.classList.toggle("show");
            navClosed.classList.toggle("hidden");
            navOpen.classList.toggle("hidden");
        });

        sidebar.style.top = parseInt(navbar.clientHeight) - 1 + "px";
    });
</script>