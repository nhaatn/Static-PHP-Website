<?php
include('includes/config.php');
$page_title = "Contact page";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('includes/partials/head.php'); ?>
  <link rel="stylesheet" href="assets/css/contact-style.css">
</head>
<body>

  <div class="contact-wrapper">

  <?php include('includes/partials/header.php'); ?>

    <section class="meet-team">

      <h1>M<span class="underline">eet The Tea</span>m</h1>

      <!-- Container holding ALL CARDS -->
      <div class="card-container">

        <!-- Card 1 -->
        <div class="card1">
          <div class="card1-image"></div>
          <div class="card1-text">
            <h2>Russell Williams</h2>
            <p class="job-title">Manager</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis ratione laudantium et, soluta
              obcaecati iste ipsum odio quas voluptates eveniet?</p>
          </div>

          <div class="card1-icon">
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-facebook-square"></i>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="card2">
          <div class="card2-image"></div>
          <div class="card2-text">
            <h2>Caitlyn Smith</h2>
            <p class="job-title">Receptionist</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis ratione laudantium et, soluta
              obcaecati iste ipsum odio quas voluptates eveniet?</p>
          </div>

          <div class="card2-icon">
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-facebook-square"></i>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="card3">
          <div class="card3-image"></div>
          <div class="card3-text">
            <h2>Austin Rivers</h2>
            <p class="job-title">Sales Lead</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis ratione laudantium et, soluta
              obcaecati iste ipsum odio quas voluptates eveniet?</p>
          </div>

          <div class="card3-icon">
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-facebook-square"></i>
          </div>
        </div>

      </div>

      
      <!-- Contact Form -->
      <form action="https://formspree.io/f/mqkgewra" method="POST">
        <fieldset>
        <!-- Contact Form TITLE -->
        <legend class="message-title">Leave Us A Message!</legend>
          <div>
              <label for="fname" class="form-label">Full Name</label> 
              <input type="text" id="fname" name="fullName" placeholder="What is your full name?" >
          </div>
          <div>
              <label for="email" class="form-label">Email</label> 
              <input type="email" id="email" name="email" placeholder="What is your email?">
          </div>
          <div>
              <label for="message" class="form-label">Leave your message</label> 
              <textarea name="message" id="message" cols="30" rows="10" placeholder="Leave your message here"></textarea>
          </div>
          <div>
            <input type="submit" value="Send" class="contact-submit-btn">
          </div>
       </fieldset>   
      </form>

    </section>

    <!-- Footer AREA -->
    <?php include('includes/partials/footer.php'); ?>

  </div>

</body>
</html>