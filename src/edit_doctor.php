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
    
    <title>user list</title>
    <link href="../src/input.css" rel="stylesheet">
    <link href="../dist/output.css" rel="stylesheet">
</head>
<body>

<div class="flex justify-center items-center h-screen">
    <div class="mt-8 p-4 sm:ml-64 bg-white shadow rounded-lg">
    <div class="text-right mt-4">
    <a href="userlist.php" class=" bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded showmodal">
                        Doctor List
</a>
        </div>
        <h1>Doctor information</h1>
        <br>
        <div class="flex font-sans">
            <div class="flex-none w-48 relative">
                <!-- Replace the image source with the correct path -->
                <img src="../dist/images/doc.jpg" alt="" class="absolute inset-0 w-full h-full object-cover" loading="lazy" />
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
                <div class="flex space-x-4 mb-6 text-sm font-medium">
                    <div class="flex-auto flex space-x-4">
                        <button class="bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded" type="submit">
                            Prescriptions
                        </button>
                    </div>
                    <button class="flex-none flex items-center justify-center w-9 h-9 rounded-md text-slate-300 border border-slate-200" type="button" aria-label="Like">
                        <svg width="20" height="20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
 <!-- Book/Product Cards -->
 <div class=" ml-64 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <!-- Book/Product Card -->
            <div class="bg-white p-4 shadow rounded-lg">
                <div class="flex justify-center">
                    <img src="../dist/images/qr.png" alt="Book 1"
                        class="h-48 w-32 object-cover">
                </div>
                <div class="mt-4 text-center">
                    <h2 class="text-lg font-semibold text-slate-900">Anthony Algabre</h2>
                    <p class="w-full flex-none text-sm font-medium text-slate-700 mt-2"><?php echo $doctorData['date_created']; ?></p>
                </div>
                <div class="flex justify-center items-center">
    <button class="bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded mt-2" type="submit">
        View Prescriptions
    </button>
</div>

            </div>
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