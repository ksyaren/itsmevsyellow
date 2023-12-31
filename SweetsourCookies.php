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
                <img src="images/Sweetsour.png" alt="">
            </div>
            
            <div id="title-meal-cookie"> 
             <h1>Sweetsour Cookies</h1>
             </div>
 
             <div id="meal-parapraph-cookie">
                <p id="entrance">Have you ever tried my beautiful  sweet sour cookies before? If your answer is no, I highly recommend you not to spend one more day without tasting them. C’mon. It is time to go to the kitchen and start some baking…
                </p>
             </div>
            <div class="grid-container">
             <div id="meal-ingredients">
                 <h1 id="Ingredients">Ingredients</h1>
                 <ul id="recipe-steps">
                    <li>2 eggs</li>
                    <li>4 heaping tablespoons of coconut sugar</li>
                    <li>50 ml coconut oil</li>
                    <li>Lemon zest</li>
                    <li>2 or 3 tablespoon of lemon juice</li>
                    <li>1 teaspoon of baking powder</li>
                    <li>1 teaspoon of vanilla sugar</li>
                    <li>225 g flour</li>
                    <li>80 g dark chocolate</li>
                    <li>Powdered sugar for topping</li>
                    
                   
                  </ul>
                </div>
                <div id="recipe-make-cookie">
                  <p>Beat the eggs with coconut sugar and add lemon zest and coconut oil into the mixture.  </p>
                  <p>Then, add dry ingredients and fold it with a spoon until it turns into a soft dough.</p>
                  <p>Add chocolate chunks and fold it again. </p>
                  <p>Form the dough into balls using a cookie scoop or tablespoon, then roll them in powdered sugar.</p>
                  <p>Bake in a preheated oven at 180 degrees for 10 minutes.</p>
                </div>
            
            

            </div>
        </div>


    </section>


    
</body>
</html>

<?php
include("connection.php")
?>