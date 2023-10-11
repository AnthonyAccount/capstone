<?php

include '../php/session.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Settings</title>
    <!-- Include Tailwind CSS -->
    <link href="../../dist/output.css" rel="stylesheet">
</head>

<body class="flex items-center justify-center h-screen bg-gray-100">

    <div class="w-full p-8 bg-white rounded shadow-md sm:w-96 sm:ml-64">
        <h1 class="mb-4 text-2xl font-semibold">Profile Settings</h1>

        <!-- Profile Picture -->
        <div class="mb-4">
            <label for="profile_picture" class="block mb-2 font-medium text-gray-700">Profile Picture</label>
            <div class="flex items-center">
            </div>
        </div>

        <!-- Name -->
        <div class="mb-4">
            <label for="name" class="block mb-2 font-medium text-gray-700">Name</label>
            <input type="text" id="name" name="name" value="<?php echo $userData["name"]; ?>" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" value="John Doe">
        </div>
        <!-- Email -->
        <div class="mb-4">
            <label for="position" class="block mb-2 font-medium text-gray-700">Position</label>
            <input type="position" id="position" value="<?php echo $userData["position"]; ?>" name="position" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" value="johndoe@example.com">
        </div>


        <!-- Email -->
        <div class="mb-4">
            <label for="username" class="block mb-2 font-medium text-gray-700">Username</label>
            <input type="username" id="username" value="<?php echo $userData["username"]; ?>" name="username" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" value="johndoe@example.com">
        </div>

        <!-- Password -->
        <div class="mb-6">
            <label for="password" class="block mb-2 font-medium text-gray-700">New Password</label>
            <input type="password" id="password" name="password" value="<?php echo $userData["password"]; ?>" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="Enter new password">
        </div>

        <!-- Save Button -->
        <div>
            <button type="submit" class="w-full px-4 py-2 font-semibold text-white bg-blue-500 rounded-full hover:bg-blue-600">Save Changes</button>
        </div>
    </div>

</body>

</html>

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", () => {
        sidebar.style.top = parseInt(navbar.clientHeight) - 1 + "px";
    });
</script>