<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../dist/output.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Yeseva+One&display=swap" rel="stylesheet">
    <title>Patient Registration</title>
</head>

<body>
    <?php
    include '../layouts/sidebar.php';
    ?>


    <section>
        <div class="pt-6 pl-20 mx-auto ml-16">
            <div class="max-w-screen-xl px-4 mx-auto max-h-screen-xl lg:px-12">
                <div class="relative pl-12 mt-2 ml-16 overflow-hidden bg-white rounded-lg shadow-lg sm:rounded-lg">
                    <div class="flex mt-6 mb-2">
                        <img class="w-32 h-16 ml-6" src="../../dist/img/loginlogo.svg" alt="Login Icon">
                    </div>
                    <div class="">
                        <h2 class="mt-6 mb-1 ml-6 text-3xl font-bold text-left text-green-700 dark:text-green-900" style="font-family: 'Poppins';">CREATE PATIENT ACCOUNT</h2>
                    </div>
                    <form method="POST" action="add_patient.php" class="mt-6 ml-6 mr-6 min-w-max">

                        <div class="flex justify-center mt-2 mb-3">
                            <div class="w-full ml-24 mr-16">
                                <label class="mb-1 font-medium" for="first_name">First Name</label>
                                <input id="first_name" type="text" name="first_name" autocomplete="given-name" class="block w-full p-2 pl-10 text-sm text-gray-500 bg-white border border-green-800 rounded-lg focus:ring-teal-800" placeholder="Enter First Name">
                            </div>
                        </div>

                        <div class="flex justify-center mt-3 mb-3">
                            <div class="w-full ml-24 mr-16">
                                <label class="block mb-1 font-medium" for="last_name">Last Name</label>
                                <input id="last_name" type="text" name="last_name" class="block w-full p-2 pl-10 text-sm text-gray-500 bg-white border border-green-800 rounded-lg focus:ring-teal-800" placeholder="Enter Last Name">
                            </div>
                        </div>

                        <div class="flex justify-center mb-3">
                            <div class="w-full ml-24 mr-16">
                                <label class="block mb-1 font-medium" for="address">Address</label>
                                <input id="address" type="text" name="address" class="block w-full p-2 pl-10 text-sm text-gray-500 bg-white border border-green-800 rounded-lg focus:ring-teal-800" placeholder="Enter Address">
                            </div>
                        </div>

                        <div class="flex justify-center mb-3">
                            <div class="w-full ml-24 mr-16">
                                <label class="block mb-1 font-medium" for="contact_number">Contact Number</label>
                                <input id="contact_number" type="text" name="contact_number" class="block w-full p-2 pl-10 text-sm text-gray-500 bg-white border border-green-800 rounded-lg focus:ring-teal-800" placeholder="Enter Contact Number">
                            </div>
                        </div>

                        <div class="flex justify-center mb-3">
                            <div class="w-full ml-24 mr-16">
                                <label class="block mb-1 font-medium" for="username">Username</label>
                                <input id="username" type="text" name="username" class="block w-full p-2 pl-10 text-sm text-gray-500 bg-white border border-green-800 rounded-lg focus:ring-teal-800" placeholder="Enter Username">
                            </div>
                        </div>

                        <div class="flex justify-center mb-3">
                            <div class="w-full ml-24 mr-16">
                                <label class="block mb-1 font-medium" for="password">Password</label>
                                <input id="password" type="password" name="password" class="block w-full p-2 pl-10 text-sm text-gray-500 bg-white border border-green-800 rounded-lg focus:ring-teal-800" placeholder="Enter Password">
                            </div>
                        </div>

                        <div class="flex justify-center mb-3">
                            <div class="mt-2 mb-6 w-96">
                                <input class="inline-flex items-center justify-center w-full px-4 py-2 mt-6 font-semibold text-white capitalize transition border border-transparent rounded-md bg-green-950 hover:bg-green-800 active:bg-green-800 focus:outline-none focus:border-green-800 focus:ring focus:ring-green-700 disabled:opacity-25" type="submit" name="add_patient" value="Register">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>