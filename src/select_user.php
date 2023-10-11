<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../dist/output.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Yeseva+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/6.5.95/css/materialdesignicons.min.css">


</head>


<body>
    <nav class="relative flex flex-wrap items-center justify-between w-full py-2 shadow-lg bg-neutral-100 text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 dark:bg-white lg:py-4">
        <div class="flex flex-wrap items-center justify-between w-full px-3">
            <div>
                <a class="flex items-center mx-2 my-1 text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 lg:mb-0 lg:mt-0" href="#">
                    <img src="../dist/img/Logo.png" style="height: 20px" alt="TE Logo" loading="lazy" />
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
                    <a class="mx-2 my-1 font-medium text-white font-Poppins hover:text-zinc-100 focus:text-white" href="../src/index.php">Home</a>
                    <a class="mx-2 my-1 font-medium text-white hover:text-zinc-100 focus:text-white" href="#">About Us</a>
                    <a class="mx-2 my-1 font-medium text-white hover:text-zinc-100 focus:text-white" href="#">News</a>
                    <a class="mx-2 my-1 font-medium text-white hover:text-zinc-100 focus:text-white" href="#">Contact</a>
                </ul>
            </div>
        </div>
    </nav>
    <!-- component -->
    <div class="flex items-center justify-center h-screen bg-white">
        <div class="relative bg-center bg-cover rounded-lg shadow-2xl" style="background-image: url('../dist/img/doctorimage.png'); width: 1400px; height: 650px;">
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="flex flex-col items-center p-8 bg-white rounded-lg shadow-xl">
                    <div class="mb-4">
                        <h1 class="font-semibold text-black">USERS</h1>
                    </div>
                    <div class="grid grid-cols-3 gap-10">
                        <div class="flex flex-col items-center justify-center w-48 p-4 space-y-4 bg-gray-100 rounded-lg">
                            <img class="w-24 h-24 border-gray-100 rounded-full shadow-sm" src="../dist/img/doc.jpg" alt="user image" />
                            <h1 class="font-semibold text-black">Doctor</h1>
                            <a href="../src/Doctor/registration.php"><button class="px-8 py-1 font-semibold text-white bg-green-800 border-2 border-green-800 rounded-full">Register</button></a>

                        </div>
                        <div class="flex flex-col items-center justify-center w-48 p-4 space-y-4 bg-gray-100 rounded-lg">
                            <img class="w-24 h-24 border-gray-100 rounded-full shadow-sm" src="../dist/img/pharmacy.jpg" alt="user image" />
                            <h1 class="font-semibold text-black">Pharmacy</h1>
                            <button class="px-8 py-1 font-semibold bg-green-800 border-2 border-green-800 rounded-full text-gray-50">Register</button>
                        </div>
                        <div class="flex flex-col items-center justify-center w-48 p-4 space-y-4 bg-gray-100 rounded-lg">
                            <img class="w-24 h-24 border-gray-100 rounded-full shadow-sm" src="../dist/img/dist.jpg" alt="user image" />
                            <h1 class="font-semibold text-black">Distributor</h1>
                            <a href="../src/Distributor/distributor_registration.php"><button class="px-8 py-1 font-semibold text-white bg-green-800 border-2 border-green-800 rounded-full">Register</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>


</html>