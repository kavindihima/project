<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Our Services</title>
   <link rel="stylesheet" href="service.css">
</head>
<body>
<section class="page-title">
      <h1>Type of vehicals</h1>
      <p>We offer a range of quality services to meet your needs.</p>
   </section>

   <!-- Services Section -->
   <section class="services">
    
   <div class="service-item">
      <div class="order-btn-container">
         <img src="images/minicar.jpg" alt="Service 2">
         <h3>flex</h3>
      <button class="btn" onclick="redirectToLogin()">Book Now</button> <!-- Button Outside Navbar -->
         <p>Price:Rs.7000.00 per day</p>
         <p>Persons:3</p>

      </div>
</div>


      <div class="service-item">
      <div class="order-btn-container">
         <img src="images/car31.jpg" alt="Service 2">
         <h3>Mini Car</h3>
      <button class="btn" onclick="redirectToLogin()">Book Now</button> <!-- Button Outside Navbar -->
      <p>Price:Rs.7000.00 per day</p>
         <p>Persons:3</p>

      </div>
</div>


<div class="service-item">
      <div class="order-btn-container">
         <img src="images/car31.jpg" alt="Service 2">
         <h3>Car</h3>
      <button class="btn" onclick="redirectToLogin()">Book Now</button> <!-- Button Outside Navbar -->
      <p>Price:Rs.7000.00 per day</p>
         <p>Persons:4</p>

      </div>
</div>


<div class="service-item">
      <div class="order-btn-container">
         <img src="images/minivan.jpg" alt="Service 2">
         <h3>Mini Van</h3>
      <button class="btn" onclick="redirectToLogin()">Book Now</button> <!-- Button Outside Navbar -->
      <p>Price:Rs.7000.00 per day</p>
         <p>Persons:5</p>

      </div>
</div>

<div class="service-item">
      <div class="order-btn-container">
         <img src="images/van.png" alt="Service 2">
         <h3>Van</h3>
      <button class="btn" onclick="redirectToLogin()">Book Now</button> <!-- Button Outside Navbar -->
      <p>Price:Rs.7000.00 per day</p>
      <p>Persons:10</p>
      </div>
</div>
</section>




 
      <script src="scripts.js"></script>

<script>
   // Function to redirect to the login page when the Order button is clicked
   function redirectToLogin() {
      window.location.href = 'login_form.php'; // Redirects to login_form.php
   }
</script>


    
 



   
 
   </body>
</html>
