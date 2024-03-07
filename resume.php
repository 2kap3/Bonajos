<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="static.css">
    <style>
        html {
            scroll-behavior: smooth;
        }
        /* Center align the content of the section */
        section {
            text-align: center;
            display: flex;
            align-items: center; /* Center vertically */
            justify-content: center; /* Center horizontally */
            min-height: 100vh; /* Make section at least full viewport height */
            flex-direction: column; /* Align items vertically */
        }
        /* Center align the contact heading and phone number */
        #contact-info {
            text-align: center;
        }
        /* Center align the resume section */
        #resume {
            max-width: 800px; /* Limit width to prevent stretching */
            color: white; /* Set text color to white */
            font-size: 24px; /* Set font size */
        }
        img.logo-main {
            margin-top: 20px; /* Adjust margin for the logo */
        }
    </style>
</head>
<body>
    <nav>
        <!-- Navigation content -->
    </nav>
    <section>   
        <div class="banner">
            <div class="navbar">
                <a href="main.html"><img src="" class="logo"></a>
                <ul>
                    <li><a href="main.php">Home</a></li>
                    <li><a href="contact.php">Contact Information</a></li>
                    <li><a href="portfolio.php">Portfolio</a></li>
                    <li><a href="resume.php">resume</a></li>
                    <li><a href="Logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
        <section id="resume">
            <h2>Resume/CV</h2>
            <img src="shsh.png" alt="Your Resume Image" width="400" height="600">
            
          
            <br> 
            <a href="dd.pdf" download>
                <button style="font-size: 20px; padding: 12px 24px; color: rgb(0, 0, 0); background-color: rgb(255, 255, 255);">Download Resume (PDF)</button>
            </a>
        </section>
    </section>
    <footer>
        <footer>
            <div class="footer-col">
                <div class="logo-container">
                    <img src="11.jpg" alt="Your Logo">
                </div>
            </div>
            <div class="footer-col">
                <h4>FAVOURITE MOVIES</h4>
                <ul>
                    <li class="mini-gallery"><a href="#"><img src="4.webp" alt="Team 1"></a></li>
                    <li class="mini-gallery"><a href="#"><img src="5.jpg" alt="Team 2"></a></li>
                    <li class="mini-gallery"><a href="#"><img src="5.jpg" alt="Team 3"></a></li>
                    <li class="mini-gallery"><a href="#"><img src="7.jpg" alt="Team 3"></a></li>
                </ul>
            </div>        
            <div class="footer-col">
                <h4>Others</h4>
                <ul class="aye">
                    <li><a href="https://www.y8.com/">
                        <p>
                            Play y8 here.
                        </p>
                    </a></li>
                    <li><a href="https://discord.com/channels/1081889164905164820/1083406319266058270">
                        <p>
                            Join our Discord Channel
                        </p>
                    </a></li>
                    <li><a href="https://www.lazada.com.ph/">
                        <p>
                           Shopping ka muna.
                        </p>
                    </a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Socials</h4>
                <div class="links">
                    <a href="https://www.facebook.com/richard.bonajos.12"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/burdagilll/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </footer>
    </footer>
</body>
</html>
