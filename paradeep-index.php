<?php
 include("db.php");
 session_start();
 if (!isset($_SESSION['username']))
 {
  echo "<script>
  alert('You need to signup or login first');
  window.location.href='signin.html';
  </script>";
 }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="chilika-styles.css"/>
    <link rel="stylesheet" href="./Puri/lightbox.css" />
    <title>Paradeep</title>
    <style>
      header{
        background-image: linear-gradient(
      rgba(45, 92, 132, 0.5),
      rgba(45, 92, 132, 0.5)
    ), url(./Paradeep/assets/paradip-home.jpg);
      }
    </style>
  </head>
  <body>
    <nav>
      <div class="nav__logo"><a href="destination.php">TripTrack</a></div>
      <ul class="nav__links">
        <li class="link"><a href="#home">Home</a></li>
        <li class="link"><a href="#place">Places</a></li>
        <li class="link"><a href="#gallery">Gallery</a></li>
        <li class="link"><a href="#hotel">Hotels</a></li>
        <li class="link"><a href="#resto">Resto</a></li>
        <li class="link"><a href="#map">Map</a></li>
      </ul>
    </nav>
    <header>
      <div class="section__container" id="home">
        <div class="header__content">
          <h1>Paradeep</h1>
          <p><h2>The best months to visit places in Paradip Port are February, March, April, May, November, and December. </h2>
          
          </p>
          <button class="button"><a href="#place">See more</button></a>
          <style>
            .header__content h2{
              margin-top: 1rem;
            }
            button a{
              text-decoration: none;
              color: aqua;
              font-family: Arial, Helvetica, sans-serif;
              font-weight: 600;
            }
            button a:hover{
              color: black;
            }
          </style>
        </div>
      </div>
    </header>

    <section class="journey__container" id="place">
      <div class="section__container">
        <h2 class="section__title">Place</h2>
        <p class="section__subtitle">Places to visit in Chilika</p>
        <div class="journey__grid">
          <div class="country__card">
            <img src="./Paradeep/assets/paradeep port.avif" alt="Paradip Port" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/RLKnFpParNARjxUp6"><span>Paradeep Port</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./Paradeep/assets/sarala temple jhankad.jpg" alt="Sarala temple jhankad" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/8BNFvcWtEv8kXQcA8"><span>Maa Sarala temple jhankad</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./Paradeep/assets/Siali-Sea-Beach-Jagatsinghpur.jpg" alt="Siali sea beach" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/bUUvP5qZqUBYQtfMA"><span>Siali sea beach</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./Paradeep/assets/Marine-Aquarium-Paradip-Jagatsinghpur4.jpg" alt="Marine Aquarium paradip" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/8FBxpvfg4n4ERzkG9"><span>Marine Aquarium paradip</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./Paradeep/assets/Sandhakuda-Jagatsinghpur.jpg" alt="Sandhakuda island" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/vLEP6PA3hNkU8Nvo8"><span>Sandhakuda island</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./Paradeep/assets/jagannath-temple.jpg" alt="Jagannath temple paradip" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/zPNHdRJFFRT7fZUo9"><span>Jagannath temple paradip</span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Gallery Container -->
    <section class="Gallery-conainer" id="gallery">
      <h1 class="Gallery-title">GALLERY</h1>
      <div class="gallery">
         
       <div class="one"> 
        <a href="./Paradeep/assets/paradeep1.jpg" data-lightbox="models" data-title="Caption1">
          <img src="./Paradeep/assets/paradeep1.jpg" alt="">
        </a>
      
       
        <a href="./Paradeep/assets/paradeep2.jpg" data-lightbox="models" data-title="Caption2">
          <img src="./Paradeep/assets/paradeep2.jpg" alt="">
        </a>
     

        <a href="./Paradeep/assets/paradeep3.jpg" data-lightbox="models" data-title="Caption3">
          <img src="./Paradeep/assets/paradeep3.jpg" alt="">
        </a>
        <a href="./Paradeep/assets/paradeep4.jpg" data-lightbox="models" data-title="Caption4">
          <img src="./Paradeep/assets/paradeep4.jpg" alt="">
        </a>

      </div>

      <div class="one"> 
        <a href="./Paradeep/assets/paradeep5.jpg" data-lightbox="models" data-title="Caption5">
          <img src="./Paradeep/assets/paradeep5.jpg" alt="">
        </a>

        <a href="./Paradeep/assets/paradeep6.webp" data-lightbox="models" data-title="Caption6">
          <img src="./Paradeep/assets/paradeep6.webp" alt="">
        </a>

        <a href="./Paradeep/assets/paradeep7.jpeg.jpg" data-lightbox="models" data-title="Caption7">
          <img src="./Paradeep/assets/paradeep7.jpeg.jpg" alt="">
        </a>

        <a href="./Paradeep/assets/paradeep8.webp" data-lightbox="models" data-title="Caption8">
          <img src="./Paradeep/assets/paradeep8.webp" alt="">
        </a>

      </div>
      
    </div>
 
      <script src="./Puri/lightbox-plus-jquery.js"></script>

    </section>


  <section>
    <section class="journey__container" id="hotel">
      <div class="section__container">
        <h1 class="section__title">Hotels</h1>
        <p class="section__subtitle">Here you can see the price of Hotels</p>
        <div class="journey__grid">
          <div class="country__card">
            <img src="./Paradeep/assets/empires paradip.jpeg.jpg" alt="Hotel" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://www.makemytrip.com/hotels/empires_paradip-details-paradeep.html"><span>Empires Paradeep<br>(Rs 6000 approx/Per Day)</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./Paradeep/assets/hotel sea pearl.avif" alt="Hotel" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://www.makemytrip.com/hotels/hotel_sea_pearl_orissa_pvt_ltd-details-paradeep.html"><span>Hotel sea pearl<br>(Rs 4000 approx/Per Day)</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./Paradeep/assets/the ocean inn.avif" alt="Hotel" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://www.makemytrip.com/hotels/the_ocean_inn-details-paradeep.html"><span>The Ocean inn<br>(Rs 2000 approx/Per Day)</span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <style>
      .country__card img{
        height: 300px;
      }
    </style>
  </section>
  
    <!-- FOOD PART -->
    <section class="journey__cont" id="resto">
      <div class="section__cont">
        <h1>Best Restaurant</h1>
        <p>The best Restaurant you can visit in Paradeep</p>
        <div class="main">
          <div class="incard"> 
          <div class="card">
            <img src="./Paradeep/assets/ocean grove restaurant.jpg" alt=" " />
            <a href="https://jsdl.in/DT-99YMEAUAIIU"><span>Ocean groove restaurant</span></a>
          </div>
          <div class="card">
            <img src="./Paradeep/assets/sea pearl resaurant.jpg" alt=" " />
            <a href="http://zoma.to/r/20114953"><span>Sea pearl resaurant</span></a>
          </div>
          <div class="incard">
          <div class="card">
            <img src="./Paradeep/assets/royal spice.jpg" alt=" " />
            <a href="https://jsdl.in/DT-99H56BJ1WDZ"><span>Royal spice restaurant</span></a>
          </div>
        </div>
         
        </div>
      </div>
    </section> 
    <style>
      .journey__cont{
          margin:20px;
          display: flexbox;
      }
      .section__cont{
          width:100%;
          height:450px;
          /* display: flex; */
          flex-direction: column;
          justify-content: center;
          justify-items: center;
          gap:50px;
           
      }
      .section__cont h1{
        font-size:45px;
         color:#6c757d;
         text-align:center;
      }
      .section__cont p{
        font-size:20px;
        color:#6c757d;
        padding:10px;
        text-align: center;
      }
      .main{
           width:700px;
           display: flex;
           flex-direction:column;
           gap:40px;
           display: inline;
           
      }
      .incard{
         width:100%;
         height:50%;
         display:flex;
         flex-direction: row;
         gap:20px;
      }
      .card{
          width:70%;
          height:300px;
          text-align: center;
          margin-top: 20px;
          margin-left: 80px;
      }
      .card span{
        font-size: large;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      }
      .card img{
          width:350px ;
          height: 300px;
          align-items: center;
      }
    </style> 
   
    <!-- END FOOD PART -->


    <section class="map__container" id="map">
      <div class="section__container">
        <h2 class="section__title">PARADEEP MAP</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59877.583459897716!2d86.61586650036378!3d20.28581784209269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1bb53b22b48f0f%3A0xc9fd18f3b98dbbbc!2sParadeep%2C%20Odisha!5e0!3m2!1sen!2sin!4v1700026728725!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       
      </div>
    </section>

    <footer>
      <div class="section__container">
        <h4>TripTrack</h4>
        <div class="social__icons">
          <!-- <span><i class="ri-facebook-fill"></i></span> -->
          <a href="https://x.com/pk_prajyot_?t=WgHgIq09Z4w1pbJ5nHCRLQ&s=09"><span><i class="ri-twitter-fill"></i></span></a>
          <a href="https://instagram.com/pk_prajyot_?igshid=anJrOXAyc21jNzZm"><span><i class="ri-instagram-line"></i></span></a>
          <a href="https://www.linkedin.com/in/pk-prajyot-b80548243?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"><span><i class="ri-linkedin-fill"></i></span></a>
        </div>
        <p>
          Travel makes one modest. You see what a tiny place you occupy in the
          world.
        </p>
      </div>
    </footer>
  </body>
</html>
