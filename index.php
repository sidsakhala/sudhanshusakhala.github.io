<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sudhanshu Sakhala</title>
    <!-- Link To CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Box Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

</head>

<body>

    <section class='header' id='section'>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //linking variables 

            $name  = $_POST['name'];
            $email  = $_POST['email'];
            $message = $_POST['message'];

            //connecting to database

            $servername  = "localhost";
            $username = "root";
            $password = "";
            $database = "clients";

            $dbconn = mysqli_connect($servername, $username, $password, $database);

            // if (!$dbconn) {
            //   echo "not connected !!";
            // } else {
            //   echo "connected!!";
            // }

            $sql = "INSERT INTO `detail` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message')";
            $result = mysqli_query($dbconn, $sql);

            if ($result) {
                echo '<div class="alert alert-success" role="alert">
      <h4 class="alert-heading">sent!</h4>
      <p>Thank you for contacting me.</p>
      <hr>
      
    </div>';
            } else {
                echo "not inserted !";
                echo " " . mysqli_error($dbconn);
            }
        }
        ?>
        <!-- Navbar -->
        <header>
            <!-- <a href="#" class="logo"></a> -->

            <div class="bx bx-menu" id="menu-icon"></div>

            <ul class="navbar">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
                <div class="bx bx-moon" id="darkmode"></div>
            </ul>
            <?php
            session_start();                                //session start
            if (isset($_SESSION['count']))                   //setting session for count
                $_SESSION['count'] = $_SESSION['count'] + 1;        //
            else
                $_SESSION['count'] = 1;
            echo "<h3>You have visited </h3>" . $_SESSION['count'] . " Times";
            ?><br>
        </header>
    </section>
    <!-- Home -->

   

    <!-- <a href="#"><i class='bx bxl-dribbble' ></i></a> -->
    <!-- <div class="home-img">
            <img src="" alt="">
        </div> -->
    <section class="home" id="home">

    <div class="social"><br>
            <a href="https://github.com/sidsakhala"><i class='bx bxl-github'></i></a>
            <a href="https://instagram.com/sudhanxu__"><i class='bx bxl-instagram'></i></a>
        </div>
        
        <div class="home-text">
            <span>Hello, I'm</span>
            <h1>Sudhanshu Sakhala</h1>
            <h2>Full Stack Developer</h2><br>
            <a href="#contact" class="btn">Contact Me</a>
        </div>

    </section>
    <!-- About -->
    <section class="about" id="about">
        <div class="heading">
            <h2>About Me</h2><br>
            <span>Introduction</span><br>
        </div>
        <!-- About Content -->
        <div class="about1">
            <!-- <div class="about-img">
                <img src="" alt="">
            </div> 
             <div class="about-text"> -->
            <br>
            <p class="bio">I'm a Software Developer with 2 years of experience. I'm from Pune, Maharashtra. I code and Develop web and micro services for amazing people around the world. I like work with new people. New people are new experiences.</p>

            <!-- </div>  -->
        </div>

    </section>

    <section class="bio" id="bio">

        <div class="information">
            <!-- Box 1 -->
            <div class="info-box">
                <i class='bx bxs-user'></i>
                <span>Sudhanshu Sakhala</span>
            </div>
            <!-- Box 2 -->
            <div class="info-box">
                <i class='bx bxs-phone'></i>
                <span>+91-7744869769</span>
            </div>
            <!-- Box 3 -->
            <div class="info-box">
                <i class='bx bxs-message'></i>
                <span>sakhalasudhanshu@gmail.com</span>
            </div>
        </div>


        <!-- Download CV Button -->
        <div class="resumo_fn_cv_btn">
            <a href="sudhanshu_resume.pdf" download>
                <!-- <span class="icon ">
                    <img src="svg/inbox.svg " alt=" " class="fn__svg " />
                    <img src="svg/arrow.svg " alt=" " class="fn__svg arrow " />
                </span> -->
                <br><span>Download CV</span>
            </a>
        </div>
        <!-- <a href="# " class="btn ">Download Cv</a> -->
    </section>
    <!-- Skills -->
    <section class="skills" id="skills">
        <div class="heading">
            <h2>Skills</h2>
            <span>The domains in which i work</span>
        </div>
        <!-- Skills Content -->
        <div class="skills-container">
            <div class="bars ">

                <!-- Box 1-->
                <div class="bars-box ">
                    <h3>Web Development(Angular)</h3>
                    <span>65%</span>
                    <div class="light-bar"></div>
                    <div class="percent-bar react-bar "></div>
                </div>
                <!-- Box 2 -->
                <div class="bars-box ">
                    <h3>Python</h3>
                    <span>82%</span>
                    <div class="light-bar "></div>
                    <div class="percent-bar html-bar "></div>
                </div>

                <!-- Box 3 -->
                <div class="bars-box ">
                    <h3>Machine Learning</h3>
                    <span>68%</span>
                    <div class="light-bar "></div>
                    <div class="percent-bar js-bar "></div>
                </div>
                <!-- Box 4 -->
                <div class="bars-box ">
                    <h3>DataBase Management System(MySQL)</h3>
                    <span>70%</span>
                    <div class="light-bar "></div>
                    <div class="percent-bar css-bar "></div>
                </div>

                <!-- Box 5 -->
                <div class="bars-box ">
                    <h3>Java</h3>
                    <span>80%</span>
                    <div class="light-bar "></div>
                    <div class="percent-bar css-bar "></div>
                </div>
                <!-- Box 6 -->
                <div class="bars-box ">
                    <h3>Automation(Python)</h3>
                    <span>59%</span>
                    <div class="light-bar "></div>
                    <div class="percent-bar css-bar "></div>
                </div>

            </div>
            <div class="skills-img ">
                <img src="123.png " alt=" ">
            </div>
        </div>

    </section>

    <!-- Services -->
    <section class="services" id="services">
        <div class="heading ">
            <h2>Services</h2>
            <span>My Services</span>
        </div>
        <div class="services-content ">
            <!-- Box 1 -->
            <div class="services-box ">
                <i class='bx bx-code-alt'></i>
                <h3>Web Development</h3>
                <a href="# ">Learn More</a>
            </div>
            <!-- Box 2 -->
            <div class="services-box ">
                <i class='bx bx-server'></i>
                <h3>Backend Development</h3>
                <a href="# ">Learn More</a>
            </div>

        </div>
    </section>
    <!-- Portfolio -->
    <section class="portfolio" id="portfolio">
        <div class="heading ">
            <h2>Portfolio</h2>
            <br><span>My Recent Work (Air HandWriting Recognition)</span>
        </div>
        <div class="portfolio-content ">
            <div class="portfolio-img ">
                <img src="sun.png" alt=" ">
            </div>
            <div class="portfolio-img ">
                <img src="sun1.png" alt=" ">
            </div>
            <div class="portfolio-img ">
                <img src="reco.png" alt=" ">
            </div>

        </div>
    </section>
    <!-- Contact -->
    <section class="contact" id="contact">
        <div class="heading">
            <h2>Contact</h2>
            <span>Connect with me </span>
        </div>
        <div class="contact-form ">
            <form action="" method="POST">
                <input type="text " placeholder="Your Name " name="name">
                <input type="email " id=" " placeholder="Your Email " name="email">
                <textarea name="message" id=" " cols="30 " rows="10 " placeholder="Write Message Here... "></textarea>
                <!-- <input type="button " value="Send " class="contact-button "> -->
                <button class="w-100 btn btn-lg btn-primary" type="submit">Send</button>
            </form>
        </div>

        <!-- echo '<div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Details recieved!</h4>
      <p>Hold on, my PA : Shambhawi Sharma will contact you ASAP.</p>
      <hr>
    </div>'; -->
    </section>

    <!-- Footer -->
    <div class="footer">
        <h2>Reach to me</h2>
        <div class="footer-social ">
            <a href="https://www.facebook.com/profile.php?id=100007208868447"><i class='bx bxl-facebook'></i></a>
            <a href="https://instagram.com/sudhanxu__"><i class='bx bxl-instagram'></i></a>
        </div>

    </div>
    <!-- Copyright -->
    <div class="copyright ">
        <p>Create By <a href="https://instagram.com/sudhanxu__">Sudhanshu Sakhala</a> | MIT WPU Pune</p>
    </div>

    <!-- Link To JS -->
    <script src="./js/script.js "></script>
</body>

</html>