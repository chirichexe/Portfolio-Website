<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Davide Chirichella</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>

  <!--PER ICONE-->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <link rel="icon" type="image/x-icon" href="./files_1/MyLogo.png">
</head>
  <body>

    <header class="header" id="header">
        <a href="#" class="logo">
          <img src="files_1\MyLogo.png" alt="D">
          <div class="name" id="name">avide Chirichella</div><div class="none" id="none">.</div>
        </a>
        <nav class="navbar" id="navbar">
          <a href="#" class="active" id="navbar_el">Home</a>
          <a href="#" id="navbar_el">About Me</a>
          <a href="#" id="navbar_el">Services</a>
          <a href="#" id="navbar_el">Portfolio</a>
          <a href="#" id="navbar_el">Contacts</a>
        </nav>
    </header>
  <!--HOME-->
    <section class="home">
      <div class="home-content">
          <h1>Hi, I'm Davide!</h1>
          <h3>Computer Engineering Student - @unibo</h3>
          <p class="content-txt">I develop things, with a cup of creativity.
           </p>

          <div class="btn-box">
            <a href="#">My Blog</a>
            <a href="#">Let's Talk!</a>
          </div>

          <div class="home-social">
            <a href="https://www.instagram.com/davidechirichella_/"><i class='bx bxl-instagram'></i></a>
            <a href="https://www.linkedin.com/in/davide-chirichella-88200b1ba/"><i class='bx bxl-linkedin'></i></a>
            <a href="#"><i class='bx bxl-github' ></i></a>
            <a href="#"><i class='bx bxl-twitter'></i></a>

           </div>
      </div>
    </section>
    <div class="separator">
    </div>

<!--/ABOUT-->
   <section class="about" id="about">
    <h2 class="heading">About <span>Me</span></h2>
     <div class="about-img">

       <img src=".\files_1\box_img.jpg" alt="Img_me">
       <span class="circle-spin"></span>

     </div>

     <div class="about-content">
       <h3>Niente E Tutto</h3>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
         sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
          nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          Excepteur sint occaecat cupidatat non proident,
          sunt in culpa qui officia deserunt mollit anim id laborum.</p>

          <div class="btn-box new">   <!--/Faccio in modo che sia una classe "figlia"-->
            <a href="https://google.com" >Read More</a>
          </div>
     </div>
   </section>

<!--/SERVICES-->
<section class="services" id="services">

  <h2 class="heading">My <span>Services</span></h2>
 
  <div class="services-column">
    <div class="services-row">

      <div class="services-box">
        
        <div class="services-content">
          <div class="content">
            <div class="type"><i class='bx bx-code-alt'></i> - Software development</div>
              <h3>Informazione</h3> 
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum officiis architecto aliquid nobis tenetur odio </p></i>
            
          </div>
        </div>

        <div class="services-content">
          <div class="content">
            <div class="type"><i class='bx bx-globe'></i> - Full-Stack development</div>
              <h3>Informazione</h3>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum officiis architecto aliquid nobis tenetur odio </p></i>
            
          </div>
        </div>

        <div class="services-content">
         <div class="content">
            <div class="type"><i class='bx bx-data'></i> - Data Analysis</div>
              <h3>Informazione</h3>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum officiis architecto aliquid nobis tenetur odio </p></i>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--/PORTFOLIO-->
<section class="portfolio" id="portfolio">
    <div class="portfolio-section">
    <h2 class="heading">My <span>Portfolio</span></h2>
    <div class="portfolio-content">
      <div class="project">
          <div class="inner">
            <a href="https://google.com">
              <img id="img" src=".\files_1\project1_img.jpg" alt="Img_me">
            </a>
          </div>
          <div class="text">
            <h1>First Project</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum officiis architecto aliquid nobis tenetur odio </p></i>
          </div>
      </div>

      <div class="project">
        <div class="inner">
          <a href="https://google.com">
            <img id="img" src=".\files_1\project2_img.jpg" alt="Img_me">
          </a>
        </div>
        <div class="text">          
          <h1>Second Project</h1>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum officiis architecto aliquid nobis tenetur odio </p></i>
        </div>
      </div>

      <div class="project">
        <div class="inner">
          <a href="https://google.com">
            <img id="img" src=".\files_1\project3_img.jpg" alt="Img_me">
          </a>
        </div>
        <div class="text">         
          <h1>Third Project</h1>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum officiis architecto aliquid nobis tenetur odio </p></i>
        </div>
      </div>
    </div>
      
      <div class="btn-box new2">
        <a href="https://google.com">See more</a>
      </div>
    </div>
    </section>


<!--/CONTACTS-->
<section class="contatti" id="contatti">
  <h2 class="heading">Contact <span>Me</span></h2>
    <div class="container">
        <div class="container-left">
          <div class="inner-container" id="address">
            <div class="image-wrapper">
              <a href="#"><i class='bx bx-map' id="icon" ></i></a>
            </div>
            <div class="text-wrapper">
              <h1>Address</h1>
              <p>Viale Del Risorgimento 2<br>40122 - Bologna (BO) </p>
            </div>
          </div>
          <div class ="inner-container" id="phone">
            <div class="image-wrapper">
              <a href="#"><i class='bx bx-phone bx-tada bx-flip-horizontal' id="icon"></i></a>
            </div>
            <div class="text-wrapper">
              <h1>Phone</h1>
              <p>Personal: +39 347-0868484</p>
            </div>
          </div>
          <div class="inner-container" id="email">
            <div class="image-wrapper">
              <a href="#"><i class='bx bx-mail-send' id="icon"></i></a>
            </div>
            <div class="text-wrapper">
                <h1>E-Mail</h1>
                <p>Personal: davidechirichella10@gmail.com <br>
                  Institutional: davide.chirichella@studio.unibo.it
                </p>
            </div>
          </div>
        </div>
        <div class="container-right" id="container-right">
          <h1 id="send-message">Send me a message.</h1>
          <div class="fields">
            <form class="fields" action=<?php $_SERVER["PHP_SELF"]?>>
              <input type="text" name="name" placeholder="Your Name" required>
              <input type="text" name="email" placeholder="Your Email" required>
              <textarea required name="message" id="message" cols="6" placeholder="Your Message"></textarea>
              <input type="submit" name ="sendmail" value ="Send"></input>
            </form>
            <?php
              require './mailer/mailsender.php';
                if (isset($_POST['sendmail'])){
                  $res = send_mail($_POST['email'], "Richiesta assunzione", $_POST['message']);
                }
            ?>
          </div>
        </div>
      </div>
</section>
</body>
</html>
