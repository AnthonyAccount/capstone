<?php
 require_once("./config.php");
$query = "SELECT RoleID, RoleName FROM role";
 $result = mysqli_query($conn, $query);

 if ($result) {
     while ($row = mysqli_fetch_assoc($result)) {
         echo '<option value="' . $row['RoleID'] . '">' . $row['$query = "SELECT RoleID, RoleName FROM role";e'] . '</option>';
     }
 } else {
                                        echo "Error fetching hospitals: " . mysqli_error($conn);

 // Close the database connection
 mysqli_close($conn);
?>