<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes </title>
    <!--Connection established between index and css. -->
    <link rel="stylesheet" href="css/style.css">


<script src="js/cdn.jsdelivr.net_npm_swiper@10.2.0_swiper-bundle.min.js"></script>
    
     <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="css/cdn.jsdelivr.net_npm_swiper@10_swiper-bundle.min.css" />
    
    <!--Fonts has been added. -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Sue+Ellen+Francisco&family=Ysabeau+Office:wght@700&display=swap" rel="stylesheet">

     <!--The library for icons has been added. -->
    <script src="https://kit.fontawesome.com/2b5efb2471.js" crossorigin="anonymous"></script>
</head>

<body>

    <section id ="navbar">
        <!--Navbar is created. -->
         <div id ="logo">itsmevsyellow </div>
        
        <nav>
            <a href="index.php">Home</a>
            <a href="">Recipes </a>
            <a href="About.php" >About </a>
            <a href="Contact.php">Contact</a>

        </nav>
    </section>

    <!--Recipes section. -->
    <section id="recipes">
        <div class="card-container">
            <div class="card">
            
              <a href="OatmealYoghurt.php">
                <img src="images/strawberry.jpeg" alt="" class="card-img">
             </a>
              <div class="card-content">
                <h2>Oatmeal with Yoghurt and Berries </h2>
               
                <a href="#">See more...</a>
              </div>
            </div>

            <div class="card">

              <a href="CloudCake.php">
                <img src="images/cake.jpeg" alt="" class="card-img">
             </a>
              <div class="card-content">
                <h2>Zero Cloud Cake</h2>
              
                <a href="#">See more...</a>
                </div>
              </div>

            <div class="card">
             
              <a href="Tomatomlette.php">
                <img src="images/omlet.jpeg" alt="" class="card-img">
             </a>
              <div class="card-content">
                <h2>Tomato Omlette</h2>
                <a href="#">See more...</a>

              </div>
            </div>
            
            <div class="card">
              <a href="ZucchiniSpagetti.php">
                <img src="images/kabak.jpeg" alt="" class="card-img">
             </a>
              <div class="card-content">
                <h2>Zucchini Spagetti with Bolognese</h2>
               
                <a href="#">See more...</a>
              </div>
            </div>
          </div>


          <div class="card-container">
            <div class="card">
               
              <a href="FrenchChicken.php">
                <img src="images/tavuk.jpeg" alt="" class="card-img">
             </a>
              <div class="card-content">
                <h2>French Chicken with Yoghurt Sause
                </h2>
                
                <a href="">See more...</a>

                </div>
              </div>
              
              <div class="card">
                <a href="SweetsourCookies.php">
                  <img src="images/üzümlü.jpeg" alt="" class="card-img">
               </a>
                <div class="card-content">
                  <h2>Sweetsour Cookies
                  </h2>
                 
                  <a href="#">See more...</a>
                  

                </div>
              </div>
              
              <div class="card">
            
                <a href="Pomegra-lemonate.php">
                  <img src="images/pomegranate.jpeg" alt="" class="card-img">
               </a>
              
                <div class="card-content">
                  <h2>Pomegra-Lemonade</h2>
                  <a href="#">See more...</a>

                </div>
              </div>


              <div class="card">
                <a href="breakfsat.php">
                  <img src="images/breakfast.jpeg" alt="" class="card-img">
               </a>
                <div class="card-content">
                  <h2>Easy and Quick Breakfast Recipes</h2>
                 
                  <a href="#">See more...</a>
                  
 
                </div>
              </div>
  
  
          </div>
    </section>
</body>
</html>

<?php
include("connection.php")
?>