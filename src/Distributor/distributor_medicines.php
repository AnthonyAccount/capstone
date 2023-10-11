<?php
require_once("../config.php");

function viewMedicineDetails()
{
    global $conn; // Use the database connection from the previous step

    $sql = "SELECT * FROM tbl_medicine";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<table class="min-w-full">';
        echo '<thead>';
        echo '<tr>';
        echo '<th class="px-4 py-2 border">Medicine Name</th>';
        echo '<th class="px-4 py-2 border">Manufacturer</th>';
        echo '<th class="px-4 py-2 border">Medicine Type</th>';
        echo '<th class="px-4 py-2 border">Dosage</th>';
        echo '<th class="px-4 py-2 border">Regulatory Status</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td class="px-4 py-2 border">' . $row['medicine_name'] . '</td>';
            echo '<td class="px-4 py-2 border">' . $row['manufacturer'] . '</td>';
            echo '<td class="px-4 py-2 border">' . $row['medicine_type'] . '</td>';
            echo '<td class="px-4 py-2 border">' . $row['dosage'] . '</td>';
            echo '<td class="px-4 py-2 border">' . $row['regulatory_status'] . '</td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
    } else {
        echo 'No medicine records found.';
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Sample Table</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="relative flex flex-wrap items-center justify-between w-full py-2 shadow-lg bg-neutral-100 text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 dark:bg-white lg:py-4">
        <div class="flex flex-wrap items-center justify-between w-full px-3">
            <div>
                <a class="flex items-center mx-2 my-1 text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 lg:mb-0 lg:mt-0" href="#">
                    <img src="../dist/img/Logo.png" style="height: 20px" alt="TE Logo" loading="lazy" />
                </a>
            </div>
        </div>
    </div>
    <div class="bg-white border-gray-200 dark:bg-green-800">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
            <div class="flex md:order-2">
                <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-white focus:outline-none focus:ring-2 focus:ring-white dark:text-white dark:hover:bg-white dark:focus:ring-white" aria-controls="navbar-search" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
                <div class="relative mt-3 md:hidden">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="search-navbar" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
                </div>
                <ul class="flex flex-col p-4 mt-4 font-medium border border-gray-100 rounded-lg md:p-0 bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-green-800 dark:border-gray-700">
                    <a class="mx-2 my-1 font-medium text-white font-Poppins hover:text-zinc-100 focus:text-white" href="../src/index.php">Home</a>
                    <a class="mx-2 my-1 font-medium text-white font-Poppins hover:text-zinc-100 focus:text-white" href="#">About Us</a>
                    <a class="mx-2 my-1 font-medium text-white font-Poppins hover:text-zinc-100 focus:text-white" href="#">News</a>
                    <a class="mx-2 my-1 font-medium text-white font-Poppins hover:text-zinc-100 focus:text-white" href="#">Contact</a>
                </ul>
            </div>
        </div>
    </div>
    <div class="container mx-auto">
        <?php viewMedicineDetails(); ?> <!-- Call the function here directly -->
    </div>
</body>

</html>