<?php
 $response ="";
 $server="localhost";
 $username="root";
 $password="";
 $database="zalego";

  $conn=mysqli_connect($server,$username,$password,$database);

   if(isset($_POST['submitbutton']))
{
      //fetch form data
      
      $fullname=$_POST['fullname'];
      $phonenumber=$_POST['phonenumber'];
      $email=$_POST['email'];
      $gender=$_POST['gender'];
      $course=$_POST['course'];

      //submit form data

       $insertdata=mysqli_query($conn,"INSERT INTO 
       enrollment(fullname,phonenumber,email,gender,course)VALUES('$fullname','$phonenumber','$email','$gender','$course')");

  
  
      if($insertdata)
        {
         $response = "Succeess";
         }
    else{
        $response = "Invalid" .mysqli_error($conn);
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
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Register now</title>
</head>
<body>
     <!-- navigation bar here -->
  <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
    <div class="container-fluid">
       <a href="#" class="navbar-brand">
        Zalego Academy
       </a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbardisplaynavigations" aria-expanded="false">
           <span class="navbar-toggler-icon"></span>
       </button>    


       <div class="collapse navbar-collapse" id="navbardisplaynavigations">
          <div class="navbar-nav">
            <a href="index.php" class="nav-link">Home</a>
            <a href="aboutus.php" class="nav-link">About us</a>
            <button class="btn btn-primary">
            <a href="enroll.php" class="nav-link active">
                Register now
            </a>
            </button>
          </div>
        </div>
     </div>

  </nav>
  <!-- End navigation bar -->
  <br>

  <div class="container">
    <main class="p-5 mb-4 text-bg-secondary rounded-3">
          <h1 class="text-dark">
            
      JULY SOFTWARE ENGINEERING BOOTCAMP

   </h1>
   
    <span><i class="fa fa-calendar fa-4x">
    
    </i></span>
    <span>20th July 2022</span>

<br>


    <span><i class="fa fa-map-marker fa-4x"></i></span>
    <span>Zalego Academy, Devan Plaza
    </span>

</main>
    </div>
    <p class="text-center">
        Looking for a place to kickstart your carrer in technology?
        Whether you're a local, new in town or just cruising through we've got loads
        of great tips and events for you.
    </p>


<center>
    <h1>
     Sign up today?
     </h1>
</center>    
    
        </div>
<form action="enroll.php" method="POST">
    <div class="row">
        <div class="mb-3 col-lg-6">
            <label for="fullname" class="form-label">
                <b>
                Full Name
                </b>
            </label>
            <input type="text" name="fullname" class="form-control" placeholder="Enter your first Name">
        </div>
        <div class="mb-3 col-lg-6">
            <label for="phone" class="form-label">
                <b>
                Phone Number
                </b>
            </label>
            <input type="tel" name="phonenumber" class="form-control" placeholder="Enter your last name">
        </div>
    
        <div class="mb-3 col-lg-6">
            <label for="email" class="form-label"3>
                <b>
                Email
                </b>
            </label>
            <input type="email" name="email" class="form-control" placeholder="Enter your email address">
        </div>
        <div class="mb-3 col-lg-6">
            <label for="gender"  class="form-label">
                  <b>
                What's your gender
                  </b>            
            </label>
            <select name="gender" class="form-control" id="">
                <option value="--select your gender--">--select your gender--</option>
                <option value="male">male</option>
                <option value="female">female</option>
                <option value="rather not say">rather not say</option>
            </select>
        </div>
             
               <p class="text-center">
                In order to complete your registration to the bootcamp,you are required to select one course you will be
                undertaking, Please NOTE that this will be your learning track during the 2-weeks immersion.
               </p>
        <div class="mb-3 col-lg-6">
                <label for="course"  class="form-label">
                   <b> 
                    What's your preferred course?
                </b>              
                </label>
                <select name="course" class="form-control" id="">
                    <option value="--select your course--"> <b>--select your course-- </b> </option>
                    <option value="software development">Software development</option>
                    <option value="cyber security">cyber security</option>
                    <option value="android design">android design</option>
                </select>
        
        </div>
        <p class="text-center">
            You agree by providing your information you understand all our data privacy
            and protection policy outlined in our Terms $ condition and the privacy statement. 
        </p>
    <br>

        <input type="checkbox">
        <span>
            <b> 
            Agree to terms and conditions
        </b>
    
        
      </span>       
        <div class="mb-3 col-lg-6">
        <button type="submit" name="submitbutton" class="btn btn-primary">Submit application</button> 
        </div> 
  <p class="text-center">
       Subscribe to get information, latest news about
                   Zalego Academy
  </p>

    <div class="row">
    <div class="mb-3 col-lg-6">
           <label for="email" class="form-label">Email</label>
           <input type="email" name="email" class="form-control" placeholder="your email address">
           <button type="submit" name="submitbutton" class="btn btn-primary">subscribe</button>  
    </div>  
 </div> 

</form>
            
        
        <hr>

        <footer>
           &copy; Company2022
        </footer>




















    <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
    <!-- <script src="bootstrap-5.2.0/js/bootstrap.bundle.js"></script> -->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

</body>
</html>