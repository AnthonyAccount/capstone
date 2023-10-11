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
    header("Location: ../index.php");
    exit();
}



// Handle search form submission
if (isset($_POST["search"])) {
    // Get the search query from the form
    $searchQuery = $_POST["searchQuery"];

    // Perform a SQL query to search for doctors with matching names
    $query = "SELECT * FROM doctor WHERE (first_name LIKE ? OR last_name LIKE ?) AND status = 'active'";


    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare($query);
    $searchParam = "%" . $searchQuery . "%";
    $stmt->bind_param("ss", $searchParam, $searchParam);
    $stmt->execute();

    // Get the results
    $result = $stmt->get_result();

    // Fetch the matching doctors and store them in the $users array
    $users = [];
    while ($row = $result->fetch_assoc()) {
        // Convert the image data from binary to base64
        $imageData = base64_encode($row["prof_image"]);
        $imageType = 'image/jpeg'; // You may need to determine the image type dynamically

        // Build the data URI for the image
        $imageSrc = "data:{$imageType};base64,{$imageData}";

        // Add the image source to the user data
        $row["image_src"] = $imageSrc;

        $users[] = $row;
    }

    // Close the prepared statement
    $stmt->close();
} else {
    // Pagination settings
    $rows = 10;
    $page = 1; // Default page number if not set

    if (isset($_GET['page-nr'])) {
        $page = (int)$_GET['page-nr'];
    }
    // Calculate the starting row for the query
    $start = ($page - 1) * $rows;

    // Query to fetch limited users for the current page
    $query = "SELECT * FROM doctor inner join user1 on doctor.user_id = user1.user_id where status = 'active' LIMIT $start, $rows";
    $result = $conn->query($query);

    // Fetch users and store in the $users array
    $users = [];

    $query1 = "SELECT * FROM doctor where status = 'active' ";
    $records  = $conn->query($query1);
    $nr_rows = $records->num_rows;
    $pages = ceil($nr_rows / $rows);

    while ($row = $result->fetch_assoc()) {

        $users[] = $row;
    }
}
include '../var/sidebar.php';
?>