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

        <!-- Trip Information Table -->
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                    <tr>
                        <th>Trip Type</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Duration</th>
                        <th>Cost per Person</th>
                        <th>Available Seats</th>
                        <th>Additional Information</th>
                    </tr>
            </thead>
            <tbody>
                        <tr>
                            <td>Dolphin Watching</td>
                            <td>2023-11-20</td>
                            <td>10:00 AM</td>
                            <td>2 hours</td>
                            <td>$50</td>
                            <td>10</td>
                            <td>Enjoy a scenic boat ride while watching playful dolphins in their natural habitat.</td>
                        </tr>
                <tr>
                            <td>Snorkeling Adventure</td>
                            <td>2023-11-22</td>
                            <td>02:00 PM</td>
                            <td>3 hours</td>
                            <td>$75</td>
                            <td>8</td>
                            <td>Dive into crystal-clear waters and explore the vibrant underwater world with our snorkeling experience.</td>
                        </tr>
                <tr>
                    <td>Sailing Excursion</td>
                    <td>2023-11-25</td>
                    <td>12:00 PM</td>
                    <td>4 hours</td>
                    <td>$100</td>
                    <td>12</td>
                    <td>Relax and unwind on a sailing adventure, experiencing the beauty of the open sea and coastal views.</td>
                </tr>
                <!-- Add more trips as needed -->
                <tr>
                    <td>Kayaking Adventure</td>
                    <td>2023-11-28</td>
                    <td>09:30 AM</td>
                    <td>2.5 hours</td>
                    <td>$60</td>
                    <td>6</td>
                    <td>Explore the waters with our exciting kayaking adventure.</td>
                </tr>
                <tr>
                    <td>Island Hopping</td>
                    <td>2023-12-02</td>
                    <td>11:00 AM</td>
                    <td>5 hours</td>
                    <td>$120</td>
                    <td>15</td>
                    <td>Visit multiple islands and enjoy a day of exploration and relaxation.</td>
                </tr>
            </tbody>
        </table>
        <div class="container">
            <h1 class="mt-4" style="text-align: center;">Book Your Trip</h1>
    
            <!-- Add a search form to your existing HTML body content -->
            <form action="" method="post">
                <div class="form-group">
                    <label for="search_trip">Search by Trip Type:</label>
                    <input type="text" class="form-control" id="search_trip" name="search_trip">
                </div>
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
    
            <!-- Display the search results in a table -->
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Trip Type</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Duration</th>
                        <th>Cost per Person</th>
                        <th>Available Seats</th>
                        <th>Additional Information</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Check if the search form is submitted
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Get the user-specified trip type
                        $searchTrip = $_POST["search_trip"];
    
                        // Modify the query to include the search criteria
                        $query = "SELECT * FROM trips WHERE trip_type LIKE :searchTrip";
                        $stmt = $conn->prepare($query);
                        $stmt->bindParam(":searchTrip", $searchTrip, PDO::PARAM_STR);
                    } else {
                        // Default query to fetch all trips
                        $query = "SELECT * FROM trips";
                        $stmt = $conn->prepare($query);
                    }
    
                    try {
                        $stmt->execute();
    
                        // Fetch all rows as associative arrays
                        $trips = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
                        // Display trip information
                        foreach ($trips as $trip) {
                            echo "<tr>";
                            echo "<td>{$trip['trip_type']}</td>";
                            echo "<td>{$trip['date']}</td>";
                            echo "<td>{$trip['time']}</td>";
                            echo "<td>{$trip['duration']}</td>";
                            echo "<td>{$trip['cost']}</td>";
                            echo "<td>{$trip['available_seats']}</td>";
                            echo "<td>{$trip['additional_info']}</td>";
                            echo "</tr>";
                        }
                    } catch (PDOException $e) {
                        echo "Error: " . $e->getMessage();
                    }
                    ?>
                </tbody>
            </table>
    
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

       
    </div>
    <?php
    // Close the database connection
    $conn = null;
    ?>



</body>





<footer style="margin-top: 300px;">
    <br>
    <p>

    </p>
    <div class="container">
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
