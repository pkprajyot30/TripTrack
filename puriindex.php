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
    <link rel="stylesheet" href="puristyles.css"/>
    <link rel="stylesheet" href="./Puri/lightbox.css"/>
    <title>Puri</title>
    <style>
      header{
        background-image: linear-gradient(
      rgba(45, 92, 132, 0.5),
      rgba(45, 92, 132, 0.5)
    ),
    url("./puri-beach-homescreen.jpeg");
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
          <h1>Puri</h1>
          <p><h2>Best time to visit :-</h2>
          <h3>Winter(October-February)<br>
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
        <p class="section__subtitle">Places to visit in Puri</p>
        <div class="journey__grid">
          <div class="country__card">
            <img src="./Puri/assets/sri jagannath puri.jpg" alt="Sri Jagannath Puri Temple" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/Z66L5rLJLJPDQLQq8"><span>Sri Jagannath Puri Temple</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./puri-beach.jpg" alt="Puri Beach" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/ry1crDv3Q9qLugCx9"><span>Puri Beach</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./Puri/assets/markandeswara temple.jpg" alt="Markandeswara Temple" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/KJsZKjuQe81w6Kmj7"><span>Markandeswara Temple</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./Puri/assets/Narendra temple.jpg" alt="Narendra Tank" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/ehN33T4hXJ3okVSD8"><span>Narendra Tank</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./Puri/assets/Sudarshan crafts.jpg" alt="Sudarshan Crafts Museum" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/PZHrRJ8SCDfPaaXx9"><span>Sudarshan Crafts Museum</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./Puri/assets/pipili.jpg" alt="Pipili" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://maps.app.goo.gl/EBrhfGiSsUCqaUQd8"><span>Pipili</span></a>
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
        <a href="./Puri/assets/gallery1.jpg" data-lightbox="models" data-title="Caption1">
          <img src="./Puri/assets/gallery1.jpg" alt="">
        </a>
      
       
        <a href="./Puri/assets/gallery2.jpg" data-lightbox="models" data-title="Caption2">
          <img src="./Puri/assets/gallery2.jpg" alt="">
        </a>
     

        <a href="./Puri/assets/gallery3.jpg" data-lightbox="models" data-title="Caption3">
          <img src="./Puri/assets/gallery3.jpg" alt="">
        </a>
        <a href="./Puri/assets/gallery4.jpg" data-lightbox="models" data-title="Caption4">
          <img src="./Puri/assets/gallery4.jpg" alt="">
        </a>

      </div>

      <div class="one"> 
        <a href="./Puri/assets/gallery5.jpg" data-lightbox="models" data-title="Caption5">
          <img src="./Puri/assets/gallery5.jpg" alt="">
        </a>

        <a href="./Puri/assets/gallery6.jpg" data-lightbox="models" data-title="Caption6">
          <img src="./Puri/assets/gallery6.jpg" alt="">
        </a>

        <a href="./Puri/assets/gallery7.jpg" data-lightbox="models" data-title="Caption7">
          <img src="./Puri/assets/gallery7.jpg" alt="">
        </a>

        <a href="./Puri/assets/gallery8.jpg" data-lightbox="models" data-title="Caption8">
          <img src="./Puri/assets/gallery8.jpg" alt="">
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
            <img src="./Puri/assets/mayfair waves hotel.jpg" alt="Hotel" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://www.mayfairhotels.com/waves-puri/"><span>Mayfair waves Hotel<br>(Rs 10000 approx/Per Day)</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./Puri/assets/madhusmrutihotel.jpg" alt="Hotel" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://www.booking.com/Share-osa3Cb"><span>Madhusmruti Hotel<br>(Rs 2000 approx/Per Day)</span></a>
            </div>
          </div>
          <div class="country__card">
            <img src="./Puri/assets/hotel holiday resort.jpg" alt="Hotel" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <a href="https://www.booking.com/Share-fGz02v"><span>Hotel Holiday Resort<br>(Rs 4000 approx/Per Day)</span></a>
            </div>
          </div>
         
        </div>
      </div>
    </section>
    <style>
      .country__card img{
        height: 250px;
      }
    </style>
    <!-- end hotels -->
  
    <!-- FOOD PART -->
     <section class="journey__cont" id="food">
      <div class="section__cont">
        <h1>Best Food</h1>
        <p>The best food you can try in Puri</p>
        <div class="main">
          <div class="incard"> 
          <div class="card">
            <img src="./Puri/assets/abhada-mahaprasad-food.jpg" alt="food" />
            <span>Maha prasad Food</span>
          </div>
          <div class="card">
            <img src="./Puri/assets/ChhenaPodafood.jpg" alt="food" />
            <span>Chhena Poda Food</span>
            
          </div>
        </div>
          <div class="incard">
          <div class="card">
            <img src="./Puri/assets/pithafood.jpg" alt="food" />
            <span>Pitha Food</span>
          </div>
          <div class="card">
            <img src="./Puri/assets/rasabalifood.jpg" alt="food" /><br>
            <span>Rasabali Food</span>
          </div>
        </div>
         
        </div>
      </div>
    </section> 
    <style>
      .journey__cont{
          margin:20px;
      }
      .section__cont{
          width:100%;
          height:900px;
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
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
      }
      .main{
           width:700px;
           display: flex;
           flex-direction:column;
           gap:40px;
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
      }
      .card span{
        font-size: large;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      }
      .card img{
          width:100%;
          height:100%;
      }
    </style> 


   
    <!-- END FOOD PART -->


    <section class="map__container" id="map">
      <div class="section__container">
        <h2 class="section__title">PURI MAP</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60059.76317870907!2d85.78040008434095!3d19.80882162720531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a19c4180256e495%3A0x496a9d8b30c1fad7!2sPuri%2C%20Odisha!5e0!3m2!1sen!2sin!4v1699378831896!5m2!1sen!2sin" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       
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
