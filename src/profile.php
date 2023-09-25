<?php

include './php/session.php';

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Settings</title>
    <!-- Include Tailwind CSS -->
    <link href="../dist/output.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">

    <div class="bg-white p-8 rounded shadow-md w-full sm:w-96 sm:ml-64">
        <h1 class="text-2xl font-semibold mb-4">Profile Settings</h1>

        <!-- Profile Picture -->
        <div class="mb-4">
            <label for="profile_picture" class="block text-gray-700 font-medium mb-2">Profile Picture</label>
            <div class="flex items-center">
            </div>
        </div>

        <!-- Name -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
            <input type="text" id="name" name="name" value ="<?php echo $userData["name"]; ?>" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" value="John Doe">
        </div>
          <!-- Email -->
          <div class="mb-4">
            <label for="position" class="block text-gray-700 font-medium mb-2">Position</label>
            <input type="position" id="position" value ="<?php echo $userData["position"]; ?>" name="position" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" value="johndoe@example.com">
        </div>


        <!-- Email -->
        <div class="mb-4">
            <label for="username" class="block text-gray-700 font-medium mb-2">Username</label>
            <input type="username" id="username" value ="<?php echo $userData["username"]; ?>" name="username" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" value="johndoe@example.com">
        </div>

        <!-- Password -->
        <div class="mb-6">
            <label for="password" class="block text-gray-700 font-medium mb-2">New Password</label>
            <input type="password" id="password" name="password" value ="<?php echo $userData["password"]; ?>" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" placeholder="Enter new password">
        </div>

        <!-- Save Button -->
        <div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-full w-full">Save Changes</button>
        </div>
    </div>

</body>
</html>

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", () => {
        sidebar.style.top = parseInt(navbar.clientHeight) - 1 + "px";
    });
</script>
