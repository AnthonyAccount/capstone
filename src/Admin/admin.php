<?php
include '../php/admin.php';
include '../php/genratepass.php';

?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link href="../../dist/output.css" rel="stylesheet">
    <link href="../../src/input.css" rel="stylesheet">
</head>

<body>

<?php if (!empty($registration_status)) : ?>
        <script>
            alert('<?php echo $registration_status; ?>');
        </script>
    <?php endif; ?>
    <br><br>
    <div class="p-4 mt-8 bg-white rounded-lg shadow sm:ml-64">
        <h2 class="pb-4 text-lg font-semibold text-gray-500">Admin</h2>
        <div class="h-px mb-6 bg-gradient-to-r from-cyan-300 to-cyan-500"></div> <!-- Gradient line -->
        <div class="mt-4 text-right">
            <a href="rolesandpermission.php">
                <button class="px-6 py-3 mb-2 mr-2 text-sm font-bold text-black uppercase transition-all duration-150 ease-linear bg-pink-500 rounded shadow outline-none active:bg-pink-600 hover:shadow-lg focus:outline-none" type="button">
                    Roles and Permissions
                </button>
            </a>
            <?php if ($canCreateadmin) : ?>
                <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="px-4 py-2 font-semibold text-white rounded bg-cyan-500 hover:bg-cyan-600 showmodal">
                    Add Admin
                </button>
            <?php endif; ?>
        </div>
        <table class="w-full text-sm table-auto">
            <thead class=" bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr class="text-sm leading-normal">
                    <th class="px-4 py-2 text-sm font-bold border-b bg-grey-lightest text-grey-light border-grey-light">Photo</th>
                    <th class="px-4 py-2 text-sm font-bold border-b bg-grey-lightest text-grey-light border-grey-light">Name</th>
                    <th class="px-4 py-2 text-sm font-bold border-b bg-grey-lightest text-grey-light border-grey-light">Position</th>
                    <th class="px-4 py-2 text-sm font-bold border-b bg-grey-lightest text-grey-light border-grey-light">Role</th>
                    <th class="px-4 py-2 text-sm font-bold border-b bg-grey-lightest text-grey-light border-grey-light">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr class="text-center hover:bg-grey-lighter">
                        <td class="flex items-center justify-center px-4 py-2 border-b border-grey-light">
                            <img src="https://via.placeholder.com/40" alt="Foto Perfil" class="w-10 h-10 rounded-full">
                        </td>

                        <td class="px-4 py-2 text-sm font-bold border-b bg-grey-lightest text-grey-light border-grey-light"><?php echo $user["name"]; ?><br> <?php echo $user["email"]; ?></td>
                        <td class="px-4 py-2 text-sm border-b bg-grey-lightest text-grey-light border-grey-light"><?php echo $user["position"]; ?></td>
                        <td class="px-4 py-2 text-sm border-b bg-grey-lightest text-grey-light border-grey-light"><?php echo $user["RoleName"]; ?></td>
                        <?php if ($canEditadmin) : ?>
                            <td class="px-4 py-2 border">
                                <a href="edit_user.php?id=<?php echo $user["dohstaffid"]; ?>" class="text-blue-500 hover:underline">Edit</a>
                            </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div>Showing 1 of <?php echo $pages ?></div>
    </div>



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


    <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 z-50 flex items-center justify-center hidden w-full h-screen py-12 bg-black bg-opacity-50 ">
        <div class="text-right">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>
        <?php if (!empty($registration_status)) : ?>
            <p class="mb-4 <?php echo (strpos($registration_status, "successful") !== false) ? 'text-green-500' : 'text-red-500'; ?>">
                <?php echo $registration_status; ?>
            </p>

        <?php endif; ?>

        <form method="POST" action="" class="p-6 mt-10 space-y-4 bg-white rounded md:space-y-6">


            <div class="grid w-auto grid-cols-2 gap-4">
                <div class="">
                    <label for="first_name" class="block mb-2 text-sm font-bold text-gray-700">Name</label>
                    <input type="text" name="name" id="first_name" class="w-full p-2 mt-1 border rounded">
                </div>
                <div class="">
                    <label for="last_name" class="block mb-2 text-sm font-bold text-gray-700">position</label>
                    <input type="text" name="position" id="last_name" class="w-full p-2 mt-1 border rounded">
                </div>
                <div class="block mb-2 text-sm font-bold text-gray-700">

                    <label for="role" class="block mb-2 text-sm font-bold text-gray-700">Role:</label>
                    <select id="role" name="role" class="w-full p-2 mt-1 border rounded">
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
                    <label for="email" class="block mb-2 text-sm font-bold text-gray-700">Username</label>
                    <input type="email" name="email" id="email" class="w-full p-2 mt-1 border rounded">
                </div>
                <div class="">
                    <label for="username" class="block mb-2 text-sm font-bold text-gray-700">Username</label>
                    <input type="text" name="username" id="username" class="w-full p-2 mt-1 border rounded">
                </div>
                <div class="">
                    <label for="password" class="block mb-2 text-sm font-bold text-gray-700">Password</label>
                    <input type="text" name="password" value="<?php echo $password; ?>" id="password" class="w-full p-2 mt-1 border rounded">
                </div>
            </div>
            <div class="flex items-center justify-center">
                <button type="submit" class="w-full px-4 py-2 font-semibold text-green-900 capitalize transition bg-white border border-transparent rounded-md hover:bg-green-800 active:bg-green-800 focus:outline-none focus:border-green-800 focus:ring focus:ring-green-700 disabled:opacity-25">
                    Register Account
                </button>
            </div>

        </form>
    </div>

    </div>


    <script src="script.js">


    </script>
    <script src="modal.js"></script>

</body>

</html>