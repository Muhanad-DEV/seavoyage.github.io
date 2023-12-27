





<?php
$showForm = true;
$boatName = '';
$boatPrice = 0;
$totalPrice = 0;

if (isset($_POST['submit'])) {
    function updateReturnDate()
    {
        // Get the number of days and return date input elements
        $numDaysSelect = $_POST['num-days'];
        $returnDateInput = $_POST['return-date'];

        // Parse the number of days and pickup date
        $numDays = (int)$numDaysSelect;
        $pickupDate = new DateTime($_POST['pickup-date']);

        // Calculate the return date based on the pickup date and number of days
        $returnDate = $pickupDate->modify("+$numDays days")->format('Y-m-d');

        // Update the return date input value
        echo "<script>document.getElementById('return-date').value = '$returnDate';</script>";
    }

    function updatePrice()
    {
        $boatSelect = $_POST['boat-name'];
        $boatPrice = (int)$boatSelect;

        // Calculate the total price based on boat price and number of days
        $numDaysSelect = $_POST['num-days'];
        $numDays = (int)$numDaysSelect;

        $totalPrice = $boatPrice * $numDays;

        // Apply discount if applicable
        if ($numDays == 2) {
            $totalPrice *= 0.9; // 10% discount for 2 days
        } elseif ($numDays == 3) {
            $totalPrice *= 0.7; // 30% discount for 3 days
        }

        return $totalPrice;
    }

    // Call the functions to update return date and calculate total price
    updateReturnDate();
    $totalPrice = updatePrice();

    $showForm = false;
    $boatName = $_POST['boat-name'];
    $boatPrice = (int)$_POST['boat-name'];
}
?>