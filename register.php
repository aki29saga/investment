<?php 
include_once 'header.php'; 
include_once 'backend/includes/register.inc.php';
?>

<div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

<br>
<br>

          <!-- End Logo -->
          
          <div class="card mb-3">

            <div class="card-body">
<div class="row">
         <div class="col-md-12">
          
         </div>
       </div>
       <center>
       <img src="assets/img/tio-logo3.png" alt="" height="100" width="100">
     
     
     <h5 class="card-title text-center pb-0 fs-4">Create Your Account</h5>
               <p class="text-center small">Enter your details to create an Account with us</p>
     <div>
     <a href="#" class="google" ><i class="bi bi-google" style="size: 100px;"></i></a> <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
     
   </div>
   <h4>or</h4>
   </center>
   
   <center>
   <?php display_message(); ?>
           <!-- General Form Elements -->
   <form  method="POST" action="backend/includes/register.inc.php" enctype="multipart/form-data" >
     <div class="row mb-3">
    <center>
       <div class="col-sm-10">
         
      <img src="uploads/profile.jpg" id="preview" class="img-thumbnail" alt="Preview Image">
         <br>
         <input type="file" class="form-control" name="profile_pic" accept="image/*" onchange="previewImage(event)" placeholder="profile pic">
        
         
       
       </div>
     </div>
     <div class="row mb-3">
       
       <div class="col-sm-10">
         <input type="text" name="username" class="form-control" placeholder="Username">
       </div>
     </div>

     <div class="row mb-3">
       
       <div class="col-sm-10">
         <input type="email" name="email" class="form-control" placeholder="Email">
       </div>
     </div>       
        
     <div class="row mb-3">
    
       <div class="col-sm-10">
         <input type="password" name="password" id="password" class="form-control" placeholder="Password">
       </div>
     </div>
     <div class="row mb-3">

       <div class="col-sm-10">
         <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password">
       </div>
     </div>
     <div>
       <div class="col-12">

         <button name="submit" type="submit" class="btn btn-success w-100" >Create Account</button>
         <br></form>
         <hr>
         <a href="dashboard/login.php"><button class="btn btn-secondary w-100" >log in</button></a>
       </div>
     </div>
   
</center>
   
         </div>
</div>
        </div>
      </div>
</div>
         
    <script>
      var password = document.getElementById("password")
      , confirm_password = document.getElementById("confirm_password");
    
      function validatePassword(){
        if(password.value != confirm_password.value) {
          confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
          confirm_password.setCustomValidity('');
        }
      }
    
      password.onchange = validatePassword;
      confirm_password.onkeyup = validatePassword;
    </script>
    
    
       
       <script type="text/javascript">
          function previewImage(event) {
             var input = event.target;
             var image = document.getElementById('preview');
             if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                   image.src = e.target.result;
                }
                reader.readAsDataURL(input.files[0]);
             }
          }
       </script>
       <style>
          #preview {
             width: 150px;
             height: 150px;
         border-radius:50%;
          }
          body{
            background-color:black;
          }
       </style>
   
<?php include 'footer.php';?>