<?php

include '../php/searchdoctor.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Doctor List</title>
    <link href="../../src/input.css" rel="stylesheet">
    <link href="../../dist/output.css" rel="stylesheet">
</head>

<body>
    <br><br>
    <div class="p-4 mt-8 bg-white rounded-lg shadow sm:ml-64">
        <h2 class="pb-4 text-lg font-semibold text-gray-500">Doctors</h2>
        <div class="h-px mb-6 bg-gradient-to-r from-cyan-300 to-cyan-500"></div> <!-- Línea con gradiente -->
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="text" name="searchQuery" placeholder="Search by name">
            <button type="submit" name="search"></button>
        </form>

        <?php if ($canCreatedoctor) : ?>
            <div class="mt-4 text-right">
                <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="px-4 py-2 font-semibold text-white rounded bg-cyan-500 hover:bg-cyan-600 showmodal">
                    Add Doctor
                </button>
            </div>
            <div>
             <form method="POST"action="../pdf/generatePDF.php">
                <button  class="px-4 py-2 font-semibold text-white rounded bg-cyan-500 hover:bg-cyan-600 showmodal">
                   PDF
                </button>
                </form>
        </div>
            
        <?php endif; ?>

        <table class="w-full text-sm table-auto">
            <thead class="bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr class="text-sm text-center">
                    <th class="px-4 py-2 text-sm font-bold border-b bg-grey-lightest text-grey-light border-grey-light">Photo</th>
                    <th class="px-4 py-2 text-sm font-bold border-b bg-grey-lightest text-grey-light border-grey-light">Name</th>
                    <th class="px-4 py-2 text-sm font-bold border-b bg-grey-lightest text-grey-light border-grey-light">Status</th>
                    <th class="px-4 py-2 text-sm font-bold border-b bg-grey-lightest text-grey-light border-grey-light">Date created</th>
                    <th class="px-4 py-2 text-sm font-bold border-b bg-grey-lightest text-grey-light border-grey-light">Prescription</th>
                    <th class="px-4 py-2 text-sm font-bold border-b bg-grey-lightest text-grey-light border-grey-light">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr class="text-center hover:bg-grey-lighter">
                        <td class="flex items-center justify-center px-4 py-2 border-b border-grey-light">
                        <img src="data:image/jpeg;base64,<?php echo $user['prof_image']; ?>" alt="Doctor Image" class="w-10 h-10 rounded-full">
                        </td>
                        <td class="px-4 py-2 text-sm border-b bg-grey-lightest text-grey-light border-grey-light">
                            <a class="font-bold"><?php echo $user["first_name"]; ?> <?php echo $user["last_name"]; ?></a><br>
                            <a><?php echo $user["email"]; ?></a>
                        </td>
                        <td class="px-4 py-2 text-sm border-b bg-grey-lightest text-grey-light border-grey-light"><?php echo $user["status"]; ?></td>
                        <td class="px-4 py-2 text-sm border-b bg-grey-lightest text-grey-light border-grey-light"><?php echo $user["date_created"]; ?></td>
                        <td class="px-4 py-2 text-sm border-b bg-grey-lightest text-grey-light border-grey-light">
                            <a href="doctorprescription.php?id=<?php echo $user["doctor_id"]; ?>" class="px-4 py-2 font-semibold text-white rounded bg-cyan-500 hover:bg-cyan-600 showmodal">
                                Prescriptions
                            </a>
                        </td>
                        <?php if ($canEditdoctor) : ?>
                            <td class="px-4 py-2 text-sm border-b bg-grey-lightest text-grey-light border-grey-light">
                                <a href="edit_doctor.php?id=<?php echo $user["doctor_id"]; ?>" class="px-4 py-2 font-semibold text-white rounded bg-cyan-500 hover:bg-cyan-600">Edit</a>
                                <a href="view_doctor.php?id=<?php echo $user["doctor_id"]; ?>" class="px-4 py-2 font-semibold text-white rounded bg-cyan-500 hover:bg-cyan-600">View</a>
                            </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div>Showing 1 of <?php echo $pages ?></div>

        <!-- Pagination links -->
        <div class="flex items-center justify-center mt-4 space-x-2">
            <a href="?page-nr=1" class="px-4 py-2 text-gray-500 border rounded-lg hover:bg-gray-100 focus:outline-none focus:ring">First</a>
            <?php if ($page > 1) : ?>
                <a href="?page-nr=<?php echo $page - 1 ?>" class="px-4 py-2 text-gray-500 border rounded-lg hover:bg-gray-100 focus:outline-none focus:ring">Previous</a>
            <?php else : ?>
                <a class="px-4 py-2 text-gray-500 border rounded-lg hover:bg-gray-100 focus:outline-none focus:ring">Previous</a>
            <?php endif; ?>

            <?php if ($page < $pages) : ?>
                <a href="?page-nr=<?php echo $page + 1 ?>" class="px-4 py-2 text-gray-500 border rounded-lg hover:bg-gray-100 focus:outline-none focus:ring">Next</a>
            <?php else : ?>
                <a class="px-4 py-2 text-gray-300 border rounded-lg cursor-not-allowed" aria-disabled="true">Next</a>
            <?php endif; ?>

            <a href="?page-nr=<?php echo $pages ?>" class="px-4 py-2 text-gray-500 border rounded-lg hover:bg-gray-100 focus:outline-none focus:ring">Last</a>
        </div>
    </div>
    <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 z-50 flex items-center justify-center hidden w-full h-screen py-12 bg-black bg-opacity-50">
    <form method="POST" enctype="multipart/form-data" action="../php/registrationm.php" class="p-6 mt-10 space-y-4 bg-white rounded md:space-y-6">
        <div class="text-right">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>

        <div class="grid w-auto grid-cols-2 gap-4">
            <div>
                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                <input type="text" name="first_name" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
            </div>
            <div>
                <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
            </div>
            <div>
                <label for="specialty" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Specialist</label>
                <input type="text" name="specialty" id="specialty" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
            </div>
            <div>
                <label for="contact_info" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contact</label>
                <input type="text" name="contact_info" id="contact_info" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
            </div>
            <div>
                <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                <input type="text" name="address" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
            </div>
            <div>
            <select name="hospital_id" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-green-900 dark:focus:border-green-900 focus:outline-none focus:ring-0 focus:border-blue-600 peer" required>
                                    <option value=" disabled selected" >Select Hospital</option>
                                    <?php
                                    require_once("../config.php");

                                    // Fetch hospitals from tbl_hospital
                                    $query = "SELECT hospital_id, hospital_name, address FROM tbl_hospital";
                                    $result = mysqli_query($conn, $query);

                                    if ($result) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo '<option value="' . $row['hospital_id'] . '">' . $row['hospital_name'] . '</option>';
                                        }
                                    } else {
                                        echo "Error fetching hospitals: " . mysqli_error($conn);
                                    }

                                    // Close the database connection
                                    mysqli_close($conn);
                                    ?>
                                </select><br>
                            </div>
                      
            <div>
                <select name="status" class="w-full p-2 mt-1 border rounded">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>
            <div>
                <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
            </div>
            <div>
            <label for="picture" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Picture</label>
            <input type="file" name="prof_image" id="prof_image" required="">
            </div>
        </div>
        <div>
            <button type="submit" class="inline-flex items-center justify-center w-full px-4 py-2 font-semibold text-center text-green-900 capitalize transition bg-white border border-transparent rounded-md hover:bg-green-800 active:bg-green-800 focus:outline-none focus:border-green-800 focus:ring focus:ring-green-700 disabled:opacity-25">Add</button>
        </div>
    </form>
</div>
</body>

</html>

<script src="modal.js"></script>