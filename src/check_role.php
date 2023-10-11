<?php
function checkUserRole($RoleID)
{
    if ($RoleID == 1) {
        header("Location: doctor_dashboard.php");
    } elseif ($RoleID == 10) {
        header("Location: patient_dashboard.php");
    } elseif ($RoleID == 8) {
        header("Location: distributor_medicines.php");
    } else {
        echo "Invalid role!";
    }
}
