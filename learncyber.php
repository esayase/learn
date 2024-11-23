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
    <title>Cybersecurity Overview</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .content-section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f0f8ff;
            border: 1px solid #d3d3d3;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            line-height: 1.6;
        }

        h1, h2, h3 {
            color: #333;
        }

        .progress-bar {
            width: 70%;
            margin: 20px auto;
            height: 20px;
            background-color: #f2f2f2;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .progress-bar-fill {
            height: 100%;
            background-color: #007bff;
            border-radius: 5px;
        }

        .progress-bar-fill p {
            text-align: right;
            color: white;
            padding-right: 10px;
        }

        button, .btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        button:hover, .btn:hover {
            background-color: #50de43;
        }

        ul {
            list-style: disc;
            margin-left: 40px;
        }

        iframe {
            display: block;
            margin: 20px auto;
        }

            
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
    <div id="app"></div>

    <script>
        // Define sections for the single-page application
        const sections = {
            one: `
                <div class="content-section">
                    <h1>MENN CODING ACADEMY OVERVIEW</h1>
                    <p>Welcome to The Cybersecurity Academy's Overview Process! This is a series of steps (including videos and short articles) that explain our coding boot camps.</p>
                    <p>There is no commitment to completing these steps; they are simply a free opportunity to learn about our school.</p>
                    <p>Please click NEXT.</p>
                    <div class="progress-bar">
                        <div class="progress-bar-fill" style="width: 10%;"><p>10%</p></div>
                    </div>
                    <button onclick="navigateTo('vid1')">Next</button>
                </div>
            `,
            vid1: `
                <div class="content-section">
                    <h2>Cybersecurity Overview Process Part 1</h2>
                    <div class="progress-bar">
                        <div class="progress-bar-fill" style="width: 27%;"><p>27%</p></div>
                    </div>
                    <h3>CYBERSECURITY OVERVIEW VIDEO</h3>
                    <p>Watch this short video in full and then click NEXT (the NEXT button will appear after you finish watching the video):</p>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/ULGILG-ZhO0" frameborder="0" allowfullscreen></iframe>
                    <button onclick="navigateTo('one')">Back</button>
                    <button onclick="navigateTo('second')">Next</button>
                </div>
            `,
            second: `
                <div class="content-section">
                    <h1>Introduction to Cybersecurity</h1>
                    <p>Cybersecurity is the practice of protecting computers, networks, and data from digital attacks, theft, and damage...</p>
                    <h2>How Are Cyber Security Systems Developed?</h2>
                    <p>Cybersecurity is developed through a combination of technology, policies, and best practices. It involves creating secure systems, networks, and software to prevent cyber attacks.</p>
                    <h2>Languages for Cybersecurity</h2>
                    <ul>
                        <li><strong>C/C++:</strong> Used for developing low-level security applications and understanding vulnerabilities.</li>
                        <li><strong>Java:</strong> Often used for building secure web applications and mobile apps.</li>
                        <li><strong>SQL:</strong> Used for managing databases and protecting against SQL injection attacks.</li>
                        <li><strong>Python:</strong> Popular for writing security tools, automating tasks, and analyzing data.</li>
                    </ul>
                    <h2>Frameworks for Cybersecurity</h2>
                    <ul>
                        <li><strong>NIST Cybersecurity Framework:</strong> Provides guidelines for managing and reducing cybersecurity risks.</li>
                        <li><strong>ISO/IEC 27001:</strong> A global standard for creating an information security management system (ISMS).</li>
                        <li><strong>COBIT:</strong> Ensures security controls are in place across an organization’s IT environment.</li>
                    </ul>
                    <div class="progress-bar">
                        <div class="progress-bar-fill" style="width: 50%;"><p>50%</p></div>
                    </div>
                    <button onclick="navigateTo('vid1')">Back</button>
                    <button onclick="navigateTo('vid2')">Next</button>
                </div>
            `,
            vid2: `
                <div class="content-section">
                    <h2>Cybersecurity Overview Process Part 2</h2>
                    <div class="progress-bar">
                        <div class="progress-bar-fill" style="width: 75%;"><p>75%</p></div>
                    </div>
                    <h3>CYBERSECURITY OVERVIEW VIDEO</h3>
                    <p>Watch this short video in full and then click NEXT (the NEXT button will appear after you finish watching the video):</p>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/7C35TbaHDiI" frameborder="0" allowfullscreen></iframe>
                    <button onclick="navigateTo('second')">Back</button>
                    <button onclick="navigateTo('final')">Final</button>
                </div>
            `,
            final: `
                <div class="content-section">
                    <h1>🎉 Congratulations!</h1>
                    <p>You have successfully completed the Cybersecurity course. We are proud of your hard work and dedication. Here’s a quick summary of what you have learned:</p>
                    <h2>Summary of Cybersecurity</h2>
                    <ul>
                        <li>Understanding the basics of Cybersecurity.</li>
                        <li>Learning programming languages like Java, JavaScript, C/C++, and Python.</li>
                        <li>Building robust and secure systems for mobile apps is essential in today’s digital landscape.</li>
                        <li>Exploring backend security technologies and APIs for secure functionality.</li>
                    </ul>
                    <div class="progress-bar">
                        <div class="progress-bar-fill" style="width: 100%;"><p>100%</p></div>
                    </div>
                    <p>Thank you for embarking on this journey to explore the world of Cybersecurity. Your skills can drive innovation and create a secure foundation for future technologies.</p>
                    <a href="#" class="btn">Get Certificate</a>
                </div>
            `
        };

        function navigateTo(section) {
            document.getElementById('app').innerHTML = sections[section];
        }

        navigateTo('one');
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
                    <a href="contact.php">Contact</a> 
                </div>
             </footer>
</body>
</html>
