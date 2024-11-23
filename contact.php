<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="about.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

        <style>
   
    
* {
    box-sizing:border-box;
    margin:0;
    padding:0;
    text-decoration: none;
}


nav{
    position:relative;
    display:flex;
    justify-content: center;
    gap:1rem;
    padding:1rem;
}

a{
    color:black;
}

a:hover{
    color:blue;
}



nav div:hover {
    color:rgb(16, 179, 117);
    cursor:pointer;
}
    












   html, body {
    height: 100%;
    display: flex;
    flex-direction: column;
    padding-bottom:40rem;
}

main{
    flex-grow:1;
}
footer{
    margin-top:auto;
}

    
.footer { 
    background-color: #333; 
    color: white; 
    padding: 20px 0; 
    text-align: center; 
    
} 
.footer a { 
    color: white; 
    margin: 0 10px; 
    text-decoration: none; 
} 
.footer a:hover { 
    text-decoration: underline; 
} 
.footer .social-icons { margin-bottom: 20px; } 
.footer .social-icons a { margin: 0 10px; } 

.footer .contact-info{
    display:block;
    margin:0 auto;
}
.footer .social-icons .icon { 
        width: 30px; 
        height: 30px;
}
.contact-info{
    text-align: center;
    
}
.icon:hover{
    transition: filter 0.3s ease;
    filter: invert(50%) sepia(100%);
}
.icon{
 filter: invert(100%) brightness(70%);   
}
#contact-section{
         
         justify-content: center;
         width: 100%;
         height: 600px;
        
       }
       #contact-section h1 {
         text-align: center;
         font-size: 70px;
         margin-top: 60px;
         margin-bottom: 70px;
       
       }
       #dom{
         opacity: 0.45;
       }
       #dom:hover{
         opacity: 1;
       }
       #contact{
         
         display: flex;
         flex-wrap: wrap;
          gap: 70px;
          text-align: center;
        justify-content: center;
       }
       #contact p{
       
         font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        justify-content: center;
        text-align: center;
        margin-bottom: 50px;
        padding-bottom: 30px;
       
       }
       #contact img{
         border-radius: 50%;
         height: 300px;
         width: 300px;
         object-fit:cover;
       }
       #call p{
  font-size: 22px;
  margin-bottom: 12px;
    margin-left: 10px;
}
       
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About us</a>
            <a href="contact.php">Contact us</a>
                        <?php if(!isset($_SESSION["isloggedin"])):?>
                        <a href="another/signup.php">Sign up</a>
                        <a href="another/login.php">Login</a>
                    <?php else: ?>
                        <a href="another/logout.php">logout</a>
                    <?php endif; ?>
            <?php if(isset($_SESSION["is_admin"]) && $_SESSION["is_admin"]===true): ?>
            <a href="php/users.php">Users</a>
            <?php endif;?>
        </nav>

    </header>
      
<section id="contact-section" class="contact">
    <h1>Managers</h1>
    <a href="mailto:mulukenasefateju@gmail.com">
<div id="contact">
<div>
    
        <img src="images/photo_2024-11-16_09-23-58.jpg" alt="" id="dom">
        <p>muluken Asefa</p>
   
  
</div>
</a>
<a href="mailto:nahomcha4@gmail.com">
<div>
  <img src="images/photo_2024-11-16_09-25-53.jpg" alt="" id="dom">
  <p>Nahom Chernet</p>
</div>
</a>
<a href="mailto:umnathnael20@gmail.com"><div>
  <img src="images/photo_2024-11-16_09-19-20.jpg" alt="" id="dom">
  <p>Natnael Nega</p>
</div>
</a>
<a href="mailto:esayas.tesfaye.mokonnen@gmail.com">
<div>
  <img src="images/20240803_074342.jpg" alt="" id="dom">
  <p>Esayas Tesfaye</p>
</div>
</a>
</div>
</section>
<div id="call">
   <p> <i class="fa-duotone fa-solid fa-phone"></i> phone -+251940547903</p>
   <p> <i class="fa-sharp fa-solid fa-map-location-dot"></i> address- ARBAMINCH SECHA </p>
   <p><i class="fa-solid fa-envelope"></i>Email -Mennfoundation@gmail.com</p>
<p><i class="fa-brands fa-linkedin"></i>linkden  -Manngenereation</p>
<p><i class="fa-brands fa-instagram"></i> instagram -Manngenereation </p>
<p> <i class="fa-brands fa-github"></i> git -Manngenereation7 </p>
</div>
<footer class="footer"> 
    <div class="social-icons"> 
         <a href="#"><img src="images/instagram-brands-solid.svg" alt="Twitter" class="icon"></a>
         <a href="#"><img src="images/telegram-brands-solid.svg" alt="Instagram" class="icon"></a>
         <a href="#"><img src="images/facebook-f-brands-solid.svg" alt="Facebook" class="icon"></a> 
         <a href="#"><img src="images/discord-brands-solid.svg" alt="LinkedIn" class="icon"></a>

                <div class="contact-info"> 
                    <p>&copy;2024 Menn foundation Inc.</p> 
                    <p>Menn Coding Academy</p> 
                    <p>Phone: (503) 206-6915</p> 
                    <p>Email: <a href="mailto:info@learncodinganywhere.com">nahomcha6@gmail.com</a></p> 
                </div> 
            <div class="additional-links"> 
                <?php if(!isset($_SESSION["isloggedin"])):?>
                    <a href="another/signup.php">Sign up</a>
                    <a href="another/login.php">Login</a>
                <?php else: ?>
                    <a href="another/logout.php">logout</a>
                <?php endif; ?>
                <a href="#">Contact</a> 
            </div>
         </footer>
</body>
</html>