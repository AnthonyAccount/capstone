<?php
require_once("config.php");
require_once("AuthController.php");

$userRole = $_SESSION['RoleName'];
$username = $_SESSION['username'];

// Check specific permissions

$canViewAdmin = checkPermission('admin');
$canViewUsers = checkPermission('users');
$canViewPrescription = checkPermission('prescription');
?>
<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <link href="../src/input.css" rel="stylesheet">
    <link href="../../dist/output.css" rel="stylesheet">
</head>
<body>
 <!-- Navbar start -->
 <nav id="navbar" class="fixed top-0 z-40 flex w-full flex-wrap items-center justify-between bg-neutral-100 py-1 text-neutral-500 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-white lg:py-2">
    
        <a class="mx-auto my-1 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 lg:mb-0 lg:mt-0"
            href="#">
            <img src="../dist/images/Logo.png" style="height: 20px" alt="TE Logo" loading="lazy" />
        </a>
    </div>
    <button id="btnSidebarToggler" type="button" class="py-4 text-2xl text-white hover:text-gray-200">
        <svg id="navClosed" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="h-8 w-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
        <svg id="navOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="hidden h-8 w-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
</nav>


    <!-- Sidebar -->
    <div id="containerSidebar" class="z-40">
        <div class="navbar-menu relative z-40">
            <nav id="sidebar"
                class=" fixed left-0 bottom-0 flex flex-col overflow-y-auto bg-neutral-100 pt-6 pb-8 w-64">
                <!-- Adjust the width here -->
                <div class="px-4 pb-6">
                    <ul class="mb-4 text-sm font-medium">
                        <li>
                            <a href="dashboard.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-600 group">
                                <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                                    <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                                    <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                                </svg>
                                <span class="ml-3">Dashboard</span>
                            </a>
                        </li>
                        <?php if ($canViewUsers): ?>
                        <li>
                            <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-600" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                    <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                                </svg>
                                <span class="flex-1 ml-3 text-left whitespace-nowrap">Users</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>
                            <ul id="dropdown-example" class="hidden py-2 space-y-2">
                                <li>
                                    <a href="userlist.php" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-600 dark:text-white dark:hover:bg-gray-700">Doctor</a>
                                </li>
                                <li>
                                    <a href="pharmacy.php" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-600 dark:text-white dark:hover:bg-gray-700">Pharmacy</a>
                                </li>
                                <li>
                                    <a href="distributorlist.php" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-600 dark:text-white dark:hover:bg-gray-700">Distributor</a>
                                </li>
                            </ul>
                        </li>
                        <?php endif; ?>
                        <?php if ($canViewAdmin): ?>
                        <li>
                            <a href="admin.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-600 group">
                                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                    <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                                </svg>
                                <span class="ml-3">Admin</span>
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php if ($canViewPrescription): ?>
                        <li>
                            <a href="prescriptions.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-600 group">
                                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                                    <path d="M16 14V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 0 0 0-2h-1v-2a2 2 0 0 0 2-2ZM4 2h2v12H4V2Zm8 16H3a1 1 0 0 1 0-2h9v2Z"/>
                                </svg>
                                <span class="ml-3">Prescription</span>
                            </a>
                        </li>
                        <?php endif; ?>
                        <li>
                            <a href="?logout=true" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-600 group">
                                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                                </svg>
                                <span class="ml-3">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
<script src="dropdown.js"></script>

<br>
<script>document.addEventListener('DOMContentLoaded', function () {
    const dropdownButton = document.querySelector('[data-collapse-toggle="dropdown-example"]');
    const dropdownMenu = document.getElementById('dropdown-example');

    dropdownButton.addEventListener('click', function () {
        dropdownMenu.classList.toggle('hidden');
    });

    // Close the dropdown when clicking outside of it
    document.addEventListener('click', function (event) {
        if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.add('hidden');
        }
    });
});
</script>
</body>
</html>
