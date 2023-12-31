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
                <img src="images/chicken.png" alt="">
            </div>
            
            <div id="title-meal"> 
             <h1>French Chicken with Yoghurt Sause</h1>
             </div>
 
             <div id="meal-parapraph">
                <p id="entrance">If you like to try new but delicious chicken recipes, 
                    I highly recommend you to give a chance to this dish. 
                    You may feel like
                     you are at a famous French restaurant, but this time you are the chef. 
                     The chicken is juicy and delicious, the sauce is creamy, but there is no cream in it.</p>
             </div>
            <div class="grid-container">
             <div id="meal-ingredients">
                 <h1 id="Ingredients">Ingredients</h1>
                 <ul id="recipe-steps">
                    <li>1 kg chicken drumstick</li>
                    <li>200 g mushrooms</li>
                    <li>2 onions</li>
                    <li>3 cloves of garlic</li>
                    <li>1 sprig of rosemary (optional)</li>
                    <li>1 tablespoon of olive oil</li>
                    <li>2 bay leaves</li>
                    <li>2 tablespoons of flour</li>
                    <li>3 tablespoons of yogurt</li>
                    <li>Half a glass of soda</li>
                    <li>Parsley</li>
                    <li>Salt, pepper</li>
                  </ul>
                </div>
                <div id="recipe-make">
                  <p>Season the chicken with salt and pepper. Pour olive oil into the pan and seal the chickens for 8 or 9 minutes. Take the sealed chickens aside, put the julienned onions, bay leaf, rosemary and sliced garlic into the same pot and sauté for a while. Then add the mushrooms and cook well. </p>
                  <p>Remember removing bay leaves before adding soda. Put the chickens back in the pot and fill them with water until it’s just over them. Cook for 10 minutes with the lid closed and 20 minutes with the lid open. (If you like, you may add extra salt and pepper at this stage.) Take the chickens out of the pot. Mix the flour and yogurt in a bowl.</p>
                  <p>Temper the yogurt with the water in the pot. Gently pour the tempered yogurt into the pot. Then put the chicken drumsticks back, add the chopped parsley on them and cook for another 5 minutes to thicken the sauce. Bon appetite!</p>
                </div>
            
            

            </div>
        </div>


    </section>


    
</body>
</html>

<?php
include("connection.php")
?>