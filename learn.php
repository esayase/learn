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
    <title>Combined HTML Pages</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f0f8ff;
            border: 1px solid #d3d3d3;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: none;
        }

        h1, h2, h3 {
            color: #2c3e50;
        }

        p {
            color: #555;
            line-height: 1.6;
        }

        ul {
            padding-left: 20px;
        }

        ul li {
            margin-bottom: 10px;
        }

        video {
            display: block;
            margin: 20px auto;
        }
        pre {
    background-color: #2c3e50; /* Dark blue-gray background */
    color: #ecf0f1; /* Light text for contrast */
    padding: 15px; /* Add padding for spacing */
    border-radius: 5px; /* Rounded corners */
    font-family: 'Courier New', Courier, monospace; /* Monospace font for code */
    font-size: 14px; /* Adjust font size */
    overflow-x: auto; /* Allow horizontal scrolling for long code lines */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Add subtle shadow */
    border: 1px solid #34495e; /* Border to separate from background */
}


        /* Progress Bar */
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
            position: relative;
        }

        .progress-bar-fill p {
            position: absolute;
            right: 10px;
            color: white;
            font-weight: bold;
        }

        /* Buttons */
        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px 5px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
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
    <!-- Page 1 -->
    <div id="page1" class="container">
        <h1>Menn Code Academy Overview </h1>
        <div class="progress-bar">
            <div class="progress-bar-fill" style="width: 20%"><p>20%</p></div>
        </div>
        <p>Welcome to The Tech Academy's Overview Process! This is a series of steps (including videos and short articles) that explain our coding courses. There is no commitment to completing these steps; they are simply a free opportunity to learn about our school.</p>
        <p>Please click NEXT to proceed.</p>
        <button onclick="showPage(2)">Next</button>
    </div>

    <!-- Page 2 -->
    <div id="page2" class="container">
        <h2>Mobile app by Menn code acadamy by video</h2>
        <div class="progress-bar">
            <div class="progress-bar-fill" style="width: 40%"><p>40%</p></div>
        </div>
        <h3>Menn coding Academy Overview Video</h3>
       
        <h2>Key Concepts in Mobile App Development</h2>
        <ul>
            <li><strong>Platforms:</strong> Mobile apps are built for specific platforms like Android, iOS, or cross-platform development.</li>
            <li><strong>Programming Languages:</strong> Common languages used in app development include Java, Swift, Kotlin, and Dart.</li>
            <li><strong>Design:</strong> UI/UX design is crucial for creating user-friendly and visually appealing apps.</li>
            <li><strong>Performance:</strong> Optimizing apps for speed and efficiency ensures better user experience.</li>
            <li><strong>Deployment:</strong> After development, apps are deployed to app stores like Google Play and the Apple App Store.</li>
        </ul>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/yye7rSsiV6k?si=DMtMcDRgw1n5wxph" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            
        <button onclick="showPage(1)">Back</button>
        <button onclick="showPage(3)">Next</button>
    </div>

    <!-- Page 3 -->
    <div id="page3" class="container">
       
    <section id="mobile-apps">
        <div class="progress-bar">
            <div class="progress-bar-fill" style="width: 50%"><p>50%</p></div>
        </div>
    <h1>Introduction to Mobile Application Development</h1>
    <p>Mobile applications, or mobile apps, are software programs designed to run on smartphones and tablets. They can provide a wide range of functions, from entertainment to productivity tools, and are a cornerstone of modern technology.</p>

    <h2>How Are Mobile Apps Developed?</h2>
    <p>Mobile app development involves designing, coding, and testing applications for mobile devices. Developers often create apps for specific platforms like Android or iOS, or they use frameworks to develop cross-platform apps.</p>

    <h2>Languages for Mobile Development</h2>
    <ul>
        <li><strong>Java/Kotlin:</strong> Used for Android development.</li>
        <li><strong>Swift:</strong> Used for iOS development.</li>
        <li><strong>JavaScript:</strong> Often used with frameworks for cross-platform development.</li>
    </ul>

    <h2>Frameworks for Mobile Development</h2>
    <ul>
        <li><strong>Flutter:</strong> Google’s UI toolkit for building natively compiled apps.</li>
        <li><strong>React Native:</strong> A popular framework by Facebook for building cross-platform apps.</li>
        <li><strong>Ionic:</strong> A framework for building hybrid mobile apps using web technologies.</li>
    </ul>

    <h2>Simple Example: Hello World App in Flutter</h2>
    <p>Here’s a simple example of a "Hello World" app in Flutter:</p>
    <pre>
void main() => runApp(MyApp());

class MyApp extends StatelessWidget {
    @override
    Widget build(BuildContext context) {
        return MaterialApp(
            home: Scaffold(
                appBar: AppBar(
                    title: Text('Hello World App'),
                ),
                body: Center(
                    child: Text('Hello, World!'),
                ),
            ),
        );
    }
}
    </pre>
    </section>
    

        <button onclick="showPage(2)">Back</button>
        <button onclick="showPage(4)">Next</button>
    </div>

    <!-- Page 4 -->
    <div id="page4" class="container">
        <h2>Advanced  Mobile Application Development</h2>
        <div class="progress-bar">
            <div class="progress-bar-fill" style="width: 80%"><p>80%</p></div>
        </div>
        <h3>Menn code Academy Overview Video Part 2</h3>
        <h1>Advanced Introduction to Mobile App Development</h1>

        <p>Mobile app development is not just about writing code; it involves understanding the user's needs, the platform, and the entire software lifecycle. From idea generation to post-launch support, every phase requires attention to detail and deep technical expertise. Mobile app development can be broken down into several advanced concepts:</p>
    
        <h2>Key Concepts in Mobile App Development</h2>
        <ul>
            <li><strong>Platform Selection:</strong> The first step in development is choosing between Android, iOS, or cross-platform frameworks. Android apps are usually written in Java or Kotlin, while iOS apps typically use Swift or Objective-C. Cross-platform frameworks like React Native and Flutter allow for development in one codebase that can run on both platforms, which is efficient but may have some performance trade-offs.</li>
            <li><strong>App Architecture:</strong> In modern mobile development, architecture patterns like MVC (Model-View-Controller), MVVM (Model-View-ViewModel), and Clean Architecture are widely used to separate concerns and make apps more maintainable. These patterns help with testing, scalability, and debugging.</li>
            <li><strong>Backend Integration:</strong> Mobile apps almost always need to interact with backend services to retrieve and send data. REST APIs, GraphQL, and WebSockets are commonly used for communication between the app and the server. Tools like Firebase and AWS Amplify can simplify backend development.</li>
            <li><strong>Database Management:</strong> Mobile apps may store data locally (e.g., SQLite, Realm) or remotely in cloud databases (e.g., Firebase, AWS DynamoDB). Choosing the right database architecture is essential for performance, data consistency, and security.</li>
            <li><strong>Security:</strong> Securing mobile apps is critical to protect user data. Common security practices include data encryption, secure communication (e.g., HTTPS), using OAuth for authentication, and validating input to prevent injection attacks.</li>
            <li><strong>Performance Optimization:</strong> Mobile devices have limited resources like CPU, memory, and battery life. Optimizing the app for performance involves efficient use of resources, reducing unnecessary background tasks, and minimizing the app's footprint (size). Tools like Android Profiler and Xcode Instruments can help with performance analysis.</li>
        </ul>
    
        <iframe width="560" height="315" src="https://www.youtube.com/embed/CzRQ9mnmh44?si=NzVrv7DyFn8nQl73" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </video>
        <button onclick="showPage(3)">Back</button>
        <button onclick="showPage(5)">Final</button>
    </div>

    <!-- Page 5 -->
    <div id="page5" class="container">
        <h1>🎉 Congratulations!</h1>
        <div class="progress-bar">
            <div class="progress-bar-fill" style="width: 100%"><p>100%</p></div>
        </div>
        <p>You have successfully completed the Mobile Development course. Here’s a quick summary of what you have learned:</p>
        <ul>
            <li>Understanding the basics of mobile development and platforms like Android and iOS.</li>
            <li>Learning programming languages like Java, Kotlin, Swift, and cross-platform frameworks like Flutter and React Native.</li>
            <li>Building user-friendly and responsive designs for mobile apps.</li>
            <li>Exploring backend technologies and APIs for dynamic functionality.</li>
        </ul>
        <button onclick="showPage(4)">Back</button>
        <button onclick="alert('Certificate downloaded!')">Get Certificate</button>
    </div>

    <script>
        let currentPage = 1;

        function showPage(page) {
            document.getElementById(`page${currentPage}`).style.display = 'none';
            currentPage = page;
            document.getElementById(`page${page}`).style.display = 'block';
        }

        // Show the first page initially
        showPage(1);
    </script>


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
