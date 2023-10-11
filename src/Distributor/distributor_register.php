<?php
require_once("../config.php");


if (isset($_POST['distributor_register'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $distributor_name = $_POST['distributor_name'];
    $address = $_POST['address'];
    $contact_number = $_POST['contact_number'];
    $status = 'inactive';

    $RoleID = 8;

    // Insert user data into tbl_user
    $sql = "INSERT INTO user1 (RoleID, username, password) VALUES ('$RoleID', '$username', '$password')";

    if (mysqli_query($conn, $sql)) {
        // Get the user_id of the newly inserted user
        $user_id = mysqli_insert_id($conn);

        // Loop through the arrays and insert each element into tbl_medicine as a separate row
        $medicine_names = $_POST['medicine_name'];
        $manufacturers = $_POST['manufacturer'];
        $medicine_types = $_POST['medicine_type'];
        $dosages = $_POST['dosage'];
        $regulatory_statuses = $_POST['regulatory_status'];


        $distributor_sql = "INSERT INTO tbldistributor (user_id, distributor_name, address, contact_number, status) 
                                   VALUES ('$user_id', '$distributor_name', '$address', '$contact_number', '$status')";

        if (mysqli_query($conn, $distributor_sql)) {
            $distributor_id = mysqli_insert_id($conn);


            $count = count($medicine_names);

            for ($i = 0; $i < $count; $i++) {
                $medicine_name = $medicine_names[$i];
                $manufacturer = $manufacturers[$i];
                $medicine_type = $medicine_types[$i];
                $dosage = $dosages[$i];
                $regulatory_status = $regulatory_statuses[$i];

                $medicine = "INSERT INTO tbl_medicine (medicine_name, manufacturer, medicine_type, dosage, regulatory_status) 
                         VALUES ('$medicine_name', '$manufacturer', '$medicine_type', '$dosage', '$regulatory_status')";

                if (mysqli_query($conn, $medicine)) {
                    // Get the medicine_id of the newly inserted medicine
                    $medicine_id = mysqli_insert_id($conn);

                    // Insert into tbl_channel
                    $channel = "INSERT INTO tbl_channel (distributor_id, medicine_id) VALUES ('$distributor_id', '$medicine_id')";

                    if (mysqli_query($conn, $channel)) {
                        header("Location: distributor_medicines.php");
                    } else {
                        echo "Error inserting channel data: " . mysqli_error($conn);
                    }
                } else {
                    echo "Error inserting distributor data: " . mysqli_error($conn);
                }
            }
        } else {
            echo "Error inserting user data: " . mysqli_error($conn);
        }

        // Close the database connection
        mysqli_close($conn);
    }
}
