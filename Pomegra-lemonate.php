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
                <img src="images/pomegranate-lemonade.png" alt="">
            </div>
            
            <div id="title-meal-souffle"> 
             <h1>Pomegra-Lemonade</h1>
             </div>
 
             <div id="meal-parapraph-lemonade">
                <p id="entrance">Let’s say hello to summer with a super delicious and diet-friendly lemonate. Sorry, pomegralemonate!
                    You may find it slightly challenging to make but it will worth it!</p>
             </div>
            <div class="grid-container">
             <div id="meal-ingredients">
                 <h1 id="Ingredients">Ingredients</h1>
                 <ul id="recipe-steps">
                    <li>Pomegranate tea</li>
                    <li>20 g honey</li>
                    <li>2 lemons</li>
                    <li>2 teaspoons of sugar</li>
                    <li>2 lt water</li>
                  </ul>
                  
                </div>
                <div id="recipe-make">
                  <p>First, zest the lemons. Add sugar and honey and mix it well. Then, add some hot water which gives extra aroma. After that, you can add lemon juice, cold water and pomegranate tea. Here we are… That’s all you need to do. ☺️Now, serve it with ice cubes and enjoy your semi-scarlet lemonate.  </p>
                  <p>📍 Of course, you can add extra sugar and decide the sweetness of your own lemonate. However, I want to keep it healthy and diet-friendly as much as possible. And also I love sour things </p>
                  <p>📍 If you worry about sugar intake, then don’t. You’re free not to use any sugar. But remember sugar may help you double the lemon taste and the smell . That’s why I recommed you using a little bit sugar rather than not using any.</p>
                </div>
            
            

            </div>
        </div>


    </section>


    
</body>
</html>

<?php
include("connection.php")
?>