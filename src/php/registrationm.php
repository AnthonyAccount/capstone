<?php
require_once("../config.php");

$registration_status = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Extract user and doctor info from POST data
    $username = $_POST["username"];
    $password = $_POST["password"];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $specialty = $_POST["specialty"];
    $contactInfo = $_POST["contact_info"];
    $email = $_POST["email"];
    $status = $_POST["status"];
    $address = $_POST["address"];
    $hospital_id = $_POST['hospital_id'];
    
    $image = $_FILES["prof_image"];
    $imageData = file_get_contents($image["tmp_name"]); // Read image data
    $imageData = base64_encode($imageData); // Encode image data as base64

    // Start a database transaction
    $conn->begin_transaction();

    // Perform SQL query to insert user into User table using prepared statement
    $userInsertQuery = "INSERT INTO user1 (username, password, RoleID) VALUES (?, ?, 1)";
    $userInsertStmt = $conn->prepare($userInsertQuery);
    $userInsertStmt->bind_param("ss", $username, $hashedPassword);

    if ($userInsertStmt->execute()) {
        // Get the inserted user_id
        $user_id = $conn->insert_id;

        // Perform SQL query to insert doctor into Doctor table using prepared statement
        $doctorInsertQuery = "INSERT INTO doctor (user_id, first_name, last_name, specialty, contact_info, email, status, address, hospital_id, prof_image) 
                              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $doctorInsertStmt = $conn->prepare($doctorInsertQuery);
        $doctorInsertStmt->bind_param("isssssssss", $user_id, $firstName, $lastName, $specialty, $contactInfo, $email, $status, $address, $hospital_id, $imageData);

        if ($doctorInsertStmt->execute()) {
            // Commit the transaction if both inserts are successful
            $conn->commit();
            $registration_status = "Doctor registered successfully.";
        } else {
            // Rollback the transaction if there's an error
            $conn->rollback();
            $registration_status = "Error: " . $doctorInsertStmt->error;
        }
    } else {
        // Rollback the transaction if there's an error
        $conn->rollback();
        $registration_status = "Error: " . $userInsertStmt->error;
    }

    // Close the prepared statements
    $userInsertStmt->close();
    $doctorInsertStmt->close();

    // Close the database connection
    $conn->close();
}
?>
