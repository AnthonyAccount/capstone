<?php
require_once("../config.php");

session_start();

if (isset($_GET["logout"])) {
    if ($_GET["logout"] === "true") {
        // Clear all session variables
        $_SESSION = array();

        // Destroy the session
        session_destroy();
    }
}

// Redirect to login page if the user is not logged in
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}

// Get the logged-in username
$username = $_SESSION["username"];

include '../var/sidebar.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Prescription list</title>
    <link href="../src/input.css" rel="stylesheet">
    <link href="../dist/output.css" rel="stylesheet">
</head>

<body class="mt-20">
    <!-- Book/Product Cards -->
    <div class="grid grid-cols-1 gap-4 ml-64 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        <!-- Book/Product Card -->
        <div class="p-4 bg-white rounded-lg shadow">
            <div class="flex justify-center">
                <img src="../dist/images/qr.png" alt="Book 1" class="object-cover w-32 h-48">
            </div>
            <div class="mt-4">
                <h2 class="text-xl font-bold">Book Title</h2>
                <p class="text-gray-600">Price: $19.99</p>
            </div>
            <div class="flex justify-between mt-6">
                <button class="px-4 py-2 font-bold text-white bg-black hover:bg-green-400 rounded-2xl focus:outline-none">
                    Add to Cart
                </button>
                <button class="px-4 py-2 font-bold text-white bg-black hover:bg-green-400 rounded-2xl focus:outline-none"">
                        Buy Now
                    </button>
                </div>
            </div>
            <!-- 2 -->
            <div class=" p-4 bg-white rounded-lg shadow ">
                    <div class=" flex justify-center ">
                    <img src=" C:\Users\giyuz\Downloads\TaskPerf-master\TaskPerf-master\img\1books.jpg" alt="Book 1" class="object-cover w-32 h-48">
            </div>
            <div class="mt-4">
                <h2 class="text-xl font-bold">Book Title</h2>
                <p class="text-gray-600">Price: $19.99</p>
            </div>
            <div class="flex justify-between mt-6">
                <button class="px-4 py-2 font-bold text-white bg-purple-600 rounded-full hover:bg-purple-700 focus:outline-none">
                    Add to Cart
                </button>
                <button class="px-4 py-2 font-bold text-white bg-blue-600 rounded-full hover:bg-blue-700 focus:outline-none">
                    Buy Now
                </button>
            </div>
        </div>
        <!-- 3 -->
        <div class="p-4 bg-white rounded-lg shadow">
            <div class="flex justify-center">
                <img src="C:\Users\giyuz\Downloads\TaskPerf-master\TaskPerf-master\img\1books.jpg" alt="Book 1" class="object-cover w-32 h-48">
            </div>
            <div class="mt-4">
                <h2 class="text-xl font-bold">Book Title</h2>
                <p class="text-gray-600">Price: $19.99</p>
            </div>
            <div class="flex justify-between mt-6">
                <button class="px-4 py-2 font-bold text-white bg-purple-600 rounded-full hover:bg-purple-700 focus:outline-none">
                    Add to Cart
                </button>
                <button class="px-4 py-2 font-bold text-white bg-blue-600 rounded-full hover:bg-blue-700 focus:outline-none">
                    Buy Now
                </button>
            </div>
        </div>
        <!-- 4 -->
        <div class="p-4 bg-white rounded-lg shadow">
            <div class="flex justify-center">
                <img src="C:\Users\giyuz\Downloads\TaskPerf-master\TaskPerf-master\img\1books.jpg" alt="Book 1" class="object-cover w-32 h-48">
            </div>
            <div class="mt-4">
                <h2 class="text-xl font-bold">Book Title</h2>
                <p class="text-gray-600">Price: $19.99</p>
            </div>
            <div class="flex justify-between mt-6">
                <button class="px-4 py-2 font-bold text-white bg-purple-600 rounded-full hover:bg-purple-700 focus:outline-none">
                    Add to Cart
                </button>
                <button class="px-4 py-2 font-bold text-white bg-blue-600 rounded-full hover:bg-blue-700 focus:outline-none">
                    Buy Now
                </button>
            </div>
        </div>
        <!-- 5 -->
        <div class="p-4 bg-white rounded-lg shadow">
            <div class="flex justify-center">
                <img src="C:\Users\giyuz\Downloads\TaskPerf-master\TaskPerf-master\img\1books.jpg" alt="Book 1" class="object-cover w-32 h-48">
            </div>
            <div class="mt-4">
                <h2 class="text-xl font-bold">Book Title</h2>
                <p class="text-gray-600">Price: $19.99</p>
            </div>
            <div class="flex justify-between mt-6">
                <button class="px-4 py-2 font-bold text-white bg-purple-600 rounded-full hover:bg-purple-700 focus:outline-none">
                    Add to Cart
                </button>
                <button class="px-4 py-2 font-bold text-white bg-blue-600 rounded-full hover:bg-blue-700 focus:outline-none">
                    Buy Now
                </button>
            </div>
        </div>
        <!-- 6 -->
        <div class="p-4 bg-white rounded-lg shadow">
            <div class="flex justify-center">
                <img src="C:\Users\giyuz\Downloads\TaskPerf-master\TaskPerf-master\img\1books.jpg" alt="Book 1" class="object-cover w-32 h-48">
            </div>
            <div class="mt-4">
                <h2 class="text-xl font-bold">Book Title</h2>
                <p class="text-gray-600">Price: $19.99</p>
            </div>
            <div class="flex justify-between mt-6">
                <button class="px-4 py-2 font-bold text-white bg-purple-600 rounded-full hover:bg-purple-700 focus:outline-none">
                    Add to Cart
                </button>
                <button class="px-4 py-2 font-bold text-white bg-blue-600 rounded-full hover:bg-blue-700 focus:outline-none">
                    Buy Now
                </button>
            </div>
        </div>
        <!-- 7 -->
        <div class="p-4 bg-white rounded-lg shadow">
            <div class="flex justify-center">
                <img src="C:\Users\giyuz\Downloads\TaskPerf-master\TaskPerf-master\img\1books.jpg" alt="Book 1" class="object-cover w-32 h-48">
            </div>
            <div class="mt-4">
                <h2 class="text-xl font-bold">Book Title</h2>
                <p class="text-gray-600">Price: $19.99</p>
            </div>
            <div class="flex justify-between mt-6">
                <button class="px-4 py-2 font-bold text-white bg-purple-600 rounded-full hover:bg-purple-700 focus:outline-none">
                    Add to Cart
                </button>
                <button class="px-4 py-2 font-bold text-white bg-blue-600 rounded-full hover:bg-blue-700 focus:outline-none">
                    Buy Now
                </button>
            </div>
        </div>

        <div class="p-4 bg-white rounded-lg shadow">
            <div class="flex justify-center">
                <img src="C:\Users\giyuz\Downloads\TaskPerf-master\TaskPerf-master\img\1books.jpg" alt="Book 1" class="object-cover w-32 h-48">
            </div>
            <div class="mt-4">
                <h2 class="text-xl font-bold">Book Title</h2>
                <p class="text-gray-600">Price: $19.99</p>
            </div>
            <div class="flex justify-between mt-6">
                <button class="px-4 py-2 font-bold text-white bg-purple-600 rounded-full hover:bg-purple-700 focus:outline-none">
                    Add to Cart
                </button>
                <button class="px-4 py-2 font-bold text-white bg-blue-600 rounded-full hover:bg-blue-700 focus:outline-none">
                    Buy Now
                </button>
            </div>
        </div>



    </div>
    </div>


    <script src="C:\Users\giyuz\Downloads\TaskPerf-master\TaskPerf-master\src\script.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", () => {
        sidebar.style.top = parseInt(navbar.clientHeight) - 1 + "px";
    });
</script>