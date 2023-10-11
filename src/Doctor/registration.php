<!DOCTYPE html>
<html>

<head>
    <title>User Registration</title>
    <link href="../../dist/output.css" rel="stylesheet">
</head>

<body class="bg-white ">
    <nav class="relative flex flex-wrap items-center justify-between w-full py-2 shadow-lg bg-neutral-100 text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 dark:bg-white lg:py-4">
        <div class="flex flex-wrap items-center justify-between w-full px-3">
            <div>
                <a class="flex items-center mx-2 my-1 text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 lg:mb-0 lg:mt-0" href="#">
                    <img src="../../dist/img/Logo.png" style="height: 20px" alt="TE Logo" loading="lazy" />
                </a>
            </div>
        </div>
    </nav>
    <nav class="bg-green-800 border-gray-200">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
            <div class="flex md:order-2">
                <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-white focus:outline-none focus:ring-2 focus:ring-white dark:text-white dark:hover:bg-white dark:focus:ring-white" aria-controls="navbar-search" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <form class="flex items-center">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-96">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input type="text" id="search" class="block w-full p-2 pl-10 text-sm text-gray-900 bg-white border border-green-800 rounded-lg focus:ring-teal-800" placeholder="Search" required="">
                    </div>

                </form>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
                <div class="relative mt-3 md:hidden">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="search-navbar" class="block w-full p-2 pl-10 text-sm text-gray-900 bg-white border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
                </div>
                <ul class="flex flex-col p-4 mt-4 font-medium bg-green-800 border border-green-700 rounded-lg md:p-0 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-green-800 dark:bg-green-800 md:dark:bg-green-800 dark:border-green-800">
                    <a class="mx-2 my-1 font-medium text-white font-Poppins hover:text-zinc-100 focus:text-white" href="../../src/index.php">Home</a>
                    <a class="mx-2 my-1 font-medium text-white hover:text-zinc-100 focus:text-white" href="#">About Us</a>
                    <a class="mx-2 my-1 font-medium text-white hover:text-zinc-100 focus:text-white" href="#">News</a>
                    <a class="mx-2 my-1 font-medium text-white hover:text-zinc-100 focus:text-white" href="#">Contact</a>
                </ul>
            </div>
        </div>
    </nav>


    <div class="flex items-center justify-center py-6 mt-12">
        <div class="overflow-hidden bg-center bg-cover rounded-lg shadow-2xl" style="background-image: url('../dist/img/doctorimage.png'); width: 1400px; height: 650px;">
            <div class="flex items-center justify-center h-full">
                <div class="overflow-hidden bg-white bg-center bg-cover rounded-lg shadow-lg" style="width: 840px; height: 590px; ">
                    <div class="flex flex-col mt-10 ml-12">
                        <img class="w-32 h-16 " src="../../dist/img/loginlogo.svg" alt="Login Icon">
                        <div class="w-full pt-2 mx-auto mt-2 nline-block sm:max-w-md mr-96">
                            <h2 class="mb-1 text-3xl font-bold text-left text-green-700 dark:text-green-900" style="font-family: 'Poppins';">REGISTER</h2>
                        </div>
                    </div>
                    <br>
                    <form method="POST" action="register.php" class="mx-20 space-y-4">
                        <?php if (isset($error_message)) : ?>
                            <p class="text-red-500"><?php echo $error_message; ?></p>
                        <?php endif; ?>
                        
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="relative z-0 w-full mb-2 group">
                                <input type="text" name="first_name" id="first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-green-900 dark:focus:border-green-900 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                <label for="first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First Name</label>
                            </div>
                            <div class="relative z-0 w-full mb-2 group">
                                <input type="text" name="last_name" id="last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-green-900 dark:focus:border-green-900 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                <label for="last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last Name</label>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="relative z-0 w-full mb-2 group">
                                <input type="text" name="address" id="address" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-green-900 dark:focus:border-green-900 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                <label for="address" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Address</label>
                            </div>
                            <div class="relative z-0 w-full mb-2 group">
                                <input type="text" name="contact_info" id="contact_info" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-green-900 dark:focus:border-green-900 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                <label for="contact_info" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Contact Number </label>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="relative z-0 w-full mb-2 group">
                                <input type="email" name="email" id="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-green-900 dark:focus:border-green-900 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                <label for="email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Username</label>
                            </div>
                            <div class="relative z-0 w-full mb-2 group">
                                <input type="text" name="specialty" id="specialty" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-green-900 dark:focus:border-green-900 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                <label for="specialty" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Specialization</label>
                            </div>
                            
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6">

                            <div class="relative z-0 w-full mb-2 group">
                                <select name="hospital_id" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-green-900 dark:focus:border-green-900 focus:outline-none focus:ring-0 focus:border-blue-600 peer" required>
                                    <option value="" disabled selected>Select Hospital</option>
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
            <label for="picture" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Picture</label>
            <input type="file" name="prof_image" id="prof_image" required="">
            </div>
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="relative z-0 w-full mb-2 group">
                                <input type="text" name="username" id="username" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-green-900 dark:focus:border-green-900 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                <label for="username" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Username</label>
                            </div>
                            <div class="relative z-0 w-full mb-2 group">
                                <input type="password" name="password" id="password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-green-900 dark:focus:border-green-900 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                <label for="password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                            </div>
                        </div>
                        <div class="mt-6">

                            <input class="inline-flex items-center justify-center w-full px-4 py-2 font-semibold text-white capitalize transition border border-transparent rounded-md bg-green-950 hover:bg-green-800 active:bg-green-800 focus:outline-none focus:border-green-800 focus:ring focus:ring-green-700 disabled:opacity-25" type="submit" name="register" value="Register">

                        </div>

                        <div class="text-center">
                            <h4 class="inline-block mr-2 font-normal" style="font-family: 'Poppins';">Already have an account?</h4> <a href="../login1.php" class="font-medium text-green-700 underline hover:underline dark:text-green-900" style="font-family: 'Poppins';">Sign up</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>