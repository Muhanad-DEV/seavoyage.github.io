<?php
// Include the database connection code
include_once 'db_connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $tripType = $_POST["trip_type"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $duration = $_POST["duration"];
    $cost = $_POST["cost"];
    $availableSeats = $_POST["available_seats"];
    $additionalInfo = $_POST["additional_info"];

    // Insert into the trips table
    $query = "INSERT INTO trips (trip_type, date, time, duration, cost, available_seats, additional_info) 
              VALUES (:tripType, :date, :time, :duration, :cost, :availableSeats, :additionalInfo)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":tripType", $tripType, PDO::PARAM_STR);
    $stmt->bindParam(":date", $date, PDO::PARAM_STR);
    $stmt->bindParam(":time", $time, PDO::PARAM_STR);
    $stmt->bindParam(":duration", $duration, PDO::PARAM_STR);
    $stmt->bindParam(":cost", $cost, PDO::PARAM_STR);
    $stmt->bindParam(":availableSeats", $availableSeats, PDO::PARAM_INT);
    $stmt->bindParam(":additionalInfo", $additionalInfo, PDO::PARAM_STR);

    try {
        $stmt->execute();
        echo "Record inserted successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<!-- Insert Form -->
<form action="" method="post">
    <!-- Add  form fields for inserting data -->
    <!-- ... -->
    <button type="submit">Insert Record</button>
</form>
