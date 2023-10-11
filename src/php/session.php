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

$query = "SELECT * FROM user1 inner join dohstaff on user1.user_id = dohstaff.user_id WHERE username = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();


if ($result->num_rows === 1) {
    // Fetch user data as an associative array
    $userData = $result->fetch_assoc();

    // Now, $userData contains all data for the logged-in user
    // You can access specific fields like $userData["field_name"]
} else {
    // User not found, handle the error or redirect
    header("Location: ../index.php");
    exit();
}
$conn->close();
include '../var/sidebar.php';
