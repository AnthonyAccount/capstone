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
    <link href="/dist/output.css" rel="stylesheet">
</head>
<body>
 <!-- Navbar start -->
<nav id="navbar" class="fixed top-0 z-40 flex w-full  flex-wrap items-center justify-between bg-neutral-100 py-2 text-neutral-500 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-white lg:py-4">
<div>
            <a class="mx-2 my-1 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 lg:mb-0 lg:mt-0"
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
<!-- Navbar end -->

<!-- Smaller Sidebar start-->
<div id="containerSidebar" class="z-40">
    <div class="navbar-menu relative z-40">
        <nav id="sidebar"
            class="fixed left-0 bottom-0 flex w-1/4 flex-col overflow-y-auto bg-neutral-100 pt-6 pb-8 sm:max-w-xs lg:w-16">
            <!-- one category / navigation group -->
            <div class="px-4 pb-6">
                <h3 class="mb-2 text-xs font-medium uppercase text-black">
                    Main
                </h3>
                <ul class="mb-4 text-sm font-medium">
                    <li>
                        <a class="flex items-center rounded py-2 pl-2 pr-4 text-black hover:bg-gray-600"
                            href="dashboard.php">
                            <span class="select-none">Dashboard</span>
                        </a>
                    </li>
                    <?php if ($canViewUsers): ?>
                    <li>
                        <a class="flex items-center rounded py-2 pl-2 pr-4 text-black hover:bg-gray-600"
                            href="userlist.php">
                            <span class="select-none">Users</span>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if ($canViewAdmin): ?>
                    <li>
                        <a class="flex items-center rounded py-2 pl-2 pr-4 text-black hover:bg-gray-600"
                            href="admin.php">
                            <span class="select-none">Admin</span>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if ($canViewPrescription): ?>
                    <li>
                        <a class="flex items-center rounded py-2 pl-2 pr-4 text-black hover:bg-gray-600"
                            href="admin.php">
                            <span class="select-none">Prescription records</span>
                        </a>
                    </li>
                    <?php endif; ?>
                    <li>
                        <a class="flex items-center rounded py-2 pl-2 pr-4 text-black hover:bg-gray-600"
                        href="?logout=true">
                            <span class="select-none">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<br>
</body>
</html>
