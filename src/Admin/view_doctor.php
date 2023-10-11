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

// Check if the user is logged in
if (!isset($_SESSION["username"])) {
    header("Location: ../index.php");
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
include '../var/sidebar.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Doctor Profile</title>
    <link href="../../src/input.css" rel="stylesheet">
    <link href="../../dist/output.css" rel="stylesheet">
</head>

<body>
    <div class="flex items-center justify-center h-screen">
        <div class="p-4 mt-8 bg-white rounded-lg shadow sm:ml-64">
            <?php if ($canViewUsers) : ?>
                <div class="mt-4 text-right">
                    <a href="userlist.php" class="px-4 py-2 font-semibold text-white rounded bg-cyan-500 hover:bg-cyan-600 showmodal">
                        Doctor List
                    </a>
                </div>
            <?php endif; ?>
            <h1>Doctor Information</h1>
            <br>
            <div class="flex font-sans">
                <div class="relative flex-none w-48">
                    <!-- Display the Base64 image data -->
                    <img src="data:image/jpeg;base64,<?php echo $doctorData['prof_image']; ?>" alt="Doctor's Profile Image" class="absolute inset-0 object-cover w-full h-full" loading="lazy" />

                </div>
                <form class="flex-auto p-6">
                    <div class="flex flex-wrap">
                        <h1 class="flex-auto text-lg font-semibold text-slate-900">
                            Dr. <?php echo $doctorData['first_name']; ?> <?php echo $doctorData['last_name']; ?>
                        </h1>
                        <div class="flex-none w-full mt-2 text-sm font-medium text-slate-700">
                            Specialist: <?php echo $doctorData['specialty']; ?>
                        </div>
                        <div class="flex-none w-full mt-2 text-sm font-medium text-slate-700">
                            Contact No: <?php echo $doctorData['contact_info']; ?>
                        </div>
                        <div class="flex-none w-full mt-2 text-sm font-medium text-slate-700">
                            Email: <?php echo $doctorData['email']; ?>
                        </div>
                    </div>
                    <div class="flex items-baseline pb-6 mt-4 mb-6 border-b border-slate-200">
                        <div class="flex space-x-2 text-sm">
                            <!-- Add any additional content here -->
                        </div>
                    </div>
                    <div class="flex mb-6 space-x-4 text-sm font-medium">
                        <div class="flex flex-auto space-x-4">
                            <button class="px-4 py-2 font-semibold text-white rounded bg-cyan-500 hover:bg-cyan-600" type="submit">
                                Prescriptions
                            </button>
                        </div>
                        <button class="flex items-center justify-center flex-none border rounded-md w-9 h-9 text-slate-300 border-slate-200" type="button" aria-label="Like">
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
    <div class="grid grid-cols-1 gap-4 ml-64 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        <!-- Book/Product Card -->
        <div class="p-4 bg-white rounded-lg shadow">
            <div class="flex justify-center">
                <img src="../dist/images/qr.png" alt="Book 1" class="object-cover w-32 h-48">
            </div>
            <div class="mt-4 text-center">
                <h2 class="text-lg font-semibold text-slate-900">Anthony Algabre</h2>
                <p class="flex-none w-full mt-2 text-sm font-medium text-slate-700"><?php echo $doctorData['date_created']; ?></p>
            </div>
            <div class="flex items-center justify-center">
                <button class="px-4 py-2 mt-2 font-semibold text-white rounded bg-cyan-500 hover:bg-cyan-600" type="submit">
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