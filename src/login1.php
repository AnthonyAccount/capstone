<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor-Login</title>
    <link rel="stylesheet" href="../dist/output.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Yeseva+One&display=swap" rel="stylesheet">
</head>

<body class="bg-white">
    <nav class="relative flex flex-wrap items-center justify-between w-full py-2 shadow-lg bg-neutral-100 text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 dark:bg-white lg:py-4">
        <div class="flex flex-wrap items-center justify-between w-full px-3">
            <div>
                <a class="flex items-center mx-2 my-1 text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 lg:mb-0 lg:mt-0" href="#">
                    <img src="../dist/img/Logo.png" style="height: 20px" alt="TE Logo" loading="lazy" />
                </a>
            </div>
        </div>
    </nav>
    <nav class="border-gray-200 bg-green-800">
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
                            <input type="text" id="search" class="bg-white border border-green-800 text-gray-900 text-sm rounded-lg focus:ring-teal-800 block w-full pl-10 p-2" placeholder="Search" required="">
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
                    <input type="text" id="search-navbar" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
                </div>
                <ul class="flex flex-col p-4 mt-4 font-medium border border-green-700 rounded-lg md:p-0 bg-green-800 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-green-800 dark:bg-green-800 md:dark:bg-green-800 dark:border-green-800">
                    <a class="mx-2 my-1 font-medium text-white  font-Poppins hover:text-zinc-100 focus:text-white" href="../src/index.php">Home</a>
                    <a class="mx-2 my-1 font-medium text-white hover:text-zinc-100 focus:text-white" href="#">About Us</a>
                    <a class="mx-2 my-1 font-medium text-white hover:text-zinc-100 focus:text-white" href="#">News</a>
                    <a class="mx-2 my-1 font-medium text-white hover:text-zinc-100 focus:text-white" href="#">Contact</a>
                </ul>
            </div>
        </div>
    </nav>
    <div class="flex items-center justify-center py-6 mt-12">
        <div class="overflow-hidden bg-center bg-cover rounded-lg shadow-2xl" style="background-image: url('../dist/img/doctorimage.png'); width: 1400px; height: 650px;">
            <div class="mb-6 ml-4 overflow-hidden bg-white bg-center bg-cover rounded-lg shadow-lg" style="width: 550px; height: 490px; margin-top: 110px; margin-left: 80px;">
                <div class="flex flex-col mb-2 ml-12">
                    <img class="w-32 h-16 " src="../dist/img/loginlogo.svg" alt="Login Icon">
                </div>
                <div class="w-full p-2 mx-auto sm:max-w-md">
                    <h2 class="mb-1 text-3xl font-bold text-left text-green-700 dark:text-green-900" style="font-family: 'Poppins';">LOGIN</h2>
                    <form method="POST" action="" class="space-y-4">
                        <?php if (isset($error_message)) : ?>
                            <p class="text-red-500"><?php echo $error_message; ?></p>
                        <?php endif; ?>
                        <div class="mb-4">
                            <label class="block mb-1 font-medium" for="username">Username</label>
                            <input id="username" type="text" name="username" class="block w-full px-3 py-2 mt-1 border rounded-md shadow-sm border-green-950 focus:ring-opacity-50 disabled:bg-gray-100" placeholder="Enter Username">
                        </div>
                        <div class="mb-4">
                            <label class="block mb-1 font-medium" for="password">Password</label>
                            <input id="password" type="password" name="password" class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:border-gray-800 focus:outline-none focus:ring focus:ring-gray focus:ring-opacity-50 disabled:bg-green-800" placeholder="Enter password">
                        </div>
                        <div class="flex items-center justify-between mt-6 font-poppins">
                            <div class="flex items-center">
                                <input id="remember_me" type="checkbox" class="border border-green-800 shadow-sm focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50">
                                <label for="remember_me" class="block ml-2 text-sm leading-5 text-gray-900" style="font-family: 'Poppins';">Remember me</label>
                            </div>
                            <a href="#" class="font-medium text-green-700 hover:underline dark:text-green-900">Forgot your password?</a>
                        </div>
                        <div class="mt-6">
                            <button type="submit" class="inline-flex items-center justify-center w-full px-4 py-2 font-semibold text-white capitalize transition border border-transparent rounded-md bg-green-950 hover:bg-green-800 active:bg-green-800 focus:outline-none focus:border-green-800 focus:ring focus:ring-green-700 disabled:opacity-25">Login</button>
                        </div>
                        <div class="text-center">
                            <h4 class="inline-block mr-2 font-normal" style="font-family: 'Poppins';">Don't have an Account?</h4> <a href="select_user.php" class="font-medium text-green-700 underline hover:underline dark:text-green-900" style="font-family: 'Poppins';">Sign up</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>