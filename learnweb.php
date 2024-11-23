<?php
session_start();
if (!isset($_SESSION["isloggedin"])) {
    header("Location: another/login.php");
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Development Course</title>
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
        .section {
            display: none;
        }

        #start, #one, #mobile-apps, #second, #final, #congratulations {
            font-family: 'Arial', sans-serif;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f0f8ff;
            border: 1px solid #d3d3d3;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            line-height: 1.6;
        }

        .progress-bar {
            width: 70%;
            margin: 20px auto;
            height: 20px;
            background-color: #f2f2f2;
            border-radius: 5px;
            margin-left: 40px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .progress-bar-fill {
            height: 100%;
            background-color: #007bff;
            border-radius: 5px;
        }

        .progress-bar-fill p {
            margin-left: 500px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border-color: black;
            padding: 10px 20px;
            border-radius: 5px;
            margin-top: 20px;  /* Added margin-top to position the button under content */
            margin-left: 70px;
        }

        button:hover {
            background-color: #50de43;
        }

        h1 {
            color: #333;
            margin-top: 20px;
        }

        p {
            font-size: 18px;
        }

        h2, h3 {
            font-size: 35px;
        }

        h3 {
            font-size: 30px;
        }

        .success {
            color: #007bff;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1rem;
            color: #fff;
            background-color: #3498db;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
        <header>
        <nav>
            <a href="index.php">Home</a>
            <a href="about-us.htm">About us</a>
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
    <div id="start" class="section">
        <h1>Welcome to Web Development Course</h1>
        <div class="success">SUCCESS</div>
        <p>Welcome to The Tech Academy's Overview Process! This is a series of steps (including videos and short articles) that explain our coding boot camps. There is no commitment to completing these steps, they are simply a free opportunity to learn about our school.</p>
        <p>Please click NEXT.</p>
        <button onclick="showSection('one')">Next</button>
    </div>

    <div id="one" class="section">
        <h2>Menn Coding Academy</h2>
        <div class="progress-bar">
            <div class="progress-bar-fill" style="width: 25%"><p>25%</p></div>
        </div>
        <h3>What is a website</h3>
        <p>Watch this short video in full and then click NEXT:</p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/e9X4HiUsliE?si=WcXhjOZkgzpGGvLY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <div class="video-buttons">
            <button onclick="showSection('start')">Back</button>
            <button onclick="showSection('mobile-apps')">Next</button>
        </div>
    </div>

    <div id="mobile-apps" class="section">
        <div class="progress-bar">
            <div class="progress-bar-fill" style="width: 50%"><p>50%</p></div>
        </div>
        <h1>Introduction to Web Development</h1>
        <p>A web app is a software application that runs on a web server and is accessed through a web browser. Unlike traditional software, it doesn’t require installation on the user’s device. Its primary function is to provide interactive services, such as online shopping, social networking, or productivity tools, over the internet. Web apps are widely used because they are platform-independent and easily accessible.</p>
        <h2>Web Developers Roles</h2>
        <ul>
            <li><strong>Frontend Developer:</strong> Designs and develops user interfaces for web and mobile apps.</li>
            <li><strong>Backend Developer:</strong> Writes server-side code to handle requests and provide data to clients.</li>
            <li><strong>Full Stack Developer:</strong> Combines frontend and backend development to create web and mobile apps.</li>
        </ul>
        <h2>Languages for Web Development</h2>
        <ul>
            <li><strong>HTML:</strong> for structure and content.</li>
            <li><strong>CSS:</strong> for styling and layout.</li>
            <li><strong>JavaScript:</strong> for interactivity and dynamic behavior.</li>
            <li><strong>PHP:</strong> for server-side scripting.</li>
        </ul>
        <h2>User Experience (UX) and Responsive Design</h2>
        <ul>
            <li><strong>UX Principles:</strong> Designing for simplicity and ease of use, ensuring intuitive navigation and clear calls to action.</li>
            <li><strong>Responsive Design:</strong> Ensuring websites adapt seamlessly to various screen sizes using media queries and flexible layouts.</li>
        </ul>
        <h2>What is Web Security?</h2>
        <ul>
            <li><strong>Data Protection:</strong> Encrypting sensitive data using HTTPS and SSL/TLS.</li>
            <li><strong>Vulnerability Prevention:</strong> Regularly updating software dependencies and applying security patches.</li>
        </ul>
        <h2>Simple Example: Hello World text using HTML</h2>
        <p>Here’s a simple example of a "Hello World" text in HTML:</p>
        <pre>
            <img src="toshow.png" alt="">
        </pre>
        <div class="video-buttons">
            <button onclick="showSection('one')">Back</button>
            <button onclick="showSection('second')">Next</button>
        </div>
    </div>

    <div id="second" class="section">
        <h2>Menn Coding Academy</h2>
        <div class="progress-bar">
            <div class="progress-bar-fill" style="width: 75%"><p>75%</p></div>
        </div>
        <h3>How to make a website</h3>
        <p>Watch this short video in full and then click NEXT:</p>
        <iframe width="550" height="350" src="https://www.youtube.com/embed/YWA-xbsJrVg?si=ZxHUO1uCCpd6Q0Xd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <div class="video-buttons">
            <button onclick="showSection('mobile-apps')">Back</button>
            <button onclick="showSection('final')">Final</button>
        </div>
    </div>

    <div id="final" class="section">
        <div class="progress-bar">
            <div class="progress-bar-fill" style="width: 100%"><p>100%</p></div>
        </div>
        <h1>🎉 Congratulations!</h1>
        <p>You have successfully completed the Web Development course. We are proud of your hard work and dedication. Here’s a quick summary of what you have learned:</p>
        <h2>Summary of Web Development</h2>
        <ul>
            <li>Understanding the basics of Web development.</li>
            <li>Learning programming languages like JavaScript, PHP, and other languages like CSS and HTML.</li>
            <li>Building user-friendly and responsive designs for web apps and mobile apps.</li>
        </ul>
        <button onclick="showSection('start')">Start Over</button>
    </div>

    <script>
        function showSection(id) {
            let sections = document.querySelectorAll('.section');
            sections.forEach(section => {
                section.style.display = 'none';
            });
            document.getElementById(id).style.display = 'block';
        }

        showSection('start');
    </script>


    <footer class="footer"> 
        <div class="social-icons"> 
             <a href="#"><img src="images/instagram-brands-solid.svg" alt="Twitter" class="icon"></a>
             <a href="#"><img src="images/telegram-brands-solid.svg" alt="Instagram" class="icon"></a>
             <a href="#"><img src="images/facebook-f-brands-solid.svg" alt="Facebook" class="icon"></a> 
             <a href="#"><img src="images/discord-brands-solid.svg" alt="LinkedIn" class="icon"></a>

                <div class="contact-info"> 
                    <p>&copy;2024 Menn foundation.</p> 
                    <p>Menn Learning Academy</p> 
                    <p>Phone: +2519160483</p> 
                    <p>Email: <a href="mailto:info@learncodinganywhere.com">info@learncodinganywhere.com</a></p> 
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
