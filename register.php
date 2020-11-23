<?php
include('includes/config.php');
$page_title = "Register page";
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('includes/partials/head.php'); ?>
  <link rel="stylesheet" href="assets/css/register.css">
</head>
<body>
  
  <div class="r-page-wrapper">

    <!-- Navigation bar AREA -->
    <?php include('includes/partials/header.php'); ?>

    <!-- Form AREA -->
    <div class="r-form-wrapper">
      <form action="https://formspree.io/f/mqkgewra" method="POST">
        <fieldset>
          <!-- Register TITLE -->
          <legend class="register-title">R<span class="underline">egister No</span>w</legend>
          
          <div class="input-box">
            <label for="email" class="form-label">Email</label> 
            <input type="email" id="email" name="email" placeholder="Email" class="input-text-r" required>
            <i class="far fa-envelope"></i>
          </div>

          <div class="input-box">
            <label for="password" class="form-label">Password</label> 
            <input type="password" id="password" name="password" placeholder="Password" class="input-text-r" required>
            <i class="fas fa-lock"></i>
          </div>

          <div class="input-box">
            <label for="cpassword" class="form-label">Confirm Password</label> 
            <input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password" class="input-text-r" required>
            <i class="fas fa-lock"></i>
          </div>
          <input type="submit" value="COMPLETE" class="r-submit-btn">
        </fieldset>
      </form>

      
    </div>
    <!-- Footer AREA -->
    <?php include('includes/partials/footer.php'); ?>
  </div>
  
</body>
</html>