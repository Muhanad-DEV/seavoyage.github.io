<?php

$servername = "SeaVoyage";
$username = "SeaVoyage";
$password = "1234";
$dbname = "trip_booking_db";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Sample query to fetch trip information
try {
    $query = "SELECT * FROM trips";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    // Fetch all rows as associative arrays
    $trips = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Print the results
    echo "<pre>";
    print_r($trips);
    echo "</pre>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the connection
$conn = null;
?>