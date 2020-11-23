<?php
include('includes/config.php');
$page_title = "Gallery page";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('includes/partials/head.php'); ?>
  <link rel="stylesheet" href="assets/css/gallery-style.css">
</head>
<body>

  <!-- Gallery page wrapper -->
  <div class="g-page-wrapper">

    <!-- Navigation bar AREA -->
    <?php include('includes/partials/header.php'); ?>
    
    <!-- Gallery Title -->
    <h1 class="gallery-title">T<span class="underline">he Garag</span>e</h1>

    <!-- Start of gallery section -->
    <div class="gallery-section">

      <figure>
        <img src="assets/img/car-1.jpg" alt="Car 1">
        <figcaption>Car 1</figcaption>
      </figure>

      <figure>
        <img src="assets/img/car-2.jpg" alt="Car 2">
        <figcaption>Car 2</figcaption>
      </figure>

      <figure>
        <img src="assets/img/car-3.jpg" alt="Car 3">
        <figcaption>Car 3</figcaption>
      </figure>

      <figure>
        <img src="assets/img/car-4.jpg" alt="Car 4">
        <figcaption>Car 4</figcaption>
      </figure>

      <figure>
        <img src="assets/img/car-5.jpg" alt="Car 5">
        <figcaption>Car 5</figcaption>
      </figure>

      <figure>
        <img src="assets/img/car-6.jpg" alt="Car 6">
        <figcaption>Car 6</figcaption>
      </figure>

      <figure>
        <img src="assets/img/car-7.jpg" alt="Car 7">
        <figcaption>Car 7</figcaption>
      </figure>

      <figure>
        <img src="assets/img/car-8.jpg" alt="Car 8">
        <figcaption>Car 8</figcaption>
      </figure>

      <figure>
        <img src="assets/img/car-9.jpg" alt="Car 9">
        <figcaption>Car 9</figcaption>
      </figure>

    </div>

    <!-- Footer AREA -->
    <?php include('includes/partials/footer.php'); ?>


  </div>
  
</body>
</html>