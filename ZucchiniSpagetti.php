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
                <img src="images/zucchini.png" alt="">
            </div>
            
            <div id="title-meal"> 
             <h1>Zucchini Spagetti with Bolognese</h1>
             </div>
 
             <div id="meal-parapraph">
                <p id="entrance">As you know, I am quite committed to eating vegetables at every meal.
                     However, these days, I have difficulty in finding different vegetables due to 
                     geographical conditions. Honestly all I could find is zucchini. But I won't let mother 
                     nature stop me from eating delicious vegetables. When life gives me zucchini, I make pasta :D   
                </p>
             </div>
            <div class="grid-container">
             <div id="meal-ingredients">
                 <h1 id="Ingredients">Ingredients</h1>
                 <ul id="recipe-steps">
                    <li>3, 4 zucchinis</li>
                    <li>2 tablespoons of olive oil</li>
                    <li>2 tomatoes</li>
                    <li>Salt, pepper, mint, paprika</li>
                    <li>Dill</li>
                    <li>2 cloves of garlic</li>
                    <li>2 bay leaves</li>
                  </ul>
                </div>
                <div id="recipe-make">
                  <p>Cut the zucchini into long thin strips. The thinner it is, the softer it will be and the easier it will be to cook. Pour olive oil into a pan, add the zucchini strips and sauté well.  </p>
                  <p>The zucchini strips will be softer with the heat. When they are soft enough, turn off the heat and set them aside. Pass the tomatoes through a food mill and cook with salt, pepper, dill and garlic. </p>
                  <p>When the juice reduces, add the zucchini that you sautéed before. Cook for another 4 minutes with tomato sauce and serve hot.</p>
                </div>
            
            

            </div>
        </div>


    </section>


    
</body>
</html>

<?php
include("connection.php")
?>