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
    <link rel="stylesheet" href="cuttack-styles.css" />
    <link rel="stylesheet" href="./Puri/lightbox.css" />
    <title>Cuttack</title>
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
            <h1>Cuttack</h1>
            <p><h2>Best time to visit :-</h2>
          <h3>Winter(October-March)<br>
          Monsoon(June-September)<br>
          Summer(March-May)</h3>
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
        <p class="section__subtitle">Places to visit in Cuttack</p>
        <div class="journey__grid">
          <div class="country__card">
            <img src="./Cuttack/assets/Barabati_Fort_,_Cuttack_01.jpg" alt="Barabati Fort" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/NDsR1mcag3rh7nB89"><span>Barabati Fort</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./Cuttack/assets/Cuttack-Chandi-temple.jpg" alt="Maa cuttack chandi temple" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/phiUcB5CiCUcNgNa7"><span>Maa cuttack chandi temple</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./Cuttack/assets/odisha state maritime museum.jpg" alt="Odisha state maritime museum" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/kGmKr8SjQk4qgcuN9"><span>Odisha State Maritime Museum</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./Cuttack/assets/Barabati_stadium.jpeg.jpg" alt="Barabati Stadium" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/ZTbrY5uRYs9WU8LC6"><span>Barabati Stadium</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./Cuttack/assets/Dhabaleswar-Temple.webp" alt="Dhabaleswar Temple" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/kkcDYF8uG6NqbGuz6"><span>Dhabaleswar Temple</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./Cuttack/assets/Netaji_Birth_Place_Museum,_Cuttack,_Odisha,_India.jpg" alt="Netaji Birth Place Museum" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/en8j9mPRSAA3MWULA"><span>Netaji Birth Place Museum</span></a>
            </div>
          </div>
        </div>
      </div>
      <style>
        .country__card img{
  height: 250px;
}
      </style>
    </section>
    <!-- Gallery Container -->
    <section class="Gallery-conainer" id="gallery">
      <h1 class="Gallery-title">GALLERY</h1>
      <div class="gallery">
       <div class="one"> 
        <a href="./Cuttack/assets/cuttack1.jpeg.jpg" data-lightbox="models" data-title="Caption1">
          <img src="./Cuttack/assets/cuttack1.jpeg.jpg" alt="">
        </a>
      
       
        <a href="./Cuttack/assets/cuttack2.jpg" data-lightbox="models" data-title="Caption2">
          <img src="./Cuttack/assets/cuttack2.jpg" alt="">
        </a>
     

        <a href="./Cuttack/assets/cuttack9.jpg" data-lightbox="models" data-title="Caption3">
          <img src="./Cuttack/assets/cuttack9.jpg" alt="">
        </a>
        <a href="./Cuttack/assets/cuttack4.jpg" data-lightbox="models" data-title="Caption4">
          <img src="./Cuttack/assets/cuttack4.jpg" alt="">
        </a>

      </div>

      <div class="one"> 
        <a href="./Cuttack/assets/cuttack5.jpg" data-lightbox="models" data-title="Caption5">
          <img src="./Cuttack/assets/cuttack5.jpg" alt="">
        </a>

        <a href="./Cuttack/assets/cuttack6.jpg" data-lightbox="models" data-title="Caption6">
          <img src="./Cuttack/assets/cuttack6.jpg" alt="">
        </a>

        <a href="./Cuttack/assets/cuttack7.jpg" data-lightbox="models" data-title="Caption7">
          <img src="./Cuttack/assets/cuttack7.jpg" alt="">
        </a>

        <a href="./Cuttack/assets/cuttack8.jpg" data-lightbox="models" data-title="Caption8">
          <img src="./Cuttack/assets/cuttack8.jpg" alt="">
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
              <img src="./Cuttack/assets/pramod convention and club resort.jpg" alt="Hotel" />
              <div class="country__name">
                <i class="ri-map-pin-2-fill"></i>
                <a href="https://www.booking.com/Share-GRvmQb"><span>Pramod Convention & Club Resort<br>(Rs 4000 approx/Per Day)</span></a>
              </div>
            </div>
            <div class="country__card">
              <img src="./Cuttack/assets/the blue lagoon hotel premium.jpg" alt="Hotel" />
              <div class="country__name">
                <i class="ri-map-pin-2-fill"></i>
                <a href="https://www.booking.com/Share-gmRprZb"><span>The Blue Lagoon Hotel Premium<br>(Rs 2000 approx/Per Day)</span></a>
              </div>
            </div>
            <div class="country__card">
              <img src="./Cuttack/assets/collection o red velvet premium.jpg" alt="Hotel" />
              <div class="country__name">
                <i class="ri-map-pin-2-fill"></i>
                <a href="https://www.booking.com/Share-M1KR1ss"><span>Collection O Red Velvet Premium<br>(Rs 2000 approx/Per Day)</span></a>
              </div>
            </div>
        </div>
      </div>
    </section>

    <!-- restaurant PART -->
    <section class="journey__cont" id="resto">
      <div class="section__cont">
        <h1>Best Restaurant</h1>
        <p>The best restaurant you can visit in Cuttack</p>
        <div class="main">
          <div class="incard"> 
          <div class="card">
            <img src="./Cuttack/assets/Barabati-Restaurant.jpg" alt=" " />
            <a href="https://www.tripadvisor.in/Restaurant_Review-g1154342-d5069519-Reviews-Barabati_Restaurant-Cuttack_Cuttack_District_Odisha.html?m=19905"><span>Barabati Restaurant</span></a>
          </div>
          <div class="card">
            <img src="./Cuttack/assets/aroma restaurant.webp" alt=" " />
            <a href="https://www.tripadvisor.in/Restaurant_Review-g1154342-d5069507-Reviews-Aroma_Restaurant-Cuttack_Cuttack_District_Odisha.html?m=19905"><span>Aroma Restaurant</span></a>
          </div>
          <div class="incard">
          <div class="card">
            <img src="./Cuttack/assets/pramod restaurant.avif" alt=" " />
            <a href="https://www.pramodresorts.com/convention-club-cuttack/dining.html"><span>Pramod Restaurant</span></a>
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
          height:550px;
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
   
    <!-- END restaurant PART -->

    <section class="map__container" id="map">
      <div class="section__container">
        <h2 class="section__title">CUTTACK MAP</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119617.514836193!2d85.7853439075627!3d20.46324877922329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a190d832223af81%3A0x22f5fa1c913be52e!2sCuttack%2C%20Odisha!5e0!3m2!1sen!2sin!4v1699941011586!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       
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
