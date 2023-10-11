<?php
// Include the configuration file
require_once("../config.php");

// Check if a prescription ID is provided in the query string
if (isset($_GET["prescription_id"])) {
    $prescription_id = $_GET["prescription_id"];

    // Retrieve prescription details from the database
    $sql_prescription_details = "SELECT * FROM tbl_prescription WHERE prescription_id = '$prescription_id'";
    $result = $conn->query($sql_prescription_details);

    if ($result->num_rows > 0) {
        $prescription = $result->fetch_assoc();
?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>View Prescription</title>
            <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
        </head>

        <body>
            <div class="container p-4 mx-auto">
                <h1 class="mb-4 text-2xl font-bold">View Prescription</h1>
                <div class="p-4 border rounded-lg shadow-lg">
                    <h2 class="text-xl font-semibold">Prescription Details:</h2>
                    <ul>
                        <li><strong>Prescription ID:</strong> <?= $prescription["prescription_id"] ?></li>
                        <li><strong>Patient ID:</strong> <?= $prescription["patient_id"] ?></li>
                        <li><strong>Doctor ID:</strong> <?= $prescription["doctor_id"] ?></li>
                        <li><strong>Date:</strong> <?= $prescription["date"] ?></li>
                        <li><strong>Doctor Signature:</strong> <?= $prescription["doctor_signature"] ?></li>
                        <li><strong>Expiration Date:</strong> <?= $prescription["expiration_date"] ?></li>
                    </ul>
                </div>

                <!-- Display associated medicines -->
                <?php
                $sql_medicines = "SELECT m.medicine_name, pm.quantity, pm.dosageinstructions, pm.duration
                                  FROM tbl_prescription_medicine pm
                                  INNER JOIN tbl_medicine m ON pm.medicine_id = m.medicine_id
                                  WHERE pm.prescription_id = '$prescription_id'";
                $medicines_result = $conn->query($sql_medicines);

                if ($medicines_result->num_rows > 0) {
                ?>
                    <div class="mt-4">
                        <h2 class="text-xl font-semibold">Prescribed Medicines:</h2>
                        <ul>
                            <?php while ($medicine = $medicines_result->fetch_assoc()) { ?>
                                <li><strong>Medicine Name:</strong> <?= $medicine["medicine_name"] ?></li>
                                <li><strong>Quantity:</strong> <?= $medicine["quantity"] ?></li>
                                <li><strong>Dosage Instructions:</strong> <?= $medicine["dosageinstructions"] ?></li>
                                <li><strong>Duration:</strong> <?= $medicine["duration"] ?></li>
                                <br>
                            <?php } ?>
                        </ul>
                    </div>
                <?php
                } else {
                    echo "<p class='mt-4 text-red-500'>No medicines prescribed for this prescription.</p>";
                }
                ?>
            </div>
        </body>

        </html>

<?php
    } else {
        echo "Prescription not found.";
    }
} else {
    echo "Prescription ID not provided in the query string.";
}

// Close the database connection
$conn->close();
?>