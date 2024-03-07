<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="static.css">
   
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>
    <nav>
    </nav>
</head>
<body>
    <section>
        <div class="banner">
            <div class="navbar">
                <a href="main.html"><img src="" class="logo"></a>
                <ul>
                    <li><a href="main.php">Home</a></li>
                    <li><a href="contact.php">Contact Information</a></li>
                    <li><a href="portfolio.php">Portfolio</a></li>
                    <li><a href="resume.php">Resume</a></li>
                    <li><a href="Logout.php">Logout</a></li>
                </ul>
            </div>
            <div class="content">
                <br><br><br><br><br>
                <img src="boy.png" class="logo-main">
                <br><br><br><br>
                <h2></h2>
                <br>
                <h4>Playing with kids.&nbsp;&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;&nbsp;Bonding with Family </h4>
            </div>
        </div>
    </section>
    <section>
        <div class="empty">
            <br><br><br><br><br><br>
        </div>
    </section>
    <section>
        <div class="feature-gallery">
            <div class="features1">
                <br><br>
                <h2>Portfolio</h2>
                <br>
                <h4><br>I don't have any achievement in life but i have an award from school.  <br></h4>
                <h5>"So clean, So good SOGO."</h5>
            </div>
            <div class="div-gallery">
                <div class="drawing-image"><img src="15.jpg" alt="image-1"></div>
                <div class="drawing-image"><img src="14.jpg" alt="image-2"></div>
                <div class="drawing-image"><img src="16.jpg" alt="image-3"></div>
            </div>
    </section>
    <footer>
        <div class="footer-col">
            <div class="logo-container">
                <img src="11.jpg" alt="Your Logo">
            </div>
        </div>
        <div class="footer-col">
            <h4>FAVOURITE HOBBIES</h4>
            <ul>
                <li class="mini-gallery"><a href="#"><img src="hoop.jpg" alt="Team 1"></a></li>
                <li class="mini-gallery"><a href="#"><img src="5.jpg" alt="Team 2"></a></li>
                <li class="mini-gallery"><a href="#"><img src="17.jpg" alt="Team 3"></a></li>
                <li class="mini-gallery"><a href="#"><img src="18.jpg" alt="Team 3"></a></li>
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
    <script>
        /* SCRIPT FOR THE FEATURE WORKS */
        document.querySelectorAll('.div-gallery img').forEach(image =>{
            image.onclick = () =>{
                document.querySelector('.popup-div-gallery').style.display = 'block';
                document.querySelector('.popup-div-gallery img').src = image.getAttribute('src');
            }
        });

        document.querySelector('.popup-div-gallery span').onclick = () =>{
            document.querySelector('.popup-div-gallery').style.display = 'none';
        }

        window.addEventListener('scroll', function() {
            var navbar = document.getElementById('navbar');
            if (window.scrollY > 0) {
                navbar.classList.add('shrink');
            } else {
                navbar.classList.remove('shrink');
            }
        });
        /* SCRIPT FOR THE FEATURE WORKS */
    </script>
</body>
</html>
