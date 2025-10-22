<?php
include("dbcon.php");

$visitDate = $_POST['visitDate'];
$visitTime = $_POST['visitTime'];
$doctorID = $_POST['doctorID'];
$patientID = $_POST['patientID'];
$cost = $_POST['cost'];

$sql = "INSERT INTO visit (visitDate, visitTime, doctorID, patientID, cost)
        VALUES ('$visitDate', '$visitTime', '$doctorID', '$patientID', '$cost')";

echo $sql;

if (mysqli_query($conn, $sql)) {
    echo "New visit record added successfully.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>