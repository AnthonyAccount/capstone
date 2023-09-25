
<?php
require_once("config.php");
session_start();

if (isset($_GET["logout"])) {
    if ($_GET["logout"] === "true") {
        // Clear all session variables
        $_SESSION = array();

        // Destroy the session
        session_destroy();
    }
}

// Check if the user is logged in
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}

// Check if the 'id' parameter is set in the URL
if (!isset($_GET["id"])) {
    exit();
}

$doctorID = $_GET["id"];

// Query the database to retrieve the doctor's information based on $doctorID
$query = "SELECT * FROM doctor INNER JOIN user1 ON doctor.user_id = user1.user_id WHERE doctor_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $doctorID);
$stmt->execute();
$result = $stmt->get_result();

// Check if a doctor with the given ID exists
if ($result->num_rows === 0) {
    header("Location: doctorlist.php");
    exit();
}

$doctorData = $result->fetch_assoc();

$conn->close();
include './var/navsidebar.php'
?>

<!DOCTYPE html>
<html>
<head>
    <title>Doctor Profile</title>
    <link href="../src/input.css" rel="stylesheet">
    <link href="../dist/output.css" rel="stylesheet">
</head>
<body>
    <br> <br> <br>  <br><br><br>
<div class="flex justify-center items-center h-screen">
    <div class="mt-8 p-4 sm:ml-64 bg-white shadow rounded-lg">
        <div class="text-right mt-4">
            <a href="userlist.php" class="bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded showmodal">
                Doctor List
            </a>
        </div>
        <h1>Doctor Information</h1>
        <br>
        <div class="flex font-sans">
            <div class="flex-none w-48 relative justify-center">
                <!-- Display the Base64 image data -->
                <img src="data:image/jpeg;base64,<?php echo base64_encode($doctorData['prof_image']); ?>" alt="Doctor's Profile Image" class="rounded-full h-50 w-50" loading="lazy" />
            </div>
            <form class="flex-auto p-6">
                <div class="flex flex-wrap">
                    <h1 class="flex-auto text-lg font-semibold text-slate-900">
                        Dr. <?php echo $doctorData['first_name']; ?> <?php echo $doctorData['last_name']; ?>
                    </h1>
                    <div class="w-full flex-none text-sm font-medium text-slate-700 mt-2">
                        Specialist: <?php echo $doctorData['specialty']; ?>
                    </div>
                    <div class="w-full flex-none text-sm font-medium text-slate-700 mt-2">
                        Contact No: <?php echo $doctorData['contact_info']; ?>
                    </div>
                    <div class="w-full flex-none text-sm font-medium text-slate-700 mt-2">
                        Email: <?php echo $doctorData['email']; ?>
                    </div>
                </div>
                <div class="flex items-baseline mt-4 mb-6 pb-6 border-b border-slate-200">
                    <div class="space-x-2 flex text-sm">
                        <!-- Add any additional content here -->
                    </div>
                </div>
</div>
               
    <div class="grid grid-cols-2 gap-4 w-auto">
                                        <div>
                                            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                                            <input type="text" value="<?php echo $doctorData['first_name']; ?>" name="first_name" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                                        </div>                                 
                                        <div>
                                            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                                            <input type="text" value="<?php echo $doctorData['last_name']; ?>" name="last_name" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required="">
                                        </div>
                                        <div>
                                            <label for="specialty" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Specialist</label>
                                            <input type="text" value="<?php echo $doctorData['specialty']; ?>" name="specialty" id="specialty" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required="">
                                        </div>
                                        <div>
                                            <label for="contact_info" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contact</label>
                                            <input type="text" value="<?php echo $doctorData['contact_info']; ?>" name="contact_info" id="contact_info" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required="">
                                        </div>
                                        <div>
                                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                            <input type="email" value="<?php echo $doctorData['email']; ?>" name="email" id="email"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                                        </div>
                                        <div>
                                            <label for="region" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Region</label>
                                            <input type="text" value="<?php echo $doctorData['region']; ?>" name="region" id="region"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                                        </div>
                                        <div>
                                            <select name="status" value="<?php echo $doctorData['status']; ?>" class="mt-1 p-2 w-full border rounded">
                                                <option  value="<?php echo $doctorData['status']; ?>"><?php echo $doctorData['status']; ?></option>
                                                <option value="inactive">Inactive</option>
                                                <option value="active">Active</option> <!-- Changed to lowercase "active" -->
                                            </select>  </div>
                                        <div>
                                            <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                                            <input type="text"  value="<?php echo $doctorData['username']; ?>" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                                        </div>
                                        <div>
                                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                                        </div>
                                        <div>
                                            <label for="picture" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Picture</label>
                                            <input type="file"  name="prof_image" id="prof_image" required="">
                                        </div>
                                    </div>   
                                    <div class="mt-6">
                      <button type="submit" class="w-full text-center inline-flex items-center justify-center px-4 py-2 bg-white border border-transparent rounded-md font-semibold capitalize text-green-900 hover:bg-green-800 active:bg-green-800 focus:outline-none focus:border-green-800 focus:ring focus:ring-green-700 disabled:opacity-25 transition">Update Account</button>
                    </div>
                               
             
            </form>
        </div>
    </div>
</div>
                    
</body>
</html>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", () => {
        

        sidebar.style.top = parseInt(navbar.clientHeight) - 1 + "px";
    });
  </script>