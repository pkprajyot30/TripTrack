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
    <link rel="stylesheet" href="sambalpur-styles.css" />
    <link rel="stylesheet" href="./Puri/lightbox.css" />
    <title>Sambalpur</title>
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
        <h1>Sambalpur</h1>
          <p><h2>The best months to visit Sambalpur are September-March.</h2>
          </p>
          <button class="button"><a href="#place">See more</button></a>
          <style>
            .header__content h2{
              margin-top: 1rem;
            }
            .header__content h4{
              padding: 1px;
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
        <p class="section__subtitle">Places to visit in Sambalpur</p>
        <div class="journey__grid">
          <div class="country__card">
            <img src="./sambalpur/assets/Hirakuddam.jpg" alt="Hirakud Dam" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/Sy76yaRXbEmamH1r9"><span>Hirakud Dam</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./sambalpur/assets/samaleswari temple.jpg" alt="Samaleswari Temple" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/QA5PajrLAkr1uQkm8"><span>Samaleswari Temple</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./sambalpur/assets/leaning temple of huma.jpg" alt="Learning Temple of Huma" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/eu5vpQqaZ8wmVRqa9"><span>Learning Temple of Huma</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./sambalpur/assets/deer park.jpeg.jpg" alt="Deer Park" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/pfm9ogzGRmPo99Qj7"><span>Deer Park</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./sambalpur/assets/Ghanteswari-Temple.jpg" alt="Ghanteswari temple" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/6vu5Vs8C7rBCjVc96"><span>Ghanteswari Temple</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./sambalpur/assets/gudguda waterfall.jpg" alt="Gudguda water fall" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/jGLGmei8g7mgRiPc6"><span>Gudguda water fall</span></a>
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
        <a href="./sambalpur/assets/sambalpur1.jpg" data-lightbox="models" data-title="Caption1">
          <img src="./sambalpur/assets/sambalpur1.jpg" alt="">
        </a>
      
       
        <a href="./sambalpur/assets/sambalpur14.jpg" data-lightbox="models" data-title="Caption2">
          <img src="./sambalpur/assets/sambalpur14.jpg" alt="">
        </a>
     

        <a href="./sambalpur/assets/sambalpur3.jpg" data-lightbox="models" data-title="Caption3">
          <img src="./sambalpur/assets/sambalpur3.jpg" alt="">
        </a>
        <a href="./sambalpur/assets/sambalpur4.jpeg.jpg" data-lightbox="models" data-title="Caption4">
          <img src="./sambalpur/assets/sambalpur4.jpeg.jpg" alt="">
        </a>

      </div>

      <div class="one"> 
        <a href="./sambalpur/assets/sambalpur5.jpg" data-lightbox="models" data-title="Caption5">
          <img src="./sambalpur/assets/sambalpur5.jpg" alt="">
        </a>

        <a href="./sambalpur/assets/sambalpur6.jpg" data-lightbox="models" data-title="Caption6">
          <img src="./sambalpur/assets/sambalpur6.jpg" alt="">
        </a>

        <a href="./sambalpur/assets/sambalpur7.jpeg.jpg" data-lightbox="models" data-title="Caption7">
          <img src="./sambalpur/assets/sambalpur7.jpeg.jpg" alt="">
        </a>

        <a href="./sambalpur/assets/sambalpur10.jpg" data-lightbox="models" data-title="Caption8">
          <img src="./sambalpur/assets/sambalpur10.jpg" alt="">
        </a>

      </div>
      
    </div>
      <script src="./Puri/lightbox-plus-jquery.js"></script>

    </section>


    
    <section class="journey__container" id="hotel">
      <div class="section__container">
        <h1 class="section__title">Hotels</h1>
        <p class="section__subtitle">Here you can see the price of Hotels</p>
        <div class="journey__grid">
          <div class="country__card">
            <img src="./sambalpur/assets/regenta inn.jpg" alt=" " />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://www.royalorchidhotels.com/regenta-inn-sambalpur/overview"><span>Regenta Inn<br>(Rs 4000 approx/Per Day)</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./sambalpur/assets/the orchard.jpg" alt=" " />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://www.tripadvisor.in/Hotel_Review-g1584797-d2276213-Reviews-The_Orchard-Jharsuguda_Jharsuguda_District_Odisha.html?m=19905"><span>The Orchard<br>(Rs 4000 approx/Per Day)</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./sambalpur/assets/pipul utkal continental.jpg" alt=" " />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://www.booking.com/Share-lE0bE9"><span>Pipul utkal continental<br>(Rs 4000 approx/Per Day)</span></a>
            </div>
          </div>
        </div>
      </div>
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
            <p>The best restaurant you can visit in Sambalpur</p>
            <div class="main">
              <div class="incard"> 
              <div class="card">
                <img src="./sambalpur/assets/Trupti Restaurant.avif" alt="food" />
                <a href="https://www.tripadvisor.in/Restaurant_Review-g1213781-d12240706-Reviews-Trupti_Restaurant-Sambalpur_Sambalpur_District_Odisha.html?m=19905"><span>Trupti Restaurant</span></a>
              </div>
              <div class="card">
                <img src="./sambalpur/assets/Midtown Resto Café.jpeg" alt="food" />
                <a href="https://jsdl.in/DT-99XK88KSKRM"><span>Midtown Resto Café</span></a>
              </div>
              <div class="incard">
              <div class="card">
                <img src="./sambalpur/assets/Urban Tadka.webp" alt="food" />
                <a href="https://jsdl.in/DT-993AZDECQIH"><span>Urban Tadka</span></a>
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
        <h2 class="section__title">SAMBALPUR MAP</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59407.20227976977!2d83.93168335792446!3d21.47047283116402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a21167f047cd9b5%3A0x7660a40be684d655!2sSambalpur%2C%20Odisha!5e0!3m2!1sen!2sin!4v1699972929533!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       
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
