<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Menn Tech Academy</title>
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
            <a href="php/index.php">Users</a>
            <?php endif;?>
        </nav>

    </header>


    
    <main id="main">
        <h2>Our Story</h2>
        <p>
            Menn Tech Academy was founded with a vision to empower individuals with the skills and knowledge needed to thrive in the ever-evolving world of technology. Since our inception on <strong>January 15, 2022</strong>, we have been dedicated to delivering high-quality programming courses and fostering innovation.
        </p>

        <h2>Our Vision</h2>
        <p>
            To be a leading tech academy that bridges the gap between education and industry by equipping learners with practical and in-demand skills.
        </p>

        <h2>Our Mission</h2>
        <p>
            Our mission is to create an inclusive learning environment that nurtures talent, inspires creativity, and prepares students for the challenges of the digital age.
        </p>

        <h2>What We Offer</h2>
        <p>
            At Menn Tech Academy, we provide:
        </p>
        <ul>
            <li>Comprehensive programming courses for all skill levels</li>
            <li>Hands-on projects to build real-world experience</li>
            <li>Expert instructors passionate about teaching and technology.</li>
            <li>Career guidance and networking opportunities to help students succeed.</li>
        </ul>

        <h2>Our Commitment to the Community</h2>
        <p>
            We believe in giving back to the community by:
        </p>
        <ul>
            <li>Organizing free tech workshops and events</li>
            <li>Providing scholarships to deserving students</li>
            <li>Encouraging innovation through hackathons and competitions</li>
        </ul>

        <p>
            Join us at Menn Tech Academy and be part of a generation that is shaping the future of technology.
        </p>
    </main>
    

 
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
                    <p>&copy;2024 Prosper Consulting Inc.</p> 
                    <p>The Tech Academy</p> 
                    <p>Phone: (503) 206-6915</p> 
                    <p>Email: <a href="mailto:info@learncodinganywhere.com">info@learncodinganywhere.com</a></p> 
                </div> 
                <div class="additional-links"> 
                    <?php if(!isset($_SESSION["isloggedin"])):?>
                        <a href="another/signup.php">Sign up</a>
                        <a href="another/login.php">Login</a>
                    <?php else: ?>
                        <a href="another/logout.php">logout</a>
                    <?php endif; ?>
                    <a href="contact.php">Contact</a> 
                </div>
             </footer>
</body>
</html>
