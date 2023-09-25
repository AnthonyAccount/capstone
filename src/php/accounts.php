<?php
require_once("./config.php");

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

$rows = 10;
$page = 1;

if(isset($_GET['page-nr'])){
    $page = (int)$_GET['page-nr'];
}

// Calculate the starting row for the query
$start = ($page - 1) * $rows;

// Query to fetch limited users for the current page
$query = "SELECT * FROM doctor where status = 'inactive' LIMIT $start, $rows";
$result = $conn->query($query);

$users = [];

$query1 = "SELECT * FROM doctor where status = 'inactive'";
$records  = $conn->query($query1);
$nr_rows = $records->num_rows;
$pages = ceil($nr_rows / $rows);

if(isset($_GET['page-nr'])){
    $page = $_GET['page-nr'] - 1;
    $start = $page * $rows; 
}

// Fetch users and store in the $users array
while ($row = $result->fetch_assoc()) {
    $users[] = $row;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["verify_account"])) {
    $id = $_POST["doctor_id"];
    $status = 'active';

    // SQL update query to update only the "status" column
    $sql = "UPDATE doctor SET status = ? WHERE doctor_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $status, $id);

    if ($stmt->execute()) {
        echo "Status updated successfully";
    } else {
        echo "Error updating status: " . $stmt->error;
    }

    $stmt->close();
}

include './var/navsidebar.php';
?>