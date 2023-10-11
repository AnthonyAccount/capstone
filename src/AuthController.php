<?php
require_once("usermodel.php");

class AuthController
{
    public function login($conn, $username, $password)
    {
        $userModel = new UserModel();
        $user = $userModel->getUserByUsername($conn, $username);

        if ($user && password_verify($password, $user['password'])) {
            // User authentication successful, retrieve user data
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            $_SESSION['RoleName'] = $user['RoleName'];

            if ($user['RoleName'] == "Doctor") {
                header('Location: ../src/Doctor/doctor_dashboard.php');
            } elseif ($user['RoleName'] == "patient") {
                header('Location: ../src/Patient/patient_dashboard.php');
            } else {
                header('Location: ../src/Admin/dashboard.php');
            }
            exit();
        } else {
            return false;
        }
    }
}

function checkPermission($permission)
{
    // Get the user's role ID from the session
    $userRoleID = $_SESSION['RoleName'];

    // Define role-based permissions with role IDs
    $permissions = [
        'SuperAdmin' => [
            'createdoctor', 'createdistributor', 'createadmin', 'adminedit', 'doctoredit',
            'distributoredit', 'admin', 'users', 'prescription', 'verify'
        ],
        'Maineditor' => ['doctoredit', 'distributoredit', 'adminedit', 'users', 'admin', 'prescription'],
        'editor1' => ['doctoredit', 'users', 'admin', 'prescription'],
        'editor2' => ['distributoredit', 'users', 'admin', 'prescription'],
        'viewer' => ['users', 'admin', 'prescription'],
        'Adminviewer' => ['admin', 'users'],
        'Userviewer' => ['users'],
        'Validator' => ['verify']


    ];

    // Check if the user has the specified permission based on role ID
    return isset($permissions[$userRoleID]) && in_array($permission, $permissions[$userRoleID]);
}

// Sample usage
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $authController = new AuthController();

    if ($authController->login($conn, $username, $password)) {
        // The user will be redirected to dashboard.php upon successful login
    } else {
        $error_message = "Invalid login credentials.";
        require("login1.php");
    }
}
