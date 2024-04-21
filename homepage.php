<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Catalyst</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
</head>
<body>
    <header>

        <!-----------------backgroung----------------------->

        <div id="home">
            <nav class="navbar">
                <div class="logo">Career Catalyst </div>
                <ul class="menu">
                    <li><a class="active" href="#home"><i class="fas fa-home"></i> Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropbtn"><i class="fas fa-briefcase"></i> Jobs</a>
                        <div class="dropdown-content">
                            <a href="#">IT jobs</a>
                            <a href="#">Sales jobs</a>
                            <a href="#">Marketing jobs</a>
                            <a href="#">Data Science jobs</a>
                            <a href="#">HR jobs</a>
                            <a href="#">Engineering jobs</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropbtn"><i class="fas fa-building"></i> Companies</a>
                        <div class="dropdown-content">
                            <a href="#">Company 1</a>
                            <a href="#">Company 2</a>
                            <a href="#">Company 3</a>
                            <!-- Add more company links as needed -->
                        </div>
                    </li>
                    <li><a href="services"><i class="fas fa-cogs"></i> Services</a></li>
                    <li><a href="register_form.php"><i class="fas fa-user-plus"></i> Register</a></li>
                    <li><a href="login_form.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                </ul>
            </nav>
            <div>
                <img src="images/img3.png" alt="nothing" class="banner1">
                <img src="images/img2.png" alt="nothing" class="banner2">
                <section class="welcome">
                    <h3>Welcome To Career Catalyst!</h3><br><br>
                    <div>
                        <p>"Your go-to resource for porfessional growth and sucess.Explore expert advice and vauable resource to navigate your career with confidencce. Let's embark on this transformative journey together"</p>
                    </div>
                </section>
            </div>
        </div>

    </header>

    <!----------------guide------------------->
    <section class="bg2">
    <h1 class="featured">Featured Companies Actively Hiring</h1>
    <div class="slider-container">
        <div class="slide">
            <img src="images/cognizant-logo.jpg" alt="Cognizant Logo" class="logo">
            <h2>Cognizant</h2>
            <p> ★★★★ 3.9<span>(41.9K+ reviews)</span></p>
            <p>Leading TES company with global presence.</p><br>
            <a href="#" class="view-jobs">View jobs</a>
        </div>
        <div class="slide">
            <img src="images/google-logo.jpg" alt="Google Logo" class="logo">
            <h2>Google</h2>
            <p> ★★★★★ 4.5 <span>(1.2M+ reviews)</span></p>
            <p>Technology company specializing in Internet-related services and products.</p><br>
            <a href="#" class="view-jobs">View jobs</a>
        </div>
        <div class="slide">
            <img src="images/amazon-logo.webp" alt="Amazon Logo" class="logo">
            <h2>Amazon</h2>
            <p>★★★★ 4.2 <span>(2.4M+ reviews)</span></p>
            <p>American multinational technology company focusing on e-commerce, cloud computing, and artificial intelligence.</p><br>
            <a href="#" class="view-jobs">View jobs</a>
        </div>
        <div class="slide">
            <img src="images/microsoft-logo.jpg" alt="Microsoft Logo" class="logo">
            <h2>Microsoft</h2>
            <p class="rating">★★★★ 4.0 (3.5M+ reviews)</p>
            <p>Leading global technology company offering a range of software, services, and devices.</p><br>
            <a href="#" class="view-jobs">View jobs</a>
        </div>
        <div class="slide">
            <img src="images/facebook-logo.jpg" alt="Facebook Logo" class="logo">
            <h2>Facebook</h2>
            <p>★★★★ 4.3 <span>(2.1M+ reviews)</span></p>
            <p>Social media and technology company focusing on social networking services.</p><br>
            <a href="#" class="view-jobs">View jobs</a>
        </div>
    </div>
    <button onclick="prevSlide()" id="prev" class="hide">&lt;</button>
    <button onclick="nextSlide()" id="next">&gt;</button>
    <p class="viewall"><a href="#">View all companies</a></p>
        
    </section>

    <!------------------footer------------------------->

    <footer class="footer">
        
        <div class="social-icons">
            <p style="font-size: 30px; font-family:a; text-align: center;">Career Catalyst</p>
            <p style="text-align: center; font-size:20px;">Contact with us</p> 
            <a href="#" ><i class="fab fa-facebook-f"></i></a>
            <a href="#" ><i class="fab fa-linkedin"></i></a>
            <a href="#" ><i class="fab fa-telegram"></i></a>
            <a href="#" ><i class="fab fa-twitter"></i></a>
        </div>
        <div class="contact-details">
            <p>Email: example@example.com</p>
            <p>Phone: 123-456-7890</p>
            <p>Address: 123 Street, City, Country</p>
        </div>
        <div class="copyright">
            <p>&copy; 2024 Your Company Name. All Rights Reserved.</p>
        </div>
        <div>
            <p>From</p>
            <img src="vemu.jpg" alt="vemu" width="100%" height="60vh">
        </div>
    </footer>


    <!-- Add your JavaScript code here -->
    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        const prevButton = document.getElementById('prev');
        const nextButton = document.getElementById('next');

        function showSlide(index) {
            slides.forEach((slide, i) => {
                if (i === index) {
                    slide.style.display = 'block';
                } else {
                    slide.style.display = 'none';
                }
            });

            // Hide or show arrow buttons based on the current slide
            if (index === 0) {
                prevButton.classList.add('hide');
            } else {
                prevButton.classList.remove('hide');
            }

            if (index === slides.length - 1) {
                nextButton.classList.add('hide');
            } else {
                nextButton.classList.remove('hide');
            }
        }

        function nextSlide() {
            if (currentSlide < slides.length - 1) {
                currentSlide++;
                showSlide(currentSlide);
            }
        }

        function prevSlide() {
            if (currentSlide > 0) {
                currentSlide--;
                showSlide(currentSlide);
            }
        }

        // Show the initial slide
        showSlide(currentSlide);
    </script>
</body>
</html>       

