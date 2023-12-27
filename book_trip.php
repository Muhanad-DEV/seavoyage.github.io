<!DOCTYPE html>
<html >

<head>

    <link rel="stylesheet" href="project.css" >

    <meta charset="UTF-8">

    <title>Trip Booking Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="project.css" >

        <meta name="description" content="seavoyage">
        <meta name="keywords" content="seavoyage,boats,rent,trip,adventure,fun,summer,sea">
        <meta name="author" content="Muhannad">
        

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 20px;
            background-color: #f4f4f4; /* Light gray background */
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle box shadow */
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px; /* Increased padding for cells */
            text-align: left;
        }
        h1 {
            color: #333; /* Dark text color */
        }
        label {
            display: block;
            margin-bottom: 8px;
            text-align: left;
            color: #333;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50; /* Green button color */
            color: #fff; /* White text color */
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 0 auto; /* Center the button */
        }
        button:hover {
            background-color: #45a049; /* Darker green on hover */
        }
    </style>
</head>
<body>




    <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">
        <ul class="navbar-nav justify-content-center">
            <li class="nav-item active">
                <a class="nav-link" style="color: aliceblue; text-align: center; " href="index.html">
                
                   
                    <div class="play-on-gif img-container"></div>
                    

                    <pre style="text-align: center; margin: 0; font-size: 19px ">   HOME   </pre>
                
                </a>
            </li>

            
            <li class="nav-item">
                <a class="nav-link" style="color: aliceblue;" href="BookATrip.html">
                    <div class="play-on-gif3 img-container"> </div>
                    <pre style="text-align: center; margin: 0; ">  TRIPS  </pre>

                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: aliceblue;" href="BookBoat.html">
                    <div class="play-on-gif4 img-container"> </div>    
                    <pre style="text-align: center; margin: 0; ">  BOATS  </pre>

                </a>
            </li>
            <li class="nav-item ml-auto">
                <a class="nav-link" style="color: aliceblue;" href="Aboutus.html"> 
                    <div class="play-on-gif5 img-container"> </div>
                    <pre style="text-align: center; margin: 0; ">ABOUT US</pre>

                
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" style="color: aliceblue;" href="contactUs.html">
                    <div class="play-on-gif2 img-container"> </div>
                    <pre style="text-align: center; margin: 0; ">CONTACT US</pre>

                </a>
            </li>


        </ul>
        
    </nav>

    <div class="img-container" 
    style="align-content: center; margin-bottom: 60px; background-color: rgba(1,32,46,255);  background-image:url(SeaVoage2.png); padding: 200px; background-position: center;background-repeat: no-repeat; background-size: 450px;">


</div>

    <div class="container">

        <h1 class="mt-4" style="text-align: center;">Book Your Trip</h1>

         <!-- Empty table with header rows -->


    <script>
    // Function to search for trips
    function searchTrips() {
    var searchTripName = document.getElementById("searchTripName").value.toLowerCase();

    // Filter tripsArray based on the search criteria
    var searchResults = tripsArray.filter(function (trip) {
        return trip.tripType.toLowerCase().includes(searchTripName);
    });

    // Check if the search results table already exists
    var existingTable = document.getElementById("searchResultsTable");
    
    // If the table already exists, remove it before creating a new one
    if (existingTable) {
        existingTable.remove();
    }

    // Create and display search results table
    var searchResultsTable = document.createElement("table");
    searchResultsTable.id = "searchResultsTable"; // Set a unique ID for the table
    searchResultsTable.className = "table table-bordered table-hover";
    var thead = searchResultsTable.createTHead();
    var tbody = searchResultsTable.createTBody();

    // Create header row
    var headerRow = thead.insertRow();
    for (var key in searchResults[0]) {
        var th = document.createElement("th");
        th.textContent = key.charAt(0).toUpperCase() + key.slice(1); // Capitalize the first letter
        headerRow.appendChild(th);
    }

    // Create data row
    var dataRow = tbody.insertRow();
    for (var key in searchResults[0]) {
        var td = dataRow.insertCell();
        td.textContent = searchResults[0][key];
    }

    // Append the new table to the container
    var container = document.querySelector(".container");
    container.appendChild(searchResultsTable);
}

       
        
        </script>

        <?php
        class TripInfo {
            private $tripType;
            private $date;
            private $time;
            private $duration;
            private $cost;
            private $availableSeats;
            private $additionalInfo;

            public function __construct($tripType, $date, $time, $duration, $cost, $availableSeats, $additionalInfo) {
                $this->tripType = $tripType;
                $this->date = $date;
                $this->time = $time;
                $this->duration = $duration;
                $this->cost = $cost;
                $this->availableSeats = $availableSeats;
                $this->additionalInfo = $additionalInfo;
            }

            public function getTripType() {
                return $this->tripType;
            }

            public function getDate() {
                return $this->date;
            }

            public function getTime() {
                return $this->time;
            }

            public function getDuration() {
                return $this->duration;
            }

            public function getCost() {
                return $this->cost;
            }

            public function getAvailableSeats() {
                return $this->availableSeats;
            }

            public function getAdditionalInfo() {
                return $this->additionalInfo;
            }
        }

        function displayTrips($tripsArray) {
            echo '<table id="tripTable" class="table table-bordered table-hover">';
            echo '<thead class="thead-dark">';
            echo '<tr>';
            echo '<th>Trip Type</th>';
            echo '<th>Date</th>';
            echo '<th>Time</th>';
            echo '<th>Duration</th>';
            echo '<th>Cost per Person</th>';
            echo '<th>Available Seats</th>';
            echo '<th>Additional Information</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

            foreach ($tripsArray as $trip) {
                echo '<tr>';
                echo '<td>' . $trip->getTripType() . '</td>';
                echo '<td>' . $trip->getDate() . '</td>';
                echo '<td>' . $trip->getTime() . '</td>';
                echo '<td>' . $trip->getDuration() . '</td>';
                echo '<td>' . $trip->getCost() . '</td>';
                echo '<td>' . $trip->getAvailableSeats() . '</td>';
                echo '<td>' . $trip->getAdditionalInfo() . '</td>';
                echo '</tr>';
            }

            echo '</tbody>';
            echo '</table>';
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['showTripsButton'])) {
                $tripsArray = [
                    new TripInfo("Dolphin Watching", "2023-11-20", "10:00 AM", "2 hours", "$50", 10, "Enjoy a scenic boat ride while watching playful dolphins in their natural habitat"),
                    new TripInfo("Snorkeling Adventure", "2023-11-22", "02:00 PM", "3 hours", "$75", 8, "Dive into crystal-clear waters and explore the vibrant underwater world with our snorkeling experience"),
                    new TripInfo("Sailing Excursion", "2023-11-25", "12:00 PM", "4 hours", "$100", 12, "Relax and unwind on a sailing adventure, experiencing the beauty of the open sea and coastal views"),
                    new TripInfo("Kayaking Adventure", "2023-11-28", "09:30 AM", "2.5 hours", "$60", 6, "Explore the waters with our exciting kayaking adventure"),
                    new TripInfo("Island Hopping", "2023-12-02", "11:00 AM", "5 hours", "$120", 15, "Visit multiple islands and enjoy a day of exploration and relaxation")
                ];

                displayTrips($tripsArray);
            } elseif (isset($_POST['addTrip'])) {
                $newTripType = $_POST['newTripType'];
                $newTripDate = $_POST['newTripDate'];
                $newTripTime = $_POST['newTripTime'];
                $newTripDuration = $_POST['newTripDuration'];
                $newTripCost = $_POST['newTripCost'];

                $newTrip = new TripInfo($newTripType, $newTripDate, $newTripTime, $newTripDuration, $newTripCost, 0, "");

                $tripsArray[] = $newTrip;

                displayTrips($tripsArray);
            }
        }
        ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="submit" name="showTripsButton" value="Display Trips">
</form>
    
    <!-- Add Trip Form -->
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="addTripForm">
    <div class="form-group">
        <label for="newTripType">Trip Type:</label>
        <input type="text" class="form-control" id="newTripType" name="newTripType" required>
    </div>
    <div class="form-group">
        <label for="newTripDate">Date:</label>
        <input type="text" class="form-control" id="newTripDate" name="newTripDate" placeholder="YYYY-MM-DD" required>
    </div>
    <div class="form-group">
        <label for="newTripTime">Time:</label>
        <input type="text" class="form-control" id="newTripTime" name="newTripTime" required>
    </div>
    <div class="form-group">
        <label for="newTripDuration">Duration:</label>
        <input type="text" class="form-control" id="newTripDuration" name="newTripDuration" required>
    </div>
    <div class="form-group">
        <label for="newTripCost">Cost per Person:</label>
        <input type="text" class="form-control" id="newTripCost" name="newTripCost" required>
    </div>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <button type="submit" name="addTrip" class="btn btn-success">Add Trip</button>
    </form>
    </form>

<!-- Search Trip Form -->
<form id="searchForm">
    <div class="form-group">
        <label for="searchTripName">Search by Trip Type:</label>
        <input type="text" class="form-control" id="searchTripName" name="searchTripName" required>
    </div>
    <button type="button" class="btn btn-primary" onclick="searchTrips()">Search</button>
</form>
        <!-- Booking Form -->
        <form action="/book-trip" method="post">
                <div class="form-group">
                    <label for="selected_trip">Select Trip Type:</label>
               
               
               
               
                <select class="form-control" id="selected_trip" name="selected_trip" required>
                    
                    
                    <option value="dolphin">Dolphin Watching</option>
                    <option value="snorkeling">Snorkeling Adventure</option>
                    <option value="sailing">Sailing Excursion</option>
                    <option value="kayaking">Kayaking Adventure</option>
                    <option value="island_hopping">Island Hopping</option>
                    
                
                </select>
            </div>

            <!-- The date is pre-selected for each trip, users can input the number of people -->
            <div class="form-group">
                <label for="num_people">Number of People:</label>
                <input type="number" class="form-control" id="num_people" name="num_people" min="1" required>
            </div>

            <button type="submit" class="btn btn-primary">Book Now</button>
        </form>
    </div>



</body>




<footer class="rounded" style="margin-top: 300px;">
    <br>
    <p>

    </p>
    <div class="container rounded">
        <div class="row">
            <div class="col">
                <h3>Website pages</h3>
                <ul>
                    <li></li>
                    <li><a href="index.html">Home Page</a></li>
                    <li><a href="BookBoat.html">Book Boat</a></li>
                    <li><a href="BookATrip.html"> Book a Trip</a></li>
                    
                    <li><a href="contactUs.html">contact us</a></li>
                    <li><a href="Aboutus.html">About us</a></li> 
                    <li><a href="">Search</a></li>                          
                </ul>
            </div>
            <div class="col">
                <ul>
                    <h3></h3>
                    <h3>Sultan Qaboos University</h3>
                    <h3>College of Science</h3>
                    <h3>Computer Science Department</h3>
                    <h3>COMP3700 FL23 Project</h3>    
                    <h3>Members:</h3>
                    <h4>Muhannad AlMuwaiti</h4>
                    <h4>Haitham AlHinai</h4>
                    <h4>Al hussain AlGharbawy</h4>


                </ul>
                
            </div>
        </div>
    </div>




</html>
