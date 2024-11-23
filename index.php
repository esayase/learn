<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/about.css">
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
    padding-bottom:43rem;
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
   .logo img{
    width:100px;
    height:100px;
    margin-left:-450px;
    margin-top:-25px;
   }
   
  
  main {
    text-align: center;
    margin-bottom:280px;
   
  }
  #main{
    margin-top: -50px;
  }
  #onne{
    margin-top: 30px;
    font-weight:30px;
    margin-bottom:80px;
    margin-left:190px;
  }
  #twoo{
    margin-top: 50px;
    margin-left:-290px;
  }
  main h1 {
    font-size: 60px;
    line-height: 1.2;
    margin-top:-50px;
  }
  
  main p {
    font-size: 18px;
    margin-top: 20px;
    width: 60%;
  }
  
  .background-shape {
    position: absolute;
    bottom: 18%;
    right: 10%;
    display: grid;
    grid-template-columns: repeat(2, 100px);
    grid-template-rows: repeat(2, 100px);
    gap: 10px;
    transform: rotate(45deg);
  }
  
  .shape {
    width: 100px;
    height: 100px;
    background-color: orange;
    border-radius: 0 100px 100px 0;
  }
  #more{
    margin-left:40px
  }
   .social-icons .contact-info{
    margin-left:240px;
  }
 
#welcome{
    color:orange;
}

#footerlast{
    /* background:yellow; */
    display:inline-block;
}
    </style>
</head>
<body>
        <header>
     
        <nav>
        <div class="logo">
      <img id="ME" src="images/photo_2024-11-16_01-57-25.jpg" alt="Menn coding Academy">

    </div>
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
<main>
    <?php if(isset($_SESSION["isloggedin"])):?>
        <h3 id="welcome">
        Welcome <?php if(isset($_SESSION["username"])) echo $_SESSION["username"];?>
        </h3>
    <?php endif; ?>














  <main>
    <h1 id="main">Menn coding Acadamy</h1>
   <P id="onne">LEARN TECH AND SAVE THE FUTURE</P>
   <h1 id="twoo">
        Learn Programming with us
    </h1>
    <p>
Welcome to MEN² Coding Academy, your ultimate destination for mastering technology, programming languages, and cybersecurity! Our platform is designed to empower learners of all levels with the skills and knowledge needed to excel in the ever-evolving tech landscape. Whether you're exploring the fundamentals of programming, delving into advanced cybersecurity techniques, or staying updated with the latest technological innovations, we provide a comprehensive learning experience tailored to your goals. Join us to unlock your potential, build secure systems, and pave the way for a thriving career in the digital age.
    </p>
    <div class="background-shape">
      <div class="shape"></div>
      <div class="shape"></div>
      <div class="shape"></div>
      <div class="shape"></div>
    </div>
  </main>



















   










    <h2>
        What we Teach
    </h2>




    <div id="container">
        <div class="childs">
            <div class="topics">Cyber Security</div>
            <img src="images/cyber.jpeg" alt="">
            <div>Learn an introduction to Cyber Security course.</div>
           
            <a href="learncyber.php">Learn</a>
        </div>
        <div class="childs">
            <div class="topics">Web Development</div>
            <img src="images/web.jfif" alt="">
            <div>Learn an introduction to Web Development course.</div>
           
            <a href="learnweb.php">Learn</a>
        </div>
        <div class="childs">
            <div class="topics">Android Development</div>
            <img src="images/android.jpg" alt="">
            <div>Learn an introduction to Android Development course.</div>
            <a href="learn.php">Learn</a>
        </div>
    </div>
    <section class="features">
    <h2>How We Are Different.</h2>
    <div class="features-container">
      <div class="feature">
        <div class="icon">👤</div>
        <h3>Beginners Are Welcome</h3>
        <p id="more">No technical background or coding experience <br> is required to enroll.</p>
      </div>
      <div class="feature">
        <div class="icon">💼</div>
        <h3>Job Placement</h3>
        <p id="more">We offer job placement training and <br> assistance to our graduates.</p>
      </div>
    
      <div class="feature">
              <div class="icon">🚶 </div>
        <h3>Self-Paced</h3>
        <p id="more">Students move through their <br> boot camp at their own speed.</p>
      </div>
      <div class="feature">
        <div class="icon">🕒</div>
        <h3>Flexible Scheduling</h3>
        <p id="more">Students choose their own <b></b> study schedule.</p>
      </div>
      <div class="feature">
        <div class="icon">📋</div>
        <h3>Thorough Curriculum</h3>
        <p id="more">Our boot camps cover several <br> in-demand programming languages.</p>
      </div>
      <div class="feature">
        <div class="icon">📅</div>
        <h3>Open Enrollment</h3>
        <p id="more">Students can start their boot camps <br> anytime you can enroll today!</p>
      </div>
    </div>
  </section>
    <footer class="footer"> 
    <div id="footerlast">
           <div class="social-icons"> 
             <a href="https://www.instagram.com/nahom_chere?utm_source=qr&igsh=MXZpemM1NDJmczR4Zg=="><img src="images/instagram-brands-solid.svg" alt="Twitter" class="icon"></a>
             <a href="https://www.instagram.com/nahom_chere?utm_source=qr&igsh=MXZpemM1NDJmczR4Zg=="><img src="images/telegram-brands-solid.svg" alt="Instagram" class="icon"></a>
             <a href="https://www.instagram.com/nahom_chere?utm_source=qr&igsh=MXZpemM1NDJmczR4Zg=="><img src="images/facebook-f-brands-solid.svg" alt="Facebook" class="icon"></a> 
             <a href="https://www.instagram.com/nahom_chere?utm_source=qr&igsh=MXZpemM1NDJmczR4Zg=="><img src="images/discord-brands-solid.svg" alt="LinkedIn" class="icon"></a>
</div>
            <div class="contact-info"> 
                    <p>&copy;2024 Menn foundation Inc.</p> 
                    <p>Menn Coding Academy</p> 
                    <p>Phone: (503) 206-6915</p> 
                    <p>Email: <a href="menngeneration@gmail.com">mennfoundation@gmail.com</a></p> 
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