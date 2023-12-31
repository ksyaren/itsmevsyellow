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
                <img src="images/oatmeal.png" alt="">
            </div>
            
            <div id="title-meal"> 
             <h1>Oatmeal with Yoghurt and Berries</h1>
             </div>
 
             <div id="meal-parapraph">
                <p id="entrance">Sometimes when I open my eyes in the morning,  I find myself gloomy. 
                     Those days I crave something delicious, sweet, fresh, but diet friendly.  
                     If you feel like me, I know exactly what you need: Oatmeal with yoghurt and berries. 
                     Delicious, sweet, fresh and diet friendly…
                     Bonus it is also super healthy.  </p>
             </div>
            <div class="grid-container">
             <div id="meal-ingredients">
                 <h1 id="Ingredients">Ingredients</h1>
                 <ul id="recipe-steps">
                    <li>3 tablespoons of yoghurt</li>
                    <li>2 tablespoons of oatmeal</li>
                    <li>Berries you like</li>
                    <li>Walnut</li>
                    <li>Cinnamon</li>
                    
                  </ul>
                </div>
                <div id="recipe-make">
                  <p>Put yoghurt in a bowl and add oatmeal. Mix them well and set aside in the fridge for 30 minutes. When the mixture has a thicker consistency, add your favourite berries on it, which are strawberries and blueberries for me. </p>
                  <p>Sprinkle some cinnamon and walnut pieces. It is that easy to prepare such a delicious, sweet, fresh, healthy and diet friendly breakfast. Hope you like it.</p>
                
                </div>
            
            

            </div>
        </div>


    </section>


    
</body>
</html>


<?php
include("connection.php")
?>