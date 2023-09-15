<?php

require_once("registration1.php");
session_start();
$userRole = $_SESSION['RoleName'];
$username = $_SESSION['username'];
// 'Admin' => ['create', 'doctoredit', 'distributoredit', 'admin', 'users', 'prescription'],
// Check specific permissions
$canCreatedoctor = checkPermission('createdoctor');
$canEditdoctor = checkPermission('doctoredit');
$canViewdistributor = checkPermission('distributoredit');

if (isset($_GET["logout"])) {
    if ($_GET["logout"] === "true") {
        // Clear all session variables
        $_SESSION = array();

        // Destroy the session
        session_destroy();
    }
   }

// Redirect to login page if user is not logged in
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}
// Pagination settings
$rows = 5;
$page = 1; // Default page number if not set

if(isset($_GET['page-nr'])){
    $page = (int)$_GET['page-nr'];
}

// Calculate the starting row for the query
$start = ($page - 1) * $rows;

// Query to fetch limited users for the current page
$query = "SELECT * FROM doctor where status = 'active' LIMIT $start, $rows";
$result = $conn->query($query);

// ... (rest of the code)

$users = [];

$query1 = "SELECT * FROM doctor where status = 'active' ";
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
$conn->close();
?>