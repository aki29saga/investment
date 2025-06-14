<?php include 'header.php';
include_once "backend/includes/login.inc.php";

if(logged_in()) {
    redirect("admin.php");
}
?>

<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">



          <!-- End Logo -->
        
          <div class="card mb-3">

            <div class="card-body">
            <center>
              <div class="pt-4 pb-2">
                <img src="assets/img/tio-logo3.png" alt="" width="100" height="100" srcset="">
                <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                <p class="text-center small">Enter your email & password to login</p>
              </div>
            </center>
            <?php display_message(); ?>
              <form class="row g-3 needs-validation" novalidate  method="post">

                <div class="col-12">
                  <label for="yourUsername" class="form-label">Email</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" name="email" class="form-control" id="yourUsername" required>
                    <div class="invalid-feedback">Please enter your email.</div>
                  </div>
                </div>

                <div class="col-12">
                  <label for="yourPassword" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="yourPassword" required>
                  <div class="invalid-feedback">Please enter your password!</div>
                </div>

                <div class="col-12">
                  <div class="form-check">
                    <div class="checkbox">
                      <label>
                        <input id="remember" type="checkbox" name="remember" value="1"> Remember me
                      </label>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-success w-100"  type="submit">Login</button>
                  <hr>
                 <a href="register.php"> <button class="btn btn-secondary w-100" >Create Account</button></a>
                </div>

              </form>

            </div>
          </div>

       

        </div>
      </div>
    </div>


  </section>

  
    
    
   
    </center><!-- End General Form Elements -->

    
<style>
  body{
    background-color:black;
  }
</style>
<?php include 'footer.php'; ?>