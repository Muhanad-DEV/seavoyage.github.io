
<!DOCTYPE html>
<html >
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="project.css" >

  <script src="calculationPage.js" ></script>

  <title>Online Shopping</title>
  <style>
    table {
      border-collapse: separate;
      border-spacing: 10px; 
      width: 100%;
    }

    td {
      padding: 15px;
      text-align: center;
    }

    img {
      width: 200px; /* Fixed width for the images */
      height: 150px; /* Fixed height for the images */
      object-fit: cover; /* Maintain aspect ratio and cover the container */
    }

    .product-container {
      text-align: center;
    }

    .product-name {
      font-weight: bold;
      margin: 10px 0;
    }

    .product-description {
      margin-bottom: 10px;
    }

    .product-price {
      margin-bottom: 10px;
      color: #555;
    }

    .book-now-button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      border: none;
      cursor: pointer;
      border-radius: 5px;
    }

    .rental-form-container {
      width: 300px;
      margin: 30px auto;
      background-color: #f9f9f9;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .rental-form {
      text-align: center;
    }

    .form-label {
      display: block;
      margin-bottom: 8px;
    }

    .form-input {
      width: 100%;
      padding: 8px;
      margin-bottom: 15px;
      box-sizing: border-box;
    }

    .form-submit {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      border: none;
      cursor: pointer;
      border-radius: 5px;
    }
  </style>

        <link rel="stylesheet" href="project.css" >

        <meta name="description" content="seavoyage">
        <meta name="keywords" content="seavoyage,boats,rent,trip,adventure,fun,summer,sea">
        <meta name="author" content="Muhannad">
        </head>
<body>


        <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">
          <ul class="navbar-nav justify-content-center">
              <li class="nav-item active">
                  <a class="nav-link" style="color: aliceblue; text-align: center; " href="index.html">
                  
                      <div class="play-on-gif"></div>

                      <pre style="text-align: center; margin: 0; font-size: 19px ">   HOME   </pre>
                  
                  </a>
              </li>

              
              <li class="nav-item">
                  <a class="nav-link" style="color: aliceblue;" href="BookATrip.html">
                      <div class="play-on-gif3"> </div>
                      <pre style="text-align: center; margin: 0; ">  TRIPS  </pre>

                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" style="color: aliceblue;" href="BookBoat.html">
                      <div class="play-on-gif4"> </div>    
                      <pre style="text-align: center; margin: 0; ">  BOATS  </pre>

                  </a>
              </li>
              <li class="nav-item ml-auto">
                  <a class="nav-link" style="color: aliceblue;" href="Aboutus.html"> 
                      <div class="play-on-gif5"> </div>
                      <pre style="text-align: center; margin: 0; ">ABOUT US</pre>

                  
                  </a>
              </li>


              <li class="nav-item">
                  <a class="nav-link" style="color: aliceblue;" href="contactUs.html">
                      <div class="play-on-gif2"> </div>
                      <pre style="text-align: center; margin: 0; ">CONTACT US</pre>

                  </a>
              </li>
              

          </ul>
          
      </nav>


      <div class="img-container" 
      style="align-content: center; margin-bottom: 60px; background-color: rgba(1,32,46,255);  background-image:url(SeaVoage2.png); padding: 200px; background-position: center;background-repeat: no-repeat; background-size: 450px;">


  </div>


  <table>
    <tr>
      <td>
        <div class="product-container">
          <img src="Boat1.jpg" alt="Boat 1">
          <div class="product-name">Boat 1</div>
          <div class="product-description">High-speed luxury yacht for an exhilarating experience on the water.</div>
          <div class="product-price">$10,000</div>
          <button class="book-now-button" >Book Now</button>
        </div>
      </td>


      <td>
        <div class="product-container"  >
          <img src="Boat2.jpg" alt="Boat 2">
          <div class="product-name">Boat 2</div>
          <div class="product-description">Spacious cruise boat perfect for family vacations and leisurely trips.</div>
          <div class="product-price">$15,000</div>
          <button class="book-now-button" >Book Now</button>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <div class="product-container">
          <img src="Boat3.jpg" alt="Boat 3">
          <div class="product-name">Boat 3</div>
          <div class="product-description">Sleek and modern sailing yacht for a unique and elegant sailing experience.</div>
          <div class="product-price">$20,000</div>
          <button class="book-now-button" >Book Now</button>
        </div>
      </td>
      <td>


          <div class="product-container">
                <img src="Boat4.jpg" alt="Boat 4">
                <div class="product-name">Boat 4</div>
                <div class="product-description">Compact fishing boat equipped with the latest technology for avid anglers.</div>
                <div class="product-price">$8,000</div>
                <button class="book-now-button" >Book Now</button>
          </div>
      </td>
    </tr>
    <tr>



      <td>
            <div class="product-container">
                    <img src="Boat5.jpg" alt="Boat 5">
                    <div class="product-name">Boat 5</div>
                    <div class="product-description">Luxurious catamaran offering a comfortable and stable sailing experience.</div>
                    <div class="product-price">$2,000</div>
                    <button class="book-now-button" >Book Now</button>
                  </div>
      </td>
      <td>
                    <div class="product-container">
                          <img src="Boat6.jpg" alt="Boat 6">
                          <div class="product-name">Boat 6</div>
                          <div class="product-description">Adventurous inflatable boat suitable for water sports and exploration.</div>
                          <div class="product-price">$5,000</div>
                          <button class="book-now-button" >Book Now</button>
                    </div>
              </td>
    </tr>



  </table>




<div class="rental-form-container">
    <div class="rental-form">
        <?php
        if (isset($_POST['submit'])) {
            // include the php file to this html file
            include("max.php");
        }
        ?>
        
        <form action="" method="post">
            <!-- Form elements -->
            <label for="boat-name" class="form-label">Boat Name:</label>
            <select id="boat-name" name="boat-name" class="form-select" >
                <option value="">Select a boat</option>
                <option value="10000">Boat 1</option>
                <option value="15000">Boat 2</option>
                <option value="20000">Boat 3</option>
                <option value="8000">Boat 4</option>
                <option value="2000">Boat 5</option>
                <option value="5000">Boat 6</option>
            </select>


            <label for="pickup-date" class="form-label">Pickup Date:</label>
              <input type="date" id="pickup-date" name="pickup-date" class="form-input" required>
  
              <label for="return-date" class="form-label">Return Date:</label>
              <input type="date" id="return-date" name="return-date" class="form-input" required>
  
              <label for="num-days" class="form-label">Number of Days:</label>
                <span class="discount-info">Discount: 10% for 2 days, 30% for 3 days</span>
                <select id="num-days" name="num-days" class="form-input" required onchange="updateReturnDate()">
                  <option value="1">1 day</option>
                  <option value="2">2 days</option>
                  <option value="3">3 days</option>
                </select>r
  
              <label for="extras" class="form-label">Extras:</label>
              <input type="checkbox" id="life-jacket" name="extras[]" value="life-jacket">
              <label for="life-jacket">Life Jacket</label>
              <input type="checkbox" id="fishing-rod" name="extras[]" value="fishing-rod">
              <label for="fishing-rod">Fishing Rod</label>
  
              <label class="form-label">Preferred Fuel Type:</label>
              <input type="radio" id="fuel-petrol" name="fuel-type" value="petrol">
              <label for="fuel-petrol">Petrol</label>
              <input type="radio" id="fuel-diesel" name="fuel-type" value="diesel">
              <label for="fuel-diesel">Diesel</label>
  
              <label for="special-requests" class="form-label">Special Requests:</label>
              <textarea id="special-requests" name="special-requests" class="form-input" rows="4" placeholder="Enter any special requests"></textarea>
  
              <label for="preference-list" class="form-label">Entertainment Options:</label>
              <ul style="list-style-type: disc; text-align: center;">
                <li><input type="checkbox" id="preference1" name="preferences[]" value="preference1"><label for="preference1">TV/DVD Player</label></li>
                <li><input type="checkbox" id="preference2" name="preferences[]" value="preference2"><label for="preference2">Stereo System</label></li>
                <li><input type="checkbox" id="preference3" name="preferences[]" value="preference3"><label for="preference3">Wi-Fi</label></li>
              </ul>
  
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>



<div id="bill-container">
    <?php
    if (isset($_POST['submit'])) {

        $selectedBoat = '';

        // here we use switch to know the name of the boat from thier value
        switch ($boatName) {
            case '10000':
                $selectedBoat = 'Boat 1';
                break;
            case '15000':
                $selectedBoat = 'Boat 2';
                break;
            case '20000':
                $selectedBoat = 'Boat 3';
                break;
            case '8000':
                $selectedBoat = 'Boat 4';
                break;
            case '2000':
                $selectedBoat = 'Boat 5';
                break;
            case '5000':
                $selectedBoat = 'Boat 6';
                break;
        }


        // display all calculate info 
        echo '<hr>';
        echo '<h3>Bill</h3>';
        echo '<div id="boat-info">';
        echo '<p id="boat-name-info">Boat Name: ' . $selectedBoat . '</p>';
        echo '<p id="boat-price-info">Boat Price: $' . number_format($boatPrice, 2) . '</p>';
        echo '</div>';
        echo '<div id="total-price">';
        echo '<label for="final-price">Total Price:</label>';
        echo '<p id="final-price">$' . number_format($totalPrice, 2) . '</p>';
        echo '</div>';
    }
    ?>
</div>

</div>







<script>
       function updateReturnDate() {
          // Get the number of days and return date input elements
          var numDaysSelect = document.getElementById("num-days");
          var returnDateInput = document.getElementById("return-date");
          
          // Parse the number of days and pickup date
          var numDays = parseInt(numDaysSelect.value);
          var pickupDate = new Date(document.getElementById("pickup-date").value);
          
          // Calculate the return date by adding the number of days to the pickup date
          var returnDate = new Date(pickupDate);
          returnDate.setDate(pickupDate.getDate() + numDays);
          
          // Set the return date input value and maximum date
          returnDateInput.value = returnDate.toISOString().split("T")[0];
          returnDateInput.max = returnDate.toISOString().split("T")[0];
  }
  </script>



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
