<!DOCTYPE html>
<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<head>

    <style>
        .header {
            padding: 60px;
            text-align: center;
            background: #030d4d;
            color: white;
            font-size: 30px;
            }
            .content{padding: 20px;}



            .contact-form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>








    <link rel="stylesheet" href="project.css" >
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







        



        <div class="container" >
            <h2 class="text-center">Contact Us</h2>
            <div class="contact-form" style="background-color: azure;">
                    <form action="contact.php" method="post">  
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message:</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>



        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];

                $to = 'muhanadalmoon@gmail.com'; // Replace with your email address
                $subject = 'New Contact Form Submission';
                $body = "Name: $name\nEmail: $email\nMessage: $message";

                if (mail($to, $subject, $body)) {
                    echo 'Email sent successfully!';
                } else {
                    echo 'Failed to send email.';
                }
            }


            ?>


        <div class="header" style="background-color: rgba(1,32,46,255);">
            <h1>OUR INFORMATION</h1>
        </div>
        <div class="content">
            <p>We're here to help! Whether you have a question about our products or services, need assistance with an order, or simply want to say hello, we'd love to hear from you.
            </p>
            <p>there are a couple of ways to contact us:</p>
            <ul>
                <li>Phone :  +968 91162099</li>
                <li>
                    <footer>
                        <p>Email :
                        <a href="mailto:seavoyage@gmail.com">seavoyage@gmail.com</a></p>
                    </footer>
                    </li>
            </ul>
            <p>We respond to all inquiries within 24 hours during business hours (Monday-Friday, 9am-5pm PST).</p>
            <p>If you have a question about a specific product or service, please be sure to include the relevant information in your inquiry. This will help us to respond to your question as quickly and accurately as possible.</p>
            <p>We appreciate your feedback and suggestions. Please help us to improve our products and services by letting us know what you think.</p>
        </div>








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