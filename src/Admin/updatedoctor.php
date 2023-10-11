<?php
require_once("config.php");
session_start();

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
    header("Location: userlist.php");
    exit();
}

$doctorData = $result->fetch_assoc();

$conn->close();
?>


