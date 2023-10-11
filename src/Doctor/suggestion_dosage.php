<?php
// Include your database connection code here
require_once("../config.php");
if (isset($_POST["term"])) {
    $term = $_POST["term"];

    // Perform a database query to fetch medicine names
    $sql = "SELECT dosage FROM tbl_medicine WHERE dosage LIKE '%$term%'";
    $result = mysqli_query($conn, $sql);

    $suggestions = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $suggestions[] = $row["dosage"];
    }

    // Return suggestions as JSON
    echo json_encode($suggestions);
}
