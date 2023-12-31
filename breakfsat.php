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
                <img src="images/Breakfast.png" alt="">
            </div>
            
            <div id="title-meal"> 
             <h1>Easy and Quick Breakfast Recipes</h1>
             </div>
 
             <div id="meal-parapraph">
                <p id="entrance">Here are there easy, quick, delicious and healthy recipes 
                    that color your breakfast plates.</p>
             </div>
            <div class="grid-container">
             <div id="meal-ingredients">
                 <h1 id="Ingredients">Ingredients</h1>
                 <h2 id="salad-ingredients"> Purslane Salad with carrots</h2>
                 <ul id="salad-steps">
                    <li>1 carrot</li>
                    <li>2 small mushrooms</li>
                    <li>1 handful of purslane</li>
                    <li>Seasonings</li>
                  </ul>
                  <h2 id="egg-ingredients"> Egg with tomato</h2>
                    <ul id="egg-steps">
                        <li>1 tomato</li>
                        <li>2 eggs</li>
                        <li>Salt, mint, paprika</li>
                        <li>1 clove of garlic</li>
                        <li>Olive oil</li>
                      </ul>
                 <h2 id="cheese-ingredients">Basil Curd Cheese</h2>
                 <ul id="cheese-steps">
                    <li>3 tablespoons of curd cheese</li>
                    <li>150 ml of milk</li>
                    <li>1 tablespoon of creme cheese</li>
                    <li>4 or 5 basil leaves</li>
                   
                  </ul>
                </div>
                <div id="recipe-make">
                    <h2 id="salad-make">🔆 Purslane Salad with carrots</h2>
                  <p>Cut mushrooms into four pieces and dice the carrot. Put them in a bowl and season them as you wish. </p>
                  <p>I prefer salt, pepper and cajun. Pour just a little bit oil on them. Then bake them in the airfryer at 180C for 10-15 minutes. </p>
                  <p>When they are ready, mitt them with the purslane you have prepared.</p>
                  <h2 id="egg-make">🔆 Egg with tomato</h2>
                  <p>Separate the egg white and yolk. Let's add a little salt to the white part and bring it to a foamy consistency. Then add the egg yolks little by little and mix without extinguishing. </p>
                  <p>Chop the tomatoes into thin rounds on one side. Drizzle olive oil in a pan and place the tomatoes on it. After sprinkling the spices and adding our garlic, let's cook a little so that the tomatoes release themselves. </p>
                  <p>Let's put the egg mixture on the tomatoes and spread it in a nice thick layer. Cover and wait until the bottom is cooked. Then turn it over and fry the other side. Wow! That's it</p>
                 <h2 id="cheese-make">🔆 Basil Curd Cheese </h2>
                 <p>Put the curd cheese, cream cheese and basil leaves in the blender</p>
                 <p>Slowly pour the milk into the mixture until it reaches the desired consistency.</p>
                 <p>ou can store it in the refrigerator for up to a week.</p>
                 </div>

            
            

            </div>
        </div>


    </section>


    
</body>
</html>

<?php
include("connection.php")
?>