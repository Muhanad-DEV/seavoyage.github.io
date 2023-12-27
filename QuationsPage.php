<!DOCTYPE html>
<html>
    <head>
        <title> Questionnaire </title>



        <link rel="stylesheet" href="project.css">
        <style>


            .contact-form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
                .container{
            max-width: 1170px;
            margin: auto;
            background-color: rgba(1,32,46,255);
        }

            #container{
                background-color: rgba(1,32,46,255);

            }

        </style>
        
        
    </head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <header>
      
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
    </header>

   
<body style=" background-color: rgba(1,32,46,255);">







           
    <div class="container">
        <section class="rounded" style="background-color: azure; padding: 10%; margin: 20%;">
    
          <div class="container rounded" style="background-color: azure;">
            <h1 style="color: black; text-align: center; font-weight: bolder;">Fill Up The Following Questions</h1><br>
            <div class="symbols rounded" style="color: black; background-color: azure;"></div>
            <hr>
    
            <form id="questionnaireForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    
              <br>
              <h5 style="font-weight: bolder;">Provide Your Personal Information</h5>
              <div class="row g-3">
                <div class="col">
                  <input type="text" name="userFNM" class="form-control error" placeholder="Enter Your First Name" aria-label="Your First Name" required id="firstNameInput">
                </div>
                <div class="col">
                  <input type="text" name="userSNM" class="form-control error" placeholder="Enter Your Last Name" aria-label="Your Last Name" required id="lastNameInput">
                </div>
              </div>
              <hr>
    
              <div class="mb-3">
                <input type="email" name="userMail" class="form-control error" id="emailInput" placeholder="Enter Your Email" required>
              </div>
    
              <hr>
    
              <h5 style="font-weight: bolder;">Select The Organization You Are Representing</h5>
              <select aria-label="Disabled select examples" name="orgRepresenting" class="form-select" required>
                <option selected>Select The Organization</option>
                <option value="1st">Limited Company</option>
                <option value="2nd">International Port</option>
                <option value="3rd">Government</option>
                <option value="4th">Military</option>
                <option value="5th">Tourist</option>
                <option value="6th">Sales Commission</option>
                <option value="7th">International Institution</option>
              </select>
    
              <br>
              <br>
    
              <h5 style="font-weight: bolder;">Select Your Field Of Interest</h5>
                <select aria-label="Boat Rental Categories" name="fieldOfInterest" class="form-select">
                    <option selected>Choose Your Boat Rental Interest</option>
                    <option value="1st">Fishing Boats</option>
                    <option value="2nd">Leisure Cruisers</option>
                    <option value="3rd">Speedboats and Jet Skis</option>
                    <option value="4th">Yachts and Luxury Boats</option>
                    <option value="5th">Canoe and Kayak Rentals</option>
                    <option value="6th">Pontoon and Party Boats</option>
                    <option value="7th">Other Types</option>
                </select>

    
              <br>
              <hr>
    
              <h5 style="font-weight: bolder;">What kind of services did we provide you?</h5>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="serviceSelection" id="BoatRentals">
                <label class="form-check-label" for="BoatRentals">Boat Rentals</label><br>
                <input class="form-check-input" type="checkbox" name="serviceSelection" id="TripPlanning">
                <label class="form-check-label" for="TripPlanning">Trip Planning</label><br>
                <input class="form-check-input" type="checkbox" name="serviceSelection" id="Excursions">
                <label class="form-check-label" for="Excursions">Excursions</label><br>
                <input class="form-check-input" type="checkbox" name="serviceSelection" id="WatercraftHire">
                <label class="form-check-label" for="WatercraftHire">Watercraft Hire</label><br>
            </div>
            
              <hr>
    
              <h5 style="font-weight: bolder;">How would you rate our services?</h5>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="serviceRating" id="ratingExcellent" value="excellent" required>
                <label class="form-check-label" for="ratingExcellent">Excellent</label><br>
                <input class="form-check-input" type="radio" name="serviceRating" id="ratingGood" value="good" required>
                <label class="form-check-label" for="ratingGood">Good</label><br>
                <input class="form-check-input" type="radio" name="serviceRating" id="ratingAverage" value="average" required>
                <label class="form-check-label" for="ratingAverage">Average</label><br>
                <input class="form-check-input" type="radio" name="serviceRating" id="ratingPoor" value="poor" required>
                <label class="form-check-label" for="ratingPoor">Poor</label><br>
              </div>
              <hr>
    
              <div class="mb-3">
                <textarea class="form-control" name="userFeedback" id="feedbackInput" rows="3" placeholder="Enter Your Feedback"></textarea>
              </div>
    
              <button type="submit" class="btn btn-primary">Submit Feedback</button>
            </form>
    
            <br>
            <div id="formFeedback">

            <?php
                // Function to validate email format
                function isValidEmail($email)
                {
                    $emailRegex = '/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
                    return preg_match($emailRegex, $email);
                }

                // Define variables to hold validation errors
                $firstNameErr = $lastNameErr = $emailErr = '';

                // Define variables to hold form input values
                $firstName = $lastName = $email = '';

                // Process form submission
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    // Validate first name
                    if (empty($_POST['userFNM'])) {
                        $firstNameErr = 'Please provide your first name';
                    } else {
                        $firstName = $_POST['userFNM'];
                    }

                    // Validate last name
                    if (empty($_POST['userSNM'])) {
                        $lastNameErr = 'Please provide your last name';
                    } else {
                        $lastName = $_POST['userSNM'];
                    }

                    // Validate email
                    if (empty($_POST['userMail'])) {
                        $emailErr = 'Please provide your email';
                    } else {
                        $email = $_POST['userMail'];
                        if (!isValidEmail($email)) {
                            $emailErr = 'Please provide a valid email address';
                        }
                    }

                    // If there are no validation errors, process the form data
                    if (empty($firstNameErr) && empty($lastNameErr) && empty($emailErr)) {

                        echo '<h1>The feedback has been sent successfully</h1>';

                    }
                }
                ?>

            </div>
          </div>
    
        </section>
      </div>
    
      
      
    </body>
    </html>