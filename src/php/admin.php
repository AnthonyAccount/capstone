<?php
require_once("../config.php");
require_once("../AuthController.php");
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

$registration_status = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Extract user and doctor info from POST data
    $username = $_POST["username"];
    $password = $_POST["password"];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $name = $_POST["name"];
    $position = $_POST["position"];
    $role = $_POST["role"];
    $email = $_POST["email"];


    // Perform SQL query to insert user into User table
    $userInsertQuery = "INSERT INTO user1 (username, password, RoleID) VALUES ('$username', '$hashedPassword', '$role')";
    if ($conn->query($userInsertQuery) === TRUE) {
        // Get the inserted user_id
        $user_id = $conn->insert_id;

        // Perform SQL query to insert doctor into Doctor table
        $adminInsertQuery = "INSERT INTO dohstaff (user_id, name, position, email) 
                              VALUES ('$user_id', '$name', '$position', '$email')";
        if ($conn->query($adminInsertQuery) === TRUE) {
            echo "<script>alert('admin registered successfully.');</script>";
        } else {
            echo "Error: " . $adminInsertQuery . "<br>" . $conn->error;
        }
    } else {
        echo "Error: " . $userInsertQuery . "<br>" . $conn->error;
    }
}
// Pagination settings
$rows = 5;
$page = 1; // Default page number if not set

if (isset($_GET['page-nr'])) {
    $page = (int)$_GET['page-nr'];
}

// Calculate the starting row for the query
$start = ($page - 1) * $rows;

// Query to fetch limited users for the current page
$query = "SELECT * FROM dohstaff INNER JOIN user1 ON dohstaff.user_id = user1.user_id inner join role on user1.RoleID = role.RoleID LIMIT $start, $rows";
$result = $conn->query($query);

// ... (rest of the code)

$users = [];

$query1 = "SELECT * FROM dohstaff INNER JOIN user1 ON dohstaff.user_id = user1.user_id inner join role on user1.RoleID = role.RoleID  ";
$records  = $conn->query($query1);
$nr_rows = $records->num_rows;
$pages = ceil($nr_rows / $rows);

if (isset($_GET['page-nr'])) {
    $page = $_GET['page-nr'] - 1;
    $start = $page * $rows;
}
// Fetch users and store in the $users array
while ($row = $result->fetch_assoc()) {
    $users[] = $row;
}
$conn->close();
include '../var/sidebar.php';
