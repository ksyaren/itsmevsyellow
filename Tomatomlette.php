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
                <img src="images/Tomatomlette.png" alt="">
            </div>
            
            <div id="title-meal-omlette"> 
             <h1>Tomato Omlette</h1>
             </div>
 
             <div id="meal-parapraph-omlette">
                <p id="entrance">This recipe is for ones who say “We also would try at home 
                    if the ingredients were simple to find.” Simple ingredients,
                     simple recipe but a wonderful taste.</p>
             </div>
            <div class="grid-container">
             <div id="meal-ingredients">
                 <h1 id="Ingredients">Ingredients</h1>
                 <ul id="recipe-steps">
                    <li>2 eggs</li>
                    <li>1 tomato</li>
                    <li>Salt, red pepper, mint</li>
                    <li>A clove of garlic</li>
                    <li>Olive oil</li>
                    
                  </ul>
                </div>
                <div id="recipe-make">
                  <p>Beat the eggs with some salt and set aside. Slice the tomatoes. Put some olive oil into the pan. </p>
                  <p>When the oil is hot enough, add tomatoes and season them with some red pepper and mint.</p>
                  <p> When both sides of tomatoes are fried enough, pour the egg onto the tomatoes. </p>
                  <p>Flip the omelette carefully when it is ready. You may use a plate for flipping the omelette. Serve with salad.</p>
                  
                </div>
            
            

            </div>
        </div>


    </section>


    
</body>
</html>

<?php
include("connection.php")
?>