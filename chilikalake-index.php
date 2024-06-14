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
    <title>Chilika</title>
    <style>
      header{
        background-image: linear-gradient(
      rgba(45, 92, 132, 0.5),
      rgba(45, 92, 132, 0.5)
    ), url(./chilika-lake.jpg);
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
        <li class="link"><a href="#food">Food</a></li>
        <li class="link"><a href="#map">Map</a></li>
      </ul>
    </nav>
    <header>
      <div class="section__container" id="home">
        <div class="header__content">
          <h1>Chilika</h1>
          <p><h2>Best time to visit :-</h2>
          <h3>November to February</h3>
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
        <p class="section__subtitle">Places to visit in Chilika</p>
        <div class="journey__grid">
          <div class="country__card">
            <img src="./Chilika-Lake/assets/kalijai temple.jpg" alt="Kalijai Temple" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/du1exkZCoKBvd7oc6"><span>Kalijai Temple</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./Chilika-Lake/assets/nalabana island.jpg" alt="Nala Bana Island" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/FfWZBfa4kNuV7hdc8"><span>Nala Bana Island</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./Chilika-Lake/assets/satpada.jpg" alt="Satpada" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/z1X5iGmDUzzQtiNb6"><span>Satpada</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./Chilika-Lake/assets/rambha-bay.jpg" alt="Rambha Bay" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/X5HV3HhfSxusAaQv9"><span>Rambha Bay</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./Chilika-Lake/assets/rajhans-island.jpg" alt="Rajhans Island" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/thARH4Ghjj9uG3N27"><span>Rajhans Island</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./Chilika-Lake/assets/birds-island.jpg" alt="Bird Island" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/gdCTzBoCuefE2DxSA"><span>Bird Island</span></a>
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
        <a href="./Chilika-Lake/assets/chilka.jpg" data-lightbox="models" data-title="Caption1">
          <img src="./Chilika-Lake/assets/chilka.jpg" alt="">
        </a>
      
       
        <a href="./Chilika-Lake/assets/chilika lake img2.webp" data-lightbox="models" data-title="Caption2">
          <img src="./Chilika-Lake/assets/chilika lake img2.webp" alt="">
        </a>
     

        <a href="./Chilika-Lake/assets/chilika lake img3.jpg" data-lightbox="models" data-title="Caption3">
          <img src="./Chilika-Lake/assets/chilika lake img3.jpg" alt="">
        </a>
        <a href="./Chilika-Lake/assets/chilika lake img4.jpeg.jpg" data-lightbox="models" data-title="Caption4">
          <img src="./Chilika-Lake/assets/chilika lake img4.jpeg.jpg" alt="">
        </a>

      </div>

      <div class="one"> 
        <a href="./Chilika-Lake/assets/chilika lake img 5.jpg" data-lightbox="models" data-title="Caption5">
          <img src="./Chilika-Lake/assets/chilika lake img 5.jpg" alt="">
        </a>

        <a href="./Chilika-Lake/assets/chilika lake img6.jpg" data-lightbox="models" data-title="Caption6">
          <img src="./Chilika-Lake/assets/chilika lake img6.jpg" alt="">
        </a>

        <a href="./Chilika-Lake/assets/chilika lake img7.jpg" data-lightbox="models" data-title="Caption7">
          <img src="./Chilika-Lake/assets/chilika lake img7.jpg" alt="">
        </a>

        <a href="./Chilika-Lake/assets/chilika lake img8.jpg" data-lightbox="models" data-title="Caption8">
          <img src="./Chilika-Lake/assets/chilika lake img8.jpg" alt="">
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
            <img src="./Chilika-Lake/assets/chilika-heritage-resort.jpeg" alt="Hotel" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://www.makemytrip.com/hotels/chilika_heritage_resorts-details-chilika_lake.html"><span> Chilika Heritage Resort<br>(Rs 1500 approx/Per Day)</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./Chilika-Lake/assets/trrbo trend sidhartha inn hotel.jpg" alt="Hotel" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://www.makemytrip.com/hotels/treebo_trend_sidhartha_inn_baliapanda-details-puri.html"><span>Treebo Trend Sidharta Inn Hotel<br>(Rs 2000 approx/Per Day)</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./Chilika-Lake/assets/Swosti-Chilika-Resort.jpeg" alt="Hotel" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://www.booking.com/Share-Xto9tus"><span>Swosti Chilika Resort<br>(Rs 9000 approx/Per Day)</span></a>
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
  </section>
  
    <!-- FOOD PART -->
    <section class="journey__cont" id="food">
      <div class="section__cont">
        <h1>Best Food</h1>
        <p>The best food you can try in Chilika</p>
        <div class="main">
          <div class="incard"> 
          <div class="card">
            <img src="./Chilika-Lake/assets/food Butter-garlic-prawns.jpg" alt="food" />
            <span>Butter Garlic Prawns</span>
          </div>
          <div class="card">
            <img src="./Chilika-Lake/assets/food crabs curry.jpg" alt="food" />
            <span>Food Crabs Curry</span>
          </div>
          <div class="incard">
          <div class="card">
            <img src="./Chilika-Lake/assets/food fish fry img.jpeg.jpg" alt="food" />
            <span>Fish Fry</span>
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
        <h2 class="section__title">CHILIKA MAP</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d240421.93106716833!2d85.21385628559754!3d19.687375860185643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a181f493428369b%3A0x8c7562c60bcda7a1!2sChilika%20Lake!5e0!3m2!1sen!2sin!4v1699457272717!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       
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
