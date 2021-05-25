<?php
if (isset ($_POST['name'])){

    $insert = false;
    $server = "localhost";
    $username = "root";
    $password = "";
    
    $con = mysqli_connect($server,$username,$password);
    
    
    if(!$con){
        die("connection to this database failed due to".mysqli_connect_erron($con));
    }
    // echo "success connecting to the db";
    
    $name  =$_POST['name'];
    $gender=$_POST['gender'];
    $age   =$_POST['age'];
    $email =$_POST['email'];
    $phone =$_POST['phone'];
    $desc =$_POST['desc'];
    
    
    
    
    $sql  =  " INSERT INTO `portfolio`.`amlan` ( `name`, `age`, `gender`, `email`, `phone`, `other`, 
`dt`) VALUES ( '$name', '$age', '$gender', '$email',
 '$phone', ' $desc', current_timestamp())";

// echo $sql;

if ($con -> query($sql)==true){
    // echo "succesfully inserted";
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error ";
}

$con-> close();
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;700&family=Pattaya&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/affe4f52e1.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- <div class="aboutMe fadeout">
        <p>  ssds hi hlw  </p> 
    </div> -->
<section class="whole">

    <nav class="navbar">
        <ul class="nav-ul" >
            <img src="png.png" alt="Amlan_Das" srcset="">
            
            <li class="nav-li" ><a href="">Home </a></li>
            <li class="nav-li"><a href="about.html">About</a></li>
            <li class="nav-li"><a href="services.html">Services</a></li>
            <li class="nav-li"><a href="skill.html">Skills</a></li>
            <li class="nav-li"><a href="contact.html">Contact </a></li>
        
        </ul>
        
        
        <!-- <div class="intro-text">
            <h1>To know more About me click here</h1>
            <button class="clickMe"> click</button>
    
        </div> -->
        <div class="about">
            <img class="amlan" src="imageedit_6_2489146916.png" alt="" srcset="">
            <div class="intro">
                <h1 >HELLO! I'm</h1>
                <h1 class="typing"></h1>
            </div>
            
        </div>
        
    </nav>
    


                            <!-- services section  -->
    <div class="services" id="services">
                <h1 class="services-header">SERVICES: </h1>
                
                <div class="box1">
                    
                    <div class="box1-para">
                        <p class="text main-text"> <b>WEB DEVELOPMENT   </b>
                            <i class="fas fa-code"></i>
                            
                        </p>
                        <p class="text para">If you want to make a responsive wibsite for your business purposes , then you can 
                            contact with me.I'll try to deliver the best to you as soon as possible
                        </p>
                    </div>
                    <div class="box1-icon">
                        <img src="service1.jpg" alt="">
                    </div>
                </div>
                
                <div class="service-pic">
                    <img src="service.jpg" alt="service">
                </div>
                <div class="box2">
                    <div class="box2-para">
                        <p class="text main-text"><b>E-COMMERCE  </b>
                            <i class="fas fa-cart-plus"></i>
                            
                            
                        </p>
                    <p class="text para">If you want to make a E-commerce website for your business purposes , then you can 
                        contact with me.I'll try to deliver the best to you as soon as possible.
                    </p>
                </div>
            <div class="box1-icon">
                <img src="service2.jpg" alt="">
            </div>
        </div>


        <div class="box3">
            <div class="box3-para">

                <p class="text main-text"><b>WEB DESIGN</b>
                    <i class="fas fa-laptop"></i>

                
                </p>
                    <p class="text para">If you want to design a website for your business purposes , then you can 
                        contact with me.I'll try to deliver the best to you as soon as possible
                    </p>
                </div>
            <div class="box1-icon">
                <img src="services3.jpg" alt="">
            </div>
        </div>

        </div>
                    <!-- skill section  -->
                    <div class="skill">
                        <h1> My skills</h1>
                        <div class="skill-section">
                            <div class="skill-pic">

                                <img src="skill.jpg" alt="">
                            </div>

                            <div class="text skill-para">
                                <h3><b> My skills & Experince </b></h3>
                                <br>
                                <p > It's been one year since I'm in this platform.I've gained a Experince
                                    of one year.I can make a websites by using html,css,js,php & mysql 
                                I've achieved 90% of html knowledge,80% of css.Also I know 60% of css
                            Again I also know 50% of php and 60%  of mysql knowledge has been
                        gained by me.  </p>
                                </div>
                                
                                <div class="mySkill">
                                    <div class="allSkill">
                                        <div class="info"> 
                                            <span >HTML</span>
                                            <span >90%</span>
                                        </div>
                                        <div class="line html"></div>
                                        <div class="info"> 
                                            <span>CSS</span>
                                            <span>80%</span>
                                            
                                        </div>
                                        <div class="line css"></div>
                                        <div class="info"> 
                                            <span>JAVASCRIPT</span>
                                            <span>60%</span>
                                            
                                        </div>
                                        <div class="line javascript"></div>
                                        <div class="info"> 
                                            <span>PHP</span>
                                            <span>50%</span>
                                            
                                        </div>
                                        <div class="line php"></div>
                                        <div class="info"> 
                                            <span>MYSQL</span>
                                            <span>60%</span>  
                                        </div>
                                        <div class="line mysql"></div>
                                    </div>
                                    
                                </div>
                                
                                
                                
                            </div>
                        </div>

                        <div class="container">
                            <h1>Contact me:</h1>
                            
                            <form action="index.php" method="post">
                                
                                <input type="text" name="name" id="name" placeholder="Enter Your Name">
                                <input type="text" name="age" id="age" placeholder="Enter Your age">
                                <input type="text" name="gender" id="gender" placeholder="Enter Your gender">
                                <input type="email" name="email" id="email" placeholder="Enter Your email">
                                <input type="phone" name="phone" id="phone" placeholder="Enter Your phone">
                                <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter Your information here "></textarea>
                                <button class="btn">Submit</button>
                                <!-- <button class="btn">Reset</button> -->
                              </form>
                            </div>

                        </section>
                        
                        






    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"
    integrity="sha512-cdV6j5t5o24hkSciVrb8Ki6FveC2SgwGfLE31+ZQRHAeSRxYhAQskLkq3dLm8ZcWe1N3vBOEYmmbhzf7NTtFFQ=="
    crossorigin="anonymous"
  ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/animation.gsap.js"></script>
  <script src="app.js"></script>














</body>
</html>