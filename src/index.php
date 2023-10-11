<?php
session_start();
require_once("config.php");
require_once("AuthController.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT u.user_id, u.role_id, u.password, p.patient_id FROM user1 u
            JOIN tbl_patient p ON u.user_id = p.user_id
            WHERE u.username = '$username'";

    $authController = new AuthController();
    $authController->login($conn, $username, $password);
}

require("login1.php");
?>
