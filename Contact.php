<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact </title>
    <!--Connection established between index and css. -->
    <link rel="stylesheet" href="css/style.css">

    <!--Fonts has been added. -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Sue+Ellen+Francisco&family=Ysabeau+Office:wght@700&display=swap" rel="stylesheet">

     <!--The library for icons has been added. -->
    <script src="https://kit.fontawesome.com/2b5efb2471.js" crossorigin="anonymous"></script>
</head>
 
<section id ="navbar">
    <!--Navbar is created. -->
     <div id ="logo">itsmevsyellow </div>
    
    <nav>
        <a href="index.php">Home</a>
        <a href="Recipes.php">Recipes</a>
        <a href="About.php" >About </a>
        <a href="">Contact</a>

    </nav>
</section>

 
<section id="contact">
    <div class="container">

    <form action="contact.php" method="post">
        <div id="contact-opacity">

            <div id="form-group">
                <div id="left-form">
                    <input type="text" name="Name" placeholder="Name " required class="form-control">
                    <input type="email" name="mail" placeholder="e-mail" required class="form-control-email">
                   
                </div>

                <div id="right-form">
                    <input type="text" name="Surname" placeholder="Last Name" required class="form-control">
                   
                </div>

                <textarea name="message" id="" cols="30" placeholder="Leave a Message"  rows="10" required class="form-control"></textarea>

                <input type="submit" value="Submit">
            </div>

            <div class="contact">

                
                
                <p>Hello, there! We’re happy to see you here. If you have any inquiries, questions, or suggestions, feel free to leave your message.</p>
                <a href="https://www.instagram.com/itsmevsyellow/" target="_blank"><i class="fa-brands fa-instagram icon"></i>Instagram</a>
               
            </div>
        </div>

     </form>
            <footer>
                <div id="copyright">2023 itsmevsyellow. All rights reserved.</div>
            </footer>
    </div>
</section>


<body>
 </html>

 <?php
include("connection.php");

if(isset($_POST["Name"],$_POST["mail"],$_POST["Surname"],$_POST["message"]))
{
    $name=$_POST["Name"];
    $surname=$_POST["Surname"];
    $mail=$_POST["mail"];
    $message=$_POST["message"];


  
  $add="INSERT INTO contact (name, lastname, email, message) VALUES (' ".$name."', ' ".$surname."', ' ".$mail."','".$message."')";

  if($connect->query($add)===TRUE)
  {
    echo "<script>alert('Your message has been sent ')</script>";
  }
  else
  {
    echo "<script>alert('An error occurred while sending your message. ')</script>";
  }
}


?>