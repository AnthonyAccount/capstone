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

$rows = 3;
$page = 1;

if (isset($_GET['page-nr'])) {
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

if (isset($_GET['page-nr'])) {
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

include '../var/sidebar.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link href="../dist/output.css" rel="stylesheet">
    <link href="../src/input.css" rel="stylesheet">
</head>

<body>

    <br><br>
    <div class="flex flex-wrap items-center justify-center w-full px-3 py-8">
        <h2 class="mb-4 text-2xl font-semibold">Welcome, <?php echo $username; ?>!</h2>
    </div>


    <div class="flex flex-wrap mt-8 space-x-0 space-y-2 ml-80 md:space-x-4 md:space-y-0">

        <div class="flex-1 p-4 bg-white rounded-lg shadow md:w-1/2">
            <h2 class="pb-1 text-lg font-semibold text-gray-500">Pending Accounts</h2>
            <div class="my-1"></div>
            <div class="h-px mb-6 bg-gradient-to-r from-cyan-300 to-cyan-500"></div> <!-- Línea con gradiente -->
            <div class="chart-container" style="position: relative; height:240px; width:100%">
                <form method="POST" action="" class="space-y-4 bg-white rounded md:space-y-6">

                    <table class="w-full text-sm table-auto">
                        <thead class=" bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user) : ?>
                                <tr class="text-center hover:bg-grey-lighter">
                                    <td class="px-4 py-2 text-sm border-b bg-grey-lightest text-grey-light border-grey-light">
                                        <a class="font-bold"><?php echo $user["first_name"]; ?> <?php echo $user["last_name"]; ?></a><br>
                                        <a><?php echo $user["email"]; ?></a>
                                    </td>
                                    <td class="px-4 py-2 text-sm border-b bg-grey-lightest text-grey-light border-grey-light">
                                        <input type="hidden" name="doctor_id" value="<?php echo $user["doctor_id"]; ?>">
                                        <button type="submit" class="px-4 py-2 font-semibold text-white rounded bg-cyan-500 hover:bg-cyan-600" name="verify_account">
                                            Verify Account
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>


        <div class="flex-1 p-4 bg-white rounded-lg shadow md:w-1/2">
            <h2 class="pb-1 text-lg font-semibold text-gray-500">Calendar</h2>
            <div class="my-1"></div>
            <div class="h-px mb-6 bg-gradient-to-r from-cyan-300 to-cyan-500"></div> <!-- Línea con gradiente -->
            <div class="chart-container" style="position: relative; height:150px; width:100%">
                <canvas id="commercesChart"></canvas>
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