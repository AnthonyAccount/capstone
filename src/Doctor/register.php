<?php
require_once("../config.php");

// Fetch hospitals from tbl_hospital
$hospitals = array();
$query = "SELECT hospital_id, hospital_name, address FROM tbl_hospital";
$result = mysqli_query($conn, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $hospitals[] = $row;
    }
} else {
    echo "Error fetching hospital: " . mysqli_error($conn);
}

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $specialty = $_POST['specialty'];
    $address = $_POST['address'];
    $contact_info = $_POST['contact_info'];

    $status = 'inactive';

    // Set role_id to 1 (assuming all users are doctors)
    $RoleID = 1;

    // Get the selected hospital_id from the form
    $hospital_id = $_POST['hospital_id'];

    // Insert user data into tbl_user
    $sql = "INSERT INTO user1 (RoleID, username, password) VALUES ('$RoleID', '$username', '$password')";

    if (mysqli_query($conn, $sql)) {
        // Get the user_id of the newly inserted user
        $user_id = mysqli_insert_id($conn);

        // Insert additional data into the tbl_doctor table
        $doctor_sql = "INSERT INTO doctor (user_id, first_name, last_name, specialty, address, contact_info, status, hospital_id) 
                      VALUES ('$user_id', '$first_name', '$last_name' , '$specialty', '$address', '$contact_info', '$status', '$hospital_id')";

        if (mysqli_query($conn, $doctor_sql)) {
            header("Location: doctor_dashboard.php");
        } else {
            echo "Error inserting doctor data: " . mysqli_error($conn);
        }
    } else {
        echo "Error inserting user data: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
