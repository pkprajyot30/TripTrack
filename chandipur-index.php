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
    <link rel="stylesheet" href="./chandipur-beach/chandipur-styles.css"/>
    <link rel="stylesheet" href="./Puri/lightbox.css" />
    <title>Chandipur Beach</title>
    <style>
      header{
        background-image: linear-gradient(
      rgba(45, 92, 132, 0.5),
      rgba(45, 92, 132, 0.5)
    ), url(./chandipur-beach/assets/chandipur-beach.jpg);
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
          <h1>Chandipur</h1>
          <p><h2>Best time to visit :-</h2>
          <h3>Winter(December-February)<br>
          Monsoon(May-June)<br>
          Summer(April-May)</h3>
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
        <p class="section__subtitle">Places to visit in Chandipur</p>
        <div class="journey__grid">
          <div class="country__card">
            <img src="./chandipur-beach/assets/nilagiri img.jpg" alt="Nilagiri" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/1rirf8HaHZMJ3H2M7"><span>Nilagiri</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./chandipur-beach/assets/panchalingeswar temple.jpg" alt="Panchalingeswar Shrine" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/w1WavSeNiwFvPz8t8"><span>Panchalingeswar Shrine</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./chandipur-beach/assets/chandipur beach1.jpeg.jpg" alt="Chandipur Beach" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/UUpGST2e9BXBAXvr9"><span>Chandipur Beach</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./chandipur-beach/assets/simlipal.jpg" alt="Simlipal forest reserve" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/E6j3srkdHHm3bQ6j6"><span>Simlipal forest reserve</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./chandipur-beach/assets/remuna1.jpg" alt="Remuna" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/t5pVHkAswconkKPJ8"><span>Remuna</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./chandipur-beach/assets/Sajanagarh.jpeg" alt="Sajanagarh" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/JTgxoBP7msm5sgXv9"><span>Sajanagarh</span></a>
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
        <a href="./chandipur-beach/assets/chandipur beach1.jpeg.jpg" data-lightbox="models" data-title="Caption1">
          <img src="./chandipur-beach/assets/chandipur beach1.jpeg.jpg" alt="">
        </a>
      
       
        <a href="./chandipur-beach/assets/chandipur beach2.jpg" data-lightbox="models" data-title="Caption2">
          <img src="./chandipur-beach/assets/chandipur beach2.jpg" alt="">
        </a>
     

        <a href="./chandipur-beach/assets/chandipur img1.jpg" data-lightbox="models" data-title="Caption3">
          <img src="./chandipur-beach/assets/chandipur img1.jpg" alt="">
        </a>
        <a href="./chandipur-beach/assets/chandipur img2.jpg" data-lightbox="models" data-title="Caption4">
          <img src="./chandipur-beach/assets/chandipur img2.jpg" alt="">
        </a>

      </div>

      <div class="one"> 
        <a href="./chandipur-beach/assets/chandipur5.jpg" data-lightbox="models" data-title="Caption5">
          <img src="./chandipur-beach/assets/chandipur5.jpg" alt="">
        </a>

        <a href="./chandipur-beach/assets/chandipur6.jpg" data-lightbox="models" data-title="Caption6">
          <img src="./chandipur-beach/assets/chandipur6.jpg" alt="">
        </a>

        <a href="./chandipur-beach/assets/chandipur7.webp" data-lightbox="models" data-title="Caption7">
          <img src="./chandipur-beach/assets/chandipur7.webp" alt="">
        </a>

        <a href="./chandipur-beach/assets/chandipur-beach.jpg" data-lightbox="models" data-title="Caption8">
          <img src="./chandipur-beach/assets/chandipur-beach.jpg" alt="">
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
            <img src="./chandipur-beach/assets/Hotel Nishi.jpeg" alt="Hotel" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://www.booking.com/Share-D6BtiA"><span>Hotel Nishi<br>(Rs 2000 approx/Per Day)</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./chandipur-beach/assets/Hotel Starway.jpeg" alt="Hotel" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://hotelstarway.in/"><span>Hotel Starway<br>(Rs 2500 approx/Per Day)</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./chandipur-beach/assets/Basanta Conversation.jpg" alt="Hotel" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://www.makemytrip.com/hotels/basanta_convention-details-balasore.html"><span>Basanta Conversation<br>(Rs 2000 approx/Per Day)</span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>
  
    <!-- FOOD PART -->
    <section class="journey__cont" id="resto">
      <div class="section__cont">
        <h1>Best Restaurant</h1>
        <p>The best restaurant you can visit in Chandipur</p>
        <div class="main">
          <div class="incard"> 
          <div class="card">
            <img src="./chandipur-beach/assets/seafood kitchen.jpeg.jpg" alt="food" />
            <a href="https://jsdl.in/DT-995G1HRG62W"><span>Sea food kitchen
            </span></a>
          </div>
          <div class="card">
            <img src="./chandipur-beach/assets/sparemint.jpg" alt="food" />
            <a href="https://www.tripadvisor.in/Restaurant_Review-g1584841-d14175349-Reviews-Spearmint_NOCCi_Residency-Balasore_Balasore_District_Odisha.html?m=19905"><span>Spearmint (NOCCI recidency)</span></a>
          </div>
          <div class="incard">
          <div class="card">
            <img src="./chandipur-beach/assets/megabites.jpg" alt="food" />
            <a href="https://www.tripadvisor.in/Restaurant_Review-g1584841-d2713174-Reviews-Megabites-Balasore_Balasore_District_Odisha.html?m=19905"><span>Megabites</span></a>
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
        <h2 class="section__title">CHANDIPUR MAP</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14854.966620924693!2d87.0035738473029!3d21.439397185031588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1c8d2b7cccd32f%3A0xcbe756300d61aaf6!2sChandipur%2C%20Odisha%20756025!5e0!3m2!1sen!2sin!4v1699861515914!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       
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
