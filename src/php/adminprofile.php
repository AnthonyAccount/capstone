<?php
require_once("./config.php");

// Check if a user ID is provided via GET request
if (isset($_GET["user_id"])) {
    $user_id = $_GET["user_id"];

    // Query to retrieve user information by ID
    $query = "SELECT * FROM user1 WHERE user_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user_data = $result->fetch_assoc();

        // Handle form submission to update user data
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Retrieve the new data from the form
            $new_name = $_POST["name"];
            $new_position = $_POST["position"];
            $new_username = $_POST["username"];
            $new_password = $_POST["password"];

            // Hash the new password
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

            // Update the user's data in the database
            $update_query = "UPDATE users SET name = ?, position = ?, username = ?, password = ? WHERE id = ?";
            $update_stmt = $conn->prepare($update_query);
            $update_stmt->bind_param("ssssi", $new_name, $new_position, $new_username, $hashed_password, $user_id);

            if ($update_stmt->execute()) {
                // Data updated successfully
                echo "User data updated successfully.";
            } else {
                echo "Error updating user data: " . $update_stmt->error;
            }
        }
    } else {
        echo "User not found.";
    }
} else {
    echo "User ID not provided.";
}

$conn->close();
?>