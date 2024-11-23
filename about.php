<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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

   
    <section >
        <div class="about-section">
        <img src="images/about.jpg"  alt="About Us Image">
 <div class="about-content">
            <h2>About Us</h2>
           <p>MISSION STATEMNET </p>
          <p> TO GRADUATE ENTRY-LEVEL TECHNOLOGY PROFESSIONALS THAT EXCEL IN THE BASICS OF THEIR FIELD AND THEREAFTER HAVE SUCCESSFUL CAREERS IN THE TECH INDUSTRY, AND WHOSE ACTIONS RAISE INDUSTRY STANDARDS AND SURPASS CLIENT EXPECTATIONS.
        </p> 
        
            <a href="more_about_us.php">                  
                <button id="more">Read more</button>
            </a>
          
        </div>
       
            
   
    </div>
   
</section>
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