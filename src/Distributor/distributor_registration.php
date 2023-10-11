<!DOCTYPE html>
<html>

<head>
    <title>Distributor Registration</title>
    <link rel="stylesheet" href="../../dist/output.css" />
</head>

<body class="bg-gray-100 ">

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
    <h2 class="mb-4 text-2xl font-semibold">Distributor Registration</h2>
    <form method="POST" action="distributor_register.php" class="p-4 bg-white rounded-lg shadow-md">
        <div class="mb-4">
            <label for="username" class="block font-semibold">Username:</label>
            <input type="text" name="username" required class="w-full px-3 py-2 border rounded-lg">
        </div>

        <div class="mb-4">
            <label for="password" class="block font-semibold">Password:</label>
            <input type="password" name="password" required class="w-full px-3 py-2 border rounded-lg">
        </div>

        <div class="mb-4">
            <label for="distributor_name" class="block font-semibold">Distributor Name:</label>
            <input type="text" name="distributor_name" required class="w-full px-3 py-2 border rounded-lg">
        </div>

        <div class="mb-4">
            <label for="address" class="block font-semibold">Address:</label>
            <input type="text" name="address" required class="w-full px-3 py-2 border rounded-lg">
        </div>

        <div class="mb-4">
            <label for="contact_number" class="block font-semibold">Contact Number:</label>
            <input type="text" name="contact_number" required class="w-full px-3 py-2 border rounded-lg">
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

    <script>
        function addMedicineFields() {
            const medicineFields = document.getElementById('medicineFields');
            const newFields = `
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
    `;
            medicineFields.insertAdjacentHTML('beforeend', newFields);
        }
    </script>
</body>

</html>