<?php
require_once("../config.php");

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the data from the form for prescription
    $patient_id = $_POST["patient_id"];
    $doctor_id = $_POST["doctor_id"];
    $date = $_POST["date"];
    $doctor_signature = $_POST["doctor_signature"];
    $expiration_date = $_POST["expiration_date"];

    // Insert data into the database for prescription
    $sql_prescription = "INSERT INTO tbl_prescription (patient_id, doctor_id, date, doctor_signature, expiration_date)
            VALUES ('$patient_id', '$doctor_id', '$date', '$doctor_signature', '$expiration_date')";

    if ($conn->query($sql_prescription) === TRUE) {
        $prescription_id = $conn->insert_id;

        // Redirect to the "view prescription" page with the prescription ID
        header("Location: view_prescription.php?prescription_id=$prescription_id");
    } else {
        echo "Error: " . $sql_prescription . "<br>" . $conn->error;
    }

    // Handle medicine information
    if (isset($_POST["medicine_name"]) && is_array($_POST["medicine_name"])) {
        $medicine_names = $_POST["medicine_name"];
        $manufacturers = $_POST["manufacturer"];
        $medicine_types = $_POST["medicine_type"];
        $dosages = $_POST["dosage"];
        $regulatory_status = $_POST["regulatory_status"];
        $quantity = $_POST["quantity"];
        $dosageinstructions = $_POST["dosageinstructions"];
        $duration = $_POST["duration"];

        // Loop through the medicine data and insert or associate with existing entries
        foreach ($medicine_names as $index => $medicine_name) {
            // Check if the medicine already exists in the database
            $sql_check_medicine = "SELECT medicine_id FROM tbl_medicine WHERE medicine_name = '$medicine_name'";
            $result = $conn->query($sql_check_medicine);

            if ($result->num_rows > 0) {
                // Medicine already exists, associate it with the prescription
                $row = $result->fetch_assoc();
                $medicine_id = $row["medicine_id"];

                // Insert the association between prescription and existing medicine
                $sql_associate_medicine = "INSERT INTO tbl_prescription_medicine (prescription_id, medicine_id, quantity, dosageinstructions, duration)
                    VALUES ((SELECT MAX(prescription_id) FROM tbl_prescription), '$medicine_id', '{$quantity[$index]}', '{$dosageinstructions[$index]}', '{$duration[$index]}')";

                if ($conn->query($sql_associate_medicine) !== TRUE) {
                    echo "Error associating medicine: " . $conn->error;
                }
            } else {
                // Medicine does not exist, insert it into the database
                $sql_insert_medicine = "INSERT INTO tbl_medicine (medicine_name, manufacturer, medicine_type, dosage, regulatory_status)
                    VALUES ('$medicine_name', '{$manufacturers[$index]}', '{$medicine_types[$index]}', '{$dosages[$index]}', '{$regulatory_status[$index]}')";

                if ($conn->query($sql_insert_medicine) !== TRUE) {
                    echo "Error inserting medicine: " . $conn->error;
                }

                // Get the ID of the newly inserted medicine
                $medicine_id = $conn->insert_id;

                // Associate the new medicine with the prescription
                $sql_associate_medicine = "INSERT INTO tbl_prescription_medicine (prescription_id, medicine_id, quantity, dosageinstructions, duration)
                    VALUES ((SELECT MAX(prescription_id) FROM tbl_prescription), '$medicine_id', '{$quantity[$index]}', '{$dosageinstructions[$index]}', '{$duration[$index]}')";

                if ($conn->query($sql_associate_medicine) !== TRUE) {
                    echo "Error associating medicine: " . $conn->error;
                }
            }
        }
    }
}


// Close the database connection
$conn->close();
