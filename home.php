<?php
session_start();

if(isset($_SESSION['username'])){
    $name = $_SESSION['username'];
} else {
    $name = "";
}
if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
}
else {
    $email = "";
}

if(isset($_SESSION['phone_number'])){
    $phcode = $_SESSION['phone_number'];
}
else {
    $phcode = "";
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <style>
      
   
    </style>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="https://i.imgur.com/1yqoWFq.png" />
        </div>
        <div class="icon">
            <span class="toggle">☰</span>
        </div>
        <ul class="list-item">
            <li><a href="#lut">About</a></li>
            <li>
                <div class="dropdown">
                    <a href="#">Services</a>
                    <div class="dropdown-content">
                        <a href="./classic.php"><img src="https://i.imgur.com/xSiNPzH.gif" style="max-width: 40px; max-height: 40px;">Classic</a>
                        <a href="./western.php"><img src="https://i.imgur.com/IF51X13.gif" style="max-width: 40px; max-height: 40px;">Western</a>
                    </div>
            </li>
            <li><a href="./booking.php">Book Us</a></li>
            <li><a href="./contact.php">Contact</a></li>
            <li><a href="./login.php" target="blank"><b>login</b></a</li>
            <li>
                <div class="dropdown">
                    <button class="dropbtn"><a href="#"><img src="https://i.imgur.com/BRJW9Sm.gif"   style="max-width: 60px; max-height: 50px; position: relative;
                        bottom: 20px;"></a></button>
                    <div class="dropdown-content">
                        <a href="#"><img src="https://i.imgur.com/N2AzIgS.gif"   style="max-width: 40px; max-height: 40px;"><b><?php echo $name; ?></b></a>
                        <a href="#"><img src="https://i.imgur.com/BjwCeVE.gif"   style="max-width: 40px; max-height: 40px;"><b><?php echo $email; ?></b></a>
                        <a href="#"><img src="https://i.imgur.com/zz9K1sq.gif"   style="max-width: 40px; max-height: 40px;"><b><?php echo $phcode; ?></b></a>
                        <a href="signup.php"><img src="https://i.imgur.com/mefYSqm.gif"   style="max-width: 50px; max-height: 50px; "><b>Add New Account</b></a>
                        <a href="logout.php">logout<img src="https://i.imgur.com/9cYPOzS.gif"   style="max-width: 40px; max-height: 40px; "></a>
                    </div>
            </li>
        </ul>
    </nav>
    <!-- !-- /*welcome card start*/ --> 
<div class="con">
    <div class="left">
        <h1>Welcome to Fair Sounds</h1>
        <p>We provide best and quality music arrangement for all your auspicious occasions.</p>
    </div>

    <div class="right">
        <img src="https://i.imgur.com/3bfbzff.gif" alt="Placeholder Image">
        
    </div>
</div>

    
        <di id="lut">
            <h1>About Us</h1>
            <div class="vin">
               <p>Hello friend Fair Sound Music Programming Even Booking Management System welcomes you,First of all, thank you very much for visiting Fair Sound website.We provide best quality music arrangement for Classical and western music programming.and provide our music services from big cities to small villages with honesty and punctuality.We have been in the business of organizing these concerts for over 50 years with dignity and integrity.We organize major music events like,</p>
            </div>
             <!-- Card Details Carousel -->
             <div class="card bg-transparent mb-3  border-0">
                <div class="card-body">
                  <h5 class="card-title">Classical Music concerts</h5>
                  <p class="card-text">Arranging Indian classical music events involves careful consideration of traditional instruments like the venna, tabla, and violin. Each instrument plays a unique role, with the venna providing melodic depth, the tabla offering rhythmic complexity, and the violin adding rich tonal textures. Harmonium and flute are also pivotal, providing accompaniment and melody. The tanpura's drone is essential for maintaining the musical scale's integrity. Percussion instruments like the dholak and pakhawaj add dynamic rhythm, enhancing the overall performance. Understanding each instrument's nuances and arranging them harmoniously is key to creating a captivating Indian classical music experience. And We organize all kinds of classical music shows in the best possible way.  And our service is available in all districts of Tamil Nadu</p>
                 <center><a href="./classic.php" style="text-decoration: none; font-size: 25px;"><b>See More Details</b></a></center> 
                  <div id="carousel1" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://i.imgur.com/5KI67Gt.jpeg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://i.imgur.com/4HP2sNy.jpeg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://i.imgur.com/xGFRo0B.jpeg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://i.imgur.com/QSoloTV.jpeg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://i.imgur.com/izub4Sf.jpeg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://i.imgur.com/9iSuiUZ.jpeg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://i.imgur.com/SdUm7Wj.jpeg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://i.imgur.com/hlUgZtA.jpeg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://i.imgur.com/EPcqgTJ.jpeg" class="d-block w-100" alt="...">
                      </div>
                
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>
              </div>
              
              <div class="card bg-transparent mb-3  border-0">
                <div class="card-body">
                  <h5 class="card-title">Western Music concerts</h5>
                  <p class="card-text">The backbone of many ensembles, the drum kit provides rhythmic drive and energy, ranging from subtle grooves to explosive beats.
                    Guitars, both acoustic and electric, add melodic and harmonic richness, creating textures that range from delicate to powerful.
                    Bass guitars and double basses provide the foundation, anchoring the music with deep, resonant tones.
                    Keyboards, including pianos, synthesizers, and organs, add depth and complexity, offering a wide range of sounds and textures.
                    Brass instruments like trumpets, trombones, and saxophones add a bold and expressive quality, often used for dynamic solos and fanfare-like passages.
                    String instruments such as violins, violas, cellos, and double basses bring a classical elegance and emotional depth to the music.
                    Woodwind instruments like flutes, clarinets, and saxophones add a lyrical and expressive quality, often used for melodic lines and solos.
                    Percussion instruments, including cymbals, tambourines, and maracas, add accents, textures, and rhythmic complexity.
                    Electronic instruments and effects, such as synthesizers, samplers, and digital processors, offer endless possibilities for sound manipulation and experimentation.
                    The skilled arrangement of these instruments can create a rich tapestry of sound, blending different timbres, dynamics, and rhythms to create a memorable musical experience. And We organize remarkable western music programs in the best possible way.  And our service is available in all districts of Tamil Nadu</p>
                    <center> <a href="./western.php" style="text-decoration: none; text-align: center; font-size: 25px;"><b>See More Details</b></a></center>
                 <div id="carousel2" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://i.imgur.com/xxKbrl5.jpeg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://i.imgur.com/Eq5Iz7K.jpeg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://i.imgur.com/eD3Cvq6.jpeg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://i.imgur.com/PCrUrV7.jpeg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://i.imgur.com/IB3ZJJa.jpeg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://i.imgur.com/4aniH0W.jpeg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://i.imgur.com/qE9RJZo.jpeg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>
              </div>
              
  
              
        </div>

              <div class="oce">"Our Occasion Services"</div>

              <p style="text-align: center; margin-top: 15px; font-size: 20px;font-family: Arial, Helvetica, sans-serif;color: black;"><b>South Indian cultural events, including weddings and festivals, are vibrant and diverse, showcasing rich traditions and heritage. These events feature a variety of performances, including classical music concerts, traditional dance performances like Bharatanatyam and Kuchipudi, and instrumental music recitals. Vocal music, including Carnatic music and devotional songs, is also a highlight. The use of traditional instruments like the mridangam, veena, and ghatam adds a distinctive South Indian flavor to the events. Decorations with mango leaves, flower garlands, and rangoli designs create a festive ambiance. Traditional South Indian cuisine, with its flavorful dishes like dosas, idlis, and sambar, is an integral part of these events. The colorful attire, including silk sarees and dhotis, adds to the visual splendor. Overall, South Indian weddings and festivals are joyous occasions that celebrate culture, music, dance, and cuisine.






              </b></p>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-inner">
    <div class="carousel-item active">
    <img src="https://i.imgur.com/ChUH6OX.jpeg/1000x500" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    <img src="https://i.imgur.com/4aa7xYQ.jpg/1000x500" class="d-block w-100" alt="...">
    </div>
  <div class="carousel-item">
        <img src="https://i.imgur.com/eLaYu4k.jpeg/1000x500" class="d-block w-100" alt="...">
      </div>
    <div class="carousel-item">
        <img src="https://i.imgur.com/Mw8yELY.jpeg/1000x500" class="d-block w-100" alt="...">
      </div>
        <div class="carousel-item">
            <img src="https://i.imgur.com/8HH3rCv.jpeg/1000x500" class="d-block w-100" alt="...">
            </div>
                    <div class="carousel-item">
                        <img src="https://i.imgur.com/78kSALX.jpeg/1000x500" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://i.imgur.com/8Tv39Nd.jpeg/1000x500" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://i.imgur.com/hnd8Q4W.jpeg/1000x500" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://i.imgur.com/ZkdDglg.jpeg/1000x500" class="d-block w-100" alt="...">
                                 </div>
                                    <div class="carousel-item">
                                        <img src="https://i.imgur.com/mvSwwsR.jpeg/1000x500" class="d-block w-100" alt="...">
                                    </div>
                                        <div class="carousel-item">
                                            <img src="https://i.imgur.com/yc5iZdN.jpeg/1000x500" class="d-block w-100" alt="...">
                                        </div>
                                            <div class="carousel-item">
                                                <img src="https://i.imgur.com/TGCKxIW.jpeg/1000x500" class="d-block w-100" alt="...">
                                             </div>
                                             <div class="carousel-item">
                                                    <img src="https://i.imgur.com/tHOEqCS.jpg/1000x500" class="d-block w-100" alt="...">
                                                 </div>
                                                <div class="carousel-item">
                                                    <img src="https://i.imgur.com/fyUIo3d.jpeg/1000x500" class="d-block w-100" alt="...">
                                                 </div>
                                                 
                                                 
                                    
                                    
                                
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="gum">
    <footer>
        <div class="footer-links">
            <a href="#">Home</a>
            <a href="./classic.php">Classic</a>
            <a href="./western.php">Western</a>
            <a href="./booking.php">Book us</a>
            <a href="./contact.php">Contact</a>
        </div>
        <div class="social-media">
            <a href="#" style="background-image: url('https://cdn-icons-png.flaticon.com/128/5968/5968764.png');"></a>
            <a href="#" style="background-image: url('https://cdn-icons-png.flaticon.com/128/4494/4494477.png');"></a>
            <a href="#" style="background-image: url('https://cdn-icons-png.flaticon.com/128/15707/15707749.png');"></a>
        </div>
        <div class="copyright">&copy; 2024 Fair Sounds. All Rights Reserved.</div>
    </footer>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('.toggle').click(function () {
        "use strict";
        $('.list-item').slideToggle();
    });

    $(window).resize(function () {
        "use strict";
        if ($(window).width() > 780) {
            $('.list-item').removeAttr('style');
        }
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
   
