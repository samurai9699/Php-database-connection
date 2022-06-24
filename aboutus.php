<?php
$server='localhost';
$username='root';
$password='';
$database='zalego';

$dbconnect=mysqli_connect($server,$username,$password,$database);

if(isset($_POST['submitbutton'])) 
 {
         $email=$_POST['email'];

        $emaildata=mysqli_query($conn, "INSERT INTO 
           subscribers(email)VALUES('$email')");
      

         if($emaildata)
      {
     echo 'SUCCESS';
      }
       else
      {
         echo 'INVALID';
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
    <link rel="stylesheet" href="syle.css">
    <a href="index.php"></a>
    <title>About Us</title>
</head>
<body>
    <!-- navigation bar here -->
  <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
    <div class="container-fluid">
       <a href="#" class="navbar-brand">Zalego Academy</a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbardisplaynavigations" aria-expanded="false">
           <span class="navbar-toggler-icon"></span>
       </button>    


       <div class="collapse navbar-collapse" id="navbardisplaynavigations">
          <div class="navbar-nav">
            <a href="#" class="nav-link">Home</a>
            <a href="aboutus.php" class="nav-link active">About us</a>
            <a href="#" class="nav-link">Register now</a>
          </div>
        </div>
     </div>

  </nav>
  <!-- End navigation bar -->
  <br>



       <div class="container">
              <main class="p-5 mb-4 bg-light rounded-3">
                    <h1 class="text-dark">
                    <i>
                About Us
                 </i>
             </h1>
             <p>
                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore nam exercitationem, ullam quasi sit quam corrupti ratione! Consequatur earum qui cum provident voluptas quas suscipit?
             </p>
        </main>
              </div>

                <div class="row">
                    <div class="mb-3 col-lg-6">
                        <h1>
                            Our Program
                        </h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, magni. Ducimus dolor sequi quam at, eos recusandae tempora fugit qui? Voluptates, aliquam culpa molestiae unde pariatur perspiciatis explicabo, iure nemo officiis beatae odit velit eveniet fugiat rem. Culpa, voluptatum enim?

                        </p>
                    </div>
                        <div class="col-lg-6">
                        <img src="images/pro.jpg" alt="program">                     
                    </div>
                </div>
                        
                 <h2>
                     The Programs
                 </h2>
                 <br>

                   <br>
                <div class="col-lg-4">
                    <div class="card border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-body">
          
                       <h5 class="card-title">Skill Discovery</h5>
                       <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, earum!</p>
                       <a href="#" class="btn btn-primary">View Details</a>
                 </div>
             </div>
        </div>
            <br>
            

                 <br> 
            <div class="col-lg-4">
                <div class="card border-dark mb-3" style="max-width: 18rem;">
                <div class="card-body">
            
                  <h5 class="card-title">Upskilling Program</h5>
                   <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, maiores.</p>
                   <a href="#" class="btn btn-primary">View Details</a>
                </div>
            </div>
         </div>

        <br>

                 <br>
            <div class="col-lg-4">
                <div cl.ass="card border-dark mb-3" style="max-width: 18rem;">
                <div class="card-body">
                   <h5 class="card-title">Path Finding Program</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, maiores.</p>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
            </div>
          </div>
        <br> 


        <form action="aboutus.php" method="POST">
            <div class="row">
            <div class="mb-3 col-lg-6">
                   <label for="email" class="form-label">Email</label>
                   <input type="email" name="email" class="form-control" placeholder="your email address">
            </div>  
         </div> 

         <br>    
       <button type="submit" name="submitbutton" class="btn btn-primary">subscribe</button>  
</form>
                    
                
                <hr>
    
                <footer>
                   &copy; Company2022
                </footer>
</div>
















             <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>   
             <!-- <script src="bootstrap-5.2.0/js/bootstrap.bundle.js"></script> -->
             <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
</body>
</html>