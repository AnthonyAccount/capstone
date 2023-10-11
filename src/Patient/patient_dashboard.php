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
    header("Location: ../index.php");
    exit();
}

// Get the logged-in username
$username = $_SESSION["username"];
// Retrieve prescriptions for the logged-in patient from the database
$sql_prescriptions = "SELECT * From user1  inner join tbl_patient on user1.user_id = tbl_patient.user_id 
inner join tbl_prescription on tbl_patient.patient_id = tbl_prescription.patient_id where user1.username = '$username'";
$result = $conn->query($sql_prescriptions);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Account</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="container p-4 mx-auto">
        <h1 class="mb-4 text-2xl font-bold">Patient Account</h1>
        <h2 class="text-xl font-semibold">Prescriptions:</h2>
        <?php
        if ($result->num_rows > 0) {
            while ($prescription = $result->fetch_assoc()) {
                // Display prescription details
                echo "<p><strong>Prescription ID:</strong> " . $prescription["prescription_id"] . "</p>";
                echo "<p><strong>Date:</strong> " . $prescription["date"] . "</p>";
                // Add more prescription details here as needed
                // You can also provide links to view each prescription in detail
                echo "<a href='../Doctor/view_prescription.php?prescription_id=" . $prescription["prescription_id"] . "'>View Prescription</a><br><br>";
            }
        } else {
            echo "<p class='text-red-500'>No prescriptions found for this patient.</p>";
        }
        ?>
    </div>
</body>

</html>