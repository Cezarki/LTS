<?php
// Function Connection
// Calling the database connection
include_once('connection.php');
$conn = connection();

//require('brgy-info.php');
//Retrieve data from processing another file using require method

require('captain-data.php');
require('kgwd1-data.php');
require('kgwd2-data.php');
require('kgwd3-data.php');
require('kgwd4-data.php');
require('kgwd5-data.php');
require('kgwd6-data.php');
require('kgwd7-data.php');
require('secretary-data.php');
require('treasurer-data.php');
require('sk-chairman-data.php');
require('sk-kgwd1-data.php');
require('sk-kgwd2-data.php'); 
require('sk-kgwd3-data.php');
require('sk-kgwd4-data.php');
require('sk-kgwd5-data.php');
require('sk-kgwd6-data.php');
require('sk-kgwd7-data.php');

//Officials Picture
require('captain-img-data.php');
require('kgwd-img-data.php');
require('kgwd2-img-data.php');
require('kgwd3-img-data.php');
require('kgwd4-img-data.php');
require('kgwd5-img-data.php');
require('kgwd6-img-data.php');
require('kgwd7-img-data.php');
require('secretary-img-data.php');
require('treasurer-img-data.php');
require('sk-c-img-data.php');
require('sk1-img-data.php');
require('sk2-img-data.php');
require('sk3-img-data.php');
require('sk4-img-data.php');
require('sk5-img-data.php');
require('sk6-img-data.php');
require('sk7-img-data.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="admin/image/cuyapo-logo.png" type="image/x-icon">
    <title>Cuyapo Legislative Tracking System</title>
    <style>
      body{
        background: rgb(116,223,223);
background: linear-gradient(90deg, rgba(116,223,223,1) 0%, rgba(102,240,102,1) 63%, rgba(150,210,222,1) 100%);
      }
      .header-nav{
        position: -webkit-sticky; /* For older Safari browsers */
        position: sticky;        /* Standard property for other modern browsers */
        top: 0;                  /* Distance from the top of the viewport */
        color: white;            /* Text color of the links */
        z-index: 3;           /* Ensure the navbar stays on top of other content */
      }

      .dots{
    display: inline-block;
    width: 15px;
    height: 15px;
    background-color: white;
    border-radius: 50%;
    transition: ease 1s;
}

.active{
    background-color:  gray;
    transition: 1s 0.6;
}

.dots-con{
    position: relative;
    top: -100px;
    z-index: 2;
}

  .content{
    position: relative;
    z-index: 3;
    top: -110px;
    animation-name: content;
    animation-duration: 2s;
    font-weight: bold;
    color: white;
}

@keyframes content {
    from{
        opacity: 0;
    }

    to{
        opacity: 1;
    }
}

.mySlide{
    animation-name: slide;
    animation-duration: 2s;
    
}



@keyframes slide {
    from{
        
    }

    to{
        
    }
}

#head{
  position: absolute;
  z-index: 2;
  color: white;
  width: 100%;
  animation-name: head;
  animation-duration: 2s;
  animation-direction: ease-in-out;
}

@keyframes head {
  from{
        top: 0px;
        opacity: 0;
    }

    to{
      top: 59px;
        opacity: 1;
    }
}

.background-head{
  position: absolute;
  background-color: rgba(0, 0, 0, 0.6);
  z-index: 1;
  width: 100%;
  height: 100vh;
}

.click{
  position: relative;
  top: 136px;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  margin: 10px;
  background-color: #0c4aad;
  border-radius: 4px;
  border: 1px solid white;
  padding: 6px;
  width: 140px;
}

.click:hover{
  background-color: #ab1703;
  transition: 1s;
}

.click-a{
  text-decoration: none;
  color: white;
}

.content-con{
  animation-name: cuyapo-text;
  animation-duration: 3s;
}


@keyframes cuyapo-text {
    from{
        top: 0px;
        opacity: 0;
    }

    to{
        opacity: 1;
    }
}

@media only screen and (max-width: 768px) {
  /* For mobile phones: */
  .click{
  position: relative;
  top: 100px;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  margin: 10px;
  background-color: #0c4aad;
  border-radius: 4px;
  border: 1px solid white;
  padding: 6px;
  width: 140px;
}

.click:hover{
  background-color: #ab1703;
  transition: 1s;
}

.click-a{
  text-decoration: none;
  color: white;
}

.tmc-text{
  position: relative;
  top: -120px;
}

.content-con{
  animation-name: cuyapo-text;
  animation-duration: 3s;
}

  .content{
    position: relative;
    z-index: 3;
    top: -60px;
    animation-name: content;
    animation-duration: 2s;
    font-weight: bold;
    color: white;
}

.background-head{
  position: absolute;
  background-color: rgba(0, 0, 0, 0.6);
  z-index: 1;
  width: 100%;
  height: 100vh;
}


}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {

  .dots-con{
    position: relative;
    top: -100px;
    z-index: 2;
}

  .content{
    position: relative;
    z-index: 3;
    top: -110px;
    animation-name: content;
    animation-duration: 2s;
    font-weight: bold;
    color: white;
}

.background-head{
  position: absolute;
  background-color: rgba(0, 0, 0, 0.6);
  z-index: 1;
  width: 100%;
  height: 100vh;
}

}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
  .dots-con{
    position: relative;
    top: -70px;
    z-index: 2;
}

  .content{
    position: relative;
    z-index: 3;
    top: -80px;
    animation-name: content;
    animation-duration: 2s;
    font-weight: bold;
    color: white;
}

.background-head{
  position: absolute;
  background-color: rgba(0, 0, 0, 0.6);
  z-index: 1;
  width: 100%;
  height: 100vh;
}



/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
  .dots-con{
    position: relative;
    top: -70px;
    z-index: 2;
}

  .content{
    position: relative;
    z-index: 3;
    top: -80px;
    animation-name: content;
    animation-duration: 2s;
    font-weight: bold;
    color: white;
}

.background-head{
  position: absolute;
  background-color: rgba(0, 0, 0, 0.6);
  z-index: 1;
  width: 100%;
  height: 100vh;
}
  

}

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
  .dots-con{
    position: relative;
    top: -120px;
    z-index: 2;
}

  .content{
    position: relative;
    z-index: 3;
    top: -140px;
    animation-name: content;
    animation-duration: 2s;
    font-weight: bold;
    color: white;
}

.background-head{
  position: absolute;
  background-color: rgba(0, 0, 0, 0.6);
  z-index: 1;
  width: 100%;
  height: 98vh;
}

.comic-sans{
  font-family: "Comic Sans MS";

}
.profile_ {
    width: 100%;
    height: auto;
    max-width: 150px;
    border-radius: 50%;
    object-fit: cover;
}

.parentbox{
  display: flex;
  justify-content: center;
  gap: 150px;
  margin-top: 90px;
  
}

.parentbox > div{
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
     width: 260px;
    padding: 10px;
}

.parentbox > div:hover{
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.6);
  }
  .profile_{
    width: 250px;
  }
  

    </style>
</head>
<body>
      <div class="header-nav">
          <?php include('header-nav.php'); ?>
      </div>


  <div class="contain">
  <div id="index">
  <div class="background-head"></div>
    <div id="head">
    <?php  include('header-content.php'); ?>
  <div class="content-con">
  <button class="click"><a class="click-a" href="#history">History</a></button>
  <button class="click"><a class="click-a" href="#officials">Officials</a></button>
  <button class="click"><a class="click-a" href="#geog">Geography</a></button>

  <div class="tmc-text">
  <h4>The Municipality of Cuyapo</h4>
  <p>Cuyapo is a first class municipality in the province of Nueva Ecija, Philippines.</p>
  </div>
  </div>
  </div>
            <div class="mySlide">
                <img src="image/cuyapo_mun.jpeg" alt="crt image" width="100%" height="720px">
                <div class="content">Cuyapo Town Hall</div>
            </div>

            <div class="mySlide">
                <img src="image/cuyapo-img2.jpeg" alt="crt image" width="100%" height="720px">
                <div class="content">Colosboa Hills</div>
            </div>

            <div class="mySlide">
                <img src="image/cuyapo-img.jpeg" alt="crt image" width="100%" height="720px">
                <div class="content">Cuyapo Park</div>
            </div>

            <div class="mySlide">
                <img src="image/municipal.jpeg" alt="crt image"width="100%" height="720px">
                <div class="content">Cuyapo Town Hall</div>
            </div>
           
            <div class="dots-con">
                <span class="dots"></span>
                <span class="dots"></span>
                <span class="dots"></span>
                <span class="dots"></span>
            </div>
</div>

    <main>
    <section>
    
      <h3 class="element">LOCAL GOVERNMENT UNIT OF CUYAPO</h3>
      <div class="line"></div>
      <div class="municipal_hall">
        <div class="element">
          <img src="image/municipal.jpeg" width="100%" alt="">
        </div>

        <div class="element">
          <div class="text_municipal">
          <h3 class="comic-sans">Municipal Town Hall</h3>
          <p>On October 29, 1859, Cuyapo was separated from Rosales, Pangasinan and made a full-fledged town with Don Juan Pangalilingan as the first Gobernadorcillo.</p>
          </div>
        </div>
      </div>
      <div class="element">
      <h3 class="comic-sans" style="font-size: 40px;">Mission and Vision</h3>
      </div>
      <div class="line"></div>
      <div id="vm" class="vision_mision">
          <div class="element">
          <i id="icon"  class="fa-solid fa-eye"></i>
            <h5 class="comic-sans" style="font-size: 25px;">Vision</h5>
            <p >Cuyapo is a premier agro-eco-tourism hub of Nueva Ecija, with God loving and empowered community, living in a well planned environment with progressive economy, governed by responsible leaders.</p>
          </div>

          <div class="element">
          <i id="icon" class="fa-solid fa-rocket"></i>
            <h5 class="comic-sans" style="font-size: 25px;">Mission</h5>
            <p>To effectively address the desire and needs of people by educating and empowering them through geniune public service and responsible local governance.</p>
          </div>
      </div>
    </section>
    <div class="element">
    <h3 id="officials" class="comic-sans" style="font-size: 40px;">Our Honorable Elected Officials</h3>
      <div class="line"></div>
</div>
          
<div class="parentbox">
          <div class="element">
                <h6><?php echo $position16 ?></h6>
                <?php if (!empty($imagePath16)) : ?>
            <img class="profile_" src="<?php echo $imagePath16; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
                <h6 class="name"><?php echo $fullname16 ?></h6>
            </div>

            <div class="element">
                <h6><?php echo $position17 ?></h6>
                <?php if (!empty($imagePath17)) : ?>
            <img class="profile_" src="<?php echo $imagePath17; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
                <h6 class="name"><?php echo $fullname17 ?></h6>
            </div>
      
          </div>

        <section class="sec-con">

            <div class="element">
            <h6><?php echo $position ?></h6>
                <!-- Display the uploaded image -->
        <?php if (!empty($imagePath)) : ?>
            <img class="profile_" src="<?php echo $imagePath; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
          <h6 class="name"><?php echo $fullname ?></h6>
            </div>

            <div class="element">
            <h6><?php echo $position1 ?></h6>
            <?php if (!empty($imagePath1)) : ?>
            <img class="profile_" src="<?php echo $imagePath1; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
            <h6 class="name"><?php echo $fullname1 ?></h6>
            </div>

            <div class="element">
                <h6><?php echo $position2 ?></h6>
                <?php if (!empty($imagePath2)) : ?>
            <img class="profile_" src="<?php echo $imagePath2; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
                <h6 class="name"><?php echo $fullname2 ?></h6>
            </div>

            <div class="element">
                <h6><?php echo $position3 ?></h6>
                <?php if (!empty($imagePath3)) : ?>
            <img class="profile_" src="<?php echo $imagePath3; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
                <h6 class="name"><?php echo $fullname3 ?></h6>
            </div>

            <div class="element">
                <h6><?php echo $position4 ?></h6>
                <?php if (!empty($imagePath4)) : ?>
            <img class="profile_" src="<?php echo $imagePath4; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
                <h6 class="name"><?php echo $fullname4 ?></h6>
            </div>

            <div class="element">
                <h6><?php echo $position5 ?></h6>
                <?php if (!empty($imagePath5)) : ?>
            <img class="profile_" src="<?php echo $imagePath5; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
                <h6 class="name"><?php echo $fullname5 ?></h6>
            </div>

            <div class="element">
                <h6><?php echo $position6 ?></h6>
                <?php if (!empty($imagePath6)) : ?>
            <img class="profile_" src="<?php echo $imagePath6; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
                <h6 class="name"><?php echo $fullname6 ?></h6>
            </div>

            <div class="element">
                <h6><?php echo $position7 ?></h6>
                <?php if (!empty($imagePath7)) : ?>
            <img class="profile_" src="<?php echo $imagePath7; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
                <h6 class="name"><?php echo $fullname7 ?></h6>
            </div>

            <div class="element">
                <h6><?php echo $position8 ?></h6>
                <?php if (!empty($imagePath8)) : ?>
            <img class="profile_" src="<?php echo $imagePath8; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
                <h6 class="name"><?php echo $fullname8 ?></h6>
            </div>

            <div class="element">
                <h6><?php echo $position9 ?></h6>
                <?php if (!empty($imagePath9)) : ?>
            <img class="profile_" src="<?php echo $imagePath9; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
                <h6 class="name"><?php echo $fullname9 ?></h6>
            </div>

            <div class="element">
                <h6><?php echo $position10 ?></h6>
                <?php if (!empty($imagePath10)) : ?>
            <img class="profile_" src="<?php echo $imagePath10; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
                <h6 class="name"><?php echo $fullname10 ?></h6>
            </div>

            <div class="element">
                <h6><?php echo $position11 ?></h6>
                <?php if (!empty($imagePath11)) : ?>
            <img class="profile_" src="<?php echo $imagePath11; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
                <h6 class="name"><?php echo $fullname11 ?></h6>
            </div>

            <div class="element">
                <h6><?php echo $position12 ?></h6>
                <?php if (!empty($imagePath12)) : ?>
            <img class="profile_" src="<?php echo $imagePath12; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
                <h6 class="name"><?php echo $fullname12 ?></h6>
            </div>

            <div class="element">
                <h6><?php echo $position13 ?></h6>
                <?php if (!empty($imagePath13)) : ?>
            <img class="profile_" src="<?php echo $imagePath13; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
                <h6 class="name"><?php echo $fullname13 ?></h6>
            </div>

            <div class="element">
                <h6><?php echo $position14 ?></h6>
                <?php if (!empty($imagePath14)) : ?>
            <img class="profile_" src="<?php echo $imagePath14; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
                <h6 class="name"><?php echo $fullname14 ?></h6>
            </div>

            <div class="element">
                <h6><?php echo $position15 ?></h6>
                <?php if (!empty($imagePath15)) : ?>
            <img class="profile_" src="<?php echo $imagePath15; ?>" alt="User Image"></a>
          <?php else : ?>
            <img class="profile_" src="image/Coming_Soon.jpg" alt="Default Image"></a>
          <?php endif; ?>
                <h6 class="name"><?php echo $fullname15 ?></h6>
            </div>

            
        </section>


        <section class="py-5">
          
          <h3 id="history" class="comic-sans" style="font-size: 30px;">History of Cuyapo, Nueva Ecija, Philippines</h3>
          <div class="line"></div>
          <p class="history">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pangasinenses from Paniqui, Tarlac who used to pasture their cattle, other Pangasinenses from Calasiao and San Carlos, Pangasinan, Ilocano foresters from Santa Maria, Narvacan, Ilocos Sur; Paoay and Batac in Ilocos Norte; and some Tagalogs from Bulacan & south Nueva Ecija settled in great number in the town. It is said that the exodus, particularly from Ilocos Sur, was due to the forced labor enforced by the Spaniards in the construction of the Catholic Church in Santa Maria, Ilocos Sur. Cuyapo was declared a Barrio of Rosales on September 25, 1849, with Senior Santiago Vergara as its first Teniente del Barrio. Rosales was then a part of Nueva Ecija. It was in 1901 during the American Civil Commission that Rosales, together with Balungao, Umingan, San Quintin, were segregated from Nueva Ecija and became parts of Pangasinan.Cuyapo is named after the water cabbage (Pistia stratiotes) which is known in Pangasinense as kuyapo.[5] The district of Quiapo, Manila is also named after the same plant, this is the Tagalog counterpart, modern spelling kiyapo.Pangasinenses from Paniqui, Tarlac who used to pasture their cattle, other Pangasinenses from Calasiao and San Carlos, Pangasinan, Ilocano foresters from Santa Maria, Narvacan, Ilocos Sur; Paoay and Batac in Ilocos Norte; and some Tagalogs from Bulacan & south Nueva Ecija settled in great number in the town. It is said that the exodus, particularly from Ilocos Sur, was due to the forced labor enforced by the Spaniards in the construction of the Catholic Church in Santa Maria, Ilocos Sur. Cuyapo was declared a Barrio of Rosales on September 25, 1849, with Senior Santiago Vergara as its first Teniente del Barrio. Rosales was then a part of Nueva Ecija. It was in 1901 during the American Civil Commission that Rosales, together with Balungao, Umingan, San Quintin, were segregated from Nueva Ecija and became parts of Pangasinan.On October 29, 1859, Cuyapo was separated from Rosales, Pangasinan and made a full-fledged town with Don Juan Pangalilingan as the first Gobernadorcillo. It was during his term that the first Catholic Church and convent was constructed. The old road to Guimba, passing through what is now Barangay Maycaban was constructed. On October 29, 1959, Cuyapo celebrated the centennial of its creation as a town.On July 1, 1898, Gen. Mariano Llanera, then Military Governor of Nueva Ecija, appointed Don Marcelo Garcia, last Capitan Municipal during the Spanish Regime, as Presidente Municipal with Don Mariano Flores, last Teniente Mayor, as Vise Presidente Municipal. Later, under the supervisonal government, election of municipal officials was held. This revolutionary period of government existed until the American forces came in November 1898. It was during this period when the people showed their patriotism and loyalty to the cause of the revolution. On June 19, 1898, two to three hundred Cuyapenos, under Teniente Isabelo del Valle of Paniqui, Tarlac, answered the call of duty and ambushed a heavily armed contingent of Spanish Cazadores who came from Rosales en route to Tarlac in Bessang (now part of Barangay Maycaban. The Cuyapenos then had only fifteen (15) Remington rifles and the rest armed with bolos.
          </p>
        </section>

        <section>
          <div class="element">
          <div id="geog" style="padding: 10px;">
          <h3 class="comic-sans" style="font-size: 30px;">Geography</h3>
          <div class="line"></div>
          </div>
        <iframe style="padding: 20px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122862.49250142038!2d120.70433560000001!3d15.780056050000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339131011c1723ad%3A0x9d5291a6659dff21!2sCuyapo%2C%20Nueva%20Ecija!5e0!3m2!1sen!2sph!4v1715750769274!5m2!1sen!2sph" width="60%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        </section>
    </main>
    
    <?php include('footer.php'); ?>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="js/carousel.js"></script>
    <script src="js/animation.js"></script>
  
</body>
</html>


