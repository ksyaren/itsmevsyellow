<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>itsmevsyellow </title>
    <!--Connection established between index and css. -->
    <link rel="stylesheet" href="css/style.css">

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
            <a href="Recipes.php" >Recipes </a>
            <a href="About.php" >About </a>
            <a href="Contact.php">Contact</a>

        </nav>
    </section>

    <section id="Meals">
      
        <div id="meals-container">
            <div id="meal-image">
                <img src="images/cloudcake.png" alt="">
            </div>
            
            <div id="title-meal-cake"> 
             <h1>Zero Cloud Cake</h1>
             </div>
 
             <div id="meal-parapraph-cake">
                <p id="entrance">NO sugar NO flour but it’s as soft as cloud… 
                    I have a very delicious recipe for you to enjoy with your coffee.  
                    Hey, don’t worry. I said “no sugar”, not “no sweet”</p>
             </div>
            <div class="grid-container">
             <div id="meal-ingredients">
                 <h1 id="Ingredients">Ingredients</h1>
                 <ul id="recipe-steps">
                    <li>3 eggs</li>
                    <li>4 tablespoons of coconut oil </li>
                    <li>50 ml milk</li>
                    <li>1 tablespoon of cacao powder</li>
                    <li>3 tablespoons of carob flour</li>
                    <li>3 tablespoons of carob molasses</li>
                    <li>3,4 tablespoons of oat flour </li>
                    <li>1 tablespoon of almond flour</li>
                    <li>1 teaspoon of baking powder</li>
                    
                  </ul>
                </div>
                <div id="recipe-make-cake">
                  <p>Beat the eggs well and pour oil and molasses and mix. Then, add dry ingredients and mix again. </p>
                  <p> Let me warn you here: If you really want a cake with zero sugar, make sure to use sugar-free carob molasses. </p>
                  <p>Also, the consistency will be very soft, please do not add extra flour :D But if you wish some crunchiness, you can add extra hazelnuts or walnuts to the mixture.</p>
                  <p>Pour the mixture into a square pan, bake at 150C for 20 minutes. You can serve warm. Enjoy your own cloud cake.</p>
                </div>
            
            

            </div>
        </div>


    </section>


    
</body>
</html>

<?php
include("connection.php")
?>