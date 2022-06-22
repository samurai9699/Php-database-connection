 <?php
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn=mysqli_connect($server,$username,$password,$database);

if(isset($_POST['submitbutton']))
{
    //fetch form data
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname';]
    $email=$_POST['email'];
    $phonenumber=$_POST['phonenumber'];
    $message=$_POST['message'];
    //submit form data

    $insertdata=mysqli_query($conn,"INSERT INTO contactus(firstname,lastname,email,phonenumber,message)VALUES('$firstname','$lastname','$email','$phonenumber','$message')");

  

    if($insertData)
    {
        echo "Data submitted successfully";
    }
    else{
        echo "Error occured";
    }
 }

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">


    <title>Bootstrap Grid Layout</title>
</head>
<body>
  <!-- navigation bar here -->
  <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
    <div class="container-fluid">
       <a href="#" class="navbar-brand">The Boondocks</a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbardisplaynavigations" aria-expanded="false">
           <span class="navbar-toggler-icon"></span>
       </button>    


       <div class="collapse navbar-collapse" id="navbardisplaynavigations">
          <div class="navbar-nav">
            <a href="Aboutus.html" class="nav-link active">Home</a>
            <a href="#" class="nav-link">About Us</a>
            <a href="#" class="nav-link">Contact Us</a>
          </div>
        </div>
     </div>

  </nav> -->
  <!-- End navigation bar -->
   <br>



    <div class="container">
      <main class="p-5 mb-4 bg-light rounded-3">
           <h1 class="text-dark">
               <i>
               Welcome, Samurai Muriithi
               </i>
           </h1>
           <p class="text-dark">
               Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa eaque impedit dolores. Necessitatibus dolor quasi, cum perferendis natus quam nemo, facilis cumque illum minus repellat fuga qui, fugiat quidem ratione.
            </p>
            <button class="btn btn-primary">Learn more</button>
      </main>
      <div class="container">
          <div class="row">
        
              <div class="col-lg-4">
                  <h1>
                      yokohama
                  </h1>
                  <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, magni. Ducimus dolor sequi quam at, eos recusandae tempora fugit qui? Voluptates, aliquam culpa molestiae unde pariatur perspiciatis explicabo, iure nemo officiis beatae odit velit eveniet fugiat rem. Culpa, voluptatum enim?
                  </p>
                  <button class="btn btn-primary">
                      Learn More
                  </button>
                  </div>
                  <div class="col-lg-4">
                    <h1>
                        shinagawa
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, magni. Ducimus dolor sequi quam at, eos recusandae tempora fugit qui? Voluptates, aliquam culpa molestiae unde pariatur perspiciatis explicabo, iure nemo officiis beatae odit velit eveniet fugiat rem. Culpa, voluptatum enim?
                    </p>
                    <button class="btn btn-primary">
                        Learn More
                    </button>
                    </div>
                    <div class="col-lg-4">
                        <h1>
                            shinjuku
                        </h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, magni. Ducimus dolor sequi quam at, eos recusandae tempora fugit qui? Voluptates, aliquam culpa molestiae unde pariatur perspiciatis explicabo, iure nemo officiis beatae odit velit eveniet fugiat rem. Culpa, voluptatum enim?
                        </p>
                        <button class="btn btn-primary">
                            Learn More
                        </button>
                        </div>
            
    
    
    </div>
    <br>
          <!-- contact us page here -->
          <div class="row pt-5">
            <h1>Contact us</h1>
            <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor earum nihil dicta odit cumque, molestias voluptatum? Debitis id nam saepe.
            </p>
             
        <form action="index.php" method="POST">
                <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" name="firstname" class="form-control" placeholder="Enter your first Name">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" name="lastname" class="form-control" placeholder="Enter your last name">
                    </div>
                
                    <div class="mb-3 col-lg-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter your email address">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="phone" class="form-label">Phone number</label>
                        <input type="tel" name="phonenumber" class="form-control" placeholder="enter your phone number">
                    </div>
                      <div class="mb-3 col-lg-12">
                       <label for="message" name="message" class="form-label">Your Message</label>
                       <textarea cols="30" rows="5" class="form-control"></textarea>
                      </div>
    


            </div>    
            <button type="submit" name="submitbutton" class="btn btn-primary">Send a Message</button>  
     </form>

          </div>
         <!-- End contact us page -->
        



    <hr>
    <footer>
        &copy; samurai2022
    </footer>
</div>
    <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
    <script src="bootstrap-5.2.0/js/bootstrap.bundle.js"></script>
    
</body>
</html>