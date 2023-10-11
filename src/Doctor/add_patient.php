<?php
require_once("../config.php");

if (isset($_POST['add_patient'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $RoleID = 10;
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $contact_number = $_POST['contact_number'];

    // Insert user data into tbl_user
    $sql = "INSERT INTO user1 (RoleID, username, password) VALUES ('$RoleID', '$username', '$password')";

    if (mysqli_query($conn, $sql)) {
        // Get the user_id of the newly inserted user
        $user_id = mysqli_insert_id($conn);

        // Insert additional data into the tbl_doctor table
        $doctor_sql = "INSERT INTO tbl_patient (user_id, first_name, last_name, address, contact_number ) 
                      VALUES ('$user_id', '$first_name', '$last_name', '$address', '$contact_number')";

        if (mysqli_query($conn, $doctor_sql)) {
            echo "Registration successful!";
        } else {
            echo "Error inserting patient data: " . mysqli_error($conn);
        }
    } else {
        echo "Error inserting user data: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
